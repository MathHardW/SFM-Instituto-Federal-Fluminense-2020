<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <nav>
        <div class="navbar-fixed green darken-4">
            <a href="#" class="brand-logo left">Logo</a>
            <ul id="nav-mobile" class="right">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>
    
    </br>

    <body class="background grey lighten-5">        
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
                <table class="grey lighten-5 highlight">
                    <thead  class="">
                        <tr>                                                    
                            <th class="left">Titulo</th>
                            <th class="center">Descricão</th>
                            <th class="right">Ações</th>
                        </tr>
                    </thead>
                    <tbody  class="">
                        <tr>
                            <td class="left">Futebol</td>
                            <td class="center">Descrição</td>  
                            <td class="right">
                                <a href="" class="btn green darken-3"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-3"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Futebol</td>
                            <td class="center">Descrição</td>  
                            <td class="right">
                                <a href="" class="btn green darken-3"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-3"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Futebol</td>
                            <td class="center">Descrição</td>  
                            <td class="right">
                                <a href="" class="btn green darken-3"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-3"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                <table class="highlight">
                    <thead>
                        <tr>                                                    
                            <th class="left">Cidade</th>
                            <th class="center">Estado</th>  
                            <th class="right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="left">Itaocara</td>
                            <td class="center">RJ</td>
                            <td class="right">
                                <a href="" class="btn green darken-4"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-4"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>                                               
                    </tbody>
                </table>
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
                <table class="grey lighten-5 highlight">
                    <thead>
                        <tr>                                                    
                            <th>Nivel</th>                                                    
                            <th class="right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bacharel</td>                                                    
                            <td class="right">
                                <a href="" class="btn green darken-4"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-4"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>                                               
                    </tbody>
                </table>
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
                <table class=" grey lighten-5 highlight" >
                    <thead>
                        <tr>                                                    
                            <th>Modalidade</th>
                            <th class="center">Nivel</th>
                            <th class="right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bacharel</td>
                            <td class="center">Superior</td>
                            <td class="right">
                                <a href="" class="btn green darken-4"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-4"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>                                               
                    </tbody>
                </table>
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
                <table class="grey lighten-5 highlight" >
                    <thead>
                        <tr>                                                    
                            <th>Curso</th>
                            <th class="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspModalidade</th>
                            <th class="right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bacharel</td>
                            <td class="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSuperior</td>
                            <td class="right">
                                <a href="" class="btn green darken-4"><i class="material-icons">edit</i></a>
                                <a href="" class="btn green darken-4"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>                                               
                    </tbody>
                </table>
            </div>
        </div>
        </br>
        <!--JavaScript at end of body for optimized loading-->        
        <script type="text/javascript" src="js/materialize.js"></script>
        <script>
            $(document).ready(function () {
                $('.datepicker').datepicker();
                $('.collapsible').collapsible();
                $('select').formSelect();
                $('.sidenav').sidenav();

            });
        </script>
    </body>
</html>
