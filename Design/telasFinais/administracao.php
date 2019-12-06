<html>
    <head>
        <!--<script src="jquery/jquery-3.4.1.js"></script>-->
        <!--Import Google Icon Font-->
        <link href="css/material-icons.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
                        <div class="hide-on-small-only">
                            <a href="acompanhamentos.php" class="brand-logo center"><img src="img/logo.png" width="105px"></a>
                        </div>
                        <div class="hide-on-med-and-up">
                            <a href="acompanhamentos.php" class="brand-logo center"><img src="img/logo.png" width="80px"></a>
                        </div>
                        <ul class="right">
                            <li> <a class="">Usuario</a></li>
                            <li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">arrow_drop_down</i></a></li>

                        </ul>                                           
                        <ul class="left">
                            <li><a href=""><i class="material-icons prefix">reply</i></a></li>
                            <li><a href="acompanhamentos.php"><i class="material-icons prefix">home</i></a></li>
                        </ul>

                    </div>
                </nav>
            </div>
            <!-- Dropdown Structure -->


            <ul id='dropdown1' class='dropdown-content'> 
                </br>
              
                <li>
                    <a href="#usuario"><span class=" name">Nome: Lucas Soares</span></a>
                    <a href="#email"><span class=" email">Email: lucassoaresgranja@yahoo.com.br</span></a>
                    <a href="CadastrarAcompanhamento.php"><i class="material-icons center">people_outline</i>Acompanhamentos</a>
                    <a href="abas.php"><i class="material-icons center">view_compact</i>Administração</a>
                    <a href="#!"><i class="material-icons center">backspace</i>Sair</a>
                </li>
            </ul>

        </header>
        </br>
        </br>


        <div class="container grey lighten-2">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs grey lighten-2">                       
                        <li class="tab col s2"><a class="active" href="#tipoAtividade">Tipo Atividade</a></li>
                        <li class="tab col s2"><a class="active" href="#cidade">Cidade</a></li>
                        <li class="tab col s2"><a class="active" href="#nivel">Nivel</a></li>
                        <li class="tab col s2"><a class="active" href="#modalidade">Modalidade</a></li>
                        <li class="tab col s2"><a class="active" href="#curso">Curso</a></li> 
                        <li class="tab col s2"><a class="active" href="#matricula">Usuarios</a></li> 
                    </ul>
                </div>

                <!-- CADASTRO DE TIPO DE ATIVIDADE -->
                <div id="tipoAtividade" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nome" type="text" class="validate" id="nomeText" name="nomeText">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s10">
                                <textarea placeholder="Descrição" class="materialize-textarea" id="descricaoText" name="descricaoText"></textarea>
                                <label for="descricaoText">Descrição</label>
                            </div>
                            <div class="col s2 center">
                                </br>
                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                            </div>
                        </div>
                    </form>



                    <!-- TABELA DE TIPO DE ATIVIDADE -->
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
                </div>

                <!-- CADASTRO DE CIDADE -->
                <div id="cidade" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nome" type="text" class="validate" id="nomeText" name="nomeText">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s10">
                                <input placeholder="Estado" type="text" class="validate" id="estadoText" name="estadoText">
                                <label for="estadoText">Estado</label>
                            </div>
                            <div class="col s2 center">
                                </br>
                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                            </div>
                        </div>
                    </form>
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
                </div>

                <!-- CADASTRO DE NIVEL -->

                <div id="nivel" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
                        <div class="row">
                            <div class="input-field col s10">                                    
                                <input placeholder="Nivel" type="text" class="validate" id="nivelText" name="nivelText">
                                <label for="nivelText">Nivel</label>
                            </div>                                        
                            <div class="col s2 center">
                                </br>
                                <a class="btn green darken-4" name="btn-cadastrar">
                                    <i class="material-icons prefix">add</i>
                                </a>
                            </div>
                        </div>
                    </form>

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

                </div>

                <div id="modalidade" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
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
                </div>
                <div id="curso" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
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
                        <div class="col s2 l2 center">
                            </br>
                            <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                        </div>
                    </form>

                    <!-- TABELA DE CURSO -->
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



                <!-- CADASTRO DE TIPO DE ATIVIDADE -->
                <div id="matricula" class="col s12">
                    <form class="col s12">
                        </br>
                        </br>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nome" type="text" class="validate" id="nomeText" name="nomeText">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s10">
                                <input placeholder="Matricula" type="text" class="validate" id="matriculaText" name="matriculaText">
                                <label for="matricula">Matricula</label>
                            </div>
                            <div class="col s2 center">
                                </br>
                                <a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i></a>
                            </div>
                        </div>
                    </form>



                    <!-- TABELA DE USUARIO -->
                    <div class="row">
                        <div class="col s12 m12 l12">
                          <!--<input type="text" id="search" placeholder="Type to search..." />-->
                            <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaTipoAtividade">
                                <thead>
                                    <tr class="center-align">
                                        <th>Nome</th>
                                        <th>Matricula</th>
                                        <th>Ações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nome</td>
                                        <td>Matricula</td>                                                                        
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
                </div>
            </div>
        </div>


        <footer class="page-footer green darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sistema MAD</h5>
                        <p class=" center-block grey-text text-lighten-4">Sistema para manter acompanhamentos,atividades 
                            e suas respectivas fichas. Desenvolvido para o setor NAI do Instituto 
                            Federal Fluminense, Campos Itaperuna.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Uteis</h5>
                        <ul>                           
                            <a class="grey-text text-lighten-3" href="https://www.facebook.com/IFFluminenseItaperuna/"><img href="#!" src="icons/social_facebook_fb_35.png"></a>
                            <a class="grey-text text-lighten-3" href="https://instagram.com/iffitaperuna"><img href="#!" src="icons/social_instagram_3.png"></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 6º Periodo Sistemas de Informação IFF Itaperuna
                    <a class="grey-text text-lighten-4 right" href="#!">Links</a>
                </div>
            </div>
        </footer>

        <script>
            $(document).ready(function () {
                $('.dropdown-trigger').dropdown();
                $('.tabs').tabs();
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