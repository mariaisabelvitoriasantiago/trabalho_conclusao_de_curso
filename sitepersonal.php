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




    <!--SideBar-->
    <nav class="w3-sidebar w3-bar-block w3-center">
    <!-- HOME -->
    <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
    </a>
    <!-- Sobre -->
    <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>SOBRE</p>
    </a>
    <!-- Planos-->
    <a href="#Planos" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-columns w3-xxlarge"></i>
    <p>PLANOS</p>
    </a>
    <!-- Depoimentos -->
    <a href="#Depoimentos" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-address-card w3-xxlarge"></i>
    <p>DEPOIMENTOS</p>
    </a>
    <!-- Aplicativo -->
    <a href="#Aplicativo" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-handshake-o w3-xxlarge"></i>
    <p>APLICATIVO</p>
    </a>
    <!-- Treinamentos -->
    <a href="#Treinamentos" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-connectdevelop w3-xxlarge "></i>
    <p>TREINAMENTOS</p>
    </a>
    <!-- Contato -->
    <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hover-text-cyan w3-text-white">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTATO</p>
    </a>
    </nav>
    <!--SideBar-->
    <!--NavBar-->
    <div class="w3-top w3-hide-large w3-hide-medium" >
    <nav class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#home" class="w3-bar-item w3-button" style="width:25% ">HOME</a>
    <a href="#sobre" class="w3-bar-item w3-button" style="width:25% ">SOBRE</a>
    <a href="#depoimentos" class="w3-bar-item w3-button" style="width: 25%">DEPOIMENTOS</a>
    <a href="#aplicativo" class="w3-bar-item w3-button" style="width: 25%">APLICATIVO</a>
    <a href="#treinamentos" class="w3-bar-item w3-button" style="width:27% ">TREINAMENTOS</a>
    <a href="#contato" class="w3-bar-item w3-button" style="width:23% ">CONTATO</a>
    </nav>
    </div>
    <!--NavBar-->
   Links
    <!--Conteúdo da Página -->
    <div class="w3-padding-large" id="main">
    <!--Home -->
    <header class="w3-container w3-padding-32 w3-center " id="home">
    <h1>
    <img src="IMG/papelparede.jpg" alt="Paulo Sergio - Personal Trainer" class="w3-image" width="100%" >
    </h1>
    </header>
    <!--Home -->
    <!-- Sobre -->
    <div class="w3-content w3-padding-64" id="sobre">
    <h2 class="w3-text-cyan">Sobre Paulo Sergio</h2>
    <hr style="width: 300px" class="w3-opacity">
    <ul class="w3-ul w3-hoverable w3-center w3-white">
    <li class="w3-cyan w3-xlarge w3-padding-32">Venho trabalhando há mais de 10 anos com treinamento esportivo personalizado, ajudando os meus alunos a obter resultados significativos nos seus objetivos.</li>
    <li class="w3-cyan w3-xlarge w3-padding-24">Áreas de Atuação:</li>
    <li class="w3-padding-16">Aulas online de musculação, funcional ou corrida</li>
    <li class="w3-padding-16">Avaliação física e preparação para teste de concursos</li>
    <li class="w3-padding-16">Emagrecimento e melhoria do condicionamento físico</li>
    <li class="w3-padding-16">Treinamento de corrida com planilhas de 5km até 42km</li>
    </ul>
    <div class="w3-row w3-padding-16 w3-section w3-light-grey w3-center">
    <div class="w3-third w3-section">
    <span class="w3-xlarge">Alunos no Brasil e Exterior</span>
    <br> Aulas Online para adequar ao seu tempo
    </div>
    <div class="w3-third w3-section">
    <span class="w3-xlarge">+5000 horas de aulas dadas</span>
    <br> Aulas dinâmicas e personalizadas
    </div>
    <div class="w3-third w3-section">
    <span class="w3-xlarge">+10 maratonas</span>
    <br> Te ensino a correr melhor
    </div>
    </div>
    </div>
    <!-- Sobre -->
    <!-- Planos -->
    <div class=" w3-content w3-padding-64" id="Planos">
    <h2 class="w3-text-cyan">Planos</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-row w3-row-padding">
    <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
    <li class="w3-cyan w3-xlarge w3-padding-32">Online</li>
    <li class="w3-padding-16">Por video chamada</li>
    <li class="w3-padding-16">Não requer equipamentos  especiais</li>
    <li class="w3-padding-16">Acesso aos treinos no aplicativo</li>
    <li class="w3-padding-16">Foco em condicionamento físico</li>
    <li class="w3-padding-16">Emagrecimento</li>
    <li class="w3-padding-16">
    <span class="w3-xlarge">Total</span>
    <br>R$ 120,00
    </li>
    </ul>
    </div>
    <div class="w3-third">
    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
    <li class="w3-cyan w3-xlarge w3-padding-32">Musculação</li>
    <li class="w3-padding-16">Avalição física</li>
    <li class="w3-padding-16">Treinos de força</li>
    <li class="w3-padding-16">Treinos funcionais</li>
    <li class="w3-padding-16">Emagrecimento</li>
    <li class="w3-padding-16">Condicionamneto Físico</li>
    </li>
    <li class="w3-padding-16">
    <span class="w3-xlarge">Total</span>
    <br>R$ 70,00 hora/aula
    </li>
    </ul>
    </div>
    <div class="w3-third">
    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
    <li class="w3-cyan w3-xlarge w3-padding-32">Corrida</li>
    <li class="w3-padding-16">Teste de 1km iniciante</li>
    <li class="w3-padding-16">Teste de 3km avançado</li>
    <li class="w3-padding-16">Planilhas de treino</li>
    <li class="w3-padding-16">Acompanhamento em provas</li>
    <li class="w3-padding-16">Treinos de 5km, 10km, até 42km</li>
    <li class="w3-padding-16">
    <span class="w3-xlarge">Total</span>
    <br>R$ 70,00 hora/aula
    </li>
    </ul>
    </div>
    </div>
    </div>
    <!--Planos -->
    <!--Depoimentos -->
    <div class=" w3-content w3-padding-64" id="Depoimentos">
    <h2 class="w3-text-cyan">Depoimentos</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-content">
    <div class="w3-row w3-margin">
        <div class="w3-third">
        <img src="IMG/Halteres.jpg" class="w3-image">
    </div>
    <div class="w3-twothird w3-container">
    <h4 class="w3-text-cyan">José Augusto Toledo</h4>
    <h6>O Pauloé um profissional muito dedicado e tem um acompanhamento muito personalizado com seus alunos, meu peso abaixou e meu condicimento melhorou muito.</h6>
    </div>
    </div>
    <div class="w3-content">
    <div class="w3-row w3-margin">
        <div class="w3-third">
        <img src="IMG/cardio.jpg" class="w3-image">
    </div>
    <div class="w3-twothird w3-container">
        <h4 class="w3-text-cyan">Maria Eduarda</h4>
        <h6>Paulo é um excelente Personal, sempre disposto a inovar e personalizar os treinos de acordo com necessidade e a dificuldade do aluno. Comecei treinar com ele para ganhar massa muscular, após perder uns 12kg, e com 3 hernias de disco, nossos treinos sempre tiveram a preocupação de fortalecer a região do abdômen para sustentação da coluna, hoje consigo ter autonomia, fazer qualquer atividade e inclusive dirigir 10 horas sem sentir dores.</h6>
    </div>
    </div>
    <div class="w3-content">
    <div class="w3-row w3-margin">
        <div class="w3-third">
        <img src="IMG/abdominal.jpg" class="w3-image">
    </div>
    <div class="w3-twothird w3-container">
        <h4 class="w3-text-cyan">Marcela Letícia de Oliveira</h4>
        <h6>Comecei a treinar como Paulo e pude em poucos meses ver minha evolução e melhoria no meu condicionamento físico e definição muscular, estou muito satisfeita com os resultados.</h6>
    </div>
    </div> 
        <!--Depoimentos -->    
    <!-- Aplicativo -->
    <div class="w3-padding-64 w3-content w3-row-padding" id="Aplicativo">
    <h2 class="w3-text-cyan">Aplicativo</h2>
    <hr style="width:200px" class="w3-opacity">
    </div>
    <div class="w3-content">
    <div class="w3-row w3-margin">
        <div class="w3-third">
        <img src="IMG/mfit.jpg" style="width:70%" class="w3-row w3-row-padding">   
        </div>
        <div class="w3-twothird w3-container">
            <p>A MFIT é um app completo, interativo e fácil de usar, além de disponibilizar um canal aberto para suporte individualizado e conteúdos exclusivos do seu personal diretamente para você..</p>
            <p>O aluno receberá por e-mail um login e senha de acesso ao app. Alémdo aplicativo,também está disponivel em versão PC. Nele estarão disponíveis seus treinos e seu personal poderá fazer o acompanhamento de sua execução, além de você poder comentar como se sentiu e quais as dificuldades encontradas durante a execução. Todos os exercícios contam com vídeos demonstrativos, para te orientar na sua perfeita execução do exercício.
    </div> 
    <div class="w3-content w3-center"> 
    <img src="IMG/mfit1.jpg" style="width:20%" class="w3-opacity w3-hover-opacity-off ">
    <img src="IMG/mfit2.jpg" style="width:20%" class="w3-opacity w3-hover-opacity-off ">
    </p>
    </div>
    <!-- Aplicativo -->
    <!-- Treinamentos -->
    <div class="w3-padding-64 w3-content" id="Treinamentos">
    <h2 class="w3-text-cyan">Treinamentos</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-row w3-row-padding">
    <div class="w3-half">    
    <img src="IMG/afundo.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    <img src="IMG/prancha.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    <img src="IMG/Halteres.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    </div>
    <div class="w3-half">
    <img src="IMG/stiff.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    <img src="IMG/corrida.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    <img src="IMG/afundo.jpg" style="width:50%" class="w3-opacity w3-hover-opacity-off">
    </div>
    </div>
    </div>
    <!-- Treinamentos -->
    <!-- Contato -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="contato">
    <h2 class="w3-text-cyan">Contato</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="w3-section">
    <p>
    <i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-
   margin-right"></i> São Paulo, Brasil</p>
    <p>
    <i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-marginright"></i> Telefone: 51 99122-7756</p>
    <p>
    <i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: paulosergiopersonaltrainer@gmail.com</p>
    </div>
    <br>
    <p>Entre em contato:</p>
    <form>
    <p>
    <input class="w3-input w3-padding-16" type="text" placeholder="Nome" required name="Nome">
    </p>
    <p>
    <input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email">
    </p>
    <p>
    <input class="w3-input w3-padding-16" type="text" placeholder="Assunto" required name="Assunto">
    </p>
    <p>
    <input class="w3-input w3-padding-16" placeholder="Menssagem" required name="Mensagem">
    </p>
    <br>
    <br>
    <p>
    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
    <i class="fa fa-paper-plane"></i> Enviar mensagem
    </button>
    </p>
    </form>
    <br>
    </div>
    <!-- Contato -->
    </div>



    <div class="w3-col w3-button w3-blue w3-cell w3-round-large w3-margin-
    right w3-margin-left" style="width:23%;">
    <a href="cadastro.php" style="text-decoration: none;">
    <i class="fa fa-cube" style="font-size: 10.5em"></i>
    <p style="font-size: 2em">Adicionar <br>Aluno</p> </a>
    </div>

    <div class="w3-col w3-button w3-indigo w3-cell w3-round-large w3-margin- right" style="width:23%;">
    <a href="listar.php" style="text-decoration: none;">
    <i class=" fa fa-list-alt" style="font-size: 10.5em"></i>
    <p style="font-size: 2em">Listar <br>Alunos</p> </a>
    </div>



   </body>
   </html>