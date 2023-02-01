<?php

    while (have_posts()): the_post();// have_posts consulta la base de datos automaticamente __ the_post dar acceso a la informacion (paginas en ajustes.lectura  )

    the_title('<h1 class="text-center text-primary">', '</h1>'); // lee el titulo de una pagina (h1)
    if (has_post_thumbnail()) {//va verrificar si hay imagen si es true ejecutara el codigo para asi evitar errores de codigo en las otra paginas
        the_post_thumbnail('full',array('class' => 'imagen-destacada'));//va mostrar la imagen destacada (tamaño, clase)
    }

    the_content( ); // leee contendio de uan pagina 
    endwhile;