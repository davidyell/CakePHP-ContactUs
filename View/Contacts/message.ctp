<h1>Contact Us</h1>

<?php
    echo $this->Form->create();
        echo $this->Form->input('name');
        echo $this->Form->input('email');
        echo $this->Form->input('message', array('type'=>'textarea'));
        echo $this->Recaptcha->display();
    echo $this->Form->end('Submit');
?>