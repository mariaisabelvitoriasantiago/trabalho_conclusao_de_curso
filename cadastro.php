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
<a href="sitepersonal.php" class="w3-display-topleft ">
<i class="fa fa-arrow-circle-left w3-large w3-blue w3-button w3- xxlarge"></i>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display- middle">
<h1 class="w3-center w3-blue w3-round-large w3- margin">Cadastro de Aluno</h1>
<form action="cadastroAction.php" class="w3-container" method='post'> <label class="w3-text-blue" style="font-
weight: bold;">Código</label>
<input name="txtID" class="w3-input w3-grey w3-
border" disabled><br>
<label class="w3-text-blue" style="font- weight: bold;">Nome</label>
<input name="txtNome" class="w3-input w3-light-grey w3- border"><br>
<label class="w3-text-blue" style="font- weight: bold;">Email</label>
<input name="txtEmail" class="w3-input w3-light-grey w3- border"><br>
<label class="w3-text-blue" style="font- weight: bold;">Login</label>
<input name="txtLogin" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font- weight: bold;">Senha</label>
<input name="txtSenha" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font- weight: bold;">Celular</label>
<input name="txtCelular" class="w3-input w3-light-grey w3-border"><br>
<button name="btnAdd" class="w3-button w3-blue w3-cell w3-round- large w3-right w3-margin-right">
<i class="w3-xxlarge fa fa-plus-square"></i> Adicionar </button>
</form>
</div>
</body>
</html>