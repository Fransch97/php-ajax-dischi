<main>
    <div class="container main">
    <?php foreach($discs as $disc) :?>
        <div class="card-sc">
            <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>" class="card.genre">
            <p><?php echo $disc['title']?></p>
            <span><?php echo $disc['author'] ?></span>
        </div>
    <?php endforeach; ?>
    </div>

</main>