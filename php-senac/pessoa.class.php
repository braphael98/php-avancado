<?php
class Pessoa
{
    private $nome, $idade,  $email,   $celular,   $hora,  $site,  $senha,  $cor,  $numFilhos,  $peso,  $sexo,  $estado, $msg;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getIdade()
    {
        return $this->idade;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return  $this->email;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getCelualr()
    {
        return $this->celular;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function getHora()
    {
        return $this->hora;
    }
    public function setSite($site)
    {
        $this->site = $site;
    }
    public function getSite()
    {
        return $this->site;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }
    public function getNumFilhos()
    {
        return $this->numFilhos;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this -> peso;
    }

    public function setSexo($sexo){
        $this -> sexo =$sexo;
    }

    public function getSexo(){
        return $this ->sexo;
    }

    public function setEstado($estado){
        $this -> estado =$estado;
    }
    public function getEstado(){
        return $this -> estado;
    }

    public function setMsg($msg){
        $this -> msg = $msg;
    }
    public function getMsg(){
        return $this -> msg;
    }


    public function mostrarDados()
    {
        echo $this->getNome()."<br>";
        echo $this->getIdade()."<br>";
        echo $this->getEmail()."<br>";
        echo $this->getCelualr()."<br>";
        echo $this->getEstado()."<br>";
        echo $this->getSexo()."<br>";
        echo $this->getSenha()."<br>";
        echo $this->getHora()."<br>";
        echo $this->getNumFilhos()."<br>";
        echo $this->getPeso()."<br>";
        echo $this->getMsg()."<br>";
       

    }
}
