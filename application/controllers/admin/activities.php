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
            $activity = Activity::create($_POST);
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

}

?>