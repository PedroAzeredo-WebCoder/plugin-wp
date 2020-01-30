<?php
/**
 * @package Web Coder
 * @version 0.1
 * 
 */

 /**
  * Plugin Name: Web Coder
  * Plugin URI: https://wordpress.org/plugins/web-coder/
  * Description: 
  * Author: Pedro da Silveira Azeredo
  * Version: 0.1
  * Authot URI: https://bit.ly/2G0Bg69
  * License: GPLv2 or later
  **/

    
  function orcamento_whatsapp(){

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $produto = $_POST['produto'];

      $text = "Olá meu nome é *" . $nome . "* desejo um orçamento para o " .$produto . " Meu email é ". $email;

      $mg_wa = str_replace(' ', '%20', $text);

      $action_url = "https://api.whatsapp.com/send?1=pt_BR&phone=5551994442101&text=$mg_wa";

    ?> <!--Função de mensagem de texto via whatsApp-->

    <?php
        if(isset($_POST['submit'])){
    ?>
        <script type="text/javascript">
            window.location = "<?php echo $action_url; ?>";
        </script>
       <?php } ?> <!--Verificando envio e direcionando para a url-->


     <?php echo "<h1>Faça seu orçamento</h1><br>";?> <!--Imprimindo na tela um Titulo para o formulario-->

        <form action="" method="post">
            <label for="">Nome</label>
            <input type="text" name="nome">
        <br>
            <label for="">Email</label>
            <input type="email" name="email">
        <br>
            <label for="">Qual produto você quer comprar</label>
            <select name="produto" id="">
                <option value="Curso de WordPress">Curso de WordPress</option>
                <option value="Aprenda a criar plugins">Aprenda a criar plugins</option>
                <option value="Aprenda a criar temas">Aprenda a criar temas</option>
            </select>
        <br>
            <input type="submit" value="Pedir orçamento">
        </form>

  }

    <?php  add_shortcode('orcamento', 'orcamento_whatsapp'); ?>
