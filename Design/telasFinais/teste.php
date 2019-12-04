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
    <body class="background grey lighten-2">

        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#descicaoAtividade"><i class="material-icons">forum</i></a>

        <!-- Modal Structure -->
        <div id="descicaoAtividade" class="modal">
            <div class="modal-content">
                <h4>Descrição</h4>
                <p>Informações</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
        </div>

        <script>

            $(document).ready(function () {
                $('.modal').modal();
            });

        </script>

    </body>
</html>