<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
    <script type="text/javascript" src="assets/js/slide.js"></script>
	<title>Portal</title>
	 <link rel="stylesheet" type="text/css" href="../assets/css/template.css">
         

</head>
<body>
    <div class="topo">
        <div class="topoint">
            <div class="topoleft">
                <ul>
                    <li><a href="./" class="ativo">Home</a></li>
                    <li><a href="quem-somos">Quem Somos</a></li>
                    <li><a href="anuncie-aqui">Anuncie Aqui</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </div>
            <div class="toporight">
                <input type="image" class="botaobusca" src="assets/images/lupa.png"border="0" width="26" />
                <input type="search" name="busca" class="topobusca" placeholder="Busca..." />
                <a href=""><img src="assets/images/youtube.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/twitter.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/facebook.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/googleplus.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/rss.png" border="0" width="26" height="26" /></a>
                
            </div>
        </div>
        
    </div>
        <div class="topo2">
            
            <div class="topo2int">
                
                <div class="logo">
                    <img src="assets/images/logo.png" border="0" width="230"  />
                </div>
                <div class="banner"></div>
            </div>
            
        </div>
    <div class="menu">
        <div class="menuint">
            <img src="assets/images/menu.png" border="0" width="40" height="40" 
                 class="menumobile" onclick="toggleMenu()"  />
            <ul id="menu">
                <li><a href="./" class="ativo">Home</a></li>
                <li><a href="economia" >Economia</a></li>
                <li>
                    <a href="" >Entreterimento</a>
                    <img src="assets/images/arrowdown.png" border="" width="10px" />
                     <div class="submenu">
                                 <a href="./" ><div class="submenuitem">Sub menu 1</div> </a>
                                 <a href="./" ><div class="submenuitem">Sub menu 2</div> </a>
                                 <a href="./" ><div class="submenuitem">Sub menu 3</div> </a>
                                 <a href="./" ><div class="submenuitem">Sub menu 4</div> </a>
                                 <a href="./" ><div class="submenuitem">Sub menu 5</div> </a>
                    </div>
                </li>
                <li>
                    <a href="" >Esportes</a>
                    <img src="assets/images/arrowdown.png" border="" width="10px" />
                    <div class="submenu">
                           <a href="./" ><div class="submenuitem">Sub menu 1</div> </a>
                           <a href="./" ><div class="submenuitem">Sub menu 2</div> </a>
                           <a href="./" ><div class="submenuitem">Sub menu 3</div> </a>
                           
                        
                    </div>
                </li>
                <li><a href="./" >Geral</a></li>
                <li>
                    <a href="./" >Notícias</a>
                    <img src="assets/images/arrowdown.png" border="" width="10px" />
                    <div class="submenu">
                           <a href="./" ><div class="submenuitem">Sub menu 1</div> </a>
                           <a href="./" ><div class="submenuitem">Sub menu 2</div> </a>
                           <a href="./" ><div class="submenuitem">Sub menu 3</div> </a>
                           <a href="./" ><div class="submenuitem">Sub menu 4</div> </a>
                           
                    </div>
                </li>
                <li><a href="./" >Polícia</a></li>
                <li><a href="./" >Vídeos</a></li>
            </ul>
        </div>
    </div>
    <div class="ultimasnoticias">
        <div class="ultimasnoticiasint">
            <div class="ultnoticiasarea">
                <div class="ultnoticiastitulo">ÚLTIMAS NOTÍCIAS</div>
                <div class="ultnoticiasnoticia">Alguma noticia de algum texto que irá ficar por aqui</div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="containerint" >
            <div class="leftside">
                 <div class="slideshow" id="slideshow">
                    <div class="slidebolinha">
                        <div class="bolinha" onclick="mudarSlide(0)"></div>
                        <div class="bolinha" onclick="mudarSlide(1)" ></div>
                        <div class="bolinha" onclick="mudarSlide(2)"></div>
                        <div class="bolinha" onclick="mudarSlide(3)"></div>
                    </div>
                   
 <div class="slideshowarea">
     <a href="http://www.google.com.br" target="_blank">
                        <div class="slide"  style="background-image:url('http://www.google.com.br/google.jpg')" >
                            <div class="slideinfo">
                                <div class="slideinfo_titulo">Titulo de Teste</div>
                                <div class="slideinfo_subtitulo">SubTitulo de Teste</div>
                            </div>
                        </div>
         </a>
                          <div class="slide"  style="background-image:url('http://www.google.com.br/google.jpg')" >
                            <div class="slideinfo">
                                <div class="slideinfo_titulo">Titulo de Teste 2</div>
                                <div class="slideinfo_subtitulo">SubTitulo de Teste 2</div>
                            </div>
                        </div>
                          <div class="slide"  style="background-image:url('http://www.google.com.br/google.jpg')" >
                            <div class="slideinfo">
                                <div class="slideinfo_titulo">Titulo de Teste 3</div>
                                <div class="slideinfo_subtitulo">SubTitulo de Teste 3</div>
                            </div>
                        </div>
                          <div class="slide"  style="background-image:url('http://www.google.com.br/google.jpg')" >
                            <div class="slideinfo">
                                <div class="slideinfo_titulo">Titulo de Teste 4</div>
                                <div class="slideinfo_subtitulo">SubTitulo de Teste 4</div>
                            </div>
                        </div>
                        
                    </div>
   
                </div>
                <div class="widget">
                    <div class="widget_titulo">NOTÍCIAS</div>
                    <div class="widget_conteudo"> 
                        <div class="noticiaarea1">
                            <div class="noticiaitem noticiabig">
                                
                                <div class="noticiaimg">
                                    <img src="" border="0" width="80" height="80" />
                                </div>
                                <div class="noticiatitulo"> Algum titulo Qualquer hhfghfghfghf
                                </div>
                                <div class="noticiainfo"> 500 Comentários </div>
                            </div>
                        </div>
                        <div class="noticiaarea2">
                            
                            <div class="noticiaitem">
                                
                                <div class="noticiaimg">
                                    <img src="" border="0" width="80" height="80" />
                                </div>
                                <div class="noticiatitulo"> Algum titulo
                                </div>
                                <div class="noticiainfo"> Comentário</div>
                            </div>
                            <div class="noticiaitem">
                                
                                <div class="noticiaimg">
                                    <img src="" border="0" width="80" height="80" />
                                </div>
                                <div class="noticiatitulo"> Algum titulo 2
                                </div>
                                <div class="noticiainfo"> Comentário</div>
                            </div>
                            <div class="noticiaitem">
                                
                                <div class="noticiaimg">
                                    <img src="" border="0" width="80" height="80" />
                                </div>
                                <div class="noticiatitulo"> Algum titulo 3
                                </div>
                                <div class="noticiainfo"> Comentário</div>
                            </div>
                            <div class="noticiaitem">
                                
                                <div class="noticiaimg">
                                    <img src="" border="0" width="80" height="80" />
                                </div>
                                <div class="noticiatitulo"> Algum titulo 4
                                </div>
                                <div class="noticiainfo"> Comentário</div>
                            </div>
                        </div>
                        
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
            <div class="rightside">
                <div class="widget">
                    <div class="widget_titulo">SOCIAL</div>
                    <div class="widget_conteudo">
                <a href=""><img src="assets/images/youtube.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/twitter.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/facebook.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/googleplus.png" border="0" width="26" height="26" /></a>
                <a href=""><img src="assets/images/rss.png" border="0" width="26" height="26" /></a>
                    </div>
                    
                </div>
                <div class="widget">
                    <div class="widget_titulo">ULTIMAS NOTÍCIAS</div>
                    <div class="widget_conteudo">
                       
                          <?php $viewName = 'noticia';$this->loadViewTemplate($viewName, $viewData);?>

                </div>
                <div class="widget">
                    <div class="widget_titulo">PUBLICIDADE</div>
                    <div class="widget_conteudo"><img src="assets/images/logo.png" borede="0" width="275" /></div>
                    
                </div>
                <div class="widget">
                    <div class="widget_titulo">ENCONTRE-NOS NO FACEBOOK</div>
                    <div class="widget_conteudo"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=275&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=783455831809534" width="275" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                    
                </div>
            </div>
        </div>
        <div></div>
    </div>






</body>
</html>