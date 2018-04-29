<article class="col color-hover-grey-light card padding-small">
    {if $imagem != ""}
        <a href="{$home}manga/{$name}" class="col" style="width: 60px">
            <img src="{$home}image/{$imagem[0]['url']}&w=60&h=80">
        </a>
    {/if}
    <header class="rest">
        <a href="{$home}manga/{$name}">
            <h1 class="col font-xlarge padding-0 padding-left">{$nome}</h1>
            <p class="col margin-0 padding-left">{$descricao}</p>
        </a>
    </header>
</article>