<ul class="breadcrumbs">
    <?php foreach ($breadcrumbs as $crumb): ?>
        <li class="breadcrumbs__item">
            <?php if ($crumb['path'] != 'javascript:void(0);'): ?>
                <a href="<?= $crumb['path'] ?>" class="breadcrumbs__link"><?= $crumb['name'] ?></a>
            <?php else: ?>
                <span class="breadcrumbs__link"><?= $crumb['name'] ?></span>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>