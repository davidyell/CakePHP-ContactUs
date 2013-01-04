#CakePHP-ContactUs

A basic implementation of a contact us form.

##Requirements
* CakePHP v2.x
* [CakeDC/Recaptcha](https://github.com/CakeDC/recaptcha) component

##Installation
Unzip, clone or submodule the plugin into `app/Plugin/ContactUs`

##Usage
Load the plugin enabling it's routes to allow `/contact-us` as the url instead of `/contact_us/contacts/message`.  
  
`CakePlugin::load('ContactUs', array('routes'=>true));`