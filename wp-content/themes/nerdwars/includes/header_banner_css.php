<style>
    <?php 
        
        $badge = rand(0, 6);
        $bg    = rand(0, 1);
    ?>
    
    /*HEADER BGs ALEATORIOS*/
    #header #titleBg{
        min-height: 340px;
        background-image: url('/wp-content/themes/nerdwars/imagens/bg_<?=$bg?>_header-0.jpg');
        background-position: center bottom;
    }

    #header #titleBg #titleBg2{
        background: url('/wp-content/themes/nerdwars/imagens/bg_<?=$bg?>_header-1.png') no-repeat;
        background-size: contain;
        background-position: center bottom;
        min-height: 340px;
    }
    
    #header #logo{
        position: absolute;
        top: -290px;
        z-index: 100;
        left: -320px;
    }
    
    #header #logo a{
        
        width: 340px;
        height: 340px;
        display: block;
        border-radius: 220px;
        background: url('/wp-content/themes/nerdwars/imagens/badge-<?=$badge?>.png') no-repeat;
    }
</style>