<div class="col-3 card mx-auto mt-5 shadow text-center">
    <div class="card-body">
        <h5 class="card-title"><?php echo $student->getName(); echo $student->getFirstname();?></h5>
<p class="card-text"><?php echo $student->getBirthdate(); ?></p>
        <a class="btn btn-dark d-grid" href="index.php?action=studentEdit&id=<?php echo $student->getId();?>" class="card-link">Editer</a>
    </div>
</div>
