<?php if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'courants':
                include("pages/courants.php");
                break;
            case 'epargnes':
                include("pages/epargnes.php");
                break;           
                    
            default:
                include("pages/404.php");
                break;
        }
        }else {
            include ("pages/accueil.php");
        }
?>