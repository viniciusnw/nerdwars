<style>
    <?php $badge = rand(0, 5); ?>
    
    /*HEADER BGs ALEATORIOS*/
    #header #titleBg{
        background-image: url('/wp-content/themes/nerdwars/imagens/bg_1_header-0.jpg');
    }

    #header #titleBg #titleBg2{
        background-image: url('/wp-content/themes/nerdwars/imagens/bg_1_header-1.png');
    }

    #header #logo a{
        background: url('/wp-content/themes/nerdwars/imagens/badge-<?=$badge?>.png') no-repeat;
    }
</style>