<?php
/**
 * CakePHP Contact
 * @author david
 */

App::uses('AppModel', 'Model');

class Contact extends AppModel {
    
    public $displayField = 'email';
    public $useTable = 'contacts';
    public $actsAs = array('Containable');

    public $validate = array(
        'name'=>array(
            'one'=>array(
                'rule'=>'notEmpty',
                'message'=>'Please enter your name',
                'required'=>true
            ),
        ),
        'email'=>array(
            'one'=>array(
                'rule'=>'notEmpty',
                'message'=>'Please enter your email address',
                'required'=>true
            ),
            'two'=>array(
                'rule'=>array('email',false),
                'message'=>'Please enter a valid email address'
            )
        ),
        'message'=>array(
            'one'=>array(
                'rule'=>'notEmpty',
                'message'=>'Please enter your messsage',
                'required'=>true
            ),
            'two'=>array(
                'rule'=>array('minLength', 10),
                'message'=>'Please enter 10 or more characters'
            )
        )
    );
}