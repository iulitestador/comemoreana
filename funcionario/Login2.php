<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Inicio</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="styleMenu.css">
   		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   		<script src="scriptMenu.js"></script>
		<script src="js/modernizr.custom.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--NÃO RETIRAR ESSE SCRIPT-->
<script>
 
			$(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				//add active class on menu
				$('ul li').click(function(e) {
					
					$('li').removeClass('active');
					$(this).addClass('active');
				});
			//drop down menu	
					$(".drop-down").mouseenter(function() {
						$('.mega-menu').addClass('display-on');
					});
					$(".mega-menu").mouseleave(function() {
						$('.mega-menu').removeClass('display-on');
					});
					
					$(".drop-down2").mouseenter(function() {
						$('.mega-menu2').addClass('display-on');
					});
					$(".mega-menu2").mouseleave(function() {
						$('.mega-menu2').removeClass('display-on');
					});
			
			});

	 
</script>
	<!---->

</head>

<body>

	<div class="rel">
        
  
    <div class="boxMenu">
  
		<link href='http://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
		
			<div class="xs-menu-cont">
			<a id="menutoggle"><i class="fa fa-align-justify"></i> </a>
				<nav class="xs-menu displaynone">
					<ul>
						<li class="active">
							<a href="#">Início</a>
						</li>
						
					</ul>
				</nav>
			</div>
			<nav class="menu">
				<ul>
					<li class="active">
						<a href="#">Início</a>
					</li>
					
         <li style="float:right;" class="drop-down2">
           <a href="#">Log off</a>
           <div class="mega-menu2 fadeIn animated">


			 <div id="perfil"><img src="img/perfil.png" align="left" style="padding-right:10px" /> <font size="+2"><b>Fulano de Tal</b></font><br />

Sair | Editar Perfil </div>
<a href="index.php"><button type="sair" value="sair">sair</button></a>


					</span>
						</div>
					</div>
           
          </li>

				</ul>
			</nav>
		</div>
    
    
    </div>
    
    
    
		<div class="boxCont">
        <div class="cont">
<div id="esq"><div id="perfil"><img src="img/perfil.png" width="80" align="left" style="padding-right:10px" /> <font size="+2"><b>Fulano de Tal</b></font><br /><br />
Matrícula<br />
Cargo<br /><br /></div>
<div id="edicao">
<font size="+2">Admnistração </font><br />

<!--INICIO MENU-->  
<div id='cssmenu'>
<ul>
    <li class='has-sub'><a href='#'> Procurar</a>
      <ul>
         <li><a href='?pag=listarclientes'>Cliente</a></li>
         <li><a href='?pag=listarfunc'>Funcionário</a></li>
         <li><a href='?pag=listartemas'>Tema</a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'>Cadastrar</a>
      <ul>
         <li><a href='?pag=cadastrarcliente'>Cliente</a></li>
         <li><a href='?pag=cadastrarfunc'>Funcionário</a></li>
         <li><a href='?pag=cadastrartema'>Tema</a></li>
      </ul>
   </li>
   <li><a href='?pag=calendario'>Calendário</a></li>
</ul>
</div>
<!--FIM MENU-->

</div>
</div>
<div id="dir">

 <?php
   if(@$_REQUEST["pag"] == "listartemas"){
	include("selecionartema.php");
   }
    if(@$_REQUEST["pag"] == "listarclientes"){
	include("listarclientes.html");
   }
   if(@$_REQUEST["pag"] == "listarfunc"){
	include("listarfunc.html");
   }
   if(@$_REQUEST["pag"] == "cadastrarfunc"){
	include("cadastrarfunc.html");
   }
   if(@$_REQUEST["pag"] == "cadastrarcliente"){
	include("cadastrarcliente.php");
   }
    if(@$_REQUEST["pag"] == "cadastrartema"){
	include("cadastrartema.php");
   }
   if(@$_REQUEST["pag"] == "enviartema"){
	include("enviartema.php");
   }
   if(@$_REQUEST["pag"] == "calendario"){
	include("calendario.html");
   }
   if(@$_REQUEST["pag"] == "cadastrarpedido"){
	include("cadastrarpedido.html");
   }
     else if(@$_REQUEST["pag"] == ""){
	include("calendario.html");
   }
         ?>
  </div>        
         </div>
		</div>
		<div class="box2"> <center><H2><img src="../images/logo.png" alt="Corporatus" width="12%"></H2></center> </div>
	</div>
</body>
</html>

