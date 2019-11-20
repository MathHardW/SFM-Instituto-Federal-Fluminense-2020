<html>
    <head>

        <script src="jquery/jquery-3.4.1.js"></script>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-5">
        <nav>
            <div class="nav-wrapper grey darken-4">
                <a href="#" class="brand-logo center">Logo</a>
                <ul id="nav-mobile" class="right">
                    <li><a href="">Sass</a></li>
                    <li><a href="">Components</a></li>
                    <li><a href="">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">                
                <!-- Formulario de Atividade-->
                <form action="" method="POST">

                    <div class="col s12 l6">                    
                        <div class="row">
                            <div class="input-field col s6">
                                <!--
                                <i class="material-icons prefix">title</i>-->
                                <input placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                                <label for="tituloText">Título</label>
                            </div>
                            <div class="input-field col s6">
                                <!--
                                <i class="material-icons prefix">account_circle</i>-->
                                <input placeholder="Servidor" type="text" class="validate" id="servidorText" name="servidorText">
                                <label for="servidorText">Servidor</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <!--
                                <i class="material-icons prefix">date_range</i>-->
                                <input placeholder="Data Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                                <label for="dataInicioText">Data Inicio</label>
                            </div>
                            <div class="input-field col s6">
                                <!--
                                <i class="material-icons prefix">date_range</i>-->
                                <input placeholder="Data Fim" type="text" class="datepicker" id="dataFimText" name="dataFimText">
                                <label for="dataFimText">Data Fim</label>
                            </div>                           
                        </div>
                        <div class="row">                        
                            <div class="input-field col s12">
                                <!--
                                <i class="material-icons prefix">message</i>-->
                                <textarea placeholder="Descrição" class="materialize-textarea" id="descricaoText" name="descricaoText"></textarea>
                                <label for="descricaoText">Descrição</label>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <!--
                                <i class="material-icons prefix">message</i>-->
                                <textarea placeholder="Resultados Esperados" class="materialize-textarea" id="resultadosEsperadosText" name="resultadosEsperadosText"></textarea>
                                <label for="resultadosEsperadosText">Resultados Esperados</label>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="input-field col s12">
                                <!--
                                <i class="material-icons prefix">message</i>-->
                                <textarea placeholder="Resultados Obtidos" class="materialize-textarea" id="resultadosObtidosText" name="resultadosObtidosText"></textarea>
                                <label for="resultadosObtidosText">Resultados Obtidos</label>
                            </div>
                        </div>
                        <div class="center">
                            <a class="btn green darken-4" name="btn-cadastrar"><!--<i class="material-icons prefix">add</i>-->Cadastrar</a>
                        </div>
                    </div>
                </form>
                <!-- Formulario de Ficha-->
                <form action="" method="POST">
                    <div class="col s12 l6">                                     
                        <div class="row">                   
                            <div class="input-field col s6">
                                <select class="browser-default">
                                    <option value="" disabled selected="">Trabalha</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                            <div class="input-field col s6">
                                <select class="browser-default">
                                    <option value="" disabled selected>Dependentes</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="browser-default">
                                    <option value="" disabled selected>Atendimento Especial</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                            <div class="input-field col s6">
                                <select class="browser-default">
                                    <option value="" disabled selected>Mora Sozinho</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="browser-default">
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="1">Sistemas de Informação</option>
                                    <option value="2">Quimica Licenciatura</option>
                                    <option value="3">Técnico em Informática</option>
                                </select>
                            </div>
                            <div class="input-field col s6">
                                <!--
                                <i class="material-icons prefix">date_range</i>-->
                                <input placeholder="Data" type="text" class="datepicker" id="dataText" name="dataText">
                                <label for="dataText">Data</label>
                            </div>
                        </div>
                        <div class="center">
                            <a class="btn green darken-4" name="btn-cadastrar"><!--<i class="material-icons prefix">add</i>-->Cadastrar</a>
                        </div> 
                    </div>               
                </form>       
            </div>
        </div>
        <footer class="page-footer grey darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();
                $('select').formSelect();
            });
        </script>

    </body>
</html>
