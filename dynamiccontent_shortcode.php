<?php
add_shortcode( 'DynamicPageContent', function (){
    ob_start();
        $prmtr = isset( $_GET['prmtr'] ) ? $_GET['prmtr'] : 'NewYork';
        echo $prmtr;
    return ob_get_clean();
});