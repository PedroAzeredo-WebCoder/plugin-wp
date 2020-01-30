<?php
add_action('admin_menu', 'pone_register_menus');
    
        function pone_register_menus()
        {
            add_options_page('Web Coder', 'Bem Vindos', 'manage_options', 'pone_hello_page', 'pone_render_page');

        } 
        
        function pone_render_page(){
            ?>
            <div class="wrap">
                <h2><strong>Sejam Bem vindos ao meu plugin</strong></h2>
                <p class="description">Esta é a minha pagina criada com o plugin</p>
                <?php echo plugins_url('admin.css', __FILE__); ?>
            </div>

            <?php
        }

        function mp_mensagem_post($mp_post){
            $mp_mensagem = "Teste do meu plugin";
            $mp_resultado = "<h1> $mp_mensagem</h1>";
            $mp_resultado .= $mp_post;

            return $mp_resultado;
        }
?>