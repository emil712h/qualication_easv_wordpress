<?php 
    function qualication_enqueue_style() {
        wp_enqueue_style("qualication-syle", get_stylesheet_uri());
    }
    add_action ("wp_enqueue_scripts", "qualication_enqueue_style");
?>