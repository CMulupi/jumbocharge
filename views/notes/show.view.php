<?php loadpartial('header.php') ?>
<?php loadpartial('nav.php') ?>
<?php loadpartial('banner.php', ['heading' => 'My Note']) ?>


<main class="ms-5 mt-5">
    <div class="mb-5">
        <a href="/notes">Back to Notes</a>
</div>

    <?php echo $note['description'] ?>
    <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input hidden type="text" name="noteid" id="noteid" value=<?php echo $note['noteid'] ?>>
        <button class="btn btn-link" type="submit">Delete</button>
    </form>

</main>
<?php loadpartial('footer.php') ?>