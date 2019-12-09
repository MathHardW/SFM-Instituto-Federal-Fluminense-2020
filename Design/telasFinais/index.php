
<html>
    <head>
        <!--<script src="jquery/jquery-3.4.1.js"></script>-->
        <!--Import Google Icon Font-->
        <link href="css/material-icons.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <script type="text/javascript" src="jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/pagination.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="background: url('img/IFF_Itaperuna.jpg')">
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a><span href="" class="white-text" id="toggle-login">Entrar</span></a></li>
                            <li><a><span href="" class="white-text"  id="toggle-registrar">Registrar</span></a></li>
                        </ul>
                        <a href="acompanhamentos.php" class="brand-logo center"><img src="IMG/logo2.png" width="105px"></a>
                        <ul class="left">                            
                            <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">account_circle</i></a></li>
                        </ul>
                        <ul class="left">
                            <li><a href="acompanhamentos.php"><i class="material-icons prefix">home</i></a></li>                     
                        </ul> 
                    </div>
                </nav>
            </div>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>        
                </br>
                <li><a href="#usuario"><span class=" name">Nome: Lucas Soares</span></a></li>
                <li><a href="#email"><span class=" email">Email: lucassoaresgranja@yahoo.com.br</span></a></li>

                <li class="divider" tabindex="-1"></li>
                <li><a href="CadastrarAcompanhamento.php"><i class="material-icons center">people_outline</i>Acompanhamentos</a></li>
                <li><a href="abas.php"><i class="material-icons center">view_compact</i>Administração</a></li>
                <li><a href="#!"><i class="material-icons center">backspace</i>Sair</a></li>
            </ul>

            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                        <!--<div class="background">
                            <img src="images/office.jpg">
                        </div>-->
                        <a href="#user"><img class="circle" src="../IMG/logo.png"></a>
                        <a href="#usuario"><span class=" name">Nome: Lucas Soares</span></a>
                        <a href="#email"><span class=" email">Email: lucassoaresgranja@yahoo.com.br</span></a>
                    </div></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Inicio</a></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Acompanhamentos</a></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Administração</a></li>

                <li><div class="divider"></div></li>
                <li><a class="subheader">Informações</a></li>
                <li><a class="waves-effect" href="#!">Link</a></li>
            </ul>
          <!--  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">account_circle</i></a>-->
        </header> 



        <br/>

        <div class="container" style="background: url('img/IFF_Itaperuna.jpg')">
            <form action="" method="POST" class="login_form">
                <div class="row" id="login" style="display : none;">
                    <div class="col s12 m6 offset-m3">
                        <div class="card center-align mg">
                            <div class="card-content">
                                <!--<i class="large material-icons"><img class="responsive-img" src="img/logo.png"></i>-->
                                <div class="input-field">
                                    <input id="name" type="text" class="validate white-text" name="usuarioEntrar">
                                    <label for="usuarioEntrar">Usuário</label>
                                </div>
                                <div class="input-field" >
                                    <input id="password" type="password" class="validate white-text" name="senhaEntrar">
                                    <label for="senhaEntrar">Senha</label>
                                </div> <br/>

                                <button class="btn waves-effect waves-light grey darken-4 pulse" type="submit" name="btnLogar">Entrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form name="formCad" action="" method="POST" class="login_form">
                <div class="row" id="registrar" style="display : none;">
                    <div class="col s12 m6 offset-m3">
                        <div class="card center-align mg">
                            <div class="card-content">
                                <div class="input-field white-text">
                                    <input id="nome" type="text" class="validate white-text" name="nome">
                                    <label for="nome">Nome</label>
                                </div>
                                <div class="input-field">
                                    <input id="sobrenome" type="text" class="validate white-text" name="sobrenome">
                                    <label for="sobrenome">Sobrenome</label>
                                </div>
                                <div class="input-field">
                                    <input id="email" type="email" class="validate white-text" name="email">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input id="matricula" type="text" class="validate white-text" name="matricula">
                                    <label for="matricula">Matrícula</label>
                                </div>
                                <div class="input-field">
                                    <input id="nome" type="text" class="validate white-text" name="login">
                                    <label for="login">Usuário</label>
                                </div>
                                <div class="input-field" >
                                    <input id="password" type="password" class="validate white-text" name="senha">
                                    <label for="senha">Senha</label>
                                </div>
                                <button class="btn pulse waves-effect waves-light grey darken-4" type="submit" name="btnRegistrar">Registrar
                                    <!--<i class="material-icons right">send</i>-->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        


        <footer class="page-footer green darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sistema MAD</h5>
                        <p class=" center-block grey-text text-lighten-4">Sistema para acompanhamento de atividades e alunos do Instituto Federal Fluminense, Campus Itaperuna.
                            Desenvolvido para o Núcleo de Atendimento Estudantil - NAE. </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Redes Sociais</h5>
                        <ul>                           
                            <a class="grey-text text-lighten-3" href="#!"><img href="#!" src="IMG/social_facebook_fb_35.png"></a>
                            <a class="grey-text text-lighten-3" href="#!"><img href="#!" src="IMG/social_instagram_3.png"></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 6º Periodo Sistemas de Informação IFF Itaperuna
                </div>
            </div>
        </footer>


        <script>
            $('.dropdown-trigger').dropdown();
            
            
            $('#toggle-login').click(function () {
                $('#login').toggle("slow");
            });

            $('#toggle-registrar').click(function () {
                $('#registrar').toggle("slow");
            });
        </script>
    </body>


</html>