<?php include("db.php")?>
<?php include("includes/header.php")?>
<div class="container p-4">

    <div class="row">
         
        <div class="cold-md-4">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo de la tarea" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Describir tarea"></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="cold-md-8">

        </div>

    </div>

<?php include("includes/footer.php")?>