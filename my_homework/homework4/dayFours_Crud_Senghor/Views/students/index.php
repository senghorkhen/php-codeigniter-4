<?= $this->extend('layouts/layout') ?>

<?= $this->section('crud-blog') ?>

    <div class="container mt-5 bg-secondary">
    <a href="/student/add" class="btn btn-info mt-3">Add Student</a>
    <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="card">
            <?php foreach($students as $student): ?>
            <div class="card-header"><?= $student['name']?></div>
            <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $student['email'] ?>
                    <span class="badge badge-success badge-pill">Email</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $student['age'] ?>
                    <span class="badge badge-warning badge-pill">Age</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $student['province'] ?>
                    <span class="badge badge-primary badge-pill">Province</span>
                </li>
            </ul>
            <hr>
                <a href="/student/delete/<?= $student['id'] ?>">
                    <i class="material-icons text-danger">delete</i>
                </a>
                <a href="/student/edit/<?= $student['id'] ?>">
                    <li class="material-icons text-info">edit</li>
                </a>      
            </div>
            <?php endforeach ?>
            </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<?= $this->endSection() ?>