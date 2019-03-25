<?php

function change_admin_footer(){
     echo '<span id="footer-note"><span class="dashicons dashicons-heart"></span> Crafted with love by <a href="https://www.goodmanfox.com/" target="_blank">Goodman Fox</a>.</span>';
    }
add_filter('admin_footer_text', 'change_admin_footer');