

<?php
/*
*Template Name: Contenido Centrado (No Sidebars)
*/
     get_header();//funcion por defecto de worpdress parecido a include 
?>


<main class="contenedor seccion contenido-centrado">

    <?php
        get_template_part( 'template-parts/pagina' );//traer el archivo pagina.php


    ?>

</main>

<?php
    get_footer( );//Carga la plantilla de pie de página.

?>

