<?php 

get_search_form();
if ( is_active_sidebar('home-sidebar')) {
    dynamic_sidebar('home-sidebar');
}

?>