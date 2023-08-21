<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<?php
include("conexion.php");


    if ( !empty ($_POST ['name_user']) && !empty ($_POST ['apel_user'])  && !empty ($_POST ['pass_user'])  && !empty ($_POST ['tel_user'])  && !empty ($_POST ['id_doc']) && !empty ($_POST ['num_documento_user']) && !empty ($_POST ['email_user']) && !empty ($_POST ['dir_user']) ) {

        $name = $_POST['name_user'];
        $apel = $_POST['apel_user'];
        $pass = $_POST['pass_user'];
        $tel = $_POST['tel_user'];
        $id_doc = $_POST['id_doc'];
        $num_doc = $_POST['num_documento_user'];
        $email = $_POST['email_user'];
        $dir = $_POST['dir_user'];

        $sql = 'INSERT INTO usuario(name_user,apel_user,pass_user,tel_user,id_doc,num_documento_user,email_user,dir_user) VALUES(:nom,:apell,:pass,:tel,:doc,:num_doc,:email,:dir)';
        
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(":nom",$name);
        $stmt->bindParam(":apell",$apel);
        $stmt->bindParam(":pass",$pass);
        $stmt->bindParam(":tel",$tel);
        $stmt->bindParam(":doc",$id_doc);
        $stmt->bindParam(":num_doc",$num_doc);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":dir",$dir);

        if ($stmt->execute()){
            header("location: ../view/user/login.php");
        }
        else print("Error en la consulta");
    }else{
    $alerta=' <div class="alert alert-danger text-center" role="alert">
    <h1>DEBES COMPLETAR TODOS LOS CAMPOS</h1>
        </div>';
    echo($alerta);
    }
    ?>
   