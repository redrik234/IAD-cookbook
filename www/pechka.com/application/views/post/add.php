<div class="d-flex justify-content-center pt-3">
    <div class="col-lg-8 col-md-10 mx-auto stylish-color border rounded border-dark z-depth-5">
        <form action="add" method="post">
            <label for="title" class="d-flex justify-content-center mb-3 pt-3">
                <h5>
                    Название рецепта:
                </h5>
            </label>
            <input type="text" id="title" class="form-control mb-4" name="title" placeholder="Введите название">

            <label for="description" class="d-flex justify-content-center mb-3 pt-3">
                <h5>
                    Краткое описание:
                </h5>
            </label>
            <textarea type="text" id="description" class="form-control mb-4" rows="3" name="description" placeholder="Описание"></textarea>

            <label for="text" class="d-flex justify-content-center mb-3 pt-3">
                <h5>
                    Технология приготовления:
                </h5>
            </label>
            <textarea type="text" id="text" class="form-control mb-4" rows="20" name="text" placeholder="Технология приготовления"></textarea>
            <div class="d-flex justify-content-center">
                <div class="raw">
                    <div>
                        <button class="btn btn-info btn-block my-4" type="submit">Сохранить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>