<?php get_header() ?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quo aut ipsa tempore enim temporibus mollitia amet sunt dolorum, consequatur eveniet dolore vitae? Recusandae provident dolore sequi, minus eum porro.</p>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
		<div class="content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>

<?php get_footer() ?>