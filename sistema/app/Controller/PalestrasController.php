<?php

    class PalestrasController extends AppController
    {
        public $uses = array('Palestra');

    //     public function index() {

    //     }

    //     public function criar() // Carrega automaticamente a view:///View/Palestras/criar.ctp}
    //     {

    //         $isPost = $this->request->isPost();// Se é um POST e recebemos dados do formulário

    //         if ($isPost && !empty($this->request->data)) {// Tenta salvar os dados da inscrição
    //             if ($this->Inscricao->save($this->request->data)) {// Registro inserido com sucesso!
    //                 $this->redirect(['controller' => 'Palestra', 'action' => 'index']);
    //             }
    //         }
    //     }

    //     public function visualizar($id=null) // Carrega automaticamente a view:///View/Palestras/visualizar.ctp}
    //     {
            // $params = array (
            //     'fields' => array (
            //         'Palestra.nome', 'Palestra.descricao', 'Palestra.hora_inicio', 'Palestra.hora_fim'
            //     ),
            //     'order' => array (
            //         'Palestra.hora_inicio' => 'ASC'
            //     )
            // );

            // $dados = $this->Palestra->find('all', $params);
            // // var_dump($dados);

            // $this->set('palestras', $dados);

    //     }

    //     public function editar($id=null) // Carrega automaticamente a view:///View/Palestras/editar.ctp}
    //     {

    //     }

    //     public function deletar() // Carrega automaticamente a view:///View/Palestras/deletar.ctp}
    //     {

    //     }
    // }

            /**
         * index method
         *
         * @return void
         */
        public function index() {
            $this->Palestra->recursive = 0;
            $this->set('palestras', $this->paginate());
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
            $this->Palestra->id = $id;
            if (!$this->Palestra->exists()) {
                throw new NotFoundException(__('Invalid palestra'));
            }
            $this->set('palestras', $this->Palestra->read(null, $id));
        }

        /**
         * add method
         *
         * @return void
         */
            public function criar() {
                if ($this->request->is('post')) {
                    $this->Palestra->create();
                    // var_dump($this->request->data);
                    // die();
                    if ($this->Palestra->save($this->request->data)) {
                        $this->Session->setFlash(__('The Palestras has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The Palestras could not be saved. Please, try again.'));
                        var_dump($this->Palestra->validationErrors);
                    }
                }

                $this->set('palestrantes', $this->Palestra->Palestrante->find('list', [
                    'fields' => [
                        'Palestrante.id',
                        'Palestrante.nome'
                    ]
                ]));
            }

        /**
         * edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
            public function editar($id = null) {
                $this->Palestra->id = $id;
                if (!$this->Palestra->exists()) {
                    throw new NotFoundException(__('Invalid Palestras'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                    if ($this->Palestra->save($this->request->data)) {
                        $this->Session->setFlash(__('The Palestras has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The Palestras could not be saved. Please, try again.'));
                    }
                } else {
                    $this->request->data = $this->Palestra->read(null, $id);
                }

                $this->set('palestrantes', $this->Palestra->Palestrante->find('list', [
                    'fields' => [
                        'Palestrante.id',
                        'Palestrante.nome'
                    ]
                ]));
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
                $this->Palestra->id = $id;
                if (!$this->Palestra->exists()) {
                    throw new NotFoundException(__('Invalid Palestras'));
                }
                if ($this->Palestra->delete()) {
                    $this->Session->setFlash(__('Palestras deleted'));
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Palestras was not deleted'));
                $this->redirect(array('action' => 'index'));
            }
    }

?>

