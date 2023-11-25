<?php

include_once "../scripts/connection.php";

if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {

        $edit_id = $_GET['id'];
        $sql = "SELECT * FROM voluntarios  WHERE idvoluntarios = '$edit_id'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) {
            header("Location: listagem_voluntario.php");
            exit();
        } else {
            $lista = mysqli_fetch_assoc($result);
        }
    } else {
        header("Location: listagem_voluntario.php");
        exit();
    }
} else {
    header("Location: listagem_voluntario.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/finance-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 01:27:52 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="crm_body_bg">


    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="img/ACOPASB (8).png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/1.svg" alt>
                    <span>Animais</span>
                </a>
                <ul>
                    <li><a href="form_cadastro_animal.php">Adicionar Animal</a></li>
                    <li><a href="listagem_cachorro.php">Lista de Cachorros</a></li>
                    <li><a href="listagem_gato.php">Lista de Gatos</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/2.svg" alt>
                    <span>Voluntários</span>
                </a>
                <ul>
                    <li><a href="listagem_voluntario.php">Lista de Voluntários</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <img src="img/menu-icon/2.svg" alt>
                    <span>Adoções</span>
                </a>
                <ul>
                    <li><a href="pedidos_adocao.php">Pedidos de adoção</a></li>

                </ul>
            </li>

        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Voluntario <?php echo '#N°' . $lista['idvoluntarios'] ?></h4>
                            </div>

                            <form class="form-control" method="POST" action="scripts/edita_voluntario.php">

                                <div class='row'>
                                    <div class='col'>
                                        <label for='' class='ms-3'>Nome</label>
                                        <input name="nome" type='text' class='form-control' value="<?php echo $lista['nome']; ?>">
                                    </div>
                                    <div class='col'>
                                        <label for='' class='ms-3'>Email</label>
                                        <input name="email" type='text' class='form-control' value="<?php echo $lista['email']; ?>">
                                    </div>

                                </div>
                                <label for='' class='ms-3 mt-3'>Endereço</label>

                                <input name="endereco" type='text' class='form-control' value="<?php echo $lista['endereco']; ?>">

                                <div class='row mt-3'>
                                    <div class='col'>
                                        <label for='' class='ms-3'>Dias de Voluntariado</label>
                                        <input name="dias_voluntario" type='text' class='form-control' value="<?php echo $lista['dias_voluntariado']; ?>">
                                    </div>
                                    <div class='col'>
                                        <label for='' class='ms-3'>Telefone</label>
                                        <input name="telefone" type='text' class='form-control' value="<?php echo $lista['telefone']; ?>">
                                    </div>

                                    <input type="hidden" name="idvoluntarios" value="<?php echo $lista['idvoluntarios']; ?>">

                                </div>
                                <label for='' class='ms-3 mt-3'>Cometário</label>
                                <textarea name="comentario" type='text' class='form-control'><?php echo $lista['comentario']; ?></textarea>

                                <div class="add_button mt-3 mb-3">
                                    <button type="submit" class="btn_1"><i class='bi bi-pencil'></i> Editar
                                        Voluntário</a>
                                </div>
                        </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/gijgo/gijgo.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>
    <script src="js/chart.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/apex_chart/apexcharts.js"></script>

    <script src="js/custom.js"></script>


    <script src="js/active_chart.js"></script>
    <script src="vendors/apex_chart/radial_active.js"></script>
    <script src="vendors/apex_chart/stackbar.js"></script>
    <script src="vendors/apex_chart/area_chart.js"></script>
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/chartjs/chartjs_active.js"></script>

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 01:27:52 GMT -->

</html>