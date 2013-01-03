<h1>Contact Us</h1>

<?php
    echo $this->Form->create();
        echo $this->Form->input('name');
        echo $this->Form->input('email');
        echo $this->Form->input('message', array('type'=>'textarea'));
        echo $this->Recaptcha->display();
        if(!empty($this->validationErrors['Contact']['recaptcha_response_field'])){
            echo $this->Html->tag('div', $this->validationErrors['Contact']['recaptcha_response_field'][0], array('class'=>'error-message'));
        }
    echo $this->Form->end('Submit');
?>