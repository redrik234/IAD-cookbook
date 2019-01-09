<div class="d-flex justify-content-center pt-3 pb-3">
    <form class="border border-info rounded p-5 col-lg-3 stylish-color" action="profile" method="post">
        <p class="h4 mb-4 text-center">
            Редактировать данные:
        </p>
        <label for="login">Логин:</label>
        <input type="text" id="login" class="form-control mb-4" name="login" value="<?php echo $_SESSION['auth']['login'] ?>" disabled>
        <label for="email">E-mail:</label>
        <input type="email" id="email" class="form-control mb-4" name="email" value="<?php echo $_SESSION['auth']['email'] ?>">
        <label for="password">Введите новый пароль:</label>
        <input type="password" id="password" class="form-control mb-4" name="password" placeholder="Введите пароль">
        <label for="confirmPassword">Повторите пароль:</label>
        <input type="password" id="confirmPassword" class="form-control mb-4" name="confirmPassword" placeholder="Введите пароль">
        <button class="btn btn-info btn-block my-4" type="submit" name="submit">Изменить</button>
        </div>
    </form>
</div>