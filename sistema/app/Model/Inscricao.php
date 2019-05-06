<?php

    class Inscricao extends AppModel
    {
        public $useTable = 'inscricaos';

        public $order = array('nome' => 'ASC');

        public $validate = array(
            'nome' =>
                array (
                    'rule' => 'notEmpty',
                    'message' => 'Preencha o nome'
                ),
            'email' =>
                array (
                    array (
                        'rule' => 'notEmpty',// Não vazio
                        'message' => 'Preencha o email'
                    ),
                    array (
                        'rule' => 'isUnique',// Único
                        'message' => 'Este email já está em uso'
                    ),
                    array (
                        'rule' => 'email',// Email valido
                        'message' => 'Preencha um email valido'
                    )
                )
        );

    }

?>