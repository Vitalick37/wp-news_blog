<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webmag
 */

get_header();
?>



		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 2,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
							<!-- post -->
							<div class="col-md-6">


							<div class="post post-thumb">
								<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-2" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
										<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
								</div>
							</div>
							</div>
							<!-- /post -->
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>


				
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Recent Posts</h2>
						</div>
					</div>
					<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 6,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
							<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
									<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>
				



					<div class="clearfix visible-md visible-lg"></div>
				
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
						<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 1,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
				
						<!-- post -->
						<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
											<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
										</div>
										<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>

					<?php		
						global $post;

						$myposts = get_posts([ 
							'numberposts' => 6,
							'orderby'        => 'title',
						]);

						if ( $myposts ) {
							foreach( $myposts as $post ){
								setup_postdata( $post );
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
				
					
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
											<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
										</div>
										<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>
						

							

	
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 4,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
				
							<div class="post post-widget">
								<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail('spec_thumb') ?></a>
								<div class="post-body">
									<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
								</div>
							</div>
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>


						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 2,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
				
					
						
							<div class="post post-thumb">
								<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
										<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
								</div>
							</div>
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>
						
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		<!-- section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>
					<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 3,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
									<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					
						
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Most Read</h2>
								</div>
							</div>

							<?php		
						global $post;

						$query = new WP_Query( [
							'posts_per_page' => 3,
							'orderby'        => 'title',
						] );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<!-- Вывода постов, функции цикла: the_title и т.д. -->
				
							<!-- post -->
							<div class="col-md-12">
									<div class="post post-row">
										<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-2" href="category.html"><?php echo get_the_category()[0] -> cat_name ?></a>
												<span class="post-date"><?php echo get_the_date('F j, Y') ?></span>
											</div>
											<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
											<p><?php the_excerpt() ?></p>
										</div>
									</div>
								</div>
								<!-- /post -->
						
								<?php 
							}
						} else {
							echo "Постов не найдено";
						}

						wp_reset_postdata(); // Сбрасываем $post
					?>
							

						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

<?php
get_sidebar();
get_footer();
