<!DOCTYPE html>
<!-- <html lang="en"> -->
    <html <?php language_attributes( ) ?> > <!--Muestra los atributos de idioma para la etiqueta 'html'. el idioma isntalado escogido al isntalar -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <?php wp_head();?> <!--funcion de wordpress para agregar los estilos css sin necesidad de hacerlo con link-->
</head>
<body>
    

<header class="header">
    <div class="contenedor barra-navegacion">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo"> <!--funcion apra definir una ruta -->
        </div>
        <!--ruta de api de worpress para crear el nav  -->
        <?php
        $args = array(
            'theme_location' => 'menu-principal', //Ubicación del tema que se utilizará. Debe estar registrado con register_nav_menu() para que el usuario pueda seleccionarlo.
            'container' => 'nav',//añadir la etiqueta nav
            'container_class' => 'menu-principal' // agregar una clase 


        );

        wp_nav_menu($args); //funcion que Muestra un menú de navegación.


        ?>
    </div>

  
</header>