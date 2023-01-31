<!DOCTYPE html>
<html lang="en">
    <?php include('common/head.php'); ?>
    <body class="<?=$_SESSION['theme']?>">
        <?php 
            include ('common/header.php');
            if(!isset($page)){
                $page = 'accueil';
            }
            switch ($page) {
                case 'accueil':
                    include('content/accueil_content.php');    
                    break;
                case 'realisations':
                    include('content/realisations_content.php');
                    break;
                case 'veilles':
                    include('content/veilles_content.php');
                    break;
                case 'cv':
                    include('content/cv_content.php');
                    break;
                case 'contact':
                    include('content/contact_content.php');
                    break;
                default:
                    header('Location: 404.html');
                    die();
                    break;
            }
            include ('common/footer.php'); 
        ?>
        <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 35
        });
        </script>
        <script>
            <?php
                $themeName = !empty($_SESSION['theme']) ? $_SESSION['theme'] : 'claire';
                echo 'var THEME = "' . $themeName . '"';
            ?>
        </script>
        <script src="js/scripts.js"></script>
    </body>
</html>