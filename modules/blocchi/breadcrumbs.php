<? if(($modulo != "contatti-ok") && ($modulo != "contatti-ko")){?>
<div class="cont-briciole contenitore">
<?if($cat != ""){?>
<?php    

    //echo "1";
    $prodoct=$modulo;
    $prodoct=ucwords(str_replace("-"," ",$prodoct));
    $macropagcate=$cat;
    $macropagcate=ucwords(str_replace("-"," ",$macropagcate));
    $pagcate=$fold;
    $pagcate=ucwords(str_replace("-"," ",$pagcate));
    
    if($_SERVER["SERVER_NAME"]=="192.168.8.173"){
        $pagina = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    } else {
        $pagina = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    }
?>
  <ol class="briciole" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?>">
        <span itemprop="name">Home</span></a> &raquo;
        <meta itemprop="position" content="1" />
      </li>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?><?=$cat?>/">
        <span itemprop="name"><?=$macropagcate?></span></a> &raquo;
        <meta itemprop="position" content="2" />
      </li>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?><?=$cat?>/<?=$fold?>/">
        <span itemprop="name"><?=$pagcate?></span></a> &raquo;
        <meta itemprop="position" content="3" />
      </li>
       <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
           <a itemprop="item" href="<?=$pagina?>">
          
           <strong itemprop="name"><?=$prodoct?></strong>
          </a>
           
            <meta itemprop="position" content="4" />
        </li>
    </ol>


<?}else if($fold!=""){?>

<?php
    //echo "2";
    $macropagcate=$modulo;
    $macropagcate=ucwords(str_replace("-"," ",$macropagcate));
    $pagcate=$fold;
    $pagcate=ucwords(str_replace("-"," ",$pagcate));
    if($_SERVER["SERVER_NAME"]=="192.168.8.173"){
        $pagina = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    } else {
        $pagina = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    }
    
    
?>
<ol class="briciole" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?>">
        <span itemprop="name">Home</span></a> &raquo;
        <meta itemprop="position" content="1" />
      </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?><?=$fold?>/">
        <span itemprop="name"><?=$pagcate?></span></a> &raquo;
        <meta itemprop="position" content="2" />
      </li>
    
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$pagina?>">
          
           <strong itemprop="name"><?=$macropagcate?></strong>
           </a>
           
            <meta itemprop="position" content="3" />
        </li>
</ol>

<?}else{?>

<?php
    //echo "3";
    $pagcate=$modulo;
    $pagcate=ucwords(str_replace("-"," ",$pagcate));
    if($_SERVER["SERVER_NAME"]=="192.168.8.173"){
        $pagina = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];    
    } else {
        $pagina = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];    
    }
    
?>
<ol class="briciole" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$URLASSOLUTO?>">
        <span itemprop="name">Home</span></a> &raquo;
        <meta itemprop="position" content="1" />
      </li>    
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?=$pagina?>">
           
           <strong itemprop="name"><?=$pagcate?></strong>
           </a>           
            <meta itemprop="position" content="2" />
        </li>
</ol>
<?}?>
</div>
<?}?>