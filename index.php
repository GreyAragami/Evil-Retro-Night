<?php
//Includen van config file
include("./config/config.php");
//DOET DE WARNINGS NIET VERSCHIJNEN
error_reporting(E_ALL ^ E_NOTICE);

//Checken of de form niet leeg is of gedefinieerd is.
if (isset($_POST["login"]) && $_POST["login"] != ""
    && isset($_POST["password"]) && $_POST["password"] != ""
    && isset($_POST["mail"]) && $_POST["mail"] != ""
) {

    $hash = hash('adler32', $_POST[password]);


    //select statement om te zien of de input overeenkomt met de database data.

    $sql = "SELECT  * from USERS WHERE login = '$_POST[login]' AND password = '$hash' AND mail='$_POST[mail]'";

    $result = $conn->query($sql);
    //Als het aantal rijen van de query groter is dan 0 (betekend dus dat hij iets gevonden heeft.)
    if ($result->num_rows > 0) {
        //opnemen van data in session variabele.
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["admin"] = $row["admin"];
        $_SESSION["login"] = $row["login"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["mail"] = $row["mail"];
    }
}

if (isset($_GET['delpost'])) {
    $query = $conn->prepare('DELETE FROM ENTRIES WHERE id = ?');
    $query->bind_param('s',$_GET['delpost']);
    $query->execute();
    header('Location: index.php?action=deleted');
    exit;
}
if (isset($_GET['delband'])) {
    $query = $conn->prepare('DELETE FROM LINE_UP WHERE id = ?');
    $query->bind_param('s', $_GET['delband']);
    $query->execute();
    header('Location: index.php?action=deleted');
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta property="og:url" content="<?php echo $FBWebsiteURL;?>"/>
    <meta property="og:type" content="<?php echo $FBWebsiteType;?>"/>
    <meta property="og:title" content="<?php echo $WebTitle;?>"/>
    <meta property="og:description" content="<?php echo $FBWebsiteDescription;?>"/>
    <meta property="og:image" content="<?php echo $FBWebsiteImage;?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $WebTitle;?></title>
    <link href="./css/style2.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,400' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <script type="text/javascript" src="js/delpost.js"></script>
    <script type="text/javascript" src="js/delband.js"></script>
    <script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>
</head>
<body>
<!-- Facebook SDK -->
<script src="js/fbAPI.js"></script>
<!-- WYSIWYG Editor voor textareas -->
<script src="js/tinymce.js" ></script>
<!-- Navigatiemenu (klassen spreken voor zich) -->
<div class="w-nav left-navigation">
    <a href="index.php">
        <h1 class="brand-text"></h1></a>
    <nav class="w-nav-menu nav-menu" role="navigation">
        <a class="w-nav-link nav-link ">
            <?php if (isset($_SESSION['id']) && $_SESSION['id'] == "" || $_SESSION['id'] == NULL) {
                include("login.php"); ?>
            <?php } else {
                echo("Welcome " . $_SESSION["login"]) ?>
                <a class="w-nav-link nav-link " href="logout.php">(Logout)</a>
            <?php } ?>
        </a>
        <a data-scroll class="w-nav-link nav-link" href="#home">Home</a>
        <a data-scroll class="w-nav-link nav-link" href="#news">News</a>
        <a data-scroll class="w-nav-link nav-link" href="#lineup">Line-up</a>
        <a data-scroll class="w-nav-link nav-link" href="#contact">Contact</a>
        <a data-scroll class="w-nav-link nav-link" href="#buy">Buy a ticket now !</a>
    </nav>
    <!-- Footer met alle icoontjes voor sociale media -->
    <div class="w-hidden-medium w-hidden-small w-hidden-tiny social-footer">
        <div class="fb-like" data-href="https://www.facebook.com/EVILRETRONOfficial/" data-layout="button"
             data-action="like" data-show-faces="true" data-share="true"></div>
        <a href="https://twitter.com/GreyAragami" class="twitter-follow-button" data-show-count="false"
           data-show-screen-name="false">Follow @GreyAragami</a>
        <script src="js/twitterfollow.js"></script>
    </div>
</div>
<!-- Onderdelen van de contentpagina(Rechter stuk van de website.) -->
<div class="content">
    <div class="banner" id="home">
        <img src="<?php echo $WebLogo;?>">
    </div>
</div>
<div class="w-section section section-gray" id="news">
    <div class="w-container">
        <div class="section-title-group">
            <h2 class="section-heading centered hero-heading">News</h2>
            <!-- wanneer een user een specifieke id heeft(is uniek in de DB) kan hij gegevens ingeven op de website zelf, anders niet.-->
            <?php if ($_SESSION['admin']=='true') {
                include("entry.php");
            } ?>
        </div>
        <!-- lezen van info vanuit de database en loopen zodat alle artikels tevoorschijn komen met de juiste layout. -->
        <?php
        $sql = "SELECT * FROM ENTRIES ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        //wanneer er gegevens zijn in de database
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <div class="article-white">
                    <!-- Title -->
                    <div class="newsTit">
                        <h3><?php echo($row["TITLE"]); ?></h3>
                    </div>
                    <!-- Summary -->
                    <div class="newsSum">
                        <h4><?php echo($row["SUMMARY"]); ?></h4>
                    </div>
                    <!-- Content -->
                    <div class="newsCont">
                        <?php echo($row["CONTENT"]); ?>
                    </div>
                    <div class="newsEditDel">
                    <?php if ($_SESSION['admin']=='true') { ?>
                        <a href="edit-post.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="javascript:delpost('<?php echo $row['id']; ?>','<?php echo $row['TITLE']; ?>')">Delete</a>
                    <?php } ?>
                    </div>
                </div>
                <!-- wanneer er geen artikels zijn in de database -->
            <?php }
        } else { ?>
            <p>Geen nieuws beschikbaar !</p>
        <?php } ?>
    </div>
</div>

<div class="w-section section section-gray " id="lineup">
    <div class="w-container">
        <div class="section-title-group">
            <h2 class="section-heading centered hero-heading">Line-Up</h2>
        </div>
        <?php
        if ($_SESSION['admin']=='true') {
            include("lineupentry.php");
        } ?>
        <?php

        $sql = "SELECT * FROM LINE_UP ORDER BY id";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
    </div>
    <div class="band">
        <div class="band-white">
            <!-- Image -->
            <div class="bandimg">
                <?php echo '<img class="bandimg" src="' . ($row['img']) . '" />'; ?>
            </div>
            <!-- name -->
            <div class="bandName">
                <h3><?php echo($row["band_name"]); ?></h3>
            </div>
            <div class="bandPlaytime">
                <h2><?php echo($row["playtime"]); ?></h2>
            </div>
            <!-- description -->
            <div class="bandDesc">
                <?php echo($row["description"]); ?>
            </div>
            <div class="bandEditDel">
                <?php if ($_SESSION['admin'] == 'true') { ?>
                    <a href="edit-band.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="javascript:delband('<?php echo $row['id']; ?>','<?php echo $row['band_name']; ?>')">Delete</a>
                <?php } ?>
            </div>
            <?php }
            } else { ?>
                <div class="band-white">
                    <p>Er zijn momenteel nog geen artiesten bekendgemaakt !</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Contact us content -->
<div class="w-section section section-gray" id="contact">
    <div class="w-container">
        <div class="section-title-group">
            <h2 class="section-heading centered hero-heading">Contact Us</h2>
            <div class="section-subheading center">Be sure to contact us if you have any questions or suggestions !
            </div>
        </div>
        <?php if (isset($_SESSION['id']) && $_SESSION['id'] != ""){
            include("./contact.php");
        } else{ ?>
        <div class="article-white notco">
            <?php echo('You are not connected, please connect to contact us.');
            } ?>
        </div>
    </div>
</div>
<!-- Buy content -->
<div class="w-section section section-gray" id="buy">
    <div class="w-container">
        <div class="section-title-group">
            <h2 class="section-heading centered hero-heading">Buy a ticket</h2>
        </div>
        <?php if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
            include("./buy.php");
        } else{ ?>
        <div class="article-white notco">
            <?php echo('You are not connected, please connect to buy a ticket.');
            } ?>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="w-section footer center">
    <div class="w-container">Copyrighted by Gregory Descamps</div>
    <script>smoothScroll.init();</script>
</footer>
</body>