<?php
function gymfitness_setup(){

    //imagenes destacadas 
    add_theme_support( 'post-thumbnails');//Registra el soporte de temas para una función determinada.

    //Titulos para SEO
    add_theme_support('title-tag');//Registra el soporte de temas para una función determinada. se añade autmaticamente en e lwp_head y mostrara los titulos mas dinamicos 
}

add_action( 'after_setup_theme', "gymfitness_setup");// hook que se ejecuta cada vez que un tema a sido activado

function gymfitness_menus(){// se recomienda poner el nombre de una funcion con el mismo nombre del tema y con guio bajo poner un nombre para distinguirlo
    register_nav_menus( array(//registrar un menu de navegacion lo que queramos ssepara de la coma 
        'menu-principal' => __('Menu Principal', 'gymfitness')// ya el menu se crea lo podemos ver en el tablero en apareicena menus 

    ) );
}

add_action( 'init', 'gymfitness_menus');//para gregar codigo (hooks,nombre de la funcion) init hook para arrancar worpress y se ejecuta los menus (funcion)
 

function gymfitness_scripts_styles(){//funcion que se para los estilo y js
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri( ), array('normalize'), '1.0.0');//wp_enqueue_style fx de wordpress para pasar la ubucacion de hoja de estilos(nombre archico, ubicacion, dependencias(librerias de estilos), version )
   
}

add_action( 'wp_enqueue_scripts', 'gymfitness_scripts_styles');//hook wp_enqueue_scripts Se activa cuando se ponen en cola scripts(js) y estilos.