<?php

    class Palestrante extends AppModel
    {
        public $useTable = 'palestrantes';

        public $order = array('descricao' => 'ASC');

        public $hasMany = array('Palestra');

        public $validate = array(
            'nome' =>
                array (
                    'rule' => 'notEmpty',
                    'message' => 'Preencha o nome'
                ),
            'descricao' =>
                array (
                    'rule' => 'notEmpty',
                    'message' => 'Preencha a descriçao'
                ),
            'endereco_site' =>
                array (
                    'rule' => 'url',
                    'message' => 'Preencha uma URL valida',
                    'allowEmpty' => true
                )
        );

    }

?>