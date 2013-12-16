<?php get_header(); the_post(); ?>
<body class="product">
 <!-- header -->
<div class="row bg-color2 header">
	<div class="container ptb-h">
		<img src="<?php echo IMAGES; ?>/logo.png" alt="Max Design">
	</div>
</div>
<!-- banner -->
<div class="row row-padding-small bg-color2 banner">
	<div class="container">
		<h1>
			<span class="color14">Hands-on</span> <span class="color13">CSS</span>
		</h1>
	</div>
</div>
<!-- resources -->
<div class="row row-padding-small bg-color10">
	<div class="container">
    <div class="mb-d">
    <?php wp_nav_menu( array(
			'menu' => 'cart',
			'items_wrap' => '%3$s'
			  )); ?>
	</div>
		<h2 class="m-n">
			<?php the_title(); ?>
		</h2>
	</div>
</div>
<div class="row bg-color10">
	<div class="container">
		<main class="main">
			<section class="bfc section">
				<div class="bfc item">
					 <?php the_content(); ?>
			</section>
			<div>
				<a href="#" class="btn-light font14">Back to top</a> 
			</div>
		</main>
<?php get_sidebar(); ?>		
	</div>
</div>
<?php get_footer(); ?>