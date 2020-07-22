<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
<div class="container">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <br>
    <div class="card shadow-sm">
      <div class="card-header"><h1 class="text-warning"> Update Student</h1></div>
      <div class="card-body">
            <form  action="/student/update" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="<?= $student['name'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="<?= $student['email'] ?>">
            </div>
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" value="<?= $student['password'] ?>">
            </div>
             
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" placeholder="Enter age" id="age" name="age" value="<?= $student['age'] ?>">
            </div>
            <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" placeholder="Enter province" id="province" name="province" value="<?= $student['province'] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $student['id'] ?>">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
      </div>
    </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?= $this->endSection(); ?>
