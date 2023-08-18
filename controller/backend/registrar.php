<?php
    include_once("../conexion.php");

    if ( !empty ($_POST ['name_user']) && !empty ($_POST ['apel_user'])  && !empty ($_POST ['pass_user'])  && !empty ($_POST ['tel_user'])  && !empty ($_POST ['id_doc']) && !empty ($_POST ['num_documento_user']) && !empty ($_POST ['email_user']) && !empty ($_POST ['dir_user']) && !empty ($_POST ['met_pago']) ) {
        //si
        $name = $_POST['name_user'];
        //si
        $apel = $_POST['apel_user'];
        //si
        $pass = $_POST['pass_user'];
        //si
        $tel = $_POST['tel_user'];
        //si
        $id_doc = $_POST['id_doc'];
        //si
        $num_doc = $_POST['num_documento_user'];
        //si
        $email = $_POST['email_user'];
        //si
        $dir = $_POST['dir_user'];
        $met_pago = $_POST['met_pago'];
    }
