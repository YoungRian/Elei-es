<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eleição Venezuelans</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="CSS/sb-admin-2.css" rel="stylesheet">
    <link href="CSS/sb-admin-2.min.css" rel="stylesheet">
    <script src="JS/sb-admin-2.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Eleição <sup>2024</sup></div>
            </a>

            <!-- Nav Item - Votar -->
            <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Votar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Resultado -->
            <li class="nav-item">
            <a class="nav-link" href="resultados.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Resultado</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Relatorio -->
            <li class="nav-item">
            <a class="nav-link" href="relatorio.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Relatorio</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

            </nav><br><Br>

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-center">   
                <h1>Relatorio Individual da Eleição</h1>
            </div><br><br>

            <div class="text-center">
            <?php
                include('conexao.php');

                $queryContagem = $conexao->query("SELECT cpf_num, vot_escolhido 
                                                FROM tb_voto
                                                JOIN tb_cpf ON vot_codigo = cpf_codigo");
                
                if($queryContagem === false) {
                    echo "Erro na Consulta SQL: " . $conexao->error;
                } else {
        
                    $resultados = $queryContagem->fetch_all(MYSQLI_ASSOC);
                
                    foreach ($resultados as $resultado) {
                        $opcao = $resultado['vot_escolhido'];
                        $individuoCpf = $resultado['cpf_num'];
                
                        echo "<p>CPF: $individuoCpf Votou '$opcao'</p>";
                    }
                }
                
                $conexao->close();
            ?> 
            </div></div></div>

             <!-- Footer -->
             <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <div class="cpyrightcolortext">Copyright &copy; Joedson Rian Website 2024</div>
                </div>
            </div>
            </footer>
            <!-- End of Footer -->

        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>