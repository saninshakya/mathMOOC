<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        /* access only from activity page */
        $data['topics'] = Topic::find('all', array('include' => 'activity'));
        $data['menu'] = 'activities';
        $data['check'] = '';
        $this->template->title('Available Activities')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Activities')
                ->build($this->user_folder . '/activities/list', $data);
    }

    public function activity($id) {
        /* access only from  main page */
        $data['topics'] = Topic::find($id, array('include' => 'activity'));
        $data['menu'] = 'activities';
        $data['check'] = 'activities';
        $this->template->title('Available Activities')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Activities')
                ->build($this->user_folder . '/activities/list', $data);
    }

    public function practice($id) {
        if (!$this->ion_auth->logged_in()) {
            $this->template->title('Login Panel')
                    ->set_layout($this->modal_tpl)
                    ->set('page_title', 'Login')
                    ->build($this->user_folder . '/login_modal');
        } else {
            $data['activity'] = Activity::find($id);
            $data['menu'] = 'activities';
            $user = $this->ion_auth->user()->row();
            $this->template->title('Take Exam')
                    ->set_layout($this->front_tpl)
                    ->set('page_title', 'Take Exam')
                    ->build($this->user_folder . '/activities/startactivity', $data);
        }
    }

    public function dopractice($id) {
        // _getQuestions
        $data['activity'] = Activity::find($id);
        $activitydata = Activity::find($id, array('include' => array('activities_question')));
        $data['menu'] = 'activities';
        $this->template->title('Practice Activity')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Practice Activity')
                ->build($this->user_folder . '/activities/dopractice', $data);
    }

    public function get_user_exam_data() {
        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $activityId = $_POST['activityId'];
            $activitydata = Activity::find($activityId, array('include' => array('activities_question')));

            $activity = array();
            $activity['questions'] = array();

            if (!empty($activitydata)) {
                $activity['id'] = $activitydata->id;
                $activity['name'] = $activitydata->activity_name;

                foreach ($activitydata->activities_question as $count => $question) {
                    $activity['questions'][$count]['question_id'] = $question->id;
                    $activity['questions'][$count]['text'] = $question->question;
                    $activity['questions'][$count]['image'] = ($question->image != '') ? '<img src="' . base_url() . $question->image . '" />' : '';
                    $activity['questions'][$count]['image1'] = ($question->image1 != '') ? '<img src="' . base_url() . $question->image1 . '" />' : '';
                    $answers = array();
                    foreach ($question->activities_answer as $answer_count => $answer) {
                        $answer_data = array('id' => $answer->id, 'text' => trim($answer->answer));
                        array_push($answers, $answer_data);
                    }
                    $activity['questions'][$count]['answers'] = $answers;
                }
                $this->recordexam_start($activityId, $user->id);
            }
        }
        echo json_encode($activity);
    }

    public function recordexam_start($activityid, $user) {
        $user_activity = UserActivity::find_by_user_id_and_activity_id($user, $activityid);
        if ($user_activity) {
            $user_activity->delete();
        }
        $activity_start = new UserActivity();
        $activity_start->start = date_time_zone();
        $activity_start->user_id = $user;
        $activity_start->activity_id = $activityid;
        $activity_start->status = "inprogress";
        $activity_start->save();
    }

    public function save_answer() {
        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $p_data = (object) $_POST;
            $answer_record = UserActivitiesQuestion::find_by_user_id_and_question_id($user->id, $p_data->q);
            if ($answer_record)
                $answer_record->delete();

            $user_ans = new UserActivitiesQuestion();
            $user_ans->user_id = $user->id;
            $user_ans->activity_id = $p_data->id;
            $user_ans->question_id = $p_data->q;
            $user_ans->filled = 'yes';
            $user_ans->answer = $p_data->a;
            $user_ans->save();
            $response = 'success';
        }
        else {
            $response = 'relogin';
        }
        echo $response;
    }

    public function finish_user_exam() {
        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $activityid = $_POST['id'];
            $user_activity = UserActivity::find_by_user_id_and_activity_id($user->id, $activityid);
            $user_activity->update_attributes(array('end' => date_time_zone(), 'status' => 'completed'));
            $response = 'success';
        } else {
            $response = 'relogin';
        }
        echo $response;
    }

    public function viewresults($id) {
        $user = $this->ion_auth->user()->row();
        $data['performance'] = $this->performance($id, $user->id);
        $data['user_activity'] = UserActivity::find_by_user_id_and_activity_id($user->id, $id);
        $data['menu'] = 'myactivities';
        $data['activity'] = Activity::find($id);
        $data['questions'] = ActivitiesQuestion::find_all_by_activity_id($id);
        $this->template->title('My Activities')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'My Activities')
                ->build($this->user_folder . '/activities/viewresults', $data);
    }

    public function certificate($id) {
        if ($this->ion_auth->logged_in()) {
            $user = $this->ion_auth->user()->row();
            $data['exam'] = Exam::find($id);
            $data['performance'] = $this->performance($id, $user->id);
            $data['user_exam'] = Userexam::find_by_user_id_and_exam_id($user->id, $id);

            //$html = $this->load->view($this->user_folder.'/exams/exam_certificate_pdf', $data);
            $data['settings'] = $settings = Setting::first();
            $html = $this->load->view($this->user_folder . '/exams/exam_certificate_pdf', $data, true);


            include(FCPATH . "mpdf60/mpdf.php");
            $mpdf = new mPDF('c', 'A4-L', '', '', 10, 10, 10, 10, 10, 10);
            $mpdf->SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output(FCPATH . "downloads/certificate.pdf", 'F');
            if ($email == NULL)
                redirect(base_url() . "downloads/certificate.pdf");
        }
    }

    public function performance($activity_id, $user) {
        $data = array();
        $questions = ActivitiesQuestion::find_all_by_activity_id($activity_id, array('include' => array('activities_answer')));
        $exam_marks = 0;
        $user_marks = 0;
        $questions_answered = 0;
        $questions_answered_correct = 0;
        $questions_answered_wrong = 0;
        $questions_num = 0;
        $attempted_correct = array();
        if ($questions) {
            foreach ($questions as $question) {
                $exam_marks += $question->marks;
                $correct_answers = array();
                foreach ($question->activities_answer as $answer) {
                    if ($answer->correct == 1) {
                        array_push($correct_answers, $answer->id);
                    }
                }
                $useranswer = UserActivitiesQuestion::find_by_user_id_and_question_id($user, $question->id);
                if ($useranswer) {
                    if ($useranswer->answer == '1') {
                        $user_marks += $question->marks;
                        $questions_answered_correct++;
                        array_push($attempted_correct, $question->id);
                    } else {
                        $questions_answered_wrong++;
                    }
                    $questions_answered++;
                }
            }
        }
        $performance = ($exam_marks != 0) ? ($user_marks / $exam_marks) * 100 : 0;

        $data['exam_marks'] = $exam_marks;
        $data['user_marks'] = $user_marks;
        $data['performance'] = $performance;
        $data['questions_answered'] = $questions_answered . '/' . count($questions);
        $data['questions_answered_correct'] = $questions_answered_correct . '/' . count($questions);
        $data['questions_answered_wrong'] = $questions_answered_wrong . '/' . count($questions);
        $data['questions'] = count($questions);
        $data['answered_percent'] = (count($questions) != 0) ? ($questions_answered / count($questions)) * 100 : 0;
        $data['correct_percent'] = (count($questions) != 0) ? ($questions_answered_correct / count($questions)) * 100 : 0;
        $data['wrong_percent'] = (count($questions) != 0) ? ($questions_answered_wrong / count($questions)) * 100 : 0;
        $data['attempted_correct'] = $attempted_correct;
        return $data;
    }

    public function explanation($questionid) {
        $data['explanations'] = ActivitiesExplanation::find_all_by_activities_questions_id($questionid);
        // pretty($data); die;
        // to get image from the question
        $data['questions'] = ActivitiesQuestion::find($questionid);
        $data['menu'] = 'activities';
        $this->template->title('Activity Explanantion')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Activity Explanantion')
                ->build($this->user_folder . '/activities/explanation', $data);
    }

  
}
