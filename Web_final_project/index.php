<?php get_header(); ?>

    <div id="home" class="header_content">
        <div class="text">
            <h1>Web Development Project</h1>
        </div>
        <div class="buttons">
            <a href="#carousel">OUR MOTIVATION</a>
            <a href="#service">OUR SERVICES</a>
        </div>
    </div>
</div>

<!-- Slider -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
	    <?php
	    $args = array(
		    'post_type' => 'slides',
		    'post_status' => 'publish',
		    'posts_per_page' => -1
	    );
	    $flag = 0;
	    $posts = new WP_Query( $args );
	    if ( $posts -> have_posts() ) {
		    while ( $posts -> have_posts() ) {
		        $posts -> the_post();
			    $photo = get_field("slide"); ?>
			    <div class="carousel-item <?php if ($flag === 0) echo "active" ?>">
                <img class="d-block w-100" src="<?php echo $photo ?>" alt="slide"><div class="carousel-caption d-none d-md-block">
                    <h5><?php the_title(); ?></h5>
                </div>
            </div>  <?php $flag = 1;
		    }
	    }
	    wp_reset_query();
	    ?>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <!-- Pricing -->
    <div id="service" class="pricing_plan_block">
        <div class="pp_top_text">
            <h2>Pricing plan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur assumenda dignissimos, ipsam
                laboriosam molestias nemo rem sequi vel velit!</p>
        </div>
        <div class="pp_blocks_cont">
	        <?php
	        $args = array(
		        'post_type' => 'price',
		        'post_status' => 'publish',
		        'posts_per_page' => -1
	        );
	        $posts = new WP_Query( $args );
	        if ( $posts -> have_posts() ) {
		        while ( $posts -> have_posts() ) {
			        $posts -> the_post();
			        $tarif_price = get_field("tarif_price");
			        $options = get_field("options");
			        $option_list = explode("\n", $options); ?>
                    <div class="pp_block">
                        <h4><?php the_title(); ?></h4>
                        <p class="bigg"><sup>$</sup><?php echo $tarif_price; ?><span>per month</span></p>
                        <div class="text_pp_block"> <?php
                            foreach ($option_list as $option) {
                                ?> <p> <?php echo $option ?> </p> <?php
                            }
                            ?>
                        </div>
                        <a href="#">ORDER NOW</a>
                    </div>
                    <?php
		        }
	        }
	        wp_reset_query();
	        ?>
        </div>
    </div>

    <!-- Team members -->
    <div id="team" class="team_member_container">
        <div class="top_text_tm">
            <h2>Our Team Member</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis culpa eaque facilis iste,
                iusto nobis obcaecati odit quaerat, reiciendis sit temporibus veniam!</p>
        </div>
        <div class="members_cont">

	        <?php
	        $args = array(
		        'post_type' => 'team',
		        'post_status' => 'publish',
		        'posts_per_page' => -1
	        );
	        $posts = new WP_Query( $args );
	        if ( $posts -> have_posts() ) {
		        while ( $posts -> have_posts() ) {
			        $posts -> the_post();
			        $photo = get_field("photo");
			        $position = get_field("position");
			        $vk_link = get_field("vk");
			        $fb_link = get_field("fb");?>
                    <div class="member">
                        <img src="<?php echo $photo ?>" alt="member">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $position; ?></p>
                        <div class="icons_section">
                            <a href="#<?php echo $fb_link ?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="#<?php echo $vk_link ?>"><i class="fab fa-vk"></i></a>
                    </div>
            </div> <?php
		        }
	        }
	        wp_reset_query();
	        ?>
        </div>
    </div>


<?php get_footer(); ?>
