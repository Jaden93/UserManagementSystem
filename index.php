<?php
require "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

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
                        <tr class="action<?php echo $user['id']?>">
                        <th data_id="<?php echo $user['id']?>" class="currRecord"><button class="far fa-play-circle btn customIcon editBtn" 
                        data-bs-toggle="modal" data-bs-target="#modal"></button><?= $user['id'] ?></th>
                        <th ><?= $user['nome'] ?></th>
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
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatableid').DataTable({

                "paging": false,
                "info": false,
                "searching": false
            });
        });
    </script>    
    <script src="./controller/update.js"></script>
    <script src="./controller/delete.js"></script>
</body>

</html>
