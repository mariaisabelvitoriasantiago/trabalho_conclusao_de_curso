<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Paulo Sergio-Personal Trainer</title>
    <style>
        #main{
            margin-left: 120px
        }
        .w3-row-padding img{
            margin-bottom: 12px
        }
        /* Definimos que a sidebar terá uma largura de 170px e cor a cord de fundo #222
        */
            .w3-sidebar {
            width: 170px;
            background: #222;
            }
        /*Define Fonte para todas as tags listadas abaixo*/
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Montserrat", sans-serif
            }
            @media only screen and (max-width: 600px){
                #main{
                    margin-left: 0;
                }
        /*Esse codigo faz com que quando o nosso site for exibido em dispositivos com tela de no máximao 600px de largura, o elemento com id #main defina sua margem esquerda com o valor zero */
        </style>     
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "suporte";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; chars
et=utf8", $usuario, $senha);
$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "falha ao conectar: ". $e->getMessage();
} try{
$sql = $conecta->prepare("UPDATE aluno SET nome = ?, email = ?, login=?, senha = ?, celular = ? WHERE cpf_aluno = ?;"); $sql->bindParam(1,$_POST['txtNome']); $sql->bindParam(2,$_POST['txtEmail']); $sql->bindParam(3,$_POST['txtLogin']); $sql->bindParam(4,$_POST['txtSenha']); $sql->bindParam(5,$_POST['txtCelular']); $sql->bindParam(6,$_POST['txtCPF']);
            $sql->execute();
            echo '
            <a href="listar.php">
<h1 class="w3-button w3-blue ">Produto Atualizado com sucesso! </h1>
</a> ';
}catch(PDOException $e){ echo '
<a href="listar.php">
<h1 class="w3-button w3-blue ">ERRO! </h1>
</a>
'; }
?> </div>
</body>
</html>