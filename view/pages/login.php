<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Владимир Максимовић" />
    <!-- css -->
    <link rel="stylesheet" href="./../../assets/css/style.css" />
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Svet App</title>
</head>

<body>
    <main class="landing-section">

        <!-- logo link -->
        <img src="../../assets/img/sm-logo.jpg" alt="Logo osnovne skole Svetozar Markovic Kraljevo" id="logo" />

        <!-- TODO: login form validation -->

        <!-- login -->
        <div class="login-container">
            <div id="login-msg"></div>
            <form method="get" id="login-form">
                <input type="text" id="username" name="username" placeholder="Корисничко име" size="14" tabindex="1" />
                <input type="text" id="password" name="password" placeholder="Шифра" size="14" tabindex="2" />
                <button id="login-btn" tabindex="3" type="button" class="btn btn-primary">
                    Prijava <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>
        </div>

        <?php include_once '../components/landing_menu.php'; ?>
    </main>

    <!-- js -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>