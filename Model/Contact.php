<?php
/**
 * CakePHP Contact
 * @author david
 */

App::uses('AppModel', 'Model');

class Contact extends AppModel {
    
    public $displayField = '';
    public $useDbConfig = 'default';
    public $useTable = false;
    public $actsAs = array('Containable');
        
}