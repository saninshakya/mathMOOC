<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserActivitiesQuestion extends ActiveRecord\Model {

    public $belongs_to = array('user');

}
