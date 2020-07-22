
<?= $this->extend('layouts/layout') ?>

<?= $this->section('crud-blog') ?>
 
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h3 class="text-success text-center">Update Student</h3></div>
                <div class="card-body">
                <form action="/student/update" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="<?= $student['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="<?= $student['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" placeholder="Enter age" id="age" name="age" value="<?= $student['age'] ?>">
                </div>
                <div class="form-group">
                    <label for="province">Profile:</label>
                    <input type="file" class="form-control" placeholder="Enter profile" id="profile" name="profile" value="<?= $student['profile'] ?>>
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
<?= $this->endSection() ?>
