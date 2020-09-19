<?php
/*
 * Copyright (C) 2016 Antonio Horrillo Horrillo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>

    <a name="inicio"></a>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#inicio">Inicio</a></li>
                        <li role="presentation"><a href="#">Sobre</a></li>
                        <li role="presentation"><a href="#">Contato</a></li>
                    </ul>
                </nav>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="./vista/img/phopi.png" height="50px" width="50px">
                </a>
                <h3 class="text-muted"> Interruptor  </h3>
                <h3 class="text-muted"> Orange Pi </h3>
            </div>
            <div class="row">
            <div class="jumbotron">
                <h1>Controlando Luz com Orange Pi</h1>
                <p class="lead">Powered by Xajax 0.5, Bootstrap 3.3.6 y JQuery 2.2.3.</p>
                <p class="lead">Running on LAMP Orange Pi PC Server (Ubuntu Mate 15.04.1, Apache 2.4.10, MySQL 5.6.28 y PHP 5.6.4).</p>
            </div>
            <div class="row marketing">
                <div class="col-lg-6">                   
                    <div class="panel panel-primary" id="panhum">
                        <div class="panel-heading">Sensor Humidade Dht11 </div>
                        <h3><div class="panel-body" id="humedad"></div></h3>
                    </div>
                </div>
                <div class="col-lg-6">                   
                    <div class="panel panel-primary" id="pantem">
                      <div class="panel-heading">Sensor Temperatura Dht11 </div>
                      <h3><div class="panel-body" id="temperatura"></div></h3>
                    </div>
                </div>            
                <div class="btn-group" role="group" aria-label="">
                    <a id="btnsensor" onclick="xajax_controlDht11()" class="btn btn-lg btn-primary">Especificações do Sensor Dht11</a>
                </div>
            </div>
            <div class="row marketing">
                <div class="col-lg-6">
                    <h3 style="padding-top: 20px">Interruptor 1</h3>
                    <p>Clicando ao Botão , pode se acender e apagar a luz  <strong>Um(1)</strong> conectado a porta
                        <strong>GPIO 22</strong> do dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnazulon" onclick="xajax_azulon()" class="btn btn-lg btn-primary">Acender
                        </a>
                        <a id="btnazuloff" onclick="xajax_azuloff()" class="btn btn-lg btn-primary">Apagar
                        </a>
                    </div>
                    <h3 style="padding-top: 20px">Interruptor 2</h3>
                    <p>Clicando ao Botão , pode se acender e apagar a luz  <strong>Dois(2)</strong> conectado a porta
                        <strong>GPIO 24</strong> do dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnrojoon" onclick="xajax_rojoon()" class="btn btn-lg btn-primary">Acender
                        </a>
                        <a id="btnrojooff" onclick="xajax_rojooff()" class="btn btn-lg btn-primary">Apagar
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 style="padding-top: 20px">Interruptor 3</h3>
                    <p>Clicando ao Botão , pode se acender e apagar a luz <strong>Três(3)</strong> conectado a porta
                        <strong>GPIO 23</strong> do dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnverdeon" onclick="xajax_verdeon()" class="btn btn-lg btn-primary">Acender
                        </a>
                        <a id="btnverdeoff" onclick="xajax_verdeoff()" class="btn btn-lg btn-primary">Apagar
                        </a>
                    </div>
                    <h3 style="padding-top: 20px">Interruptor 4</h3>
                    <p>Clicando ao Botão , pode se acender e apagar a luz <strong>Quatro(4)</strong> conectado a porta
                        <strong>GPIO 25</strong> del dispositivo Orange Pi.</p>
                    <div class="btn-group" role="group" aria-label="">
                        <a id="btnamarilloon" onclick="xajax_amarilloon()" class="btn btn-lg btn-primary">Acender
                        </a>
                        <a id="btnamarillooff" onclick="xajax_amarillooff()" class="btn btn-lg btn-primary">Apagar
                        </a>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <p>&copy; 2020 Código criado por  Antonio Horrillo Horrillo,
                                            Editado traduzido e adaptado por Zumbi do Ubuntu. </p>
            </footer>
        </div> <!-- /container -->
    </body>
</html>
