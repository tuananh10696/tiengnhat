<div class="cs-txt-and-img">
    <div class="<?= $attributes['ct_position'] == 'left' ? 'cs-img-left' : 'cs-img-right' ?>">
        <?php if (check_img($attributes['ct_img']['url'])) echo '<img src="' . $attributes['ct_img']['url'] . '" class="img-fluid w-200 rounded" alt="' . $attributes['ct_img']['alt'] . '">'; ?>
    </div>
    <div class="mb-0"><?= $attributes['ct_content'] ?></div>
</div>