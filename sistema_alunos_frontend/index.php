<?php

use function PHPSTORM_META\type;

require_once "./api_connector.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema Alunos</title>
</head>

<body>
    <main>
        <div class="board">

            <div class="inside-board">


                <h1> Alunos cadastrados </h1>
                <hr>


                <table>

                    <thead>
                        <th> Nome </th>
                        <th> Matricula </th>
                        <th> Curso </th>
                        <th> Sigla </th>
                    </thead>

                    <?php

                    foreach ($result as $alunos => $aluno) {

                    ?>

                        <tbody>
                            <td> <?php echo ($aluno['nome']); ?> </td>
                            <td> <?php echo ($aluno['matricula']); ?> </td>
                            <td> <?php echo ($aluno['curso']); ?> </td>
                            <td> <?php echo ($aluno['sigla']); ?> </td>
                        </tbody>

                    <?php }; ?>

                </table>
                
                <footer> Made By &copy; Pedro Soares Paulino</footer>
            </div>
            
        </div>
        
    </main>




</body>

</html>