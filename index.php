<?php
//var_dump($_GET);
//ERROR_REPORTING(0);

$URLASSOLUTO = "";
$GTM = "";
$modulo = "";
$fold = "";
$cat = "";
$slash = "";
$title = "";
$desc = "";
$fotosocial = "";
$formok = "";

$sitoweb = "geminati.it/";

if ($_SERVER["SERVER_NAME"] == "localhost") {
    $URLASSOLUTO = "http://localhost/" . $sitoweb;
} else if ($_SERVER["SERVER_NAME"] == "devtoicom.it") {
    $URLASSOLUTO = "https://devtoicom.it/" . $sitoweb;
} else {
    $URLASSOLUTO = "https://www." . $sitoweb;
    $GTM = "";
}
if (isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
}
if (isset($_GET['fold'])) {
    $fold = $_GET['fold'];
}
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
}
if (isset($_GET['slash'])) {
    $slash = $_GET['slash'];
}
if ($modulo == '') {
    $modulo = 'home';
}

if ($cat != "") {
    if (file_exists("modules/" . $cat . '/' . $fold . '/' . $modulo . ".php") && ($slash != "ok")) {
        $urlmodules = $cat . "/" . $fold . "/" . $modulo;
    } else {
        $urlmodules = "404";
    }
} else if ($fold != "") {
    if (file_exists("modules/" . $fold . '/' . $modulo . ".php") && ($slash != "ok")  && (!is_dir("modules/" . $fold . '/' . $modulo))) {
        $urlmodules = $fold . "/" . $modulo;
    } else if (is_dir("modules/" . $fold . '/' . $modulo) && file_exists("modules/" . $fold . '/' . $modulo . ".php") && ($slash == "ok")) {
        $urlmodules = $fold . "/" . $modulo;
    } else {
        $urlmodules = "404";
    }
} else if ($slash == "ok") {
    if (!is_dir("modules/" . $modulo) && file_exists("modules/" . $modulo . ".php")) {
        $urlmodules = $modulo;
    } else {
        $urlmodules = "404";
    }
} else if ((file_exists("modules/" . $modulo . ".php")) && (!is_dir("modules/" . $modulo))) {
    $urlmodules = $modulo;
} else {
    $urlmodules = "404";
}

if ($urlmodules == "404") {
    header('HTTP/1.0 404 Not Found');
}
include_once("dati-seo.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta name="description" content="<?= $desc ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="it-IT">
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#cb211c">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <meta property="og:locale" content="it_IT" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:description" content="<?= $desc ?>" />
    <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="GAMINATI" />
    <meta property="og:image" content="<?= $URLASSOLUTO ?>img/slide-home-mobile.jpg" />



    <link rel="icon" href="<?= $URLASSOLUTO ?>favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?= $URLASSOLUTO ?>css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= $URLASSOLUTO ?>css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= $URLASSOLUTO ?>css/simplelightbox.css">
    <link href="<?= $URLASSOLUTO ?>css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?= $URLASSOLUTO ?>css/style.css" rel="stylesheet" type="text/css" />

    <!-- Canonical -->

    <link rel="canonical" href="<?= $URLASSOLUTO . $urlmodules ?>">

    <?php if ($GTM != "") { ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '<?= $GTM ?>');
        </script>
        <!-- End Google Tag Manager -->

    <?php } ?>
</head>

<body id="top">
    <?php if ($GTM != "") { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $GTM ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php } ?>



    <?php
    include_once("modules/header.php");
    include_once("modules/" . $urlmodules . ".php");
    include_once("modules/footer.php");
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?= $URLASSOLUTO ?>js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?= $URLASSOLUTO ?>js/common.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?= $URLASSOLUTO ?>js/wow.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?= $URLASSOLUTO ?>js/simple-lightbox.js" type="text/javascript" charset="utf-8"></script>
    <script>
        function PopupCentrata() {
            var w = 580;
            var h = 530;
            var l = Math.floor((screen.width - w) / 2);
            var t = Math.floor((screen.height - h) / 2);
            window.open("http://www.iubenda.it", "", "width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
        }

        function slidetop() {
            $("#slide02").fadeToggle(500);
            $("#slide01").fadeToggle(500);
        }

        setInterval(function() {
            slidetop()
        }, 6000);
    </script>
</body>

</html>