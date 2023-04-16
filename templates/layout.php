<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pixab/css/pixab.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <title><?php if (isset($data['title'])) echo $data['title']; ?> - Pixab</title>
    <?php if (isset($data['description'])) { ?>
    <meta name="description" content="<?= $data['description'] ?>">
    <?php } ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png" />
</head>

<body>
    <!-- <?php include '_navbar.php'; ?> -->
    <!-- <main> -->
    <?php require $templatePath ?>
    <!-- </main> -->
    <!-- <?php include '_footer.php'; ?> -->

    <!-- Afficher le popup si les informations de session sont présentes -->
    <?php if (isset($_SESSION['message'])) { ?>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2><?php echo $_SESSION['message']; ?></h2>
            <!-- Ajouter ici le contenu du popup -->
        </div>
    </div>
    <style>
    /* Style du popup */
    .popup {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 99999;
    }

    .popup-content {
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        text-align: center;
        border-radius: 5px;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    </style>
    <script>
    // Fermer le popup automatiquement après quelques secondes (3000ms = 3 secondes)
    setTimeout(function() {
        closePopup();
        <?php
                // Supprimer les informations de session
                unset($_SESSION['message']);
                unset($_SESSION['type']);
                ?>
    }, 3000);

    // Fonction pour fermer le popup
    function closePopup() {
        //alert("bonjour");
        var popup = document.getElementById('popup');
        popup.style.display = 'none';
    }
    </script>
    <?php } ?>
    <!-- pixab Script -->
    <script src="pixab/js/pixab.js"></script>
</body>

</html>