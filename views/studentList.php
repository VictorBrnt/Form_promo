<div class="container text-center">
    <h2 class="text-center">Etudiants</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($aListStudent as $oStudent):
            ?>
            <tr>
                <td><?php echo $oStudent->getName(); ?></td>
                <td><?php echo $oStudent->getFirstname(); ?></td>
                <td><a class="btn btn-light"  href="index.php?action=studentDetail&id=<?php echo $oStudent->getId();?>">Detail</a>
                    <a class="btn btn-danger"  href="index.php?action=studentDelete&id=<?php echo $oStudent->getId();?>">Suppr.</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-dark mb-3" href="index.php?action=studentAdd">AJOUTER</a>
</div>