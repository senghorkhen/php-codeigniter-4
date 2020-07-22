<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
<div class="container">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <br>
    <div class="card shadow-sm">
      <div class="card-header"><h1 class="text-warning"> Add New Student</h1></div>
      <div class="card-body">
            <form  action="save" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" placeholder="Enter age" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" placeholder="Enter province" id="province" name="province">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
      </div>
    </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?= $this->endSection(); ?>
