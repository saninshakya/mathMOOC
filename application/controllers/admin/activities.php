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
        $data['exams'] = Exam::find('all', array('order' => 'id DESC'));
        newdbug($data);
        die;
        
        $data['exams'] = Exam::find('all', array('order' => 'id DESC'));
        $this->template->title('Administrator Panel : manage exams')
                ->set_layout($this->admin_tpl)
                ->set('page_title', 'Exams')
                ->build($this->admin_folder . '/exams/list', $data);
    }

}

?>