<?php

	/* Template Name: Home */

?>

<?php get_header();?>

		</div><!--head-wrap-in-->
	</div><!--head-wrap-out-->
</div><!--head-wrap-->
<div id="content-wrapper" class="left relative">
	<div class="content-out">
		<div class="content-in">
			<div id="home-content-out">
				<div id="home-content-in">
					<div id="home-content-wrapper" class="left relative">
						<?php get_sidebar( 'home' ); ?>
						<div class="home-contain relative">
							<?php if(get_option('mvp_home_layout') == 'Widgets' || get_option('mvp_home_layout') == 'Widgets and Blog') { ?>
								<?php global $paged; $paged = (get_query_var('page')) ? get_query_var('page') : 1; if ( $paged < 2 ) : ?>
									<div id="home-widget-wrap" class="left relative">
										<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Widget Area')): endif; ?>
									</div><!--home-widgets-wrap-->
								<?php endif; ?>
							<?php } ?>
						</div><!--home-contain-->
						<?php if(get_option('mvp_home_layout') == 'Blog' || get_option('mvp_home_layout') == 'Widgets and Blog') { ?>
							<?php if(get_option('mvp_blog_layout') == 'column') { ?>
								<div class="home-contain relative">
									<div id="home-widget-wrap" class="left relative">

									<div class="home-widget">
										<ul class="widget-full1 left relative infinite-content">
											<?php global $do_not_duplicate; global $post; if (isset($do_not_duplicate)) { $mvp_posts_num = get_option('mvp_posts_num'); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $mvp_posts_num, 'post__not_in'=>$do_not_duplicate, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); ?>
												<li class="infinite-post">
													<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
														<div class="widget-full-list-img left relative">
															<a href="<?php the_permalink(); ?>" rel="bookmark">
																<?php the_post_thumbnail('medium-thumb'); ?>
															</a>
															<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
																<div class="video-but-contain-med">
																	<i class="fa fa-play-circle-o fa-4"></i>
																</div><!--video-but-contain-med-->
															<?php endif; ?>
															<div class="read-share-overlay">
																<div class="read-more-box-wrapper">
																	<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="read-more-box"><?php _e( 'Read More', 'mvp-text' ); ?></span></a>
																</div><!--read-more-box-wrapper-->
																<div class="share-box-wrapper">
																	<div class="read-more-fb">
																		<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>', 'facebookShare', 'width=626,height=436'); return false;" title="Share on Facebook"><i class="fa fa-facebook fa-2"></i></a>
																	</div><!--read-more-fb-->
																	<div class="read-more-twit">
																		<a href="#" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?> -&amp;url=<?php the_permalink() ?>', 'twitterShare', 'width=626,height=436'); return false;" title="Tweet This Post"><i class="fa fa-twitter fa-2"></i></a>
																	</div><!--read-more-twit-->
																	<div class="read-more-comment">
																		<a href="<?php the_permalink(); ?>#comments-button"><i class="fa fa-comments fa-2"></i></a>
																	</div><!--read-more-comment-->
																</div><!--share-box-wrapper-->
															</div><!--read-share-overlay-->
														</div><!--widget-full-list-img-->
														<div class="widget-full-list-text left relative">
															<div class="img-cat-contain left">
																<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
															</div><!--home-category-contain-->
															<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
															<p><?php echo excerpt(18); ?></p>
														</div><!--widget-full-list-text-->
														<div class="widget-post-info left">
															<span class="widget-post-author"><?php the_author(); ?> </span><span class="widget-post-date"><?php the_time(get_option('date_format')); ?></span>
														</div><!--widget-post-info-->
													<?php } else { ?>
														<div class="widget-full-list-text left relative">
															<div class="img-cat-contain left no-img">
																<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
															</div><!--home-category-contain-->
															<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
															<p><?php echo excerpt(53); ?></p>
														</div><!--widget-full-list-text-->
														<div class="widget-post-info left">
															<span class="widget-post-author"><?php the_author(); ?> </span><span class="widget-post-date"><?php the_time(get_option('date_format')); ?></span>
														</div><!--widget-post-info-->
													<?php } ?>
												</li>
											<?php endwhile; endif; } else { ?>
												<?php $mvp_posts_num = get_option('mvp_posts_num'); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $mvp_posts_num, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); ?>
												<li class="infinite-post">
													<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
														<div class="widget-full-list-img left relative">
															<a href="<?php the_permalink(); ?>" rel="bookmark">
																<?php the_post_thumbnail('medium-thumb'); ?>
															</a>
															<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
																<div class="video-but-contain-med">
																	<i class="fa fa-play-circle-o fa-4"></i>
																</div><!--video-but-contain-med-->
															<?php endif; ?>
															<div class="read-share-overlay">
																<div class="read-more-box-wrapper">
																	<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="read-more-box"><?php _e( 'Read More', 'mvp-text' ); ?></span></a>
																</div><!--read-more-box-wrapper-->
																<div class="share-box-wrapper">
																	<div class="read-more-fb">
																		<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>', 'facebookShare', 'width=626,height=436'); return false;" title="Share on Facebook"><i class="fa fa-facebook fa-2"></i></a>
																	</div><!--read-more-fb-->
																	<div class="read-more-twit">
																		<a href="#" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?> -&amp;url=<?php the_permalink() ?>', 'twitterShare', 'width=626,height=436'); return false;" title="Tweet This Post"><i class="fa fa-twitter fa-2"></i></a>
																	</div><!--read-more-twit-->
																	<div class="read-more-comment">
																		<a href="<?php the_permalink(); ?>#comments-button"><i class="fa fa-comments fa-2"></i></a>
																	</div><!--read-more-comment-->
																</div><!--share-box-wrapper-->
															</div><!--read-share-overlay-->
														</div><!--widget-full-list-img-->
														<div class="widget-full-list-text left relative">
															<div class="img-cat-contain left">
																<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
															</div><!--home-category-contain-->
															<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
															<p><?php echo excerpt(18); ?></p>
														</div><!--widget-full-list-text-->
														<div class="widget-post-info left">
															<span class="widget-post-author"><?php the_author(); ?> </span><span class="widget-post-date"><?php the_time(get_option('date_format')); ?></span>
														</div><!--widget-post-info-->
													<?php } else { ?>
														<div class="widget-full-list-text left relative">
															<div class="img-cat-contain left no-img">
																<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
															</div><!--home-category-contain-->
															<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
															<p><?php echo excerpt(53); ?></p>
														</div><!--widget-full-list-text-->
														<div class="widget-post-info left">
															<span class="widget-post-author"><?php the_author(); ?> </span><span class="widget-post-date"><?php the_time(get_option('date_format')); ?></span>
														</div><!--widget-post-info-->
													<?php } ?>
												</li>
												<?php endwhile; endif; ?>
											<?php } ?>
										</ul>
										<div class="nav-links">
											<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>
										</div><!--nav-links-->
									</div><!--home-widget-->
							
									</div><!--home-widgets-wrap-->
								</div><!--home-contain-->
							<?php } ?>
							<?php if(get_option('mvp_blog_layout') == 'wide') { ?>
					<div class="story-section left relative infinite-content">
						<?php global $do_not_duplicate; global $post; if (isset($do_not_duplicate)) { $mvp_posts_num = get_option('mvp_posts_num'); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $mvp_posts_num, 'post__not_in'=>$do_not_duplicate, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="story-contain left relative infinite-post">
								<a href="<?php the_permalink(); ?>" rel="bookmark">
								<div class="story-contain-img left">
									<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
										<?php the_post_thumbnail('medium-thumb'); ?>
									<?php } ?>
									<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
										<div class="video-but-contain">
											<i class="fa fa-play-circle-o fa-4"></i>
										</div><!--video-but-contain-->
									<?php endif; ?>
								</div><!--story-contain-img-->
								<div class="story-contain-text">
									<div class="img-cat-contain left">
										<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
									</div><!--img-cat-contain-->
									<h2><?php the_title(); ?></h2>
									<div class="text-info-contain left relative">
										<span class="home-text-author left"><?php the_author(); ?></span><span class="home-text-date left"><?php the_time(get_option('date_format')); ?></span>
									</div><!--text-info-contain-->
								</div><!--story-contain-text-->
								</a>
								<div class="read-share-overlay">
									<div class="read-more-box-wrapper">
										<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="read-more-box"><?php _e( 'Read More', 'mvp-text' ); ?></span></a>
									</div><!--read-more-box-wrapper-->
									<div class="share-box-wrapper">
										<div class="read-more-fb">
											<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>', 'facebookShare', 'width=626,height=436'); return false;" title="Share on Facebook"><i class="fa fa-facebook fa-2"></i></a>
										</div><!--read-more-fb-->
										<div class="read-more-twit">
											<a href="#" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?> -&amp;url=<?php the_permalink() ?>', 'twitterShare', 'width=626,height=436'); return false;" title="Tweet This Post"><i class="fa fa-twitter fa-2"></i></a>
										</div><!--read-more-twit-->
										<div class="read-more-comment">
											<a href="<?php the_permalink(); ?>#comments-button"><i class="fa fa-comments fa-2"></i></a>
										</div><!--read-more-comment-->
									</div><!--share-box-wrapper-->
								</div><!--read-share-overlay-->
							</div><!--story-contain-->
						<?php endwhile; endif; } else { ?>
							<?php $mvp_posts_num = get_option('mvp_posts_num'); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $mvp_posts_num, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="story-contain left relative infinite-post">
									<a href="<?php the_permalink(); ?>" rel="bookmark">
									<div class="story-contain-img left">
										<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<?php the_post_thumbnail('medium-thumb'); ?>
										<?php } ?>
										<?php if(get_post_meta($post->ID, "mvp_video_embed", true)): ?>
											<div class="video-but-contain">
												<i class="fa fa-play-circle-o fa-4"></i>
											</div><!--video-but-contain-->
										<?php endif; ?>
									</div><!--story-contain-img-->
									<div class="story-contain-text">
										<div class="img-cat-contain left">
											<span class="img-cat left"><?php $category = get_the_category(); echo esc_html__( $category[0]->cat_name ); ?></span>
										</div><!--img-cat-contain-->
										<h2><?php the_title(); ?></h2>
										<div class="text-info-contain left relative">
											<span class="home-text-author left"><?php the_author(); ?></span><span class="home-text-date left"><?php the_time(get_option('date_format')); ?></span>
										</div><!--text-info-contain-->
									</div><!--story-contain-text-->
									</a>
									<div class="read-share-overlay">
										<div class="read-more-box-wrapper">
											<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="read-more-box"><?php _e( 'Read More', 'mvp-text' ); ?></span></a>
										</div><!--read-more-box-wrapper-->
										<div class="share-box-wrapper">
											<div class="read-more-fb">
												<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>', 'facebookShare', 'width=626,height=436'); return false;" title="Share on Facebook"><i class="fa fa-facebook fa-2"></i></a>
											</div><!--read-more-fb-->
											<div class="read-more-twit">
												<a href="#" onclick="window.open('http://twitter.com/share?text=<?php the_title(); ?> -&amp;url=<?php the_permalink() ?>', 'twitterShare', 'width=626,height=436'); return false;" title="Tweet This Post"><i class="fa fa-twitter fa-2"></i></a>
											</div><!--read-more-twit-->
											<div class="read-more-comment">
												<a href="<?php the_permalink(); ?>#comments-button"><i class="fa fa-comments fa-2"></i></a>
											</div><!--read-more-comment-->
										</div><!--share-box-wrapper-->
									</div><!--read-share-overlay-->
								</div><!--story-contain-->
								<?php endwhile; endif; ?>
							<?php } ?>
							<div class="nav-links">
								<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>
							</div><!--nav-links-->
						</div><!--story-section-->
						<?php } ?>
						<?php } ?>
					</div><!--home-content-wrapper-->
					<?php get_footer('section'); ?>
				</div><!--home-content-in-->
			</div><!--home-content-out-->
		</div><!--content-in-->
	</div><!--content-out-->
</div><!--content-wrapper-->
<?php get_footer(); ?>