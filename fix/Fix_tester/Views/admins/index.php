
<?= $this->extend('layouts/layout')?>
<?= $this->section('content-blog')?>
<?= $this->include('layouts/navbar') ?>
<h1 class="text-success">Administrator</h1>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Status</th>
    </tr>
    <?php foreach($userData as $user):?>
        <tr>
            <td><?= $user['name']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['age']?></td>
            <td> <a href="/admin/delete<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a> </td>
        </tr>
    <?php endforeach?>
</table>
<?= $this->endSection()?>