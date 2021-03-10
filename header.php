<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
	<?php wp_head(); ?>
</head>
<body class="bg-gray-100">
	<section class="container mx-auto">
		<div class="flex justify-between items-center py-10 px-3">
			<?php 
				get_template_part('components/site-logo');
				get_template_part('components/site-nav');
			?>
		</div>
	</section>