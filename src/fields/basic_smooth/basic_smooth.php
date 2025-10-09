<div class="container">
    <div class="position-relative d-block smooth_scroll">
        <?php foreach ($page->repeater_header_smooth as $item) :
            $img = ($item->image) ? ' style="background-image: url(' . $item->image->url . ');"' : '';
            ?>
            <div class="w-100 overflow-hidden snap-item"<?php echo $img; ?>>
                <?php if ($item->file_video) : ?>
                    <video class="position-absolute top-50 z-0 w-100 snap-item_video" autoplay muted loop playsinline>
                        <source src='<?php echo $item->file_video->url; ?>' type='video/mp4'>
                    </video>
                <?php endif; ?>
                <div class=" position-absolute z-1 h-100 w-100 snap-item_overlay"></div>
                <div class="position-relative z-2 h-100 w-100 px-5 d-flex align-items-center">
                    <div class="snap-item_content">
                        <?php echo $modules->get('WesanoxHelperClasses')->getHeadline($item->edit('headline'), $item->headline_tags, $item->headline_class, $item->headline_align); ?>
                        <?php echo $item->text; ?>
                        <?php echo $modules->get('WesanoxHelperClasses')->renderLink($item); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>