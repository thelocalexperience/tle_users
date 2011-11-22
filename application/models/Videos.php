<?php

class Videos extends ActiveRecord\Model {
    static $belongs_to = array(
                               array('business', 'readonly' => true)
                               );
}