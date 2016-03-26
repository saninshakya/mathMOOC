<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activity extends ActiveRecord\Model {

    static $has_many = array(
        array('question'),
    );
    static $belongs_to = array(array('topic'));

}