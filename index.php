<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!doctype html>
<html lang="pt-pt">
    <head>
        
        <title>Livraria IEFJesusCristo</title>
        
          <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">  
     <link rel="stylesheet" href="css/dashboard.css">
      
   
   
    <style type="css/text">
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
    </style>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-default fixed-top bg-dark flex-md-nowrap p-0 shadow" >
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">LIVRARIA-IEJC</a>
      <input id="nave" class="form-control form-control-dark w-100" placeholder="Procurar" aria-label="Search" type="text">
      <input class="" type="submit" value="Procurar" class="btn btn-outline-dark">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column list-group">
                            <li class="nav-item alert-success btn-outline-light "><a  class="nav-link nav-tabs" href="#">Livros</a></li>
                            <li class="nav-item "><a class="nav-link nav-tabs alert-warning btn-outline-light" href="#">Brochuras</a></li>
                            <li class="nav-item"><a class="nav-link nav-tabs alert-secondary btn-outline-light" href="#">Videos</a></li>
                            <li class="nav-item"><a class="nav-link alert-dark btn-outline-light" href="#">Encomendar</a></li>
                            <li class="nav-item"><a class="nav-link alert-danger btn-outline-light" href="#">Sobre Nos</a></li>
                            <li class="nav-item alert-info btn-outline-light"><a class="nav-link  " href="#">Contacto</a></li>
                  
                        </ul>
                         <hr>
                         <div>
                             <br>SIGA-NOS:
                             <div class="col-md-6 col-lg-auto justify-content-center text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook white-text mr-2 fa-2x btn-outline-info"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter white-text mr-2 fa-2x btn-outline-info"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-youtube white-text mr-2 fa-2x btn-outline-info"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram white-text mr-2 fa-2x btn-outline-info"> </i>
          </a>

        </div>
                         </div>
                        <footer class="page-footer font-small blue pt-4 mt-4">
                            <div class="footer-copyright text-center py-3" >
                                <p>©1980/2018 Igreja Evangelica da Fe em Jesus Cristo. Todos os direitos reservados, Luanda, Angola.</p>
                            </div>
                        </footer>
                    </div>
                
                
                
                </nav>
                <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-0">
                     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img id="imgs" class="d-block w-100" src="./imgs/background.jpg" alt="First slide">
    </div>
      <div class="carousel-item">
        <img id="imgs" class="d-block w-100" src="./imgs/item-02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img id="imgs" class="d-block w-100" src="./imgs/item-03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    
                    <div class="d-md-block justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 px-5 border-bottom">
                        
                        <section class="col-xs-12">
                            <h1>LIVRO EM DESTAQUES</h1> 
                            <div class="row">
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2 " id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                            
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                
                            </div>
                        </section>
                        <section class="col-xs-12">
                            <h1>NOVIDADES ENFANTIS</h1> 
                            <div class="row">
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2 " id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                            
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                
                            </div>
                        </section>
                        
                        <section class="col-xs-12">
                            <h1>ACABADOS DE CHEGAR</h1> 
                            <div class="row">
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2 " id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                            
                            <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                <div class="col-x-6 col-sm-4 col-md-3 col-lg-2" id="livro">
                                <div class="col-xs-12"><div class="capa"><a href="#"><img src="./imgs/livro.jpg"></a></div></div>
                                <div class="col-xs-12">
                                    <div class="title"><p><a href="">Os sete selos</a></p></div>
                                    <div class="autor"><p><a href="#">William Marion Brahnam</a></p></div>
                                </div>
                               
                           </div>
                                
                                
                            </div>
                        </section>
                        <section class="col-xs-12">
                            <div><h1>Ultimos Videos <a href="#">VER+</a></h1></div> 
                            <div class="row">
                            
                           <div class="col-x-6 col-sm-7 col-md-6 col-lg-auto" id="video">
                                <div class="col-xs-15"><div class="capa">
                                        <a href="#"> <div class="capavideo"></div></a>
                                        <iframe src="https://www.youtube.com/embed/8KLuwmOIW6g" frameborder="0" encrypted-media" allowfullscreen></iframe></div></div>
                                <div class="col-xs-15">
                                    <div class="title"><p><a href="">O regresso da coluna de fogo</a></p></div>
                                    <div class="autor"><p><a href="#">Pastor Lusingama</a></p></div>
                                </div>
                               
                           </div>
                            
                                 <div class="col-x-6 col-sm-7 col-md-6 col-lg-auto" id="video">
                                <div class="col-xs-15"><div class="capa">
                                        <a href="#"> <div class="capavideo"></div></a>
                                        <iframe src="https://www.youtube.com/embed/8KLuwmOIW6g" frameborder="0" encrypted-media" allowfullscreen></iframe></div></div>
                                <div class="col-xs-15">
                                    <div class="title"><p><a href="">O regresso da coluna de fogo</a></p></div>
                                    <div class="autor"><p><a href="#">Pastor Lusingama</a></p></div>
                                </div>
                               
                           </div>
                                
                                 <div class="col-x-6 col-sm-7 col-md-6 col-lg-auto" id="video">
                                <div class="col-xs-15"><div class="capa">
                                        <a href="#"> <div class="capavideo"></div></a>
                                        <iframe src="https://www.youtube.com/embed/8KLuwmOIW6g" frameborder="0" encrypted-media" allowfullscreen></iframe></div></div>
                                <div class="col-xs-15">
                                    <div class="title"><p><a href="">O regresso da coluna de fogo</a></p></div>
                                    <div class="autor"><p><a href="#">Pastor Lusingama</a></p></div>
                                </div>
                               
                           </div>
                           </div>
                                
                                
                           
                        </section>
                        
                    </div>
                    
                </main>
                
             </div>
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
      
    <script>
        
        $(function () {
        
            $('[data-toggle="popover"]').popover()
        
        })
      
    </script>
    </body>
</html>
