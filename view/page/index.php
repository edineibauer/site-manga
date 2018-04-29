<?php

$header = "";
$read = new \ConnCrud\Read();
$sql = new \ConnCrud\SqlCommand();
$tpl = new \Helpers\Template("meumanga");

$sql->exeCommand("SELECT count(*) as total FROM " . PRE . "login");
$num = number_format($sql->getResult()[0]['total']);

$read->exeRead(PRE . "manga", "ORDER BY id DESC LIMIT 1");
if ($read->getResult())
$header = str_replace('\\', '/', json_decode($read->getResult()[0]['background'], true)[0]['url']);
?>
<div class="col manga-header relative">
    <img src="<?= HOME ?>image/<?= $header ?>&w=1900" height="320" class="col manga-background" />
    <header class="padding-32 relative margin-top">
        <br><br><br>

        <div class="row padding-32 container">
            <input type="search" placeholder="buscar..." class="font-large color-white z-depth-4 search" id="searchHome"/>
        </div>
    </header>
    <input type="hidden" value="{$id}" id="manga-id"/>
</div>

<div class="main relative">

    <?php
    /*
    $read = new \ConnCrud\Read();
    $read->exeRead(PRE . "novidades", "ORDER BY id DESC LIMIT 1");
    if($read->getResult()) {
        $tpl = new \Helpers\Template("meumanga");
        foreach ($read->getResult() as $item) {
            $item['imagem'] = HOME . json_decode($item['imagem'], true)[0]['url'];
            $tpl->show("novidade", $item);
        }
    }
    */
    ?>

    <section class="row padding-32 container z-depth-2 relative color-grey-light" style="margin-left: -1px;">
        <div class="container">

            <?php
            $read->exeRead(PRE . "manga", "ORDER BY id DESC LIMIT 4");
            if ($read->getResult()) {
                $result = $read->getResult();
                foreach ($result as $i => $item)
                    $result[$i]['imagem'] = json_decode($item['imagem'], true);

                $data = [
                    "title" => "Novos Mangas",
                    "subTitle" => "Mangas Saindo do Forno",
                    "icon" => "whatshot",
                    "data" => $result
                ];

                $tpl->show("container", $data);
                echo "<p class='col padding-16'></p>";
                $tpl->show("container", $data);
            }
            ?>
        </div>
    </section>

    <section class="col container align-center z-depth-inset-2 login padding-64" style="background-image: url('<?=HOME?>vendor/conn/meumanga/assets/subscription.jpg');">
        <h2 class="font-light font-xlarge padding-32 container color-text-white text-shadow">
            <p><b class="upper">Acompanhe, Descubra, Compartilhe</b></p>


            <p class="font-xxlarge">Nunca mais perca um episódio novamente</p>
        </h2>

        <div class="container padding-32">
            <a href="<?= HOME ?>cadastro-usuario" style="margin: auto;float: initial"
               class="btn-large hover-shadow upper theme-d1 font-xxlarge font-bold">Criar Conta!</a>
        </div>
    </section>

    <section class="col container color-grey-light padding-64">
        <div class="row container">
            <?php
            $data = [
                [
                    "icon" => "dashboard",
                    "title" => "Do Seu Jeito",
                    "content" => "Crie sua própria lista de mangas e animes em uma Dashboard personalizada"
                ],
                [
                    "icon" => "star_half",
                    "title" => "Classificação",
                    "content" => "Método de avaliação inovador para um comparativo mais acurado"
                ],
                [
                    "icon" => "av_timer",
                    "title" => "Acompanhe",
                    "content" => "Não perca mais episódios, acompanhe em sua dashboard os lançamentos"
                ]
            ];
            foreach ($data as $datum)
                $tpl->show("feature", $datum);
            ?>
        </div>

    </section>

    <section class="col container color-white border-bottom border-top padding-64">
        <header class="col container">
            <h1 class="col align-center">Tradutor de Manga</h1>
        </header>
        <p class="col align-center font-xlarge color-text-grey-dark">
            A ferramenta de tradução da <b>Meu Manga</b> permite traduções 10x mais rápido.
            <br>Se você é um <b>tradutor</b>, essa ferramenta é para você!</p>

        <div class="container col align-center padding-32">
            <a href="<?= HOME ?>cadastro-usuario" style="margin: auto;float: initial"
               class="btn-large hover-shadow upper color-orange color-text-white font-xxlarge font-bold">
                <span class="hide-small">Começe a </span>Traduzir
            </a>
        </div>
    </section>

    <section class="col padding-32 container relative color-grey-light">
        <div class="container">

            <?php
            $read->exeRead(PRE . "manga", "ORDER BY id DESC LIMIT 5");
            if ($read->getResult()) {
                $result = $read->getResult();
                foreach ($result as $i => $item) {
                    $result[$i]['imagem'] = json_decode($item['imagem'], true);
                    $result[$i]['background'] = json_decode($item['background'], true);
                }
                $data = [
                    "title" => "Novos Mangas",
                    "subTitle" => "Mangas Saindo do Forno",
                    "icon" => "whatshot",
                    "data" => $result
                ];

                $tpl->show("top", $data);
                $data['data'] = array_reverse($data['data']);
                $tpl->show("top", $data);
                $tpl->show("top", $data);
            }
            ?>
        </div>
    </section>

    <section class="col container color-grey-light padding-32">
        <header class="col">
            <h1 class="align-center">Junte-se à <?=$num?> Pessoas...</h1>
            <div class="col align-center">
                <a href="<?=HOME?>cadastro-usuario" class="btn-large theme font-xxlarge hover-shadow upper font-bold" style="margin: auto;float:initial">Criar Conta!</a>
            </div>
        </header>


    </section>

</div>