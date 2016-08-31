<?php

add_action('search','site_search_bar');


function site_search_bar(){
	?>
	<form role="form" class='form-inline' method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<div class='form-group'>
			<label for="s" class="sr-only"><?php _e('Search for:'); ?></label>
			<input placeholder="Find Here" class='form-control input-sm' type="search" id="s" name="s" value="" />
			<button class='btn btn-info btn-sm' type="submit" id="searchsubmit" ><span class="glyphicon glyphicon-search"></span></button>
		</div>
	</form>
	<?php
}
