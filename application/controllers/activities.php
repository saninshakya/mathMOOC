<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function test() {
        
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

}

?>