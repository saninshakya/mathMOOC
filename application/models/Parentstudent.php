<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ParentStudent extends ActiveRecord\Model{
	
	static $table_name = 'parents_students';
	
	static $belongs_to = array(
        array('user'),
        array('group')
    );
}