<?php
    global $post, $banner_img_alt;

    $default_img = get_frontend()."img/banner1.png";
    $sliders_page = get_field('sliders_page');
    if($banner_img_alt){
        $default_img = $banner_img_alt["sizes"]["large"];
    }
    elseif(has_post_thumbnail()){
        $default_img = get_the_post_thumbnail_url(null, "full");
    }
?>
        <!-- Slider -->
        <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators d-none">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active item-drop item-banner">
                    <img src="<?php echo $default_img; ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div> -->

        <!-- Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <?php if($sliders_page && count($sliders_page)>1): ?>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php foreach($sliders_page as $index_slide => $slide): ?>

                    <li data-target="#myCarousel" data-slide-to="<?php echo $index_slide ?>" class="<?php echo $index_slide<1?'active':''; ?>"></li>
                <?php endforeach; ?>
            </ol>
            <?php endif; ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(!$sliders_page): ?>

                <div class="item active item-drop item-banner">
                    <img src="<?php echo $default_img; ?>" alt="<?php the_title(); ?>">
                </div>
                <?php else: ?>
                    <?php foreach($sliders_page as $index_slide => $slide): ?>

                    <div class="item <?php echo $index_slide<1?'active':''; ?> item-drop item-banner">
                        <img src="<?php echo $slide['img']["sizes"]["large"]; ?>" alt="<?php echo $slide['img']["alt"]; ?>">
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

            <?php if($sliders_page): ?>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            <?php endif; ?>

        </div>