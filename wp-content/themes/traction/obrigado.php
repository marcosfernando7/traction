<?php
// Template Name: Obrigado
?>

<?php get_header(); ?>

<div class="container">
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="Traction">
    </figure>

   <h1 class="mb-4"><?= the_title() ?></h1>
   <p>Sua solicitação foi enviada com sucesso!<br> Em breve nossa equipe entrará em contato.</p>

</div>


<?php get_footer(); ?>
