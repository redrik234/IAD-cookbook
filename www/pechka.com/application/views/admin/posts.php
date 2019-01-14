<div class="content-wrapper">
    <div class="container">
        <div class="card mb-3 ">
            <div class="card-body border border-info rounded stylish-color">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>Список постов пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <thead class="white-text">
                                    <tr class="d-flex">
                                        <th class="col-8">Название</th>
                                        <th class="col-8">Описание</th>
                                        <th class="col-8">Удалить</th>
                                    </tr>
                                </thead>
                                <?php foreach ($list as $val): ?>
                                    <tr class="d-flex">
                                        <td class="col-8"><?php echo htmlspecialchars($val['title'], ENT_QUOTES); ?></td>
                                        <td class="col-8"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></td>
                                        <td class="col-8"><a href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <div class="mx-auto brown-lighter-hover">
                                <?php echo $pagination; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>