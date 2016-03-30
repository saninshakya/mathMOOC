<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['topics'] = Topic::find('all', array('include' => 'activity'));
        $data['menu'] = 'activities';
        $this->template->title('Available Activities')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Activities')
                ->build($this->user_folder . '/activities/list', $data);
    }

}

?>