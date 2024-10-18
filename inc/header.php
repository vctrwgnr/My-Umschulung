<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>My Umschulung &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
<header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>');">
    <h1>My Umschulung</h1>
    <p>Never Stop Learning</p>
    <nav>
    <nav>
    <a href="index.php?action=showUmschulung" class="<?= $pageKey === 'school' ? 'active' : '' ?>">My School</a>
    <a href="index.php?action=showCertificates" class="<?= $pageKey === 'certificates' ? 'active' : '' ?>">My Certificates</a>
    <a href="index.php?action=showProjects" class="<?= $pageKey === 'projects' ? 'active' : '' ?>">My Projects</a>
</nav>

    </nav>
</header>


  <main>
    
</body>
</html>

