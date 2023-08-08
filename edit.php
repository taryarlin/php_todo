<?php
$db = new PDO('mysql:dbhost=localhost;dbname=php_todo', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$id = $_GET['id'];

$statement = $db->query("select * from todos where id = $id");

$todo = $statement->fetch();
?>

<?php include('layouts/header.php') ?>

<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div class="card bg-light mb-3 mt-3">
            <div class="card-header">Edit Todo</div>
            <div class="card-body">

                <form method="POST" action="/update.php?id=<?php echo $todo->id ?>">
                    <div class="form-group">
                        <label for="title">Title</label>

                        <input type="text" name="title" class="form-control" id="title"
                            value="<?php echo $todo->title; ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>

                        <textarea name="description" id="description" class="form-control"
                            rows="5"><?php echo $todo->description; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php') ?>
