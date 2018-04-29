<article class="col main relative margin-bottom">
    <div class="col manga-header relative">
        <img src="{$home}image/{$manga.background[0]['url']}&w=1900" height="320" class="col manga-background"
             alt="imagem de background de {$manga.nome}"/>
        <header class="padding-32 relative margin-top">
            <br><br><br>
            {if $subtitulo != ""}
                <p style="line-height: 60px;"
                   class="align-center font-bold color-text-white font-xxxlarge text-shadow col s12 margin-0">
                    {$subtitulo}
                </p>
                <h1 class="align-center color-text-white font-xlarge text-shadow font-bold margin-0 padding-4">{$manga.nome}
                    #{$capitulo}</h1>
            {else}
                <h1 style="line-height: 60px;"
                    class="align-center color-text-white font-jumbo text-shadow font-bold margin-0 padding-4">{$manga.nome}
                    #{$capitulo}</h1>
            {/if}
        </header>
        <input type="hidden" value="{$id}" id="capitulo-id"/>
    </div>

    <div class="col manga-content relative">
        <div class="col color-white z-depth-2 manga-content-card leitor-content">
            <div class="col div-nav">
                <nav class="left">
                    <a href="{$home}manga/{$manga.name}"
                       class="btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                        <i class="material-icons left">home</i>
                        <span class="hide-small padding-left">Indíce</span>
                    </a>
                    <a href="" class="pag-leitor pag-anterior btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                        <i class="material-icons left">keyboard_arrow_left</i>
                        <span class="hide-small padding-left">Anterior</span>
                    </a>
                    <a href="" class="pag-leitor pag-proximo btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                        <i class="material-icons left">keyboard_arrow_right</i>
                        <span class="hide-small padding-left">Próximo</span>
                    </a>
                </nav>
                <div class="right">
                    <button title="nunca mais perca um episódio" rel="{$manga.id}"
                            class="btn margin-bottom left color-border-red {$classFollow}follow-btn hover-shadow">
                        <i class="material-icons left padding-right">rss_feed</i>
                        <span class="left">{$follow}</span>
                    </button>
                </div>
            </div>
            {foreach item=imagem from=$galeria}
                <img class="col" src="{$home}image/{$imagem.url}&w=1920"/>
            {/foreach}
            <nav class="col div-nav" style="padding-top: 32px">
                <a href="{$home}manga/{$manga.name}"
                   class="btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                    <i class="material-icons left">home</i>
                    <span class="hide-small padding-left">Indíce</span>
                </a>
                <a href="" class="pag-leitor pag-anterior btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                    <i class="material-icons left">keyboard_arrow_left</i>
                    <span class="hide-small padding-left">Anterior</span>
                </a>
                <a href="" class="pag-leitor pag-proximo btn margin-bottom left margin-right color-border-green color-hover-teal color-text-teal color-white hover-shadow">
                    <i class="material-icons left">keyboard_arrow_right</i>
                    <span class="hide-small padding-left">Próximo</span>
                </a>
                <div class="right">
                    <button title="nunca mais perca um episódio" rel="{$manga.id}"
                            class="btn margin-bottom left color-border-red {$classFollow}follow-btn hover-shadow">
                        <i class="material-icons left padding-right">rss_feed</i>
                        <span class="left">{$follow}</span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</article>
