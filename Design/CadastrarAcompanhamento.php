<!DOCTYPE html>
<html>
    <head>

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!-- Form with icon prefixes -->
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">add</i>Cadastro de Acompanhamento</div>
                <div class="collapsible-body">
                    <form action="" method="POST">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">

                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-field col s12 m6 l6">

                                            <i class="material-icons prefix">title</i>
                                            <input placeholder="Titulo" type="text" class="validate" id="titulo" name="tituloText">
                                            <label for="first_name">Título</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input placeholder="Servidor" type="text" class="validate" id="servidor" name="servidorText">
                                            <label for="servidor">Servidor</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col s12 m12 l6">
                            <div class="card-panel">
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-field col s12 m6 l6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input placeholder="Alunos Iniciais" type="number" class="validate" id="alunosIniciaisNumber" name="alunosIniciaisNumber">
                                            <label for="icon_prefix">Alunos Iniciais</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input placeholder="Alunos Finais" type="number" class="validate" id="alunosFinaisNumber" name="alunosFinaisNumber">
                                            <label for="icon_telephone">Alunos Finais</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col s12 m12 l6">
                            <div class="card-panel">
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-field col s12 m4 l4">
                                            <i class="material-icons prefix">date_range</i>
                                            <input placeholder="Periodo de Ingresso" type="text" class="datepicker" id="periodoIngessoText" name="periodoIngessoText">
                                            <label for="servidor">Periodo de Ingresso</label>
                                        </div>
                                        <div class="input-field col s12 m4 l4">
                                            <i class="material-icons prefix">date_range</i>
                                            <input placeholder="Data Inicio" type="text" class="datepicker" id="dataInicioText" name="dataInicioText">
                                            <label for="servidor">Data Inicio</label>
                                        </div>
                                        <div class="input-field col s12 m4 l4">
                                            <i class="material-icons prefix">date_range</i>
                                            <input placeholder="Data Fim" type="text" class="datepicker" id="dataFimText" name="dataFimText">
                                            <label for="servidor">Data Fim</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m12 l12">                                     
                            <div class="card-panel">
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
                        </div>


                        <div class="col s12 m4 l3 center">
                            <a class="btn black" name="btn-cadastrar">Cadastrar </a>
                        </div>
                    </form>
                </div>
            </li>

            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>Visualizar Acompanhamentos</div>
                <div class="collapsible-body"><span>

                        <table class="centered highlight">
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
                                    <td><a href="" class="btn"><i class="material-icons">filter_drama</i></a></td>
                                </tr>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    <td><a href="" class="btn"><i class="material-icons">filter_drama</i></a></td>
                                </tr>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    <td><a href="" class="btn"><i class="material-icons">filter_drama</i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </span></div>
            </li>
        </ul>

        <!--JavaScript at end of body for optimized loading-->
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
