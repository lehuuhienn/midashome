<?php
/*
    Template Name: About Template
*/

get_header();

$get_the_post_thumbnail_url = get_the_post_thumbnail_url();
$get_the_post_thumbnail_url = $get_the_post_thumbnail_url?$get_the_post_thumbnail_url:get_frontend()."upload/about-banner.jpg";
$left_title = get_field("left_title");
$layout_mode = get_field("layout_mode");
$get_in_touch_title = get_field("get_in_touch_title", "options");

?>

            <section class="about-banner">
                <div class="img-drop">
                    <img class="lazyload" data-src="<?php echo $get_the_post_thumbnail_url;?>" alt="<?php the_title(); ?>">
                    <h1 class="banner-title"><?php the_title(); ?></h1>
                </div>
            </section>

            <section class="about-block">
                <div class="container padding">
                    <div class="row">
                        <?php if($layout_mode!="column1"):?>
                        <div class="col-lg-5">
                            <?php if($left_title): ?>
                            <h2 class="big-title wow fadeInUp"><?php echo $left_title; ?></h2>
                            <?php endif;?>
                        </div>
                        <?php endif;?>
                        <div class="<?php echo ($layout_mode!="column1")?'col-lg-7':'col-lg-12';?>">
                            <div class="about-content wow fadeInUp">
                                <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();
                                        the_content();
                                    endwhile; // End of the loop.
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php if($get_in_touch_title): ?>
            <section class="get-in-touch">
                <div class="container padding">
                    <h2 class="big-title wow fadeInUp"><?php echo $get_in_touch_title; ?></h2>
                    <?php 
                        $get_in_touch_repeater = get_field("get_in_touch_repeater", "options");
                    ?>
                    <div class="row">
                        <?php if($get_in_touch_repeater): ?>
                            <?php foreach($get_in_touch_repeater as $k => $item): ?>
                                <?php 
                                    $type = $item["type"]; 
                                    if($type=="location"){continue;}
                                ?>
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                    <a class="box-border box-contact" href="<?php echo $type=="phone"?'tel':'mailto';?>:<?php echo $item["value"];?>"> 
                                        <div class="icon"><i class="iconi <?php echo $type; ?>"></i></div>
                                        <div class="text">
                                            <span><?php echo $item["value"];?></span>
                                            <span><?php echo $item["mini_text_1"];?><?php echo $item["mini_text_2"]?'<b>'.$item["mini_text_2"].'</b>':''; ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endif;?>

<?php get_footer();?>