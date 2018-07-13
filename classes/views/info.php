<?php require_once 'layout/header.php';?>
    <div>
        <h2 class="mt-4" style="text-align: center;">Информация по выбранному пользователю - <?=$user['ID']?></h2>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>SurName</th>
                    <th>Gender</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$user['name']?></td>
                    <td><?=$user['surname']?></td>
                    <td><?=$user['gender']?></td>
                    <td> <?=$user['date_r']?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php require_once 'layout/footer.php';?>
