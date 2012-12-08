<h1>Edit Pc</h1>
<?php
    echo $this->Form->create('Pc', array('action' => 'edit'));
    echo $this->Form->input('marca');
    echo $this->Form->input('modelo');
    echo $this->Form->input('memoria');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Pc');
