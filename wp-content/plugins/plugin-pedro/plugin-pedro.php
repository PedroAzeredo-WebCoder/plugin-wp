<?php
/**
 * @package Web Coder
 * @version 0.1
 * 
 */

 /**
  * Plugin Name: Web Coder
  * Plugin URI: https://wordpress.org/plugins/web-coder/
  * Description: Meus primeiro passos com plugin no wordpress
  * Author: Pedro da Silveira Azeredo
  * Version: 0.1
  * Authot URI: https://bit.ly/2G0Bg69
  * License: GPLv2 or later
  **/
    define('PONE_REQUIRED_VERSION', '4.0'); 
    define('PONE_URL', plugin_url('', __FILE__));
    define('PONE_DIR', plugin_dir_path(__FILE__));

    register_activation_hook(__FILE__, 'pone_activate');

        function pone_activate(){
            global $wp_version;
            if(version_compare($wp_version, PONE_REQUIRED_VERSION, '<')){
                wp_die('Este plugin requer no minimo a versão ' . PONE_REQUIRED_VERSION . ' do wordpress');
            }
        } 
            //Função de verificação de versão do wordpress para compatibilidade ao plugin

    register_deactivation_hook(__FILE__, 'pone_deactivate');
        function pone_deactivate(){
            delete_option();
        }
            //Função desabilita plugin

    require_once(PONE_DIR . 'admin.php'); 

    add_action('save_post', 'pone_save_post');

        function pone_save_post(){
            wp_die("Salvo com sucesso");
        }
            //Salvando o plugin

    add_filter('the_content', 'pone_alter_the_content');
        
        function pone_alter_the_content($content){
            return $content . "<br><p>Todos os direitos reservados</p>";
        }
            //Formatando Parágrafos

    add_filter('the_title', 'pone_custom_title');
    
        function pone_alter_the_content($title){
            return $title . "- Desenvolvido por Pedro da Silveira Azeredo";
        }
            //Formatando Titulos
    

?>
    




 