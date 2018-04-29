<footer class="container col footer relative padding-32 color-grey-dark z-depth-inset-2">
    <div class="row-padding">
        <div class="third padding-large">
            <?php
            if (defined("LOGO") && !empty(LOGO))
                echo "<a class='col left margin-bottom' href='" . HOME . "'><img src='" . HOME . "image/" . LOGO . "&h=80' class='col padding-4 logo' title='" . SITENAME . "' alt='" . SITENAME . "' /></a><h1 class='padding-0' style='font-size:0'><b>" . SITENAME . "</b></h1>";
            else
                echo "<h1><b>" . SITENAME . "</b></h1>";
            ?>
            <p>Envie, Traduza e Leia. O <?=SITENAME?> trás o melhor do Anime para seu dia a dia.</p>
        </div>

        <div class="third padding-large">
            <ul>
                <li class="padding-4 opacity hover-opacity-off">
                    <a href="<?=HOME?>termos" target="_blank">termos de uso</a>
                </li>
                <li class="padding-4 opacity hover-opacity-off">
                    <a href="<?=HOME?>privacidade" target="_blank">Política de Privacidade</a>
                </li>
                <li class="padding-4 opacity hover-opacity-off">
                    <a href="<?=HOME?>contato" target="_blank">Contato</a>
                </li>
                <li class="padding-4 opacity hover-opacity-off">
                    <a href="<?=HOME?>afiliado" target="_blank">Programa de Afiliado</a>
                </li>
                <li class="padding-4 opacity hover-opacity-off">Desenvolvido com <a href="https://ontab.com.br" target="_blank" class="color-text-orange">Ontab</a></li>
            </ul>
        </div>

        <div class="third">
            <h3>POPULAR TAGS</h3>
            <p>
                <span class="tag color-black margin-bottom">Travel</span>
                <span class="tag color-grey small margin-bottom">Ideas</span>
                <span class="tag color-grey small margin-bottom">Baby</span>
                <span class="tag color-grey small margin-bottom">Family</span>
                <span class="tag color-grey small margin-bottom">News</span>
                <span class="tag color-grey small margin-bottom">Clothing</span>
                <span class="tag color-grey small margin-bottom">Shopping</span>
                <span class="tag color-grey small margin-bottom">Sports</span>
                <span class="tag color-grey small margin-bottom">Games</span>
            </p>
        </div>

    </div>
</footer>