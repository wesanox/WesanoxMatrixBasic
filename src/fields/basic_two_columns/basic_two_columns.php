<?php
$anchor_id = ($page->anchor_id) ? ' id="' . $page->anchor_id . '"': '';

$html_left = '';
$html_right = '';

foreach ($page->repeater_two_col as $content) {
    $background_color = $page->getForPage()->getBackgroundColor($content->select_background_color);
    $container = ($content->checkbox_fw) ? '' : 'container_content_two_col';
    $css_class = ($content->text_class) ? ' ' . $content->text_class : '';

    switch ($content->select_side) {
        case '1':
            $html_left .=
                '<div class="' . $container . $background_color . $css_class . '">'
                    . $content->render('matrix_content') .
                '</div>';
            break;
        case '2':
            $html_right .=
                '<div class="' . $container . $background_color . $css_class . '">'
                    . $content->render('matrix_content') .
                '</div>';
            break;
    }
}

$css_class = ($page->text_class) ? ' ' . $page->text_class : '';
?>
<section<?php echo $anchor_id; ?> class="<?php echo $page->matrix('type'); ?> d-grid<?php echo $css_class; ?>">
    <div>
        <?php echo $html_left; ?>
    </div>
    <div>
        <?php echo $html_right; ?>
    </div>
</section>