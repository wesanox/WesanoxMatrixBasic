<?php
/**
 * Image Slider only
 */
if ($page->select_header_options == "1") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>_swiper-one">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <div class="swiper-slide">
                    <img class="w-100 img-fluid lazy" data-src="<?php echo $header->image->getCrop('desktop')->url; ?>" alt="<?php echo $header->image->description; ?>" />
                    <?php if ($header->headline || $header->text) : ?>
                        <div class="position-absolute z-3 swiper-slide-content">
                            <div class="p-5">
                                <?php echo $modules->get('WesanoxHelperClasses')->getHeadline($header->edit('headline'), $header->headline_tags, $header->headline_class, $header->headline_align); ?>
                                <?php echo $header->text; ?>
                                <?php echo $modules->get('WesanoxHelperClasses')->renderLink($header); ?>
                            </div>
                        </div>
                    <?php endif; ?>
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
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>_swiper-two">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) : ?>
                <?php if($header->file_video) : ?>
                    <div class="swiper-slide basic_video-box position-relative">
                        <video class="h-100 w-100" controls aria-describedby="video-transkript-<?php echo $header->id ?>" tabindex="-1">
                            <source src="<?php echo $header->file_video->url; ?>" type="video/mp4">
                            <?php if ($header->file_video_subtitle) : ?>
                                <track src="<?php echo $header->file_video_subtitle->url; ?>" kind="subtitles" srclang="de" label="Deutsch" default>
                            <?php endif; ?>
                            Ihr Browser unterstützt dieses Video-Element nicht.
                        </video>
                        <div id="video-transkript-<?php echo $header->id ?>" class="visually-hidden">
                            <h2>Transkript des Videos</h2>
                            <p><strong>Sprecher:</strong><?php echo $header->text_video_speaker; ?></p>
                            <p><strong>Beschreibung:</strong> <?php echo $header->text_video_description; ?></p>
                        </div>
                        <div class="position-absolute top-0 start-0 z-1 d-flex justify-content-center align-items-center h-100 w-100 video-button">
                            <img class="play-icon" src="/site/modules/WesanoxMatrixBasic/src/fields/basic_header/images/play-button.png" alt="Video Play">
                        </div>
                        <?php if ($header->headline || $header->text) : ?>
                            <div class="position-absolute z-3 swiper-slide-content">
                                <div class="p-5">
                                    <?php echo $modules->get('WesanoxHelperClasses')->getHeadline($header->edit('headline'), $header->headline_tags, $header->headline_class, $header->headline_align); ?>
                                    <?php echo $header->text; ?>
                                    <?php echo $modules->get('WesanoxHelperClasses')->renderLink($header); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * Video Slider / Image Cover
 */
elseif ($page->select_header_options == "3") :
    ?>
    <div class="swiper-slider <?php echo $page->matrix('type'); ?>_swiper-three">
        <div class="swiper-wrapper">
            <?php foreach($page->repeater_header_smooth AS $header) :
                $background = ($header->image) ? ' style="background-image: url(' . $header->image->url . ');"' : '';

                if($header->file_video) :
                ?>
                    <div class="swiper-slide basic_video-box position-relative">
                        <video class="h-100 w-100" controls aria-describedby="video-transkript-<?php echo $header->id ?>" tabindex="-1">
                            <source src="<?php echo $header->file_video->url; ?>" type="video/mp4">
                            <?php if ($header->file_video_subtitle) : ?>
                                <track src="<?php echo $header->file_video_subtitle->url; ?>" kind="subtitles" srclang="de" label="Deutsch" default>
                            <?php endif; ?>
                            Ihr Browser unterstützt dieses Video-Element nicht.
                        </video>
                        <div id="video-transkript-<?php echo $header->id ?>" class="visually-hidden">
                            <h2>Transkript des Videos</h2>
                            <p><strong>Sprecher:</strong><?php echo $header->text_video_speaker; ?></p>
                            <p><strong>Beschreibung:</strong> <?php echo $header->text_video_description; ?></p>
                        </div>
                        <div class="position-absolute top-0 start-0 z-1 d-flex justify-content-center align-items-center h-100 w-100 video-button"<?php echo $background; ?>>
                            <img class="play-icon" src="/site/modules/WesanoxMatrixBasic/src/fields/basic_header/images/play-button.png" alt="Video Play">
                        </div>
                        <?php if ($header->headline || $header->text) : ?>
                            <div class="position-absolute z-3 swiper-slide-content">
                                <div class="p-5">
                                    <?php echo $modules->get('WesanoxHelperClasses')->getHeadline($header->edit('headline'), $header->headline_tags, $header->headline_class, $header->headline_align); ?>
                                    <?php echo $header->text; ?>
                                    <?php echo $modules->get('WesanoxHelperClasses')->renderLink($header); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php
/**
 * One Video / Image Slider
 */
elseif ($page->select_header_options == "4") :
    ?>
    <div class="basic_video-box position-relative">
        <video class="h-100 w-100" controls aria-describedby="video-transkript-<?php echo $page->id ?>" tabindex="-1">
            <source src="<?php echo $page->file_video->url; ?>" type="video/mp4">
            <?php if ($page->file_video_subtitle) : ?>
                <track src="<?php echo $page->file_video_subtitle->url; ?>" kind="subtitles" srclang="de" label="Deutsch" default>
            <?php endif; ?>
            Ihr Browser unterstützt dieses Video-Element nicht.
        </video>
        <div id="video-transkript-<?php echo $page->id ?>" class="visually-hidden">
            <h2>Transkript des Videos</h2>
            <p><strong>Sprecher:</strong><?php echo $page->text_video_speaker; ?></p>
            <p><strong>Beschreibung:</strong> <?php echo $page->text_video_description; ?></p>
        </div>
        <div class="swiper-slider <?php echo $page->matrix('type'); ?>_swiper-four overflow-hidden position-absolute top-0 start-0 h-100 w-100">
            <div class="swiper-wrapper">
                <?php foreach($page->repeater_header_smooth AS $header) : ?>
                    <div class="swiper-slide position-relative video-button">
                        <img class="play-icon position-absolute top-50 end-50" src="/site/modules/WesanoxMatrixBasic/src/fields/basic_header/images/play-button.png" alt="Video Play">
                        <img class="w-100 lazy" data-src="<?php echo $header->image->getCrop('desktop')->url; ?>" alt="<?php echo $header->image->description; ?>" />
                        <?php if ($header->headline || $header->text) : ?>
                            <div class="position-absolute z-3 swiper-slide-content">
                                <div class="p-5">
                                    <?php echo $modules->get('WesanoxHelperClasses')->getHeadline($header->edit('headline'), $header->headline_tags, $header->headline_class, $header->headline_align); ?>
                                    <?php echo $header->text; ?>
                                    <?php echo $modules->get('WesanoxHelperClasses')->renderLink($header); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
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