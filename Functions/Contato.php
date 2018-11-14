<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Contato {
   public $emails = array('paulo1rm23@gmail.com');
   //public $emails = array('atencimento@clinicaneopolis.com.br');

   public function __construct() {
      add_action('wp_ajax_nopriv_contato', array($this, 'action_contato') );
      add_action('wp_ajax_contato',  array($this, 'action_contato') );
   }

   public function configure_smtp($phpmailer) {
      if (isset($this->replyto_address) && isset($this->replyto_name))
         $phpmailer->addReplyTo($this->replyto_address, $this->replyto_name);
   }
   
   public function action_contato() {
      $this->nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
      $this->matricula = filter_var($_POST['matricula'], FILTER_SANITIZE_STRING);

      if (empty($this->nome)) {
         $erros[] = 'campo nome não deve ser vazio.';
      }
      if (empty($this->matricula)) {
         $erros[] = 'campo matricula não deve ser vazio';
      }

      if ( !isset($erros) ) {
         ini_set('max_execution_time', 1000);

         $this->replyto_address = $this->email;
         $this->replyto_name = $this->nome;

         add_action('phpmailer_init', array($this,'configure_smtp'));

         $headers[] = "From: {$this->nome} <paulo1rm23@gmail.com>";

         $body  = "<p><b>Nome:</b> {$this->nome}</p>";
         $body .= "<p><b>Matrícula:</b> {$this->matricula}</p>";

         $this->subject = "Atualização Cadastral - Fasern | {$this->nome}";
        
         if (!wp_mail($this->emails, $this->subject, $body, $headers)) {
            $erros[] = 'ops, estamos com problemas em nosso servidor. tente de novo mais tarde.';
         }
      }

      wp_send_json( array('erros' => (isset($erros)) ? $erros : null) );

      die();
   }
}