<?php
class homeController extends controller {
	
	public function index() {
		 $dados = array();
        
        $noticia = new Noticia();
        
        $dados['noticia'] = $noticia->getNoticia();
        
        $this->loadTemplate('home', $dados);
    }
	
}