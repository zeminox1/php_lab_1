<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <div class="header-div wrapper__header">
            <img src="../img/poli.png" alt="Логотип" class="logo">
            <span class="text-header__position">Домашняя работа: Hello, World!</span>
        </div>
    </header>

    <main class="wrapper__main">
        <h1 class="hidden">PHP</h1>
        <div class="table__position">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Животное</th>
                        <th scope="col">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i < 9; $i++) {
                        echo "<tr>
                                <th>" . $i . "</th>
                                <td>Манул</td>
                                <td>21.02.2022</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="img-flex">
            <img src="../img/manul.gif" alt="Манулы" class="img">   
        </div>
    </main>
    <footer>
        <div class="wrapper__footer">
            <p class="footer__text">Изучаем PHP</p>
        </div>
    </footer>
</body>

</html>