<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>Template</title>
        <!-- css for font awasome -->
        <link rel="stylesheet" href="./css/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="./css/style.css">
        
        <!-- include external google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Charm|Tangerine|Volkhov|Lora" rel="stylesheet">
    </head>
    </head>
    <body>
        <header>
            <div class="tm-header-container">
                <div class="tm-header-logo">
                    <p class="tm-header-logo-name"><span>Play</span><span class="tm-header-logo-description">Aplikacja sprzedazowa</span></p>
                </div>
            </div>
        </header>
        
        <nav id="tm-navbar-main">
            <div class="tm-clear">
                <div  class="tm-navbar">
                    <ul>
                        <li><a href="#">Główna</a></li>
                        <li><a href="#">Sprzedaż</a></li>
                        <li>
                            <a href="#"><span>Raporty TL</span><i class='fa fa-caret-down'></i></a>
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-dot-circle"></i><span>Wyciągnij dane</span><i class='fa fa-caret-down'></i></a>
                                    <ul>
                                        <li><a href="#"><i class="far fa-dot-circle"></i><span>Sprzedaż na agenta</span></a></li>
                                        <li><a href="#"><i class="far fa-dot-circle"></i><span>Sprzedaż na team</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="far fa-dot-circle"></i><span>Raport Live</span></a></li>
                                <li>
                                    <a href="#"><i class="far fa-dot-circle"></i><span>Raporty</span><i class='fa fa-caret-down'></i></a>
                                    <ul>
                                        <li><a href="#"><i class="far fa-dot-circle"></i><span>Sprzedaż na agenta</span></a></li>
                                        <li><a href="#"><i class="far fa-dot-circle"></i><span>Sprzedaż na team</span></a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>            
                </div>
                <div class="tm-navbar-users">
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-user"></i><span>Jan Kot</span><i class='fa fa-caret-down'></i></a>
                            <ul>
                                <li><a href="#"><i class="far fa-dot-circle"></i><span>Twoja sprzedaż</span></a></li>
                                <li><a href="#"><i class="far fa-dot-circle"></i></i><span>Raport Live</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>            
        </nav>
        
        <section>
           test 
        </section>
        
        <footer>
            <span>
                &copy; copyright 2019 by Adam Soboczynski
            </span>
        </footer>
    </body>
</html>

<script>
    window.onscroll = function () {
        scrollFunction();
    };
    
    var header = document.getElementById("tm-navbar-main");
    
    var sticky = header.offsetTop;
    
    function scrollFunction(){
        if (window.pageYOffset > sticky) {
          header.classList.add("tm-sticky");
        } else {
          header.classList.remove("tm-sticky");
        }
    }
    
</script>