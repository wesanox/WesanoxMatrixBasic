<div class="parallax-hero">
    <?php foreach ($page->repeater_parallax_images AS $key => $parallax) : ?>
        <?php if ($parallax->image) :
            $parallax_y = ($parallax->text_parallax_y) ? ' data-speed-y="' . $parallax->text_parallax_y . '"' : '';
            $parallax_x = ($parallax->text_parallax_x) ? ' data-speed-x="' . $parallax->text_parallax_x . '"' : '';
            ?>
            <img src="<?php echo $parallax->image->url ?>" alt="<?php echo $parallax->image->description; ?>" id="parallax-<?php echo $key ?>"<?php echo $parallax_y . $parallax_x; ?>>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if ($page->matrix_content->count != 0) : ?>
        <div id="text" data-speed-y="2.25">
            <?php echo $modules->get('WesanoxHelperClasses')->renderMatrix('content', $page->matrix_content,  'div'); ?>
        </div>
    <?php endif; ?>
</div>