<?php include("session.php");
?>


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./bootstrap-5.2.0/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Site</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link active text-light " aria-current="page" href="index.php?page=1"><i
                            class="bi bi-house-fill"></i>Accueil</a>

                    <a class="nav-link active" href="index.php?page=2"> <i class="bi bi-plus"></i> Menu </a>

                    <?php if(!isset($_SESSION['id'])) { ?>
                    <a class="nav-link active" href="index.php?page=3"><i class="bi bi-person-circle pe-4"></i>Image</a>


                    <a class="btn btn-light position-absolute " style="right: 0px" href="index.php?page=4 pe-4">Log</a>
                    <?php } else {?>

                    <a class="nav-link text-dark" href="./logout.php">
                        <i class="bi bi-person-fill pe-2"></i>Se déconnecter
                    </a>
                    <?php }
                            ?>

                </div>
            </div>
        </div>
    </nav>




    <?php 




    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        if($page == 1) {
            include('./accueil.php');
        }else if($page == 2){
            include('./menu.php');
        }else if($page == 3) {
            include('./image.php');
        }else if($page == 4) {
            include('./documentation.php');
                
        }
    }else{
        include('./accueil.php');
    }
    
    ?>
    <footer><br>
        @Mohamed
    </footer>
    <script src="./bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>

</body>