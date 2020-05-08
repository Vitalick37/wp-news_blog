<button class="search-btn"><i class="fa fa-search"></i></button>
<div class="search-form">
	<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
	<button class="search-close"><i class="fa fa-times"></i></button>
</div>


<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="search-form">
	<input class="search-input" value="<?php echo get_search_query(); ?>" type="text" name="s" placeholder="Enter Your Search ...">
	<button type="button" class="search-close"><i class="fa fa-times"></i></button>
</div>

</form>