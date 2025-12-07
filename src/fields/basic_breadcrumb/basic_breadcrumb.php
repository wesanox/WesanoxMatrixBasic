<?php
/**
 * Matrix item settings
 */
$count = 0;
?>
<nav class="breadcrumbs container my-3" aria-label="Breadcrumb">
    <ul class="nav d-flex gap-2 list-unstyled" itemscope itemtype="https://schema.org/BreadcrumbList">
        <?php foreach($page->getforPageRoot()->parents() as $item) : $count++; ?>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $item->url; ?>" class="pe-2 text-decoration-none">
                    <span itemprop="name"><?php echo htmlspecialchars($item->title); ?></span>
                </a>
                <meta itemprop="position" content="<?php echo $count; ?>">
            </li>
        <?php endforeach; ?>

        <?php $count++; ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name" aria-current="page">
                <?php echo htmlspecialchars($page->getforPageRoot()->title); ?>
            </span>
            <meta itemprop="position" content="<?php echo $count; ?>">
        </li>
    </ul>
</nav>