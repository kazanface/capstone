<?php  if (count($errors) > 0) : ?>
    <div class="error mt-3">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>
