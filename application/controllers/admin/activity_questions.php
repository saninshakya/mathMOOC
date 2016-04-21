<?php

class Activity_questions extends Backend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function test() {
        $test = ActivitiesExplanation::find('all');
        pretty($test);
    }

    public function manage($activity_id) {
        $activity = Activity::find($activity_id, array('include' => array('activities_question')));
        $this->template->title('Administrator Panel : manage questions')
                ->set_layout($this->admin_tpl)
                ->set('page_title', 'Manage Questions')
                ->set('form_action', 'admin/activity_questions/create/')
                ->set('activity', $activity)
                ->build($this->admin_folder . '/activity_questions/list');
    }

    public function create() {
        if ($_POST) {
            unset($_POST['_wysihtml5_mode']);
            $activity_id = $this->input->post('activity_id');
            //upload question image if any
            $config['upload_path'] = QUEIMGS;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['width'] = '300';

            $this->load->library('upload', $config);
            $image = ''; $image1 = '';
//            case I
            if (!$this->upload->do_upload('que_img')) {
                $error = $this->upload->display_errors('', ' ');
                if ($error != "You did not select a file to upload.") {
                    //$this->session->set_flashdata('error', $error);
                } else {
                    $this->session->set_flashdata('error', $error);
                }
            } else {
                $data = array('upload_data' => $this->upload->data());
                $image = QUEIMGS . $data['upload_data']['file_name'];
            }
//            case II
            if (!$this->upload->do_upload('que_img_1')) {
                $error = $this->upload->display_errors('', ' ');
                if ($error != "You did not select a file to upload.") {
                    //$this->session->set_flashdata('error', $error);
                } else {
                    $this->session->set_flashdata('error', $error);
                }
            } else {
                $data = array('upload_data' => $this->upload->data());
                $image1 = QUEIMGS . $data['upload_data']['file_name'];
            }

            try {
                $question = new ActivitiesQuestion(
                        array('activity_id' => $activity_id,
                    'question' => $_POST['question'],
                    'image' => $image,
                    'image1' => $image1,
                    'created_datetime' => date_time_zone(),
                    'updated_datetime' => date_time_zone(),
                    'marks' => $_POST['marks']));

                $question->save();
                //saving the answer
                for ($count = 1; $count <= 4; $count++) {
                    $answer = new ActivitiesAnswer();
                    $answer->activities_question_id = $question->id;
                    $answer->answer = $this->remove_empty_tags_recursive($_POST['answer-' . $count]);
                    $answer->correct = $_POST['correct-' . $count];
                    $answer->created_datetime = date_time_zone();
                    $answer->updated_datetime = date_time_zone();
                    $answer->save();
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
            }

            $this->session->set_flashdata('success', 'Question has been added');
            redirect('admin/activity_questions/manage/' . $activity_id);
        }
    }

    public function remove_empty_tags_recursive($str, $repto = NULL) {
        //** Return if string not given or empty.
        if (!is_string($str) || trim($str) == '')
            return $str;

        //** Recursive empty HTML tags.
        return preg_replace(
                //** Pattern written by Junaid Atari.
                '/<([^<\/>]*)>([\s]*?|(?R))<\/\1>/imsU',
                //** Replace with nothing if string empty.
                !is_string($repto) ? '' : $repto,
                //** Source string
                $str
        );
    }

    public function edit($id) {
        $activity = ActivitiesQuestion::find($id, array('include' => array('activities_answer')));
        if ($_POST) {
            $id = $this->input->post('activity_id');
            //upload question image if any
            $config['upload_path'] = QUEIMGS;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['width'] = '300';

            $this->load->library('upload', $config);
            $image = '';
            if (!$this->upload->do_upload('que_img')) {
                $error = $this->upload->display_errors('', ' ');
                if ($error != "You did not select a file to upload.") {
                    //$this->session->set_flashdata('error', $error);
                } else {
                    $this->session->set_flashdata('error', $error);
                }
            } else {
                if ($activity->image != '') {
                    unlink($activity->image);
                }
                $data = array('upload_data' => $this->upload->data());
                $image = QUEIMGS . $data['upload_data']['file_name'];
            }

            $attributes = array('question' => $_POST['question'],
                'marks' => $_POST['marks']
            );
            if ($image != '') {
                $attributes['image'] = $image;
            }
            $activity->update_attributes($attributes);

            //saving the answer
            for ($count = 1; $count <= 4; $count++) {
                $answer = ActivitiesAnswer::find($_POST['answer_id-' . $count]);
                $answer_attributes = array('answer' => $this->remove_empty_tags_recursive($_POST['answer-' . $count]),
                    'correct' => $_POST['correct-' . $count],
                );
                $answer->update_attributes($answer_attributes);
            }
            $this->session->set_flashdata('success', 'Question updated successfuly');
            redirect('admin/activity_questions/manage/' . $activity->activity_id);
        } else {
            $this->template->title('Administrator Panel : edit question')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Edit Question')
                    ->set('form_action', 'admin/activity_questions/edit/' . $id)
                    ->set('activity', $activity)
                    ->build($this->admin_folder . '/activity_questions/edit');
        }
    }

    public function explanation($id) {
        $explanation = ActivitiesQuestion::find($id);
        if($_POST) {
            // pretty($_POST); die;
            unset($_POST['_wysihtml5_mode']);
            $question_id = $this->input->post('question_id');
            $activity_id = $this->input->post('activity_id');
            // pretty($activity_id); die;
            try{
                $exp = new ActivitiesExplanation(
                    array('activities_questions_id' => $question_id,
                    'explanation' => $_POST['question1'],
                    'description' => $_POST['description1'],
                    'created_datetime' => date_time_zone(),
                    'updated_datetime' => date_time_zone(),
                    'created_by' => $this->ion_auth->get_user_id(),
                    'updated_by' => $this->ion_auth->get_user_id(),
                    'answer' => $_POST['answer1']));

                $exp->save();

                $exp = new ActivitiesExplanation(
                    array('activities_questions_id' => $question_id,
                    'explanation' => $_POST['question2'],
                    'description' => $_POST['description2'],
                    'created_datetime' => date_time_zone(),
                    'updated_datetime' => date_time_zone(),
                    'created_by' => $this->ion_auth->get_user_id(),
                    'updated_by' => $this->ion_auth->get_user_id(),
                    'answer' => $_POST['answer2']));

                $exp->save();
            } catch (Exception $e) {
                $this->session->set_flashdata('error', 'There where errors saving the explanation');
                redirect('admin/activity_questions/manage/'.$activity_id);
            }            
            
            $this->session->set_flashdata('success', 'Explanation added successfuly');
            redirect('admin/activity_questions/manage/'.$activity_id);
        }else{
            $this->template->title('Administrator Panel : create explanation')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Edit Explanation')
                    ->set('form_action', 'admin/activity_questions/explanation/' . $id)
                    ->set('explanation', $explanation)
                    ->build($this->admin_folder . '/activity_questions/explanation');
        }
        
    }


}

?>