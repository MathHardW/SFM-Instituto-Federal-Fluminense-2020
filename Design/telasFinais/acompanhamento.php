<html>
    <head>
        <script src="jquery/jquery-3.4.1.js"></script>
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
    <body class=" background grey lighten-2">

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

        <div class="container">            
            <div class="card">
                <h4 class="center-align"></h4>
                <div class="row">                                       
                    <h5 class="center">ACOMPANHAMENTO</h5>                   
                    <form action="" method="POST">
                        <div class="col s12 m6 l6">
                            <label class="green-text" for="tituloText">Titulo</label>
                            <input class="green-text" disabled="" value="Teste" placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                        </div>
                        <div class="col s12 m6 l6">
                            <label class="green-text" for="servidorText">Servidor</label>
                            <input class="green-text" disabled="" value="Teste" placeholder="Servidor" type="text" class="validate" id="servidorText" name="servidorText">
                        </div>              
                        <div class="col s12 m6 l3">
                            <label class="green-text" for="alunosIniciaisText">Alunos Iniciais</label>
                            <input class="green-text" disabled="" value="20" placeholder="Alunos Iniciais" type="number" class="validate" id="alunosIniciaisNumber" name="alunosIniciaisNumber">
                        </div>
                        <div class="col s12 m6 l3">
                            <label class="green-text" for="alunosFinaisText">Alunos Finais</label>
                            <input class="green-text" disabled="" value="20" placeholder="Alunos Finais" type="number" class="validate" id="alunosFinaisNumber" name="alunosFinaisNumber">
                        </div>
                        <div class="col s12 m4 l3">
                            <label class="green-text" for="dataInicioText">Data Inicio</label>
                            <input class="green-text" disabled="" value="02/12/2019" placeholder="Data Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                        </div>
                        <div class="col s12 m4 l3">
                            <label class="green-text" for="dataFimText">Data Fim</label>
                            <input class="green-text" disabled="" value="02/12/2019" placeholder="Data Fim" type="text" class="datepicker" id="dataFimText" name="dataFimText">
                        </div>           
                        <div class="col s12 m3 l3">
                            <label class="green-text" for="periodoIngressoText">Periodo de Ingresso</label>
                            <input class="green-text" disabled="" value="Teste" placeholder="Periodo de Ingresso" type="text" class="validate" id="periodoIngressoText" name="periodoIngressoText">
                        </div>
                        <div class="col s12 m3 l3">
                            <label class="green-text" for="nivelText">Nivel</label>
                            <input class="green-text" disabled="" value="Teste" placeholder="Nivel" type="text" class="validate" id="nivelText" name="nivelText">
                        </div>
                        <div class="col  s12 m3 l3">
                            <label class="green-text" for="modalidadeText">Modalidade</label>
                            <input class="green-text"disabled="" value="Teste" placeholder="Modalidade" type="text" class="validate" id="modalidadeText" name="modalidadeText">
                        </div>
                        <div class="col s12 m3 l3">
                            <label class="green-text" for="cursoText">Curso</label>
                            <input class="green-text" disabled="" value="Teste" placeholder="Curso" type="text" class="validate" id="cursoText" name="cursoText">
                        </div>                   
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="row">              
                    <form class="col s12 l6" id="formularioFicha" name="formularioFicha">
                        <div class="row">
                            <h5 class="center">FICHA</h5>
                            <div class="col s12 l12">
                                <input placeholder="Codigo" type="text" class="validate" id="codigoText" name="codigoText">                            
                            </div> 
                            <div class="col s12 l6">                   
                                <select>
                                    <option value="" disabled selected="">Trabalha</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                            <div class="col s12 l6">
                                <select>
                                    <option value="" disabled selected>Dependentes</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>

                            </div>

                            <div class="col s12 l6">
                                <select>
                                    <option value="" disabled selected>Atendimento Especial</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>

                            </div>
                            <div class="col s12 l6">
                                <select>
                                    <option value="" disabled selected>Mora Sozinho</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>

                            </div>
                            <div class="col s12 l6">
                                <select>
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>

                            </div>
                            <div class="col s12 l6">

                                <input placeholder="Data" type="text" class="datepicker" id="dataText" name="dataText">
                            </div>
                        </div>
                        <div class="center">
                            <a class="btn tooltipped" data-position="bottom" data-tooltip="Incluir Ficha" name="btn-cadastrar">Incluir</a>
                            <!--<a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i>Incluir</a>-->
                        </div>
                    </form>

                    <form  class="col l6" id="formularioAtividade" name="formularioAtividade">
                        <div class="row">
                            <h5 class="center">ATIVIDADE</h5>
                            <div class=" col s6">
                                <input placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                            </div>
                            <div class="col s6">
                                <input placeholder="Servidor" type="text" class="validate" id="servidorText" name="servidorText">
                            </div>
                            <div class="col s6">
                                <input placeholder="Data Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                            </div>
                            <div class="col s6">
                                <input placeholder="Data Fim" type="text" class="datepicker" id="dataFimText" name="dataFimText">
                            </div>
                            <div class="col s6">
                                <textarea placeholder="Descrição" class="materialize-textarea" id="descricaoText" name="descricaoText"></textarea>
                            </div>
                            <div class="col s6">
                                <textarea data-length="120" placeholder="Resultados Esperados" class="materialize-textarea" id="resultadosEsperadosText" name="resultadosEsperadosText"></textarea>
                            </div>
                            <div class="col s12">
                                <textarea data-length="120" placeholder="Resultados Obtidos" class="materialize-textarea" id="resultadosObtidosText" name="resultadosObtidosText"></textarea>
                            </div>
                        </div>
                        <div class="center">
                            <a class="btn tooltipped" data-position="bottom" data-tooltip="Incluir Atividade" name="btn-cadastrarAtividade">Incluir</a>
                            <!--<a class="btn green darken-4" name="btn-cadastrar"><i class="material-icons prefix">add</i>Incluir</a>-->
                        </div>                       
                    </form>
                </div>
            </div>

            <div class="card">
                </br>

                <div class="row">
                    <h5 class="center">FICHA</h5>
                    <div class="col s12 m12 l12">
                      <!--<input type="text" id="search" placeholder="Type to search..." />-->
                        <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight" id="tabelaAtividade">
                            <thead>
                                <tr class="center-align">
                                    <th>Trabalha</th>
                                    <th>Dependentes</th>
                                    <th>Atendimento Especial</th>
                                    <th>Mora Sozinho</th>
                                    <th>Sexo</th>
                                    <th>Data</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Axel</td>
                                    <td>Estes</td>
                                    <td>33</td>
                                    <td>Estes</td>
                                    <td>33</td>
                                    <td>33</td>
                                    <td>
                                        <!--
                                        <a href="" class="btn green darken-4">
                                            <i class="material-icons">edit</i>                                                                            
                                        </a>
                                        -->
                                        <a class="btn tooltipped" data-position="bottom" 
                                           data-tooltip="Selecione para Editar Ficha" name="btn-editarFicha">
                                            <i class="material-icons">edit</i>
                                        </a>

                                        <a class="btn tooltipped" data-position="bottom" 
                                           data-tooltip="Selecione para Apagar Ficha" name="btn-deletarFicha">
                                            <i class="material-icons">delete</i>                                                                            
                                        </a>
                                    </td>
                                </tr>                                 
                            </tbody>
                        </table>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="paginaAtividade"></ul>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="card">


            <div class="row">
                </br>
                <h5 class="center">ATIVIDADE</h5>
                <div class="col s12 m12 l12"
                     <!-- PROPRIEDADE PARA CHAMAR AS INFORMAÇÕES DO BANCO DE DADOS 
                     E APRESENTAR EM UM BOTAO NA TABELA, ESSE BOTAO IRAR USAR UM MODAL 
                     PARA APRESENTAR AS INFORMAÇÕES NA TELA-->

                     <div id="descicaoAtividade" class="modal">
                        <div class="modal-content">
                            <h4>Descrição</h4>
                            <p>Informações</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                        </div>
                    </div>

                    <div id="descicaoAtividade" class="modal">
                        <div class="modal-content">
                            <h4>Descrição</h4>
                            <p>Informações</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                        </div>
                    </div>

                    <div id="resultadosEsperadosAtividade" class="modal">
                        <div class="modal-content">
                            <h4>Resultados Esperados</h4>
                            <p>Informações</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                        </div>
                    </div>

                    <div id="resultadosObtidosAtividade" class="modal">
                        <div class="modal-content">
                            <h4>Resultados Obtidos</h4>
                            <p>Informações</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                        </div>
                    </div>

                        <!--<input type="text" id="search" placeholder="Type to search..." />-->
                    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaFicha">
                        <thead>
                            <tr class="center-align">
                                <th>Título</th>
                                <th>Servidor</th>
                                <th>Data Inicio</th>
                                <th>Data Fim</th>
                                <th>Descrição</th>
                                <th>Res.. Esperados</th>
                                <th>Res.. Obtidos</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>
                                    <a class=" waves-light btn tooltipped modal-trigger" 
                                       data-position="bottom" href="#descicaoAtividade" 
                                       data-tooltip="Visualizar Descrição" name="btn-visualizarDescicaoAtividade">
                                        <i class="material-icons">forum</i>
                                    </a>
                                </td>
                                <td>

                                    <a class=" waves-light btn tooltipped modal-trigger" 
                                       data-position="bottom" href="#resultadosEsperadosAtividade" 
                                       data-tooltip="Visualizar Resultados Esperados" name="btn-visualizarResultadosEsperadosAtividade">
                                        <i class="material-icons">forum</i>
                                    </a>

                                </td>
                                <td>

                                    <a class=" waves-light btn tooltipped modal-trigger" 
                                       data-position="bottom" href="#resultadosObtidosAtividade" 
                                       data-tooltip="Visualizar Resultados Obtidos" name="btn-visualizarResultadosObtidosAtividade">
                                        <i class="material-icons">forum</i>
                                    </a>

                                </td>
                                <td>
                                    <a class="btn tooltipped" data-position="bottom" 
                                       data-tooltip="Selecione para Editar Atividade" name="btn-editarAtividade">
                                        <i class="material-icons">edit</i>
                                    </a>

                                    <a class="btn tooltipped" data-position="bottom" 
                                       data-tooltip="Selecione para Apagar Atividade" name="btn-deletarAtividade">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>                                 
                        </tbody>
                    </table>
                    <div class="col-md-12 center text-center">
                        <span class="left" id="total_reg"></span>
                        <ul class="pagination pager" id="paginaFicha"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('.modal').modal();
            $('.tooltipped').tooltip();
            $('#tabelaAtividade').pageMe({
                pagerSelector: '#paginaAtividade',
                activeColor: 'green darken-4',
                prevText: 'Anterior',
                nextText: 'Siguiente',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 5
            });
            $('#tabelaFicha').pageMe({
                pagerSelector: '#paginaFicha',
                activeColor: 'green darken-4',
                prevText: 'Anterior',
                nextText: 'Siguiente',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 5
            });
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