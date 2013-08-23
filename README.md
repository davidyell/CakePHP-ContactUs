#CakePHP-ContactUs

A basic implementation of a contact us form.

##Requirements
* CakePHP v2.x
* [CakeDC/Recaptcha](https://github.com/CakeDC/recaptcha) component

##Installation
1. Unzip, clone or submodule the plugin into `app/Plugin/ContactUs`
2. Define a from email in your bootstrap file `Configure::write('ContactUs.email', 'from@email.com');` replacing `from@email.com` with the email you want the email messages to be sent to

##Usage
Load the plugin enabling it's routes to allow `/contact-us` as the url instead of `/contact_us/contacts/message`.

`CakePlugin::load('ContactUs', array('routes'=>true));`