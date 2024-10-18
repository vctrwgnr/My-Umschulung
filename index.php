<?php 

$action = $_GET['action'] ?? 'showAusbildung';

$view = 'umschulung';
$pageTitle = 'My School'; 
$headerImg = 'images/coding-4.jpg'; 
$pageKey = ''; 


switch ($action) {
    case 'showUmschulung':
        $view = 'umschulung';
        $pageTitle = 'My School';
        $headerImg = 'images/coding-4.jpg'; 
        $pageKey = 'school';
        break;
    case 'showCertificates':
        $view = 'certificates';
        $pageTitle = 'My Certificates';
        $headerImg = 'images/coding-5.jpg'; 
        $pageKey = 'certificates';
        break;
    case 'showProjects':
        $view = 'projects';
        $pageTitle = 'My Projects';
        $headerImg = 'images/coding-2.jpg'; 
        $pageKey = 'projects';
        break;
    default:
        $pageKey = ''; 
        break;
}



include 'inc/header.php';   
include "views/$view.php";    
include 'inc/footer.php';    

?>

