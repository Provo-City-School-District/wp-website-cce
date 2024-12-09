<aside id="mainSidebar">
	<?php
	$page_id = 12742;
	$content = get_post_field('post_content', $page_id);
	echo do_shortcode($content);
	?>
</aside>