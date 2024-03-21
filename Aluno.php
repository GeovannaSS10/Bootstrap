<?php

class Aluno {

    public $rm;
    public $nome;
    public $email;

    public function exibir (){
        $this->exibi("RM:".$this->rm."<br>");
        $this->exibi("Nome:".$this->nome."<br>");
        $this->exibi("Email:".$this->email."<br>");
    }

    public function exibi($texto,$variavel){
        echo "<div class='bg-warning'>".$texto." ".$variavel."<br></div>";
    }
}