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



        <div class="row">
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Título"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Servidor"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Descrição"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Público Alvo"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Esperados"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Resultados Obtidos"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Data Início"></textarea>
            </div>
            <div class="col s12 l6">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Data Fim"></textarea>
            </div>
            <div class="col s12 l12">
                <textarea id="textarea2" class="materialize-textarea" data-length="120" placeholder="Tipo de Atividade"></textarea>
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.js"></script>
        <script>
            $(document).ready(function () {
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();                
                $('#textarea2').val();
                M.textareaResize($('#textarea2'));
                
            });
        </script>
    </body>
</html>
