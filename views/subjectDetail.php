<div class="col-6 card mx-auto mt-5 shadow">
    <div class="card-body">
        <h5 class="card-title"><?php echo $subject->getName(); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $subject->getDuration(); ?>heures soit: <?php echo $subject->getDayAtWork(); ?></h6>
        <h6 class="card-subtitle mb-2 text-muted">Coefficient:<?php echo $subject->getCoefficient(); ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $subject->infoCoeff($subject); ?></h6>
        <hr>
        <p class="card-text"><?php echo $subject->getDescription(); ?></p>
        <a class="btn btn-dark d-grid" href="index.php?action=subjectEdit&id=<?php echo $subject->getId();?>" class="card-link">Editer</a>
    </div>
</div>
