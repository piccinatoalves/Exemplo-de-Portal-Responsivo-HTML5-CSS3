<?php
class templateController extends controller {
	
	public function index() {
		 $dados = array();
        
        $noticia = new Noticia();
        
        $dados['noticia'] = $noticia->getNoticia();
        
        $this->loadTemplate('template', $dados);
    }
	
}