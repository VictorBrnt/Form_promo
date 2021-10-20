<!-- CAS ou l'on reste sur la page apres validation du formulaire d'édition mais retour a la liste sur un ajout !-->
<h3 class="text-center"><?php if ($_GET["action"] == "subjectEdit"):
        echo "Formulaire édition";
    else:
        echo "Formulaire d'ajout";
    endif; ?></h3>
<div class="col-8 card mx-auto mt-3 shadow">
    <div class="card-body">
        <form action="<?php
        if ($_GET["action"] == "subjectEdit"):
            echo "index.php?action=subjectEdit&id=";echo $_GET['id'];
        else: echo "";
        endif;
        ?>" method="post">
            <label for="name" class="form-label">Nom</label>
            <input class="form-control" id="name" name="name" type="text" value="<?php
            if ($_GET['action'] == "subjectEdit" && (empty($_POST))):
                echo $subject->getName();
            elseif ($_GET['action'] == "subjectEdit" && !empty($_POST)):
                echo $_POST['name'];
            endif; ?>"/>
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"><?php
                if ($_GET['action'] == "subjectEdit" && (empty($_POST))):
                    echo $subject->getDescription();
                elseif ($_GET['action'] == "subjectEdit" && !empty($_POST)):
                    echo $_POST['description'];
                endif; ?></textarea>
            <label for="duration" class="form-label">Durée</label>
            <input class="form-control" id="duration" name="duration" type="number" value="<?php
            if ($_GET['action'] == "subjectEdit" && (empty($_POST))):
                echo $subject->getDuration();
            elseif ($_GET['action'] == "subjectEdit" && !empty($_POST)):
                echo $_POST['duration'];
            endif; ?>" />
            <label for="coefficient" class="form-label">Coefficient</label>
            <input class="form-control" id="coefficient" name="coefficient" type="number" value="<?php
            if ($_GET['action'] == "subjectEdit" && (empty($_POST))):
                echo $subject->getCoefficient();
            elseif ($_GET['action'] == "subjectEdit" && !empty($_POST)):
                echo $_POST['coefficient'];
            endif; ?>" />
            <input type="hidden" name="id" id="id" value="<?php
            if ($_GET['action'] == "subjectEdit" && (empty($_POST))):
                echo $subject->getId();
            elseif ($_GET['action'] == "subjectEdit" && !empty($_POST)):
                echo $_POST['id'];
            endif ?>"/>
            <button class="btn btn-dark mt-3" type="submit" name="valid" value="valid">
                <?php
                if ($_GET["action"] == "subjectEdit"):
                    echo "Editer";
                else:
                    echo "Ajouter"; endif;?>
            </button>
        </form>
    </div>
</div>
</div>
