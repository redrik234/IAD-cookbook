<div class="d-flex justify-content-center pt-3 pb-3">
    <form class="border border-info rounded p-5 col-lg-3 stylish-color" action="register" method="post">
        <p class="h4 mb-4 text-center">
            Регистрация
        </p>
        <input type="text" id="firstName" class="form-control mb-4" name="login" placeholder="Введите логин">
        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="Введите e-mail">
        <input type="password" id="password" class="form-control mb-4" name="password" placeholder="Введите пароль">

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="subNews" id="subNews" checked>
            <label class="custom-control-label" for="subNews">Подписаться на наши новости</label>
        </div>
        <button class="btn btn-info my-4 btn-block" type="submit">Зарегистрироваться</button>
    </form>
</div>