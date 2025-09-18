<?php
/**
 * Image Slider only
 */
if ($page->select_header_options == "1") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>-slider">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <div class="swiper-slide">
                    <img src="<?php echo $header->image->url; ?>" alt="<?php echo $header->image->description; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * Video Slider only
 */
elseif ($page->select_header_options == "2") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>-slider">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <div class="swiper-slide">
                    <video></video>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * Video Slider / Image Cover
 */
elseif ($page->select_header_options == "3") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>-slider">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <div class="swiper-slide">
                    <video></video>
                    <img src="<?php echo $header->image->url; ?>" alt="<?php echo $header->image->description; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * One Video / Image Slider
 */
elseif ($page->select_header_options == "4") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>-slider">
        <div class="swiper-wrapper">
            <video></video>
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <div class="swiper-slide">
                    <img src="<?php echo $header->image->url; ?>" alt="<?php echo $header->image->description; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * Error Message, when nothing is chosen
 */
else:
    ?>
    <p class="text-danger">Bitte wähle eine Header Option im Backend aus.</p>
<?php endif;