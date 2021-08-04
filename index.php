<?php

require "./controller/function.php";
require "view/header.php";

?>
    <div id="toggle" class="toggle py-5 alert alert-success text-center">Utente Eliminato</div>
    <div class="container centerTable">
        <div class="d-flex justify-content-between">
            <i class="fas fa-search"></i>
            <button type="button" class="btn customBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span
                class="customCross">+</span>Aggiungi</button>           
        </div>

        <?php
        $options = insertTipo();
        require_once "./view/formInser.php";
        require_once "./view/formInsert.php"; 
        $users = getUser();  
        ?>
        
        <table id="datatableid" class="customLine" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Indirizzo</th>
                    <th>Data</th>
                    <th>Email</th>
                    <th>Attivo</th>
                </tr>
            </thead>
            <tbody class="customBg">
                
                <?php 
                if ($users) {
                    foreach ($users as $user) { ?>
                    <tr data_value=<?= $user['id']?> class="action<?php echo $user['id']?>">
                        <th  class="currRecord"><button data_id="<?= $user['id']?>" class="far fa-play-circle btn customIcon editBtn" 
                            data-bs-toggle="modal" data-bs-target="#modal"></button><?= $user['id'] ?></th>
                        <th><?= $user['nome'] ?></th>
                        <th><?= $user['tipo'] ?></th>
                        <th><?= $user['indirizzo'] ?></th>
                        <th><?= $user['data'] ?></th>
                        <th><?= $user['email'] ?></th>
                        <th><?= $user['attivo'] ?></th>                        
                    </tr>
                    <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
<?php 
    require_once "view/footer.php";
?>