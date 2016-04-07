<?php

/*
 * Topic contains different numbers of activities.
 * If Number Sense is a Topic, then addition, substraction etc are the list of activities.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends Backend_Controller {

    protected $activemenu = 'activities';

    public function __construct() {
        parent::__construct();
        $this->template->set('activemenu', $this->activemenu);
    }

    public function index() {
        $data['activities'] = Activity::find('all', array('order' => 'id DESC'));
        $this->template->title('Administrator Panel : manage activity')
                ->set_layout($this->admin_tpl)
                ->set('page_title', 'Activities')
                ->build($this->admin_folder . '/activities/list', $data);
    }

    public function create() {
        if ($_POST) {
            unset($_POST['_wysihtml5_mode']);
            $video_url = $_POST['video_explanation'];
            $video_url = explode('=', $video_url);
            $video_url = $video_url['1'];

            $additional_data = array(
                'video_explanation' => $video_url,
            );
            $data = array_merge($_POST, $additional_data);
            $activity = Activity::create($data);
            if ($activity->is_invalid()) {
                $this->session->set_flashdata('error', 'There where errors saving the activity');
                redirect('admin/activities/create');
            }
            $this->session->set_flashdata('success', 'Activity added successfuly');
            redirect('admin/activities');
        } else {
            $topics = Topic::find('all', array('order' => 'id DESC'));
            $this->template->title('Administrator Panel : create activity')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Create Activity')
                    ->set('form_action', 'admin/activities/create')
                    ->set('topics', $topics)
                    ->build($this->admin_folder . '/activities/_activities');
        }
    }

    public function view($id) {
        $activity = Activity::find($id);
        $this->template->title('Administrator Panel : view activity')
                ->set_layout($this->modal_tpl)
                ->set('page_title', 'View Activity')
                ->set('activity', $activity)
                ->build($this->admin_folder . '/activities/view');
    }

    public function edit($id) {
        $activity = Activity::find($id);
        if ($_POST) {
            $id = $this->input->post('activity_id');
            unset($_POST['_wysihtml5_mode']);
            unset($_POST['activity_id']);
            $activity->update_attributes($_POST);
            if ($activity->is_invalid()) {
                $this->session->set_flashdata('error', 'There where errors saving the activity');
                redirect('admin/activities/edit');
            }
            $this->session->set_flashdata('success', 'Activity updated successfuly');
            redirect('admin/activities');
        } else {
            $topics = Topic::find('all', array('order' => 'id DESC'));
            $this->template->title('Administrator Panel : edit activity')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Edit Activity')
                    ->set('form_action', 'admin/activities/edit/' . $id)
                    ->set('activity', $activity)
                    ->set('topics', $topics)
                    ->build($this->admin_folder . '/activities/_activities');
        }
    }

    public function delete($id) {
        $exam = Exam::find($id);
        $exam->destroy();
    }

}

?>