<header class="row header-mini relative">
    <div class="container col">

        <div class="row">
            <?php
            if (defined("LOGO") && !empty(LOGO))
                echo "<a class='left logo' href='" . HOME . "'><img src='" . HOME . "image/" . LOGO . "&h=100px' class='padding-4' title='" . SITENAME . "' alt='" . SITENAME . "' /></a><h1 class='padding-0' style='font-size:0'><b>" . SITENAME . "</b></h1>";
            else
                echo "<h1><b>" . SITENAME . "</b></h1>";
            ?>

            <div class="padding-8 menu">
                <button class="button hide-large left color-hover-text-grey mini-menu" onclick="w3_open()">
                    <i class="material-icons">menu</i>
                </button>
                <a href="<?= HOME ?>categoria/manga"
                   class="button menu-mini z-depth-2 hover-shadow color-white color-hover-text-green color-hover-grey-light">
                    <i class="material-icons left padding-right">chrome_reader_mode</i>Mangas
                </a>
                <a href="<?= HOME ?>categoria/hq"
                   class="button menu-mini z-depth-2 hover-shadow color-white color-hover-text-blue color-hover-grey-light">
                    <i class="material-icons left padding-right">book</i>HQs
                </a>
                <a href="<?= HOME ?>categoria/hentai"
                   class="button menu-mini z-depth-2 hover-shadow color-white color-hover-text-red color-hover-grey-light">
                    <i class="material-icons left padding-right">whatshot</i>Hentai
                </a>
            </div>
        </div>
    </div>
</header>