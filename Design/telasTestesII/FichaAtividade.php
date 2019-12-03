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
    <body class="grey lighten-5">
        <nav>
            <div class="nav-wrapper green darken-4">
                <a href="#" class="brand-logo center">Logo</a>
                <ul id="nav-mobile" class="right">
                    <li><a href="">Sass</a></li>
                    <li><a href="">Components</a></li>
                    <li><a href="">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="card green darken-4 white-text"><div class="row"><h4 class="center">ACOMPANHAMENTO</h4></div></div>
            <div class="row">              
                <form class="col s12 l6" id="formularioFicha" name="formularioFicha">
                    <div class="row">
                        <div class="col s12 l12">                   
                            <select>
                                <option value="" disabled selected="">Trabalha</option>
                                <option value="1">Sistemas de Informação</option>
                                <option value="2">Quimica Licenciatura</option>
                                <option value="3">Técnico em Informática</option>
                            </select>

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
                        <a class="btn green darken-4" name="btn-cadastrar"><!--<i class="material-icons prefix">add</i>-->Cadastrar</a>
                    </div>
                </form>

                <form  class="col l6" id="formularioAtividade" name="formularioAtividade">
                    <div class="row">
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
                    <a class="btn green darken-4" name="btn-cadastrar"><!--<i class="material-icons prefix">add</i>-->Cadastrar</a>
                    </div>                       
                </form>
            </div>

            <div class="row">
                <div class="col s12 m12 l12">
                  <!--<input type="text" id="search" placeholder="Type to search..." />-->
                    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaAtividade">
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
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
                                    </a>
                                    
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">delete</i>                                                                            
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Axel</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>Estes</td>
                                <td>33</td>
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
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
                        <ul class="pagination pager" id="paginaAtividade"></ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12">
                  <!--<input type="text" id="search" placeholder="Type to search..." />-->
                    <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered " id="tabelaFicha">
                        <thead>
                            <tr class="center-align">
                                <th>Título</th>
                                <th>Servidor</th>
                                <th>Data Inicio</th>
                                <th>Data Fim</th>
                                <th>Descrição</th>
                                <th>Resultados Esperados</th>
                                <th>Resultados Obtidos</th>
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
                                <td>33</td>
                                <td>
                                    <a href="" class="btn green darken-4">
                                        <i class="material-icons">add</i>                                                                            
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
                        <ul class="pagination pager" id="paginaFicha"></ul>
                    </div>
                </div>
            </div>

        </div>

        <script>
            $(document).ready(function () {
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
                $('#tabelaAtividade').pageMe({
                    pagerSelector: '#paginaAtividade',
                    activeColor: 'green',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });
                $('#tabelaFicha').pageMe({
                    pagerSelector: '#paginaFicha',
                    activeColor: 'green',
                    prevText: 'Anterior',
                    nextText: 'Siguiente',
                    showPrevNext: true,
                    hidePageNumbers: false,
                    perPage: 5
                });

            });
        </script>
    </body>
</html>