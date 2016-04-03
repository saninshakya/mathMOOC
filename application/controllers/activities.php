<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends Frontend_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function test(){
    }

    public function index() {
        $data['topics'] = Topic::find('all', array('include' => 'activity'));
        $data['menu'] = 'activities';
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
        $data['activity'] = Activity::find($id);
        $data['menu'] = 'activities';
        $this->template->title('Practice Activity')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Practice Activity')
                ->build($this->user_folder . '/activities/dopractice', $data);
    }

}

?>