<div class="col main relative margin-bottom">
    <div class="col manga-header relative">
        <img src="{$home}image/vendor/conn/meumanga/assets/cat.jpg&w=1900" height="320" class="col manga-background"/>
        <header class="padding-32 relative margin-top">
            <div class="col padding-xlarge"><br></div>
            <p class="align-center color-text-grey font-xlarge text-shadow font-bold margin-0 padding-0 padding-top">Busca por..</p>
            <br>
            <b><h1 class="align-center color-text-white font-xxxlarge text-shadow font-bold margin-0 padding-0">{$busca}</h1></b>
        </header>
    </div>

    <div class="col relative manga-content">
        <div class="col color-white z-depth-2 manga-content-card">
            <div class="col s12 l4 right">
                <div class="col hide">
                    top content here
                </div>

            </div>
            <div class="col s12 l8 left">

                <div class="col hide">
                    <button class="btn margin-bottom border-theme left theme">
                        <i class="material-icons left">chrome_reader_mode</i>
                        <span class="padding-left">Manga</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">book</i>
                        <span class="padding-left">Capítulo</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">remove_red_eye</i>
                        <span class="hide-small padding-left">Categoria</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">remove_red_eye</i>
                        <span class="hide-small padding-left">Artista</span>
                    </button>
                </div>
                <div class="col margin-bottom" id="manga-capitulo">
                    {if $manga != null}
                        {foreach item=item key=i from=$manga}
                            <article class="col color-hover-grey-light card padding-small">
                                {if $item.imagem != ""}
                                    <a href="{$home}manga/{$item.name}" class="col" style="width: 60px">
                                        <img src="{$home}image/{$item.imagem[0]['url']}&w=60&h=80">
                                    </a>
                                {/if}
                                <header class="rest">
                                    <a href="{$home}manga/{$item.name}">
                                        <h1 class="col font-xlarge padding-0 padding-left">{$item.nome}</h1>
                                        <p class="col margin-0 padding-left">{$item.descricao}</p>
                                    </a>
                                </header>
                            </article>
                        {/foreach}
                    {/if}
                    {if $capitulo != null}
                        {foreach item=item key=i from=$capitulo}
                            <article class="col color-hover-grey-light card padding-small">
                                {if $item.imagem != ""}
                                    <a href="{$home}manga/{$item.name}" class="col" style="width: 60px">
                                        <img src="{$home}image/{$item.imagem[0]['url']}&w=60&h=80">
                                    </a>
                                {/if}
                                <header class="rest">
                                    <a href="{$home}manga/{$item.name}">
                                        <h1 class="col font-xlarge padding-0 padding-left">{$item.nome}</h1>
                                        <p class="col margin-0 padding-left">{$item.descricao}</p>
                                    </a>
                                </header>
                            </article>
                        {/foreach}
                    {/if}
                    {if $categoria != null}
                        {foreach item=item key=i from=$categoria}
                            <article class="col color-hover-grey-light card padding-small">
                                {if $item.imagem != ""}
                                    <a href="{$home}categoria/{$item.name}" class="col" style="width: 60px">
                                        <img src="{$home}image/{$item.imagem[0]['url']}&w=60&h=80">
                                    </a>
                                {/if}
                                <header class="rest">
                                    <a href="{$home}categoria/{$item.name}">
                                        <h1 class="col font-xlarge padding-0 padding-left">{$item.nome}</h1>
                                        <p class="col margin-0 padding-left">{$item.descricao}</p>
                                    </a>
                                </header>
                            </article>
                        {/foreach}
                    {/if}
                    {if $artista != null}
                        {foreach item=item key=i from=$artista}
                            <article class="col color-hover-grey-light card padding-small">
                                {if $item.imagem != ""}
                                    <a href="{$home}artista/{$item.name}" class="col" style="width: 60px">
                                        <img src="{$home}image/{$item.imagem[0]['url']}&w=60&h=80">
                                    </a>
                                {/if}
                                <header class="rest">
                                    <a href="{$home}artista/{$item.name}">
                                        <h1 class="col font-xlarge padding-0 padding-left">{$item.nome}</h1>
                                        <p class="col margin-0 padding-left">{$item.descricao}</p>
                                    </a>
                                </header>
                            </article>
                        {/foreach}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>