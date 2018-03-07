<?php

get_search_form();
if (is_active_sidebar('blog-sidebar')) {
    
    dynamic_sidebar('blog-sidebar');
}

?>