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
            </div>
        </div>
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
        $(document).ready(function () {

            $('.tabs').tabs();
            $('#tabelaHistoricoFichas').pageMe({
                pagerSelector: '#paginaHistoricoFichas',
                activeColor: 'green darken-4',
                prevText: 'Anterior',
                nextText: 'Siguinte',
                showPrevNext: true,
                hidePageNumbers: false,
                perPage: 5
            });
        });
    </script>
</body>
</html>