<?php
/*
Template Name: Discount
*/
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!--[if IE]><![endif]-->
  <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <?php if ( file_exists(TEMPLATEPATH .'/favicon.ico') ) : ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
  <?php endif; ?><?php if ( file_exists(TEMPLATEPATH .'/apple-touch-icon.png') ) : ?>
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
<?php endif; ?><link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/flexslider.css">
<link href='http://fonts.googleapis.com/css?family=Source Sans Pro:300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/korting.css">
<?php wp_head(); ?>
</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="<?php echo $body_classes; ?>"><!--<![endif]-->

<div id="main" role="main">

  <section id="main-content" class="discount">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <p>
          <form id="discount_form">
            <input type="text" name="firstname" placeholder="Jouw naam + Enter">
          </form>
        </p>

        <div class="messages">
          <div class="success">
            <h2>Hoera, je krijgt korting!</h2>
            <a href="http://tracking.bol.com/click/click?p=1&s=17848&t=e&e=1" class="button bol" target="_blank">Direct shoppen!</a>
          </div>
          <div class="fail">
            <p>
              <strong>Helaas, je krijgt nog geen korting.</strong>
            </p>
            <hr>
            <p><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?></p>
          </div>
        </div>
        <!-- .messages -->

      </article>

    <?php endwhile; endif; ?>

  </section>

  <?php get_footer(); ?>
  <?php if(get_field('discount_users')): ?>
    <div data-discount-users="<?php
    while(the_repeater_field('discount_users')):
      echo get_sub_field('discount_user') .' ';
    endwhile;
    ?>">
  </div>
<?php endif; ?>
<script type="text/javascript">
  (function($){

    var discountForm = $('#discount_form'),
        firstNameField = $('input[name="firstname"]'),
        firstNameFieldVal,
        msgsEl = $('.messages'),
        sccsEl = $('.success'),
        failEl = $('.fail'),
        discountEl = $('div[data-discount-users]'),
        allowedUsers = discountEl.data('discount-users').split(' '),
        allowed,
        applyfirstNameEl = $('input[name="ninja_forms_field_7"]');

    discountForm.on('submit',function(e){
      e.preventDefault();
      firstNameFieldVal = firstNameField.val();
      allowed = $.inArray(firstNameFieldVal,allowedUsers);
      if (allowed > -1) {
        failEl.hide();
        sccsEl.show();
      } else {
        sccsEl.hide();
        failEl.show();
        applyfirstNameEl.val(firstNameFieldVal);
      }
    });

  })(jQuery);
</script>