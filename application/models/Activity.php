<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activity extends ActiveRecord\Model {

    static $belongs_to = array(array('topic'));
    
    static $has_many = array(array('activities_question'));
   
}
