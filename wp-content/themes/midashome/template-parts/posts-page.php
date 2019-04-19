<?php
// var_dump($posts);

?>
<h1 class="d-none"><?php _e("TIN TỨC", "themecustom");?></h1>

<?php get_template_part( 'template-parts/block/banner'); ?>

<!-- Page Content -->
<div class="container">
    

    <?php if($posts): ?>
    <!-- About us -->
    <div class="about">
        <div class="red-line"></div>
        <button class="button-midas"><?php _e("TIN TỨC", "themecustom");?></button>

        <?php if($post):?>
        <div class="row mt-3">
            <div class="col-sm-8">
                <a href="<?php echo get_permalink($post->ID); ?>">
                    <img style="width: 100%"  src="<?php echo get_the_post_thumbnail_url($post->ID, "large"); ?>" alt="<?php echo $post->post_title; ?>">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo get_permalink($post->ID); ?>">
                    <h1><?php echo $post->post_title; ?></h1>
                </a>
                <p><?php echo $post->post_excerpt?$post->post_excerpt:wp_trim_words($post->post_content, 50, "..."); ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php foreach($posts as $key => $p): if($key==0){continue;} ?>
            <div class="row mt-20 border-news">
                    <div class="col-lg-2">
                        <img  class="pb-3 pt-3" style="height:130px; width:200px; float: left;" src="<?php echo get_the_post_thumbnail_url($p->ID, "thumbnail"); ?>" alt="<?php echo $p->post_title; ?>">
                    </div>
                    <div class="col-lg-10 pl-5">
                        <div class="title pt-3">
                            <a href="<?php echo get_permalink($p->ID); ?>" class="title-news"><?php echo $p->post_title; ?></a> 
                        </div>
                        <div class="description pb-2">
                            <?php echo $p->post_excerpt?$p->post_excerpt:wp_trim_words($p->post_content, 50, "..."); ?>
                        </div>
                    </div>
            </div>
        <?php endforeach; ?>

        <?php
            $args = array(
                'mid_size' => 5,
                'before_page_number' => '<button class="btn btn-page">',
                'after_page_number' => '</button>',
                'prev_next' => false,
                'type' => 'array'
            );
            $paging = paginate_links( $args );
        ?>
        <?php if($paging): ?>
        <div class="page mt-3">
            <?php for($i=count($paging)-1; $i>-1; $i--): ?>
                <?php echo $paging[$i]; ?>
            <?php endfor; ?>
        </div>
        <?php endif; ?>
    </div>
    <!-- End about us -->
    <?php else: ?>
        <h3 class="pt-5 text-center">Chưa có tin tức nào được đăng.</h3>
    <?php endif; ?>
    
</div>
<!-- /.container -->
