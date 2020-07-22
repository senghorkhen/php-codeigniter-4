<?= $this->extend('layouts/layout') ?>

<?= $this->section('content-blog') ?>
    <div class="container mt-5" >
    <style>
        .allIcons {
            margin-left: 450px;
            display: flex;
        }
    </style>
        <div class="row ">
            <div class="col-3"></div>
            <div class="col-6">
            <a href="/student/add" class="btn btn-info mt-3 text-right">Register</a>
            <hr>
            <div class="card mb-4">
            <?php foreach($students as $student): ?>
            <img class="card-img-top" src="images/<?= $student['profile'] ?>" width="500" height="200">
            <div class="card-body">
            <div class="row">
                <div class="col-12">
               
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <?= $student['email'] ?> / <span class="badge badge-danger">Age=<?= $student['age'] ?></span>
                </div>
            </div>   
            <hr>
                <div class="allIcons">
                <a href="/student/remove/<?= $student['id'] ?>">
                    <i class="material-icons text-danger" style="">delete</i>
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
<?= $this->endSection() ?>