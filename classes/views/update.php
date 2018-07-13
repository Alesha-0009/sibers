<?php require_once 'layout/header.php'?>
    <form action="<?= '/home/update/'?>" method="post" style="margin-top: 10%">
        <h3 style="text-align: center">Форма Редактирования Пользователя</h3>
        <div class="form-group mt-5" style="margin-left: 30%">
            <label>Name:</label>
            <input type="text" class="form-control" style="width: 50%" name="name" value="<?=$user['name']?>">

            <label>SurName:</label>
            <input type="text" class="form-control" style="width: 50%" name="surname" value="<?=$user['surname']?>">

            <label>Gender:</label>
            <input type="text" class="form-control" style="width: 50%" name="gender" value="<?=$user['gender']?>">

            <label>Date:</label>
            <input type="date" class="form-control" style="width: 50%" name="date_r" value="<?=$user['date_r']?>">

            <input type="hidden" class="form-control" style="width: 50%" name="id" value="<?=$user['ID']?>">
        </div>
        <button type="submit" class="btn btn-success" style="margin-left: 30%">Отправить</button>
    </form>
<?php require_once 'layout/footer.php'?>