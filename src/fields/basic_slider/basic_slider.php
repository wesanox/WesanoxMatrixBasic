<div class="container">
    <div class="swiper-arrows d-flex d-lg-none g-4">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="swiper basic-grid-and-slides-swiper" value="<?php echo $page->int_slider; ?>">
        <div class="swiper-wrapper">
            <?php foreach( $page->repeater_slider as $slider ) : ?>
                <div class="swiper-slide">
                    <?php echo $slider->render('matrix_content'); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>