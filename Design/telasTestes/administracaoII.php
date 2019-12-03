<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="jquery/jquery-3.4.1.js"></script>
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
    <body class="background grey lighten-5">
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

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content grey-text text-darken-4">
            <li><a href="#!" class="grey-text text-darken-4">Dados</a></li>
            <li><a href="Administracao.php" class="grey-text text-darken-4">Área Administrativa</a></li>
            <li class="divider"></li>
            <li><a href="?sair=sim" class="grey-text text-darken-4"></a></li>
        </ul>
        </br>        
        <div class="background grey lighten-5">
            <div class="container background">            
                <!-- CADASTRO DE TIPO DE ATIVIDADE -->
                <ul class="collapsible grey lighten-5">
                    <li>
                        <div class="collapsible-header grey lighten-4"><i class="material-icons">add</i>Cadastro de Tipo de Atividade</div>
                        <div class="collapsible-body"> 
                            <div class="container">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Nome" type="text" class="validate" id="nomeText" name="nomeText">
                                                <label for="nome">Nome</label>
                                            </div>
                                            <div class="input-field col s10">
                                                <textarea placeholder="Descrição" class="materialize-textarea" id="descricaoText" name="descricaoText"></textarea>
                                                <label for="descricao">Descrição</label>
                                            </div>
                                            <div class="col s2 center">
                                                </br>
                                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li> 
                </ul>
                <!-- TABELA DE TIPO DE ATIVIDADE -->.
                <div class="row">
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaTipoAtividade">
                            <thead>
                                <tr class="center-align">
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome</td>
                                    <td>Descrição</td>                                                                        
                                    <td>
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>

                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaTipoAtividade"></ul>
                        </div>
                    </div>
                </div>
                </br>
                <!-- CADASTRO DE CIDADE -->
                <ul class="collapsible grey lighten-5">
                    <li>
                        <div class="collapsible-header grey lighten-4"><i class="material-icons">add</i>Cadastro de Cidade</div>
                        <div class="collapsible-body"> 
                            <div class="container">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Nome" type="text" class="validate" id="nomeText" name="nomeText">
                                                <label for="nome">Nome</label>
                                            </div>
                                            <div class="input-field col s10">
                                                <textarea placeholder="Descrição" class="materialize-textarea" id="descricaoText" name="descricaoText"></textarea>
                                                <label for="descricao">Estado</label>
                                            </div>
                                            <div class="col s2 center">
                                                </br>
                                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li> 
                </ul>
                <!-- TABELA DE CIDADE -->
                <div class="row">
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaCidade">
                            <thead>
                                <tr class="center-align">
                                    <th>Nome</th>
                                    <th>Estado</th>                                    
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome</td>
                                    <td>Estado</td>                                    
                                    <td>
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>

                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaCidade"></ul>
                        </div>
                    </div>
                </div>
                </br>
                <!-- CADASTRO DE NÍVEL -->
                <ul class="collapsible grey lighten-5">
                    <li>
                        <div class="collapsible-header grey lighten-4"><i class="material-icons">add</i>Cadastro Nivel</div>
                        <div class="collapsible-body"> 
                            <div class="container">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s10">                                    
                                                <input placeholder="Nivel" type="text" class="validate" id="nivelText" name="nivelText">
                                                <label for="nivelText">Nivel</label>
                                            </div>                                        
                                            <div class="col s2 center">
                                                </br>
                                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li> 
                </ul>
                <!-- TABELA DE NIVEL -->
                <div class="row">
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaNivel">
                            <thead>
                                <tr class="center-align">
                                    <th>Nome</th>                                    
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome</td>                                    
                                    <td>
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>

                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaNivel"></ul>
                        </div>
                    </div>
                </div>
                </br>
                <!-- CADASTRO DE MODALIDADE -->
                <ul class="collapsible grey lighten-5">
                    <li>
                        <div class="collapsible-header grey lighten-4"><i class="material-icons">add</i>Cadastro Modalidade</div>
                        <div class="collapsible-body"> 
                            <div class="container">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12 l5">                                    
                                                <input placeholder="Modalidade" type="text" class="validate" id="modalidadeText" name="modalidadeText">
                                                <label for="modalidadeText">Modalidade</label>
                                            </div>                                   
                                            <div class="input-field col s10 l5">
                                                <select>
                                                    <option value="" disabled selected>Nivel</option>
                                                    <option value="1">Nivel 1</option>
                                                    <option value="2">Nivel 2</option>
                                                    <option value="3">Nivel 3</option>
                                                </select>
                                                <label>Nivel</label>
                                            </div>
                                            <div class="col s2 center">
                                                </br>
                                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li> 
                </ul>
                <!-- TABELA DE MODALIDADE -->
                <div class="row">
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaModalidade">
                            <thead>
                                <tr class="center-align">
                                    <th>Modalidade</th>
                                    <th>Nivel</th>                                    
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Modalidade</td>
                                    <td>Nivel</td>                                    
                                    <td>
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>

                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaModalidade"></ul>
                        </div>
                    </div>
                </div>
                </br>
                <!-- CADASTRO DE CURSO -->
                <ul class="collapsible grey lighten-5">
                    <li>
                        <div class="collapsible-header grey lighten-4"><i class="material-icons">add</i>Cadastro Curso</div>
                        <div class="collapsible-body">                        
                            <div class="row">
                                <form class="col s12">                                   
                                    <div class="input-field col s12 l5">        
                                        <input placeholder="Curso" type="text" class="validate" id="cursoText" name="cursoText">
                                        <label for="cursoText">Curso</label>
                                    </div>
                                    <div class="input-field col s10 l5">
                                        <select>
                                            <option value="" disabled selected>Modalidade</option>
                                            <option value="1">Nivel 1</option>
                                            <option value="2">Nivel 2</option>
                                            <option value="3">Nivel 3</option>
                                        </select>
                                        <label>Modalidade</label>
                                    </div>
                                    <div class="col s2 center">
                                        </br>
                                        <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                                    </div>
                                </form>
                            </div>                       
                        </div>
                    </li> 
                </ul>
                <!-- TABELA DE CURSO -->
                <div class="row">
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaCurso">
                            <thead>
                                <tr class="center-align">
                                    <th>Curso</th>
                                    <th>Modalidade</th>                                    
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Curso</td>
                                    <td>Modalidade</td>                                    
                                    <td>
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>

                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaCurso"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </br>
        <!--JavaScript at end of body for optimized loading        
        <script type="text/javascript" src="js/materialize.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>-->
        <script>
            $(document).ready(function () {
                $('#tabelaTipoAtividade').pageMe({
                    pagerSelector: '#paginaTipoAtividade',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('#tabelaCidade').pageMe({
                    pagerSelector: '#paginaCidade',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('#tabelaNivel').pageMe({
                    pagerSelector: '#paginaNivel',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('#tabelaModalidade').pageMe({
                    pagerSelector: '#paginaModalidade',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('#tabelaCurso').pageMe({
                    pagerSelector: '#paginaCurso',
                    activeColor: 'green darken-4',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();
                $('select').formSelect();
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();
                $('select').formSelect();
                $('.sidenav').sidenav();
                $(".dropdown-trigger").dropdown({
                    inDuration: 30
                });

            });
        </script>
    </body>
</html>
