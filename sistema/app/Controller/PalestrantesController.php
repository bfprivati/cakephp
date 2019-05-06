<?php

    class PalestrantesController extends AppController
    {
        public $uses = array('Palestrante');

        // public function index() {

        // }

        // public function criar() // Carrega automaticamente a view:///View/Palestrantes/criar.ctp}
        // {

        //     $isPost = $this->request->isPost();// Se é um POST e recebemos dados do formulário
        //     if ($isPost && !empty($this->request->data)) {// Tenta salvar os dados da inscrição
        //         if ($this->Palestrante->save($this->request->data)) {// Registro inserido com sucesso!
        //             $this->redirect(['controller' => 'Palestrante', 'action' => 'index']);
        //         }
        //     }
        // }

        // public function visualizar() // Carrega automaticamente a view:///View/Palestrantes/visualizar.ctp}
        // {
        //     $params = array (
        //         'fields' => array (
        //             'Palestrante.nome', 'Palestrante.descricao'
        //         ),
        //         'order' => array (
        //             'Palestrante.nome' => 'ASC'
        //         )
        //     );

        //     $dados = $this->Palestrante->find('all', $params);

        //     $this->set('palestrantes', $dados);
        // }

        // public function editar() // Carrega automaticamente a view:///View/Palestrantes/editar.ctp}
        // {

        // }

        // public function deletar() // Carrega automaticamente a view:///View/Palestrantes/deletar.ctp}
        // {

        // }

        /**
         * index method
         *
         * @return void
         */
        public function index() {
            $this->Palestrante->recursive = 0;
            $this->set('palestrantes', $this->paginate());
        }

        /**
        * view method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */
        public function visualizar($id = null) {
            // die($id);
            $this->Palestrante->id = $id;
            if (!$this->Palestrante->exists()) {
                throw new NotFoundException(__('Invalid palestrantes'));
            }
            $this->set('palestrantes', $this->Palestrante->read(null, $id));
        }

        /**
         * add method
         *
         * @return void
         */
            public function criar() {
                if ($this->request->is('post')) {
                    $this->Palestrante->create();
                    if ($this->Palestrante->save($this->request->data)) {
                        $this->Session->setFlash(__('The Palestrante has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The Palestrante could not be saved. Please, try again.'));
                    }
                }
            }

        /**
         * edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
            public function editar($id = null) {
                $this->Palestrante->id = $id;
                if (!$this->Palestrante->exists()) {
                    throw new NotFoundException(__('Invalid Palestrante'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                    if ($this->Palestrante->save($this->request->data)) {
                        $this->Session->setFlash(__('The Palestrante has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The Palestrante could not be saved. Please, try again.'));
                    }
                } else {
                    $this->request->data = $this->Palestrante->read(null, $id);
                }
            }

        /**
         * delete method
         *
         * @throws MethodNotAllowedException
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
            public function deletar($id = null) {
                if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
                }
                $this->Palestrante->id = $id;
                if (!$this->Palestrante->exists()) {
                    throw new NotFoundException(__('Invalid Palestrante'));
                }
                if ($this->Palestrante->delete()) {
                    $this->Session->setFlash(__('Palestrante deleted'));
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Palestrante was not deleted'));
                $this->redirect(array('action' => 'index'));
            }
    }

?>

