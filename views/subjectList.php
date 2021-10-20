<div class="container text-center">
    <h2 class="text-center">Liste Matières</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($aSubjectsCollection as $subject):
            ?>
            <tr>
                <td><?php echo $subject->getName(); ?></td>
                <td><a class="btn btn-outline-light"  href="index.php?action=subjectDetail&id=<?php echo $subject->getId();?>">Detail</a>
                    <a class="btn btn-danger"  href="index.php?action=subjectDelete&id=<?php echo $subject->getId()?>">Suppr.</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-dark mb-3" href="index.php?action=subjectAdd">AJOUTER</a>
</div>
