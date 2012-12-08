<?php
	class PostsController extends AppController {
    	public $helpers = array ('Html','Form');
    	// public $name = 'Posts';
		
		//action
		// /posts/index	
		public function index() {
			$todasAsPostagens = $this->Post->find('all');
			
			//seta todas as postagens
			$this->set('posts', $todasAsPostagens);
			// $this->set('posts', $this->Post->find('all'));
	}

public function view($id = null) {
        $this->Post->id = $id;
       $p = $this->Post->read();
      $this->set('post', $p);

    }

    public function add(){
    	//se for enviado um post pegar os dados do fora e salvar no banco 
  if ($this->request->is('post')) {
$dadosFormulario = $this->request->data;

            if ($this->Post->save($$dadosFormulario)) {


                $this->Session->setFlash('Postagem Inserida com sucesso!');

                $this->redirect(array('action' => 'index'));

    }
  }
}
function edit($id = null) {
    $this->Post->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Post->read();
    } else {
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        }

}
}
function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}