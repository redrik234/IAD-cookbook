<div class="d-flex justify-content-center pt-3">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto stylish-color border rounded border-dark z-depth-5">
            <h3 class="container-fluid pt-5 mb-4">
                    Название рецепта: <?php echo $data['title']; ?>
            </h3>
            <h4 class="container-fluid mb-4">
                    Автор рецепта: <?php echo $data['author']; ?>
            </h4>
            <h5 class="container-fluid mb-4">
                    Дата добавления: <?php echo $data['date']; ?>
            </h5>

            <div class="container-fluid mb-4">
                <h5 class="d-flex justify-content-center pt-3">
                    Технология приготовления
                </h5>
                <div >
                    <?php echo $data['text']; ?>
            </div>
        </div>
    </div>
</div>
