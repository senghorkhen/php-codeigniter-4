<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
<h1 class="text-success">Administrator</h1>
<table class="table table-bordered">
   <tr>
   <th>Name</th>
   <th>email</th>
   <th>Age</th>
   <th>Password</th>
   <th>Province</th>
   <th>Status</th>
   </tr>
   <?php foreach($userDate as $user):?>
    <tr>
     <td><?= $user['name'] ?></td>
     <td><?= $user['email'] ?></td>
     <td><?= $user['age'] ?></td>
     <td><?= $user['password'] ?></td>
     <td><?= $user['province'] ?></td>
     <td><a href="/admin/remove/<?= $user['id']?>"><i class="material-icons" style="color:red;">delete</i></a></td>
    </tr>
    <?php endforeach?>
</table>
<?= $this->endSection(); ?>
