<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonte Walser-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Estilo Costumizado-->

    <link rel="stylesheet" type="text/css" href="css/estilo.css">




    <title>ACCBR -Blog Sandro</title>
    <link rel="icon" 
      type="image/png" 
      href="imagem/logo_accbr.png" />
  </head>
<body>

	<header><!-- inicio Cabeçario-->
  
     <nav id="barranav" class="navbar navbar-expand-sm navbar-light " > 

        <!-- Logo -->
    <div class="container">
         <a href="#" class="navbar-brand">
             <img id='parceiros' src="imagem/logo_accbr.png" width="142px" style="width: 50px;">
         </a>

         <h4 id="tituloCabecario" class="collapse navbar-collapse mr-auto textopequeno" > Associação dos Cavaleiros e Charreteiros<br> de Botucatu e Região  </h4>
        

        <!-- Menu Hamburguer-->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
           <span class="navbar-toggler-icon"></span>
        </button>

   

      <div class="collapse navbar-collapse" id="nav-principal">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="sobre.html">Quem Somos</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="beneficios.html">Beneficios</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="cadastro.html">Cadastro</a>
            </li>
            <li class="nav-item">
             <a class="btn btn-outline-light ml-4 bg-warning" href="social.html">Social</a>
            </li>
        </ul>
       </div>
    </div>
    </nav>


  </heaer><!--Fim Cabeçario-->

<section class="caixa2">

<div class="" style="margin: 50px auto; width: 80%;" >
    <div id="parceiros"><!--inicio parceiros-->
      <div class="col-xs-8"><!--inicio col-12-->
     
       <form method="POST" action="http://localhost/processa_blog.php">

      	 	<div class="form-group">
	    		<label for="formGroupTitulo">Titulo</label>
    			<input type="text" name="titulo" class="form-control" id="formGroupTitulo" placeholder="Titulo do causo">
  			</div>

			<div class="form-group">
	    		<label for="formGroupNome">Autor</label>
    			<input type="text" name="autor" class="form-control" id="formGroupNome" placeholder="Nome">
  			</div>

  		<div class="row">
  			<div class="form-group col-md-5">
  				<label for="example-date-input" class="col-2 col-form-label">Date</label>
  				<input class="form-control" name="data" type="date" value="2011-08-19" id="example-date-input">
  			</div>

  			<div class="form-group col-md-5">
    			<label for="exampleFormControlFile1">Fotos</label>
    			<input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
  			</div>
  		</div>

  			<div class="form-group">
	    		<label for="formGroupTexto">Causo ou Acontecido</label>
    			<input type="text" name="causo" class="form-control" id="formGroupTitulo" placeholder="" style="height: 600px">

  			</div>
  				<button type="submit" class="btn btn-primary" value="cadastrar">Enviar</button>	

  		</form>
  	</div>
  </div>
</div>



       	
  
  
  
</section>
 <footer class="mt-4 mb-4">
        <nav id="" class="navbar navbar-expand-sm navbar-light " > 

        <!-- Logo -->
    <div class="container">
         <a href="#" class="navbar-brand">
             <img src="imagem/logo_accbr.png" width="142px" style="width: 50px;">
         </a>

         <h4>Conheça nossas Redes Sociais
                           <a href="https://www.facebook.com/associacao.ACCBR" class="btn btn-outline-dark bg-primary"  target="blank">
                               <i class="fab fa-facebook-square fa-lg"></i></a>
                               <a href="https://www.instagram.com/accbregiao" target="blank" class="btn btn-outline-dark bg-warning">
                               <i class="fab fa-instagram fa-lg"></i>
                           </a></h2> 

         
        

        <!-- Menu Hamburguer-->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
           <span class="navbar-toggler-icon"></span>
        </button>

   

      <div class="collapse navbar-collapse" id="nav-principal">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
             <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="sobre.html">Quem Somos</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="beneficios.html">Beneficios</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="cadastro.html">Cadastro</a>
            </li>
            <li class="nav-item">
             <a class="btn btn-outline-light ml-4 bg-warning" href="social.html">Social</a>
            </li>
        </ul>
     </div>
    </div>
    </nav>

         
     </footer>


</body>
</html>