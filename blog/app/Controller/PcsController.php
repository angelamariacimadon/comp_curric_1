<?php
class PcsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Pcs';

    function index() {
        $this->set('pcs', $this->Pc->find('all'));
    }
public function view($id = null) {
        $this->Pc->id = $id;
        $this->set('pc', $this->Pc->read());
    }


}

