<?php
     get_header();//funcion por defecto de worpdress parecido a include 
?>


<main class="contenedor seccion">

<?php

get_template_part( 'template-parts/pagina' );//traer el archivo pagina.php

?>

</main>

<?php
    get_footer();

?>