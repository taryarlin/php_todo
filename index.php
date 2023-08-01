<?php include('layouts/header.php') ?>

<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div class="card bg-light mb-3 mt-3">
            <div class="card-header">Create Todo</div>
            <div class="card-body">

                <form method="POST" action="/store.php">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php') ?>
