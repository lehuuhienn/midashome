<?php
/*
    Template Name: Contact Template
*/

get_header();

$get_the_post_thumbnail_url = get_the_post_thumbnail_url();
$get_the_post_thumbnail_url = $get_the_post_thumbnail_url?$get_the_post_thumbnail_url:get_frontend()."upload/contact-banner.jpg";
$get_in_touch_repeater = get_field("get_in_touch_repeater", "options");
$location = get_field("location", "options");
$get_in_touch_title = get_field("get_in_touch_title");
$contact_form = get_field("contact_form");

?>

            <section class="about-banner">
                <div class="img-drop"><img class="lazyload" data-src="<?php echo $get_the_post_thumbnail_url; ?>" alt="<?php the_title(); ?>">
                    <h1 class="banner-title"><?php the_title(); ?></h1>
                </div>
            </section>

            <section class="about-block contact-block">
                <div class="container padding">
                    <div class="row">
                        <div class="col-lg-5">
                            <?php if($get_in_touch_title): ?>
                            <h2 class="big-title"><?php echo $get_in_touch_title; ?></h2>
                            <?php endif;?>
                            <?php if($get_in_touch_repeater): ?>
                                <?php foreach($get_in_touch_repeater as $k => $item): ?>
                                    <?php 
                                        $type = $item["type"]; 
                                    ?>
                                    <a class="box-contact" href="<?php echo $type=="location"?'https://www.google.com/maps/search/':'';?><?php echo $type=="phone"?'tel:':'';?><?php echo $type=="email"?'mailto:':'';?><?php echo $item["value"];?>">
                                        <div class="icon"><i class="iconi <?php echo $item["type"];?>"></i></div>
                                        <div class="text">
                                            <span><?php echo $item["value"];?></span>
                                            <span><?php echo $item["mini_text_1"];?><?php echo $item["mini_text_2"]?'<b>'.$item["mini_text_2"].'</b>':''; ?></span>
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-content">
                                <?php
                                    while ( have_posts() ) :
                                        the_post();
                                        the_content();
                                    endwhile;
                                ?>
                            </div>
                            <?php if($contact_form): ?>
                                <div class="form-style">
                                    <?php echo do_shortcode($contact_form);?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php if($location): ?>
            <section class="contact-map">
                <div class="wrap-gg-map">
                    <div id="google-map-div" data-json="{&quot;lat&quot;:<?php echo $location["lat"] ?>, &quot;lng&quot;: <?php echo $location["lng"] ?>}" data-icon="<?php the_frontend(); ?>upload/marker.svg" data-address="<?php echo $location["address"] ?>"> </div>
                </div>
            </section>
            <?php endif;?>

<?php get_footer();?>