<footer class="footer contenedor">
    <hr>

    <div class="contenido-footer">
    <?php
        $args = array(
            'theme_location' => 'menu-principal', //Ubicación del tema que se utilizará. Debe estar registrado conregister_nav_menu() para que el usuario pueda seleccionarlo.
            'container' => 'nav',//añadir la etiqueta nav
            'container_class' => 'menu-principal' // agregar una clase 


        );

        wp_nav_menu($args); //funcion que Muestra un menú de navegación.


        ?>
        <p class="copyright">Todos los derechos reservados. <?php get_bloginfo('name')?> <?php echo date('Y');?></p> <!--funcion de php para la fecha actual  get_bloginfo Recupera información sobre el sitio actual.(título del sitio (establecido en Configuración > General)-->

    </div>
</footer>

<?php wp_footer();?> <!--activa la barra de la parte de arriba (panel de admon)de la pagina para editar, personalizar etc-->

</body>
</html>