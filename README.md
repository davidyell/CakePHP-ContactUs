#CakePHP-ContactUs

A basic implementation of a contact us form.

##Requirements
* CakePHP v2.x
* [CakeDC/Recaptcha](https://github.com/CakeDC/recaptcha) component

##Installation
1. Unzip, clone or submodule the plugin into `app/Plugin/ContactUs`
2. In your bootstrap file, define an email address you want your messages to go to. Do this like so : `Configure::write('ContactUs.email', 'from@email.com');` replacing `from@email.com` with your email address.
3. If you wish to use an email config from your email.php file, you can tell the plugin to use it by adding this to your bootstrap `Configure::write('ContactUs.emailConfig', 'smtp')` where `smtp` is the email config
setting found in your email.php file. You can supply a different `from email`, `subject` and many other parts of the email sent by the plugin using this feature.
( for more info please visit http://book.cakephp.org/2.0/en/core-utility-libraries/email.html#configurations )
##Usage
Load the plugin enabling it's routes to allow `/contact-us` as the url instead of `/contact_us/contacts/message`.

`CakePlugin::load('ContactUs', array('routes'=>true));`