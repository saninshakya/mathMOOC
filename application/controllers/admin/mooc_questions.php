<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Question that are related to activities.
 */

class Questions extends Backend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function manage($activity_id) {
        $exam = Activity::find($activity_id, array('include' => array('question')));
        die;
        //$questions = Question::find('all', array('include'=>array('question')));
//        $this->template->title('Administrator Panel : manage questions')
//                ->set_layout($this->admin_tpl)
//                ->set('page_title', 'Manage Questions')
//                ->set('form_action', 'admin/questions/create/')
//                ->set('exam', $exam)
//                ->build($this->admin_folder . '/questions/list');
    }

}

?>
