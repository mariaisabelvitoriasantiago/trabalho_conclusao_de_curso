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
<a href="sitepersonal.php" class="w3-display-topleft">
<i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3- xxlarge"></i>
</a>
<?php
           $host = "localhost";
           $usuario = "root";
           $senha = "";
           $bd = "suporte";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; ch
arset=utf8", $usuario, $senha); $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '
<div class="w3-paddingw3-content w3-half w3-display- topmiddle w3-margin">
<h1 class="w3-center w3-indigo w3-round-large w3- margin">Lista de Alunos</h1>
<table class="w3-table-all w3-centered w3-text-black"> <thead>
<tr class="w3-center w3-indigo"> <th>CPF</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Celular</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
</tr>
                <thead>
';
$sql = "SELECT * FROM aluno" ; $resultado = $conecta->query($sql); if($resultado != null) foreach($resultado as $linha) {
echo '<tr>';
echo '<td>'.$linha['cpf_aluno'].'</td>';
echo '<td>'.$linha['nome'].'</td>';
echo '<td>'.$linha['email'].'</td>';
echo '<td>'.$linha['login'].'</td>';
echo '<td>'.$linha['senha'].'</td>';
echo '<td>'.$linha['celular'].'</td>';
echo '<td><a href="excluir.php?cpf_aluno='.$linha['cpf_aluno'].'&
nome='.$linha['nome'].'&email='.$linha['email'].'&login='.$linha['login'].'&
senha='.$linha['senha'].'&
celular='.$linha['celular'].'"><i class="fa fa-user-times w3-large w3-text-indigo"></i> </a></td>';
echo '<td><a href="atualizar.php?cpf_aluno='.$linha['cpf_aluno'].'&
nome='.$linha['nome'].'&email='.$linha['email'].'&login='.$linha['login'].'&
senha='.$linha['senha'].'&
celular='.$linha['celular'].'"><i class="fa fa-refresh w3-large w3-text-indigo"></i> </a></td>'; echo '</tr>';
}
                echo '
                    </table>
                </div>';
            }catch(PDOException $e){
echo "falha ao conectar: ". $e->getMessage();
}
?> </div>
</body>
</html>