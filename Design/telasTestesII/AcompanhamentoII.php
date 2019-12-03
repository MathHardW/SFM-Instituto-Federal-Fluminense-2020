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
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav></br></br>



        <div class="row container">
            <form class="col s12 l4 ">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                        <label for="tituloText">Titulo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Servidor" type="text" class="validate" id="servidorText" name="tituloText">
                        <label for="tituloText">Servidor</label>
                    </div>                    
                </div>                
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Alunos Iniciais" type="number" class="validate" id="alunosIniciaisNumber" name="alunosIniciaisNumber">
                        <label for="alunosIniciaisNumber">Alunos Iniciais</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Alunos Finais" type="number" class="validate" id="alunosFinaisNumber" name="alunosFinaisNumber">
                        <label for="alunosFinaisNumber">Alunos Finais</label>
                    </div>                  
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Data de Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                        <label for="dataInicioText">Data Inicio</label>
                    </div>    
                    <div class="input-field col s6">
                        <input placeholder="Data de Inicio" type="text" class="datepicker" id="dataFinalText" name="dataFinalText">
                        <label for="dataFinalText">Data Final</label>
                    </div>                  
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select class="browser-default">
                            <option value="" disabled selected>Período</option>
                            <option value="1">Primeiro</option>
                            <option value="2">Segundo</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default">
                            <option value="" disabled selected>Nivel</option>
                            <option value="1">Superior</option>
                            <option value="2">Pós-Graduação</option>
                            <option value="3">Técnico</option>
                        </select>
                    </div>    
                </div>
                <div class="row">

                    <div class="input-field col s6">
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
                    <div class="input-field col s6">
                        <select class="browser-default">
                            <option value="" disabled selected>Cursos</option>
                            <option value="1">Sistemas de Informação</option>
                            <option value="2">Quimica Licenciatura</option>
                            <option value="3">Técnico em Informática</option>
                        </select>
                    </div>
                </div>   

                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                    </tbody>
                </table>
            </form>



            <form class="col s12 l8">
                <div class="card-panel grey darken-4 white-text z-depth-4" style="border-width:2px; border-style: solid;">
                    <div class="card-panel grey darken-4 white-text z-depth-4" style="border-width:2px; border-style: solid;">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                                <label for="tituloText">Titulo</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Servidor" type="text" class="validate" id="servidorText" name="tituloText">
                                <label for="tituloText">Servidor</label>
                            </div>                    
                            <div class="input-field col s6">
                                <input placeholder="Titulo" type="text" class="validate" id="tituloText" name="tituloText">
                                <label for="tituloText">Titulo</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Servidor" type="text" class="validate" id="servidorText" name="tituloText">
                                <label for="tituloText">Servidor</label>
                            </div>   
                        </div>   

                    </div>

                    <table class="highlight centered white-text responsive-table" style="border-width:2px; border-style: solid;">
                        <thead class="grey darken-5">
                            <tr>
                                <th>Código</th>
                                <th>Trabalha</th>
                                <th>Dependentes</th>
                                <th>Especial</th>
                                <th>Mora Sozinho</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                        </tbody>
                    </table>

                    <ul class="pagination center">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </form>

            <form class="col s12 l8">
                <div class="card-panel grey darken-4 white-text z-depth-4" style="border-width:2px; border-style: solid;">
                    <div class="card-panel grey darken-4 white-text z-depth-4" style="border-width:2px; border-style: solid;">
                        <div class="row">
                            <div class="input-field col s6">
                                <label>
                                    <input type="checkbox" />
                                    <span>Trabalha</span>
                                </label>
                            </div>
                            <div class="input-field col s6">
                                <label>
                                    <input type="checkbox" />
                                    <span>Dependentes</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label>
                                    <input type="checkbox" />
                                    <span>Atendimento Especial</span>
                                </label>
                            </div>
                            <div class="input-field col s6">
                                <label>
                                    <input type="checkbox" />
                                    <span>Mora Sozinho</span>
                                </label>
                            </div>
                        </div> 
                    </div>

                    <table class="highlight centered white-text responsive-table" style="border-width:2px; border-style: solid;">
                        <thead class="grey darken-5">
                            <tr>
                                <th>Código</th>
                                <th>Trabalha</th>
                                <th>Dependentes</th>
                                <th>Especial</th>
                                <th>Mora Sozinho</th>
                                <th>Sexo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                            </tr>
                        </tbody>
                    </table>

                    <ul class="pagination center">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </form>
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


        <script type="text/javascript" src="js/materialize.js"></script>
        <script>
            $(document).ready(function () {
                $('.datepicker').datepicker();
            });
        </script>
        <script>
            $(document).ready(function () {
                $('.collapsible').collapsible();
            });
        </script>
    </body>
</html>
