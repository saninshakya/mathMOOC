<?php

class Worksheets extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $data['menu'] = 'worksheet';
        $this->template->title('Worksheet')
                ->set_layout($this->front_tpl)
                ->set('page_title', 'Worksheet')
                ->build($this->user_folder . '/worksheet', $data);
    }

}

?>