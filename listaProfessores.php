<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicione o link para os ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <?php
        echo '<style>';
        include './CSS/styleLista.css';
        echo '</style>';
    ?>
    

    <title>Lista de Professores</title>
    
</head>

<body>
    <!-- Menu lateral -->
    <div class="sidenav">
        <!-- Adiciona a imagem como um link para a tela inicial -->
        <a href="home.html"><img src="./img/logo-gov.png" alt="Logo Gov"></a>
        <!-- Adiciona a opção de menu "Home" -->
        <a href="home.html"><i class="fas fa-home"></i> Home</a>
        <!-- Adicione outras opções de menu conforme necessário -->
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
        <h1>Lista de instrutores</h1>
        <form action="./php/busca.php" method="get">
            <div class="search-bar">
                <input type="text" class="search-input" id ="pesquisa" name="pesquisa" placeholder="Pesquisar por CPF">
                <button class="search-btn" type="submit" onclick="window.location.href='listaInstrutor.php'">Pesquisar</button>
            </div>
        </form>
        <table class="professors-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Disciplina</th>
                    <th>Carga Horária</th>
                    <th>Projeto</th>
                    <th>Ano</th>
                    <th>Período</th>
                    <th>RG</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody id="search-results">
                <?php include './php/busca.php';?>
            </tbody>
        </table>
        <button id="btn-add-professor" onclick="window.location.href='index.html'">Adicionar Novo Professor</button>

        <!-- Barras na parte inferior da tela -->
        <div class="bottom-bar">
            <button class="back-btn" disabled><i class="fas fa-chevron-left"></i> Voltar</button>
            <span class="page-number">Página 1 de 5</span>
            <button class="next-btn">Avançar <i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- Adicione os scripts necessários aqui -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#pesquisa').mask('000.000.000-00', {reverse: true});
        });
    </script>
</body>

</html>