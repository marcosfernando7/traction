<?php
// Template Name: Página Inicial
?>

<?php get_header(); ?>

<div class="container">
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="Traction">
    </figure>

   <h1 class="mb-4">Seja um Expert</h1>

   <p>Somos o lugar ideal para pessoas que respiram crescimento. E sempre temos posição para pessoas movidas pela inovação e que exalam confiança.</p>

   <h2>Escolha uma área de atuação</h2>


   <form action="" method="post">

   <?php the_content(); ?>

   <h2>Preencha o Formulário Abaixo</h2>
       <div class="row">

           <div class="col-md-12 col-12">
           <input type="text" name="nome" placeholder="Nome completo" class="form-control" required>
           </div>

           <div class="col-md-12 col-12">
           <input type="email" name="email" placeholder="E-mail" class="form-control" required>
           </div>

           <div class="col-md-6 col-12">
           <input type="text" name="phone" placeholder="Telefone" class="form-control sp_celphones" required>
           </div>

           <div class="col-md-6 col-12">
           <input type="date" name="birthday" placeholder="Data de Nascimento" class="form-control" required>
           </div>

           <div class="col-md-12">
               <button name="enviar" type="submit" class="btn btn-warning btn-lg btn-block">Seja um Expert</button>
           </div>
       </div>
   </form>
</div>

<?php
require 'enviar.php';
get_footer();
?>