<?php
    global $post;
    $default_img = get_frontend()."img/banner1.png";
    if(has_post_thumbnail()){
        $default_img = get_the_post_thumbnail_url(null, "full");
    }
?>
        <!-- Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators d-none">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active item-drop item-banner">
                    <img src="<?php echo $default_img; ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>