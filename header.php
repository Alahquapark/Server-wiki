<?php
    echo "
        <head>
            <title>Wiki Proiektua</title>
            <!-- CSS de w3schools -->
            <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
            <link rel='stylesheet' href='wiki.css' type='text/css'>
            <link rel='shortcut icon' type='image/x-icon' href='logoBlack.png' />
        </head>



        <header>
            <a class='imgLink' href='wiki.html'>
                <img src='logoBlack.png' alt='Logotipo proxmox' >
            </a>
            
            <h1>PROXMOX WIKI</h1>
        </header>

        <body>
            <div class='w3-bar w3-black w3-card'>
                <a class='w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right'
                    href='javascript:void(0)' onclick='myFunction()' title='Toggle Navigation Menu'>
                    <i class='fa fa-bars'></i>
                </a>
                <a href='wiki.php' class='w3-bar-item w3-button w3-padding-large'>HASIERA</a>

                <a href='resumen.php' class='w3-bar-item w3-button w3-padding-large w3-hide-small'>LABURPENA</a>

                <div class='w3-dropdown-hover w3-hide-small'>
                    <button class='w3-padding-large w3-button' title='More'>TUTORIALA <i class='fa fa-caret-down'></i></button>
                    <div class='w3-dropdown-content w3-bar-block w3-card-4'>
                        <a href='requisitos.php' class='w3-bar-item w3-button'>Rekisito minimoak</a>
                        <a href='instalazioa.php' class='w3-bar-item w3-button'>Instalazioa</a>
                        <a href='konfigurazioa.php' class='w3-bar-item w3-button'>Konfigurazioa</a>
                    </div>
                </div>

                <a href='video.php' class='w3-bar-item w3-button w3-padding-large w3-hide-small'>BIDEOA</a>

            </div> 
        </body>"
    ;
?>