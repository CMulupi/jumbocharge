<?php loadPartial('header.php') ?>
<?php loadPartial('nav.php') ?>
<?php loadPartial('banner.php',['heading' => 'Notes']) ?>

<main class="ms-5 mt-5">
        <?php  foreach($notes as $note) :   ?>
            
            <li class="py-2"> <a href="/note?noteid=<?php echo $note['noteid'] ?>"> <?php  echo htmlspecialchars($note['description'])?></a><a href="notes/delete?noteid=<?php echo $note['noteid'] ?>" class="text-success">| Delete |</a> </li> 
        <?php endforeach ?>
        <a href="/notes/create">
            <button class="btn btn-dark text-light m-3">New Note</button>
        </a>
</main>
<?php  loadPartial('footer.php') ?>