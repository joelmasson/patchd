<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="splash" style="background-image:url(<?php echo $url; ?>)">
	<h1>
	<?php $content = get_the_content();
		  echo $content;
	?>
	</h1>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
