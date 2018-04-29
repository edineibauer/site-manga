<article class="col main relative margin-bottom">
    <div class="col manga-header relative">
        <img src="{$home}image/{$background[0]['url']}&w=1900&h=320" height="320" class="col manga-background"
             alt="imagem de background de {$nome}"/>
        <header class="padding-32 relative margin-top">
            <br><br><br>
            <h1 class="align-center color-text-white font-jumbo text-shadow font-bold margin-0 padding-4">{$nome}</h1>
            <p class="align-center col s12 margin-0 margin-bottom">
                {foreach item=cat from=$categorias}
                    <a href="{$home}categoria/{$cat.name}"
                       class="tag radius-small color-grey-light color-border-grey hover-text-theme">{$cat.titulo}</a>
                {/foreach}
            </p>
        </header>
        <input type="hidden" value="{$id}" id="manga-id"/>
    </div>

    <div class="col manga-content relative">
        <div class="col color-white z-depth-2 manga-content-card">
            <div class="col s12 l4 right">
                <div class="col">
                    <button title="nunca mais perca um episódio" rel="{$id}"
                            class="btn {$classFollow}follow-btn margin-bottom left margin-right color-border-red hover-shadow">
                        <i class="material-icons left padding-right">rss_feed</i>
                        <span class="left">{$follow}</span>
                    </button>
                    <button class="btn left color-teal hover-shadow color-border-green">
                        <i class="material-icons left padding-right">chrome_reader_mode</i>
                        <span class="left">Ler</span>
                    </button>
                </div>

                <div class="col padding-16 font-large">
                    <p class="col margin-0 padding-4">
                        <span class="left">Criadores:</span>
                        {foreach item=artista key=i from=$artistas}
                            {if $i > 0},{/if}
                            <a href="{$home}artista/{$artista.name}"
                               class="color-text-teal padding-left">{$artista.nome}</a>
                        {/foreach}
                    </p>
                    <p class="col margin-0 padding-4">Lançado em: {$ano_de_lancamento}</p>

                    <p class="margin-top left">
                        <span class="font-xlarge col padding-8">Sinopse:</span>
                        {$descricao}
                    </p>
                </div>
            </div>
            <div class="col s12 l8 left">

                <div class="col">
                    <button class="btn margin-bottom border-theme left theme">
                        <i class="material-icons left">access_time</i>
                        <span class="padding-left">Recentes</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">timeline</i>
                        <span class="padding-left">Ordem</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">remove_red_eye</i>
                        <span class="hide-small padding-left">Não Vistos</span>
                    </button>
                </div>
                <div class="col margin-bottom" id="manga-capitulo">
                    Carregando...
                </div>
            </div>
        </div>
    </div>
</article>