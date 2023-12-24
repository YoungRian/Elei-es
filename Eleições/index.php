<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eleição Venezuelana</title>

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
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <br><br><br>
            <div class="d-flex justify-content-center">   
                <h1>Vote Agora!</h1>
            </div>

            <div class="d-flex justify-content-center">
                <form action="?" method="POST">
                    <label for="cpf" class="d-flex justify-content-center">Digite Seu CPF</label>
                    <input type="text" name="cpf" class="inputCpf" maxlength='11' value='' pattern="\d{11}" placeholder="Digite Aqui (Apenas Números)" oninput="validarCPF()" aria-required="true" required><br>
                    <p id="aviso" class="aviso" style="display: none;">O CPF deve conter 11 digitos no máximo</p><br><br>
                    <div aria-required="true" class="centralizar">
                        <label for="votar">
                            <input type="radio" name="votar" id="opsim" value="Sim">
                            SIM
                        </label>
                        <a style ="margin-right: 10px;"></a>
                        
                        <label for="votar">
                            <input type="radio" name="votar" id="opnao" value="Não">
                            NÃO
                        </label>
                        <a style ="margin-right: 10px;"></a>

                        <label for="votar">
                            <input type="radio" name="votar" id="opbranco" value="Branco">
                            BRANCO
                        </label><br>
                        <a style ="margin-right: 10px;"></a>
                    </div>
                        <div class="d-flex justify-content-center form-submit-button main">
                            <button class="button" type="submit" name="enviar" value="votar">Enviar</button>
                        </div>
                </form><br>
            </div>

            <div class="d-flex justify-content-center">
                <?php
                    include('conexao.php');
        
                    if(isset($_POST["enviar"])){
                        $cpf = $_POST["cpf"];
                        $votacao = $_POST["votar"];
                                    
                        $veriCpf = $conexao->query("SELECT * from tb_cpf WHERE cpf_num = ('$cpf')");    
                                    
                        if($veriCpf->num_rows > 0) {
                        echo "CPF Já Votou! Não se Pode Votar Mais de Uma Vez.";
                        } else {
                            $queryCPF = $conexao->query("INSERT INTO tb_cpf (cpf_num) VALUES ('$cpf')");
                            $queryVoto = $conexao->query("INSERT INTO tb_voto (vot_escolhido) VALUES ('$votacao')");
                                    
                            if($queryCPF && $queryVoto){
                            echo "Voto Realizado com Sucesso!";
                            } else {
                            echo "Não foi Possivel Votar";
                            }
                        }
                    }   
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