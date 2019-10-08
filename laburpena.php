<!DOCTYPE html>

<html lang="es">

<<<<<<< HEAD:laburpena.html
    <head>
        <title>Wiki Proiektua</title>
        <!-- CSS de w3schools -->
        <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
        <link rel='stylesheet' href='wiki.css' type='text/css'>
        <link rel='shortcut icon' type='image/x-icon' href='logoBlack.png' />
    </head>

    <header>
        <a class='imgLink' href='wiki.php'>
            <img src='logoBlack.png' alt='Logotipo proxmox'>
        </a>

        <h1>PROXMOX WIKI</h1>
    </header>

    <body>
        <div class='w3-bar w3-black w3-card'>
            <a class='w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right'
                href='javascript:void(0)' onclick='myFunction()' title='Toggle Navigation Menu'>
                <i class='fa fa-bars'></i>
            </a>
            <a href='wiki.html' class='w3-bar-item w3-button w3-padding-large'>HASIERA</a>

            <a href='laburpena.html' class='w3-bar-item w3-button w3-padding-large w3-hide-small'>LABURPENA</a>

            <div class='w3-dropdown-hover w3-hide-small'>
                <button class='w3-padding-large w3-button' title='More'>TUTORIALA <i class='fa fa-caret-down'></i></button>
                <div class='w3-dropdown-content w3-bar-block w3-card-4'>
                    <a href='rekisitoak.html' class='w3-bar-item w3-button'>Rekisito minimoak</a>
                    <a href='instalazioa.html' class='w3-bar-item w3-button'>Instalazioa</a>
                    <a href='konfigurazioa.html' class='w3-bar-item w3-button'>Konfigurazioa</a>
                </div>
            </div>
=======
    <?php include 'header.php';?>
>>>>>>> 15b6b0ed15c29581610b3a5bc659f1fa564cbd8b:laburpena.php

            <a href='bideoa.html' class='w3-bar-item w3-button w3-padding-large w3-hide-small'>BIDEOA</a>-
        </div>
        
        <div class="texto">
            <p>
                Proxmox VE es una plataforma de virtualización completa, de nivel empresarial, que está desarrollada
                íntegramente en código abierto. Está basado en el hipervisor KVM y en contenedores LXC, el almacenamiento y
                la funcionalidad de red se definen por software. Además, permite administrar fácilmente clusters para alta
                disponibilidad e incluye herramientas para la recuperación de desastres desde una cómoda interfaz web.
            </p>

            <p>
                Con Proxmox VE, podemos obtener resultados similares a otros productos de virtualización de alto
                rendimiento, como Windows Hyper-V, Citrix XenServer o VMware vSphere. Entre sus características más
                sobresalientes podríamos nombrar las siguientes:
            </p>

            <p>
                Se administra mediante una interfaz web HTML5 que nos permite el acceso desde cualquier equipo de la red.
                Incluso desde un teléfono o una tableta.
                Podemos hacer copias de seguridad e instantáneas desde la propia interfaz web. Las copias de
                seguridad pueden ser inmediatas o programadas. Incluye un cortafuegos que protege la instalación de una
                forma sencilla.
                Las máquinas virtuales pueden migrar entre varios servidores Proxmox VE para mejorar el
                rendimiento.
            </p>

            <p>
                Sus características de nivel empresarial lo convierten en una opción perfecta para virtualizar una
                infraestructura TI, optimizar los recursos existentes y aumentar la eficiencia, a la vez que se reduce el
                gasto al mínimo. Además, garantiza la escalabilidad de la instalación a lo largo del tiempo, porque no
                limita el número de servidores físicos, ni la cantidad de procesadores utilizados y se integra perfectamente
                con almacenamiento NAS o SAN con independencia del modo en el que éste se conecte.
            </p>
        </div>

        <footer>
            <img src="proxmox.png" alt="Logotipo proxmox">
<<<<<<< HEAD:laburpena.html
        </footer>
=======
        </footer>        
>>>>>>> 15b6b0ed15c29581610b3a5bc659f1fa564cbd8b:laburpena.php
    </body>

</html>