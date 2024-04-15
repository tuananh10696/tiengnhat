<div class="bg-light rounded my-4 p-4">
    <?php if ($attributes['fr'] != '') echo '<h4 class="mb-4">' . $attributes['fr_title'] . '</h4>'; ?>
    <div class="row g-4">
        <?php foreach ($attributes['fr'] as $fr_dt) : ?>
            <div class="<?= count($attributes['fr']) > 1 ? 'col-lg-6' : '' ?>">
                <div class="d-flex align-items-center p-3 bg-white rounded">
                    <?php if (check_img($fr_dt['fr_img']['url'])) echo '<img width="100px" height="100px" class="img-fluid rounded" src="' . $fr_dt['fr_img']['url'] . '" alt="' . $fr_dt['fr_img']['alt'] . '" />'; ?>
                    <div class="ms-3">
                        <h5 class="h6 mb-2"><?= $fr_dt['fr_title_2'] ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>