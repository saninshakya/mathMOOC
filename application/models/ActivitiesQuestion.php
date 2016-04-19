<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ActivitiesQuestion extends ActiveRecord\Model {

    static $belongs_to = array(array('activity'));
    static $has_many = array(
            array('activities_answer'),
            array('activities_explanation'),
        );

}
