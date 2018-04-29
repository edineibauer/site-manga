<header class="row header relative z-depth-inset-2" style="background-image: url('<?= $header ?>')">
    <div class="container headerDiv">

        <div class="row">
            <?php
            if (defined("LOGO") && !empty(LOGO))
                echo "<a class='left margin-bottom' href='" . HOME . "'><img src='" . LOGO . "' class='padding-4 logo' title='" . SITENAME . "' alt='" . SITENAME . "' /></a><h1 class='padding-0' style='font-size:0'><b>" . SITENAME . "</b></h1>";
            else
                echo "<h1><b>" . SITENAME . "</b></h1>";
            ?>

            <div class="padding-16 menu">
                <button class="button hide-large left color-hover-text-grey mini-menu" onclick="w3_open()">
                    <i class="material-icons">menu</i>
                </button>
                <a href="<?= HOME ?>categoria/manga"
                   class="button z-depth-2 hover-shadow color-white color-hover-text-green color-hover-grey-light">
                    <i class="material-icons left padding-right">chrome_reader_mode</i>Mangas
                </a>
                <a href="<?= HOME ?>categoria/hq"
                   class="button z-depth-2 hover-shadow color-white color-hover-text-blue color-hover-grey-light">
                    <i class="material-icons left padding-right">book</i>HQs
                </a>
                <a href="<?= HOME ?>categoria/hentai"
                   class="button z-depth-2 hover-shadow color-white color-hover-text-red color-hover-grey-light">
                    <i class="material-icons left padding-right">whatshot</i>Hentai
                </a>
            </div>
        </div>

        <div class="row padding-32 container">
            <input type="search" placeholder="buscar..." class="font-large color-white z-depth-4 search" id="searchHome"/>
        </div>
    </div>
</header>