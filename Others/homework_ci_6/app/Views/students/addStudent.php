<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
<ul>
<?php if(isset($messages)):?>
<?= $messages->listErrors() ?>
<?php endif?>
</ul>
<div class="container">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <br>
    <div class="card shadow-sm">
      <div class="card-header"><h1 class="text-warning"> Register</h1></div>
      <div class="card-body">
            <form  action="save" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" placeholder="Enter age" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <input type="file" class="form-control" placeholder="Enter profile" id="profile" name="profile">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
            </form>
      </div>
    </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?= $this->endSection(); ?>
