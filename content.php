						

						<div class="row pt-md-4">

			    					<?php $mahede = get_post_meta( get_the_ID(),'gallery_image', true);
			    					foreach ($mahede as $ashis):
			    					 ?>


			    					 <li>
			    					 	<img src="<?php echo $ashis ?>" alt="">
			    					 </li>
			    					<?php endforeach; ?>
										<div class="col-md-12">
											<div class="blog-entry ftco-animate d-md-flex">
															<a href="single.html" class="img img-2"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img img-2', 'title' => 'Feature image']);?></a>
															
															<div class="text text-2 pl-md-4">
									              <h3 class="mb-2"><a href="<?php the_permalink(); ?>"><?php the_title( $before = '', $after = '', $echo = true ); ?></a></h3>
									              <div class="meta-wrap">
																	<p class="meta">
									              		<span><i class="icon-calendar mr-2"></i><?php echo get_the_date(); ?></span>
									              		<span><a href="single.html"><i class="icon-folder-o mr-2"></i><?php the_category( ',  '); ?></a></span>
									              		<span><i class="icon-comment2 mr-2"></i><?php echo get_comments_number(); ?></span>
									              	</p>
								              	</div>
									              <p class="mb-4"><?php echo wp_trim_words( get_the_content(),15,false); ?></p>
									              <p><a href="<?php the_permalink(); ?> " class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
									            </div>
											</div>
										</div>
									<?php endwhile; ?>
			    		</div><!-- END-->
			    	