<div class="d-flex justify-content-center pt-3 pb-3">
    <form class="border border-info rounded p-5 col-lg-3 stylish-color" action="login" method="post">
        <p class="h4 mb-4 text-center">
            Вход
        </p>
        <input type="text" id="login" class="form-control mb-4" name="login" placeholder="Введите логин">
        <input type="password" id="password" class="form-control mb-4" name="password" placeholder="Введите пароль">
        <div class="d-flex justify-content-between">
            <div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember">
                    <label class="custom-control-label" name="remember" for="remember">Запомнить меня</label>
                </div>
            </div>
            <div>
                <a href="recovery">Забыли пароль?</a>
            </div>
        </div>
        <button class="btn btn-info btn-block my-4" type="submit" name="submit">Войти</button>
        <div class="text-center">
            <p>Еще не зарегистрированы?
                <a href="register">Регистрация</a>
            </p>
        </div>
    </form>
</div>