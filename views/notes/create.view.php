<?php loadpartial('header.php') ?>
<?php loadpartial('nav.php') ?>

<main>
   
    <div class="row">

        <div class="col-md-6 mx-auto">
        <?php loadpartial  ('banner.php',['heading' =>'Create Note']) ?>
            <form action="/notes" method="POST">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="6"><?php echo !empty($errors) ? $_POST['description'] : ''; ?> </textarea>
                    <p><?php echo $errors['description'] ?? '' ?></p>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</main>
<?php loadpartial ('footer.php') ?>