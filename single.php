<!DOCTYPE html>
<html lang="ja">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.min.css" rel="stylesheet">

   <?php wp_head(); ?>
</head>

<body>

<?php get_template_part('includes/nav'); ?>

  <?php while (have_posts()): the_post(); ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
            <span class="meta">Posted by
                <?php the_author(); ?>
                on <?php the_time( "Y/n/j" ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <hr>
<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>
</body>

</html>
