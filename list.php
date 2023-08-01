<?php include('layouts/header.php') ?>

<?php
    $db = new PDO('mysql:dbhost=localhost;dbname=php_todo', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);

$statement = $db->query("select * from todos");

$todos = $statement->fetchAll();
?>

<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="20%">Title</th>
                    <th>Description</th>
                    <th width="13%">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($todos as $todo) : ?>
                <tr>
                    <td><?php echo $todo->title; ?></td>

                    <td><?php echo $todo->description; ?></td>

                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>

                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('layouts/footer.php') ?>
