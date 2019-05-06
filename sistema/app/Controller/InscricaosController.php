<?php

    class InscricaosController extends AppController
    {
        public $uses = array('Inscricao');

        /**
         * index method
         *
         * @return void
         */
            public function index() {
                $this->Inscricao->recursive = 0;
                $this->set('inscricaos', $this->paginate());
            }

        /**
        * view method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */
            public function visualizar($id = null) {
                $this->Inscricao->id = $id;
                if (!$this->Inscricao->exists()) {
                    throw new NotFoundException(__('Invalid inscricao'));
                }
                $this->set('inscricaos', $this->Inscricao->read(null, $id));
            }

        /**
         * add method
         *
         * @return void
         */
            public function criar() {
                if ($this->request->is('post')) {
                    $this->Inscricao->create();
                    if ($this->Inscricao->save($this->request->data)) {
                        $this->Session->setFlash(__('The inscricao has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
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
                $this->Inscricao->id = $id;
                if (!$this->Inscricao->exists()) {
                    throw new NotFoundException(__('Invalid inscricao'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                    if ($this->Inscricao->save($this->request->data)) {
                        $this->Session->setFlash(__('The inscricao has been saved'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
                    }
                } else {
                    $this->request->data = $this->Inscricao->read(null, $id);
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
                $this->Inscricao->id = $id;
                if (!$this->Inscricao->exists()) {
                    throw new NotFoundException(__('Invalid Inscricao'));
                }
                if ($this->Inscricao->delete()) {
                    $this->Session->setFlash(__('Inscricao deleted'));
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Inscricao was not deleted'));
                $this->redirect(array('action' => 'index'));
            }
    }

?>