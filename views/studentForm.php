<!-- Cas ou l'on retourne a liste apres ajout et sur le detail d'un élève apres edition !-->
<h3 class="text-center"><?php if ($_GET["action"] == "studentEdit"):
        echo "Formulaire édition";
    else:
        echo "Formulaire d'ajout";
    endif; ?></h3>
<div class="col-8 card mx-auto mt-3 shadow">
    <div class="card-body">
        <form action="" method="post">
            <label for="name" class="form-label">Nom</label>
            <input class="form-control" id="name" name="name" type="text" value="<?php
            if ($_GET['action'] == "studentEdit" && (empty($_POST))):
                echo $student->getName();
            elseif ($_GET['action'] == "studentEdit" && !empty($_POST)):
                echo $_POST['name'];
            endif; ?>"/>
            <label for="firstname" class="form-label">Prénom</label>
            <input class="form-control" id="firstname" name="firstname" value="<?php
            if ($_GET['action'] == "studentEdit" && (empty($_POST))):
                echo $student->getFirstName();
            elseif ($_GET['action'] == "studentEdit" && !empty($_POST)):
                echo $_POST['firstname'];
            endif; ?>"/>
            <label for="birthdate" class="form-label">Date de naissance</label>
            <input class="form-control" id="birthdate" name="birthdate" type="date" value="<?php
            if ($_GET['action'] == "studentEdit" && (empty($_POST))):
                echo $student->getBirthdate();
            elseif ($_GET['action'] == "studentEdit" && !empty($_POST)):
                echo $_POST['birthdate'];
            endif; ?>" />
            <input type="hidden" name="id" id="id" value="<?php
            if ($_GET['action'] == "studentEdit" && (empty($_POST))):
                echo $student->getId();
            elseif ($_GET['action'] == "studentEdit" && !empty($_POST)):
                echo $_POST['id'];
            endif ?>"/>
            <button class="btn btn-dark mt-3" type="submit" name="valid" value="valid">
                <?php
                if ($_GET["action"] == "studentEdit"):
                    echo "Editer";
                else:
                    echo "Ajouter"; endif;?>
            </button>
        </form>
    </div>
</div>
</div>
