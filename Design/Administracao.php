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

    <body>
        <div class="navbar-fixed green darken-4">
            <li><a href="#!">Teste</a></li>
                <li><a href="#!">Teste II</a></li>
            <ul id="slide-out" class="sidenav green darken-4">
                
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="images/office.jpg">
                                </div>
                                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                                <a href="#name"><span class="white-text name">John Doe</span></a>
                                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                            </div></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                        <li><a href="#!">Second Link</a></li>
                        <li><div class="divider"></div></li>
                        <li><a class="subheader">Subheader</a></li>
                        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down"> 
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">First</a></li>
                    <li><a href="#!">Second</a></li>
                    <li><a href="#!">Third</a></li>
                    <li><a href="#!">Fourth</a></li>
                </ul>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger green darken-4 right"><i class="material-icons">menu</i></a>
        </div>
        <div class="background grey lighten-5">
            <div class="container background">
                <!-- CADASTRO E TABELA DE ATIVIDADE -->.
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
                <!-- CADASTRO E TABELA DE CIDADE -->.
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
                <!-- TABELA DE CIDADE -->.
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
                <!-- CADASTRO E TABELA DE NÍVEL -->.
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
                <!-- TABELA DE NIVEL -->.
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
                <!-- CADASTRO E TABELA DE MODALIDADE -->.
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
                <!-- TABELA DE MODALIDADE -->.
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
                <!-- CADASTRO E TABELA DE CURSO -->.
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
                <!-- TABELA DE CURSO -->.
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
