<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Topic extends ActiveRecord\Model {

    static $has_many = array(array('activity'));

    public function before_destroy() {
        $related_activitites = Activity::find(array(
                    'conditions' => array(
                        'topic_id' => $this->id)
        ));

        if ($related_activitites)
            $related_activitites->delete();
    }

    static $validates_presence_of = array(
        array('title')
    );

}