<?php

$class = "";

if ($modulo == 'prodotti' || $fold == 'schede-prodotti' || $modulo == 'certificazioni' || $modulo == 'contatti') {
    $class = 'text-black';
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
            <li><a href="<?= $URLASSOLUTO ?>prodotti.html" class="menu-item <?php echo $class; ?>">PRODOTTI</a></li>
            <li><a href="<?= $URLASSOLUTO ?>certificazioni.html" class="menu-item <?php echo $class; ?>">CERTIFICAZIONI</a></li>
            <li><a href="<?= $URLASSOLUTO ?>azienda.html" class="menu-item <?php echo $class; ?>">AZIENDA</a></li>
            <li><a href="<?= $URLASSOLUTO ?>contatti.html" class="menu-item <?php echo $class; ?>">CONTATTI</a></li>
        </ul>
        <div class="pulizia"></div>
    </nav>
</header>