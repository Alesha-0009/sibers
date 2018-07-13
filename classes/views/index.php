<?php require_once 'layout/header.php'?>
    <form action="/home/auth" method="post" style="margin-top: 10%">
        <h3 style="text-align: center">Форма Авторизации</h3>
        <div class="form-group mt-5" style="margin-left: 30%">
            <label for="email">Login:</label>
            <input type="text" class="form-control" style="width: 50%" name="login">
            <label for="email">Password:</label>
            <input type="password" class="form-control" style="width: 50%" name="password">
        </div>
        <button type="submit" class="btn btn-success" style="margin-left: 30%">Отправить</button>
    </form>
<?php require_once 'layout/footer.php'?>
