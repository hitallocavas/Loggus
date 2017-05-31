<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loggus</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Loggus</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Loggus</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img src="img/loggus.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#index.html">Página Inicial</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#cidadao">Acesso do Cidadão</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#admin">Área Administrativa</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#prefeitura">Prefeitura</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<br>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            
<br><br><br><br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Sistema de Gestão de Transporte Escolar</h3>
                </div>
            </div>
            <br>
            <div class="row">
                
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Loggus é um sistema de monitoramento, rastreamento, controle e gerenciamento da operação de transporte escolar e universitário. Baseado em tecnologia de geoprocessamento, telemetria e comunicação remota, possibilita realizar uma gestão mais assertiva da frota, otimizando os recursos, reduzindo custos e aumentando a produtividade na operação de transporte escolar.</p>
                </div>
            </div>
        </div>
    </section>

       <section class = "success" id = "cidadao">

        <hr size="10" width="100%" align="left">
<br><br><br><br>
        <div class="container" >
            <div class="row" style = "boder: 5px solid #000;">
                <div class="col-lg-12 text-center">
                    <h3>Estados e Municípios</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Cidadão, acesse seu Estado e seu Município e obtenha informações acerca do transporte dos estudantes!</p><br>
                </div>
                <div class="row">
                <form action="#" method="post" >
                <div class ="col-lg-8 col-lg-offset-2">  
                &nbsp&nbsp&nbspEstado: <select name="estado" id="estado">
                    <option value="Pe">Pernambuco</option>
                    <option value="Pb">Paraíba</option>
                </select>
                
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
                Município: <select name="munic" id="munic">
                    <option value="Pe">Barreiros</option>
                    <option value="Pb">Sertânia</option>
                </select>
                  <br>
            </div> </div>

            <div class="row">
            <div class ="col-lg-8 col-lg-offset-2">  
            <br>&nbsp&nbsp&nbspPeríodo Inicial: <input type="date" name="dataIni">
            &nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             Período Final: <input type="date" name="dataF">
             <br><br>
             &nbsp&nbsp&nbsp<button type="submit" name="submit">Enviar</button>

            </div>
            </div>
                </form>
            </div>
        </div> </div>
    </section>
    <br><br><br><br>

 <section class = "success" id="admin">
<hr size="10" width="100%" align="left">
<br><br><br><br>
<div class="container">
    <div class="row" style = "boder: 5px solid #000;">
                <div class="col-lg-12 text-center">
                    <h3>Acesso Restrito - Administração</h3>
                </div>
            </div>
            <div class="row" style = "boder: 5px solid #000;">
            <div class="col-lg-8 col-lg-offset-2">
                    <p>Gestores de contratos de transporte escolar, acesse o sistema com seu login (usuário) e senha:</p><br>
                </div></div><br>
  <form action = "validacao.php" method="post">
    <div class="form-group row">
      <div class="col-sm-5 col-lg-offset-2">
      Login(Usuário):<br><input type="text" class="form-control" name = "usuario" id="txUsuario" placeholder="Usuario">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-5 col-lg-offset-2">
      Senha:<br><input type="password" class="form-control" name = "senha" id="txSenha" placeholder="Password">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-5 col-lg-offset-2">
        <input type="submit" class="btn btn-primary"/>
      </div>
    </div>
  </form>
</div>
</section>

<section class = "success" id="prefeitura">
<hr size="10" width="100%" align="left">
<br><br><br><br>
<div class="container">
 <div class="row" style = "boder: 5px solid #000;">
                <div class="col-lg-12 text-center">
                    <h3>Acesso Restrito - Prefeitura</h3>
                </div>
            </div>
            <div class="row" style = "boder: 5px solid #000;">
            <div class="col-lg-8 col-lg-offset-2">
                    <p>Gestores de contratos de transporte escolar, acesse o sistema com seu login (usuário) e senha:</p><br>
                </div></div><br>
  <form>
    <div class="form-group row">
      <div class="col-sm-5 col-lg-offset-2">
      Login(Usuário):<br><input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-5 col-lg-offset-2">
      Senha:<br><input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-5 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </form>
</div>
<br><br><br><br>
</section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Loggus  2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
