<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends Backend_Controller {

    protected $activemenu = 'topics';

    public function __construct() {
        parent::__construct();
        $this->template->set('activemenu', $this->activemenu);
    }

    public function index() {
        $data['topics'] = Topic::find('all', array('order' => 'id DESC'));
        $this->template->title('Administrator Panel : manage topics')
                ->set_layout($this->admin_tpl)
                ->set('page_title', 'Topics')
                ->build($this->admin_folder . '/topics/list', $data);
    }

    public function create() {
        if ($_POST) {
            unset($_POST['_wysihtml5_mode']);
            $additional_data = array(
                'created_datetime' => date_time_zone(),
                'updated_datetime' => date_time_zone(),
                'created_by' => $this->ion_auth->get_user_id(),
                'updated_by' => $this->ion_auth->get_user_id(),
            );
            $data = array_merge($_POST,$additional_data);
            $topic = Topic::create($data);
            if ($topic->is_invalid()) {
                $this->session->set_flashdata('error', 'There where errors saving the topic');
                redirect('admin/topics/create');
            }
            $this->session->set_flashdata('success', 'Topic added successfuly');
            redirect('admin/topics');
        } else {
            $this->template->title('Administrator Panel : create topic')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Create Topic')
                    ->set('form_action', 'admin/topics/create')
                    ->build($this->admin_folder . '/topics/_topics');
        }
    }

    public function view($id) {
        $topic = Topic::find($id);
        $this->template->title('Administrator Panel : view topic')
                ->set_layout($this->modal_tpl)
                ->set('page_title', 'View Topic')
                ->set('topic', $topic)
                ->set('form_action', 'admin/topics/edit/' . $id)
                ->build($this->admin_folder . '/topics/view');
    }

    public function edit($id) {
        $topic = Topic::find($id);
        if ($_POST) {
            $id = $this->input->post('topic_id');
            unset($_POST['_wysihtml5_mode']);
            unset($_POST['topic_id']);
            
            $additional_data = array(
                'updated_datetime' => date_time_zone(),
                'updated_by' => $this->ion_auth->get_user_id(),
            );
            $data = array_merge($_POST,$additional_data);
            $topic->update_attributes($data);
            if ($topic->is_invalid()) {
                $this->session->set_flashdata('error', 'There where errors saving the topic');
                redirect('admin/topics/edit');
            }
            $this->session->set_flashdata('success', 'Topic updated successfuly');
            redirect('admin/topics');
        } else {
            $this->template->title('Administrator Panel : edit topic')
                    ->set_layout($this->admin_tpl)
                    ->set('page_title', 'Edit Topic')
                    ->set('form_action', 'admin/topics/edit/' . $id)
                    ->set('topic', $topic)
                    ->build($this->admin_folder . '/topics/_topics');
        }
    }

    public function delete($id) {
        $topic = Topic::find($id);
        $topic->delete();
    }
}