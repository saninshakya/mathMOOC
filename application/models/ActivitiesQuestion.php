<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ActivitiesQuestion extends ActiveRecord\Model {

//    static $table_name = 'activities_questions';
    static $belongs_to = array(array('activity'));
    // static $has_many = array(array('activities_answer'));
    // static $has_many = array(array('activities_explanation'));
    static $has_many = array(
            array('activities_answer'),
            array('activities_explanation'),
        );

}
