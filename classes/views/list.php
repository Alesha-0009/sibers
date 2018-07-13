<?php require_once  'layout/header.php';?>
<?php require_once 'component/Pagination.php';?>
    <?php $pagination = new Pagination;?>
    <div class="container">
        <h2 style="text-align: center" class="mt-5">Список всех пользователей</h2>
        <a href="/home/add"><button class="btn btn-success">Add New User</button></a>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>SurName</th>
                    <th>Gender</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <? foreach ($users as $key => $user):?>
                    <tr>
                        <td><?=$user['name']?></td>
                        <td><?=$user['surname']?></td>
                        <td><?=$user['gender']?></td>
                        <td><?=$user['date_r']?></td>
                        <td>
                            <a href="<?='/home/show/' . $user['id']?>"><button class="btn btn-primary">Show</button></a>
                            <a href="<?='/home/update/' . $user['id']?>"><button class="btn btn-warning">Update</button></a>
                            <a href="<?='/home/delete/' . $user['id']?>"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?endforeach;?>
            </tbody>
        </table>
       <?php $pagination->paginate();?>
    </div>
<?php require_once 'layout/footer.php'?>
