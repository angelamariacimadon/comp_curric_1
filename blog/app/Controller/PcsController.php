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

 public function add() {
        if ($this->request->is('post')) {
            if ($this->Pc->save($this->request->data)) {
                $this->Session->setFlash('marca do seu pc foi salva.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    function edit($id = null) {
    $this->Pc->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Pc->read();
    } else {
        if ($this->Pc->save($this->request->data)) {
            $this->Session->setFlash('Atualização salva.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
public function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Pc->delete($id)) {
        $this->Session->setFlash('o pc com id: ' . $id . ' foi deletado.');
        $this->redirect(array('action' => 'index'));
    }
}

}
