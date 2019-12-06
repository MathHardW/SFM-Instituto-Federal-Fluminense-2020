<!DOCTYPE html>
<html>
    <head>
        <script src="jquery/jquery-3.4.1.js"></script>
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
    <body class="background grey lighten-2">
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <a href="acompanhamentos.php" class="brand-logo center"><img src="img/logo.png" width="105px"></a>
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
        </br>
        </br>
        <!-- Form with icon prefixes -->
        <div class="container">
            <form action="" method="POST">
                <div class="col s12 m12 l12">                
                    <div class="row">
                        <div class="input-field">
                            <div class="input-field col s12 m6 l6">                                
                                <input placeholder="Titulo" type="text" class="validate" id="titulo" name="tituloText">
                                <label for="first_name">Título</label>
                            </div>
                            <div class="input-field col s12 m6 l6">                                
                                <input placeholder="Servidor" type="text" class="validate" id="servidor" name="servidorText">
                                <label for="servidor">Servidor</label>
                            </div>
                        </div>
                    </div>                           
                </div>
                <div class="col s12 m12 l6">
                    <div class="row">
                        <div class="input-field">
                            <div class="input-field col s12 m6 l3">                                
                                <input placeholder="Alunos Iniciais" type="number" class="validate" id="alunosIniciaisNumber" name="alunosIniciaisNumber">
                                <label for="icon_prefix">Alunos Iniciais</label>
                            </div>
                            <div class="input-field col s12 m6 l3">

                                <input placeholder="Alunos Finais" type="number" class="validate" id="alunosFinaisNumber" name="alunosFinaisNumber">
                                <label for="icon_telephone">Alunos Finais</label>
                            </div>
                            <div class="input-field col s12 m4 l3">
                                <input placeholder="Data Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                                <label for="servidor">Data Inicio</label>
                            </div>
                            <div class="input-field col s12 m4 l3">

                                <input placeholder="Data Fim" type="text" class="datepicker" id="dataFimText" name="dataFimText">
                                <label for="servidor">Data Fim</label>
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="col s12 m12 l12"> 
                    <div class="row">
                        <div class="input-field">                                               
                            <div class="input-field col s12 m3 l3">                                                    
                                <select class="browser-default grey lighten-2">
                                    <option value="" disabled selected>Periodo de Ingresso</option>
                                    <option value="1">1º Semestre</option>
                                    <option value="2">2º Semestre</option>                                                        
                                </select>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                <select class="browser-default grey lighten-2">
                                    <option value="" disabled selected>Nivel</option>
                                    <option value="1">Superior</option>
                                    <option value="2">Pós-Graduação</option>
                                    <option value="3">Técnico</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                <select class="browser-default grey lighten-2">
                                    <option value="" disabled selected>Modalidade</option>
                                    <option value="1">Bacharel</option>
                                    <option value="2">Licenciatura</option>
                                    <option value="3">Tecnologo</option>
                                    <option value="4">Concomitante</option>
                                    <option value="5">Subsequente</option>
                                    <option value="6">Integrado</option>
                                    <option value="7">Lado Sensu</option>
                                    <option value="8">Lado Stricto Sensu</option>
                                </select>

                            </div>
                            <div class="input-field col s12 m3 l3">
                                <select class="browser-default grey lighten-2">
                                    <option value="" disabled selected>Cursos</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l3 center">
                    <a class="btn green darken-4" name="btn-cadastrar">Cadastrar </a>
                </div>
            </form>
            </br>
            <div class="row">
                <div class="col s12 m12 l12">
                  <!--<input type="text" id="search" placeholder="Type to search..." />-->
                    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight " id="tabelaAcompanhamento">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Curso</th>
                                <th>Modalidade</th>
                                <th>Nivel</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>
                                    <a class="btn tooltipped" data-position="bottom" 
                                       data-tooltip="Selecione para Editar Acompanhamento" name="btn-editarAcompanhamento">
                                        <i class="material-icons">edit</i>
                                    </a>

                                    <a class="btn tooltipped" data-position="bottom" 
                                       data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                                        <i class="material-icons">delete</i>
                                    </a>

                                    <a class="btn tooltipped" data-position="bottom" 
                                       data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                                        <i class="material-icons">send</i>
                                    </a>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                    <div class="col-md-12 center text-center">
                        <span class="left" id="total_reg"></span>
                        <ul class="pagination pager" id="paginaAcompanhamento"></ul>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.tooltipped').tooltip();
                $('#tabelaAcompanhamento').pageMe({
                    pagerSelector: '#paginaAcompanhamento',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();
                $('.dropdown-trigger').dropdown();

            });
        </script>
    </body>
</html>
