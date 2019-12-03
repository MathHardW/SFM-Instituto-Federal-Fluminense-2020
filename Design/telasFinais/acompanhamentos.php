<!DOCTYPE html>
<html>
    <head>
        <script src="jquery/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="js/teste.js"></script>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/pagination.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper green darken-4">
                <a href="#!" class="brand-logo center"><img src="img/logo.png" width="105px"></a>
                <ul class="right">
                    <li><a href="home.php"><i class="material-icons prefix">home</i></a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">account_circle</i></a></li>
                </ul>
            </div>
        </nav>
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
                                <select class="browser-default">
                                    <option value="" disabled selected>Periodo de Ingresso</option>
                                    <option value="1">1º Semestre</option>
                                    <option value="2">2º Semestre</option>                                                        
                                </select>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                <select class="browser-default">
                                    <option value="" disabled selected>Nivel</option>
                                    <option value="1">Superior</option>
                                    <option value="2">Pós-Graduação</option>
                                    <option value="3">Técnico</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                <select class="browser-default">
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
                                <select class="browser-default">
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
                    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaAcompanhamento">
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
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">edit</i>                                                                            
                                    </a>

                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">send</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">edit</i>                                                                            
                                    </a>

                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">send</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">edit</i>                                                                            
                                    </a>

                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
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


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.js"></script>


        <script>
            $(document).ready(function () {
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
            });
        </script>
    </body>
</html>
