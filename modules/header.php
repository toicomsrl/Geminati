<?php

$class = "";

if ($modulo == 'pellet' || $fold == 'schede-prodotti' || $modulo == 'certificazioni' || $modulo == 'contatti' || $modulo == "contatti-ok" || $modulo == "contatti-ko" || $modulo == "lettiere-animali" || $modulo == "cippato-di-legno") {
    $class = 'text-black';
    $submIcon = 'black';
} else {
    $submIcon = 'white';
}
?>


<header class="header">
    <nav class="contenitore">
        <a href="<?= $URLASSOLUTO ?>"><img src="<?= $URLASSOLUTO ?>img/Geminati-logo.png" alt="Brescia Porte" class="logo"></a>

        <div id="btn-01">
            <a href="javascript:mostra()"><img class="ico-menu-mobile" src="<?= $URLASSOLUTO ?>img/menu.svg" alt="menu"></a>
        </div>
        <div id="btn-02">
            <a href="javascript:nascondi()"><img class="ico-menu-mobile" src="<?= $URLASSOLUTO ?>img/close.svg" alt="menu"></a>
        </div>
        <ul id="nav-mobile">
            <li><a href="<?= $URLASSOLUTO ?>" class="menu-item <?php echo $class; ?>">HOME</a></li>
            <li>
                <a href="javascript:void(0);" class="subm <?php echo $submIcon; ?> menu-item no-mobile <?php echo $class; ?> no-clickable">PRODOTTI</a>
                <a href="javascript:mostra_terzo('ul-prodotti' , 'item-prodotti')" id="item-prodotti" class="subm <?php echo $submIcon; ?> si-mobile">PRODOTTI</a>
                <ul id="ul-prodotti">
                    <li><a href="<?= $URLASSOLUTO ?>pellet.html">Pellet</a></li>
                    <li><a href="<?= $URLASSOLUTO ?>cippato-di-legno.html">Cippato di legno</a></li>
                    <li><a href="<?= $URLASSOLUTO ?>lettiere-animali.html">Lettiere per animali</a></li>
                </ul>
            </li>
            <li><a href="<?= $URLASSOLUTO ?>certificazioni.html" class="menu-item <?php echo $class; ?>">CERTIFICAZIONI</a></li>
            <li><a href="<?= $URLASSOLUTO ?>azienda.html" class="menu-item <?php echo $class; ?>">AZIENDA</a></li>
            <?php if ($modulo == "home") { ?>
                <li><a href="<?= $URLASSOLUTO ?>#contatti" class="menu-item <?php echo $class; ?>">CONTATTI</a></li>
            <?php } else { ?>
                <li><a href="<?= $URLASSOLUTO . $modulo . ".html" ?>#contatti" class="menu-item <?php echo $class; ?>">CONTATTI</a></li>
            <?php } ?>
        </ul>
        <div class="pulizia"></div>
    </nav>
</header>