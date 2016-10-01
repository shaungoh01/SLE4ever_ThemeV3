    <?php get_header(); ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php $the_query = new WP_Query('showposts=5&orderby=desc&category_name=featured');
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="item active">
                            <a target="_blank" href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>">
                                        <?php
                                        if (has_post_thumbnail()):
                                        the_post_thumbnail('default-thumbnail');
                                        else:
                                        ?>
                                        <img class="img-responsive img-full" src="<?php echo $default_thumbnail; ?>" alt="<?php the_title(); ?>" />
                                        <?php endif; ?>
                            <!-- <h2><?php the_title(); ?></h2></a>          
                            </li>     -->   
                            </a>    
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <!-- <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div> -->
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name"><?php bloginfo('name'); ?></h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>SLE4Ever Theme</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php bloginfo('name'); ?>'s 
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <?php
                $the_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish'));
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?>
                        <br>
                        <small><?php the_time('F jS, Y'); ?>| by 
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?></a></small>
                    </h2>
                    <?php the_content() ?>
                    <a href="<?php the_permalink()?>" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <?php
                    endwhile;

                    else :
                         echo '<p>No content found</p>';

                    endif;

                ?>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful boxes
                        <strong>to showcase your content</strong>
                    </h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div> -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>