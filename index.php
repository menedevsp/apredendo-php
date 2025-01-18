<?php
    //PHP - Personal Home Page

    //Variáveis
    //Variável de variável
    //Concatenar
    //Comparar valores
    //>= <= == !=
    //=== !==
    //Looping
    //Funções
    //Classes


    $nome = 'Guilherme';
    $idade = '24'
    $$Guilherme = 'Roberto Antonio';

    echo $nome;
    echo 'Fala meu amigo '.$nome;
    echo $$nome;
    if($idade !== 24){
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    for($i = 0; $i < 10; $i++){
        echo $i;
    }

    $i = 0;
    while($i < 10){
        echo $i;
        $i++;
    }

    function soma($a, $b){
        echo $a + $b;
    }
    soma(2, 3);

    class Pessoa {
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentar(){
            echo 'Olá, meu nome é '.$this->nome.' e tenho '.$this->idade.' anos';
        }
    }
    $pessoa = new Pessoa('Guilherme', 24);
    $pessoa->apresentar();

?>