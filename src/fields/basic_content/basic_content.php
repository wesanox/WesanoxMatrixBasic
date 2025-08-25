<?php
$css_class              = ($page->text_class) ? ' ' . $page->text_class : '';
$css_class_container    = (!$page->checkbox_fw) ? ' class="container"' : '';
?>
<div<?php echo $css_class_container; ?>>
    <div class="row">
        <?php foreach($page->repeater_content AS $content) : ?>
            <div class="<?php echo $content->text_class . $modules->get('WesanoxHelperClasses')->getColumnHelper($content->select_width_column, $content->select_offset_column); ?>">
                <?php echo $modules->get('WesanoxHelperClasses')->renderMatrix('content', $content->matrix_content,  'div'); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>