<div class="d-flex justify-content-center pt-3">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="border border-info rounded stylish-color pl-2">
                        <a href="/post/<?php echo $val['id']; ?>">
                            <h2 class="text-primary"><?php echo htmlspecialchars($val['title'], ENT_QUOTES); ?></h2>
                            <h5 class="brown-lighter-hover"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                        <p class="post-meta">Рецепт добавлен: <?php echo $val['date']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <?php echo $pagination; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

