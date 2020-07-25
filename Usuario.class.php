<?php
 
class Usuario {
 
    private $Id;
    private $Nome;
    private $Senha;
    private $Ativo;
 
    public function getId() {
        return $this->Id;
    }
 
    public function setId($id) {
        $this->Id = $id;
    }
 
    public function getNome() {
        return $this->Nome;
    }
 
    public function setNome($nome) {
        $this->Nome = $nome;
    }
 
    public function getSenha() {
        return $this->Senha;
    }
 
    public function setSenha($senha) {
        $this->Senha = $senha;
    }
 
    public function getAtivo() {
        return $this->Ativo;
    }
 
    public function setAtivo($ativo) {
        $this->Ativo = $ativo;
    }
     
    
}
 
?>