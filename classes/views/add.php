<?php require_once 'layout/header.php';?>
<form action="/home/register" method="post" style="margin-top: 10px;">
    <h3 class="mt-3" style="text-align: center">Форма Создания Нового Пользователя</h3>
    <div class="form-group mt-5" style="margin-left: 30%">
        <label for="email">Введите Имя:</label>
        <input type="text" class="form-control" style="width: 50%" name="name" placeholder="Иван">

        <label for="email">Введите Фамилию:</label>
        <input type="text" class="form-control" style="width: 50%" name="surname" placeholder="Иванов">

        <label for="email">Введите Пол:</label>
        <input type="text" class="form-control" style="width: 50%" name="gender" placeholder="мужчина либо женщина">

        <label for="email">Введите Свою Дату Рождения:</label>
        <input type="text" class="form-control" style="width: 50%" name="date_r" placeholder="2018-07-22">

        <label for="email">Введите Логин:</label>
        <input type="text" class="form-control" style="width: 50%" name="login">

        <label for="email">Введите Пароль:</label>
        <input type="password" class="form-control" style="width: 50%" name="password">
    </div>
    <button type="submit" class="btn btn-success" style="margin-left: 30%">Создать</button>
</form>
<?php require_once 'layout/footer.php';?>
