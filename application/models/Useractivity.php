<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserActivity extends ActiveRecord\Model {

    static $belongs_to = array(
        array('user'),
        array('activity')
    );

}
