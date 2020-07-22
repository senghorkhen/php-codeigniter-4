<?= $this->extend('layouts/layout') ?>

<?= $this->section('crud-blog') ?>

    <div class="container mt-5">
    <style>
        .container  {
            background: #cccccc;
        }
        .icon-blog {
            margin-left: 450px;
            display: flex;
        }
    </style>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <a href="/student/add" class="btn btn-info mt-3 text-right">Register</a>
            <hr>
            <div class="card mb-4">
            <?php foreach($students as $student): ?>
            <div class="card-header text-center text-success">Welcome To Picture</div>
            <div class="card-body">
            <div class="row img-reponsive">
                <div class="col-12">
                <img src="<?= $student['profile'] ?>" width="500" height="310"> 
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <strong><h5><?= $student['name']?></h5></strong>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <?= $student['email'] ?> / <span class="badge badge-danger">Age=<?= $student['age'] ?></span>
                </div>
            </div>   
            <hr>
                <div class="icon-blog">
                <a href="/student/remove/<?= $student['id'] ?>">
                    <i class="material-icons text-danger">delete</i>
                </a> 
                <a href="/student/edit/<?= $student['id'] ?>">
                    <li class="material-icons text-info">edit</li>
                </a> 
                </div>    
            </div>
            <?php endforeach ?>
            </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <hr>
    <ul>
        <?php if(isset($messages)): ?>
            <?= $messages->listErrors() ?>
        <?php endif ?>
    </ul>

<?= $this->endSection() ?>