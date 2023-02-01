<?php
     get_header();//funcion por defecto de worpdress parecido a include me va incluir el archvo header.php
?>


<main>

<?php

while (have_posts()): the_post();// have_posts consulta la base de datos automaticamente __ the_post dar acceso a la informacion (paginas en ajustes.lectura  )

the_title(); // lee el titulo de una pagina 
the_content( ); // leee contendio de uan pagina 
endwhile;

?>

</main>

<?php
    get_footer();

?>