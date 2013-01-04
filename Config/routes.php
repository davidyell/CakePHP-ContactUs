<?php
/**
 * Description of routes
 *
 * @author david
 */

Router::connect('/contact-us', array(
    'plugin'=>'contact_us',
    'controller'=>'contacts',
    'action'=>'message'
));