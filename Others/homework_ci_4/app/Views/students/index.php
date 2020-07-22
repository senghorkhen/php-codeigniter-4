<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
<a href="/student/add " class="btn btn-info mt-5">Add Student</a>
<h1 class="text-warning text-center"> Student Informatiom</h1>
<hr>
<div class="container">
 <div class="row">
  <div class="col-3"></div>
  <div class="col-6 ">
   <?php foreach($students as $student):?>
    <div class="card">
      <div class="card-header text-center"><?= $student['name'] ?></div> 
      <div class="card-body">
      <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $student['email'] ?>
            <span class="badge badge-primary badge-pill">Email</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $student['password'] ?>
            <span class="badge badge-danger badge-pill">Password</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $student['age'] ?>
            <span class="badge badge-warning badge-pill">Age</span>
          </li>

          <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $student['province'] ?>
            <span class="badge badge-info badge-pill">Province</span>
          </li>
      </ul>
      <hr>
      <a href="/student/remove/<?= $student['id'] ?>"><i class="material-icons" style="color:red;">delete</i></a>
      <a href="/student/edit/<?= $student['id'] ?>"><i class="material-icons" style="color:teal;">edit</i></a>
   </div>
   <?php endforeach?>
  </div>
  <div class="col-3"></div>
 
 </div>
</div>
<?= $this->endSection(); ?>
