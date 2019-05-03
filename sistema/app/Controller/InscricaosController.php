<?php

    class InscricaosController extends AppController
    {
        public $uses = array('Inscricao');

        public function index() {

        }

        public function criar() // Carrega automaticamente a view:///View/Inscricoes/create.ctp}
        {

            $isPost = $this->request->isPost();// Se é um POST e recebemos dados do formulário
            if ($isPost && !empty($this->request->data)) {// Tenta salvar os dados da inscrição
                if ($this->Inscricao->save($this->request->data)) {// Registro inserido com sucesso!
                    $this->redirect(['controller' => 'Inscricaos', 'action' => 'index']);
                }
            }
        }

        public function visualizar() // Carrega automaticamente a view:///View/Inscricoes/read.ctp}
        {

        }

        public function editar() // Carrega automaticamente a view:///View/Inscricoes/update.ctp}
        {

        }

        public function deletar() // Carrega automaticamente a view:///View/Inscricoes/delete.ctp}
        {

        }
    }

?>