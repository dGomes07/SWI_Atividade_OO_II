<?php
class Vinho {
    private $nome;
    private $tipo;
    private $safra;
    private $preco;
 
   

 
    
    public function getNome() {
        return $this->nome;
    }
 
    public function getTipo() {
        return $this->tipo;
    }
 
    public function getSafra() {  
        return $this->safra;
    }
 
    public function getPreco() {
        return $this->preco;
    }
 
    public function setNome($nome) {
        $this->nome = $nome;
    }
 
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
 
    public function setSafra($safra) {  
        $this->safra = $safra;
    }
 
    public function setPreco($preco) {
        $this->preco = $preco;
    }
 
    
    public function mostrarVinho() {
        return $this->nome .', '. $this->tipo .', '. $this->preco .', '. $this->safra;
    }
 
    
    public function verificarPreco($preco) {
        if($this->preco < 25){
            return true;
         }else {
         return false;
         }
    }
}
?>
 