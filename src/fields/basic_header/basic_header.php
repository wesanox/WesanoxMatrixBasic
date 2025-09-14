<?php foreach($page->repeater_header_smooth AS $header) : ?>
    <div>
        <?php if ($header->iamge) : ?>
            <?php echo $header->image->url; ?>
        <?php endif; ?>
    </div>
<?php endforeach;