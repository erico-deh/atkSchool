<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Class extends Model_Table
{
    
    var $table='class_master';
    function init()
    {
        parent::init();
        $this->addField('name')->mandatory("Please give a class name")->caption('Class Name');
        $this->addField('section')->mandatory('give a class name');
        
                
    }
}

?>
