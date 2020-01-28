<?php
/**
 * @package Web Coder
 * @version 0.1
 * 
 */

 /**
  * Plugin Name: Web Coder
  * Plgugin URI: https://wordpress.org/plugins/web-coder/
  * Description: 
  * Author: Pedro da Silveira Azeredo
  * Version: 0.1
  * Authot URI: https://bit.ly/2G0Bg69
  */

    add_action('admin_menu', 'pone_register_menus');
    
        function pone_register_menus()
        {
            add_option_page('Web Coder', 'Bem Vindos', 'manage_options', 'pone_hello_page', 'pone_render_page');

        }

        
        function pone_render_page()
        {
            
        }

    




  ?>