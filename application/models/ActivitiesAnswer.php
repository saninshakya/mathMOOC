<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ActivitiesAnswer extends ActiveRecord\Model{
	
	static $belongs_to = array(array('activities_question'));

}