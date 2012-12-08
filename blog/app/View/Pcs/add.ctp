

<h1>Add Pc</h1>
<?php
echo $this->Form->create('Pc');
echo $this->Form->input('marca');
echo $this->Form->input('modelo');
echo $this->Form->input('memoria');
echo $this->Form->end('Save Pc');
