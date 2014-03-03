<?php
/**
 * CakePHP ContactsController
 * @author david
 */

App::uses('AppController', 'Controller');

class ContactsController extends ContactUsAppController {

    public $components = array('Recaptcha.Recaptcha');

    public function message(){
        if($this->request->is('post')){
            if($this->Recaptcha->verify() && $this->Contact->save($this->request->data)){
		/**
		 * added for backwards compatibility
		 */
		if(Configure::check('Site.email')){
			Configure::write('ContactUs.email', Configure::read('Site.email'));
		}
                $email = new CakeEmail();
                $email->from($this->request->data['Contact']['email']);
                $email->sender(Configure::read('ContactUs.email'));
                $email->to(Configure::read('ContactUs.email'));
                $email->returnPath(Configure::read('ContactUs.email'), 'Site');
                $email->replyTo($this->request->data['Contact']['email']);
                $email->emailFormat('both');
                $email->subject('Website enquiry');

                if($email->send($this->request->data['Contact']['message'])){
                    unset($this->request->data['Contact']);
                    $this->Session->setFlash('Message has been sent', null, array('class'=>'alert-success'));
                    $this->redirect(array('action'=>'message'));
                }else{
                    $this->Session->setFlash('Could not send message, please try again', null, array('class'=>'alert-error'));
                }
            } else{
                $this->Session->setFlash('Message could not be sent, please try again', null, array('class'=>'alert-error'));
            }
        }
    }

}
