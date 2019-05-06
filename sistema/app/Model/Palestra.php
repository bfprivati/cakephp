<?php

    class Palestra extends AppModel
    {
        public $useTable = 'palestras';

        public $order = array('Palestra.nome' => 'ASC');

        public $belongsTo = array('Palestrante');

        public $validate = array(
            'nome' =>
                array (
                    array (
                        'rule' => 'notEmpty',// Não vazio
                        'message' => 'Preencha o nome'
                    ),
                    array (
                        'rule' => 'isUnique',// Único
                        'message' => 'Este nome já está em uso'
                    )
                ),
            'hora_inicio' =>
                array (
                    array (
                        'rule' => 'notEmpty',// Não vazio
                        'message' => 'Preencha a hora de inicio'
                    )
                ),
            'hora_fim' =>
                array (
                    array (
                        'rule' => 'notEmpty',// Não vazio
                        'message' => 'Preencha a hora de fim'
                    )
                )
        );

    }

?>