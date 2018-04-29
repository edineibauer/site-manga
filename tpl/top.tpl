<div class="col s12 m6 l4 padding-small margin-bottom">
    <section class="border color-grey-light">

        <header class="col container padding-16 border-bottom color-white">
            <h1 class="font-large padding-0 color-text-grey">{$title}</h1>
        </header>

        <div class="col content-top">
            {foreach from=$data item=datum key=i}
                {if $i === 0}
                    <article class="col">
                        <div class="col top-big relative overflow-hidden">
                            <a href="{$home}manga/{$datum.name}" class="article-image">
                                <img src="image/{$datum.background[0]['url']}&h=190&w=320" alt="{$datum.nome}"
                                     title="{$datum.nome}" style="width:100%; height: 100%"
                                     class="hover-opacity article-img">
                                <header class="row padding-small">
                                    <div class="col left font-xlarge padding-medium border-right color-text-white"
                                         style="width: 50px">
                                        {$i+1}
                                    </div>
                                    <h1 class="font-large rest padding-large color-text-white">{$datum.nome}</h1>
                                </header>
                            </a>
                        </div>
                    </article>
                {else}
                    <article class="col left margin-right border-top">
                        <div class="col right overflow-hidden" style="width: 60px">
                            <a href="{$home}manga/{$datum.name}" class="overflow-hidden">
                                <img src="image/{$datum.imagem[0]['url']}&h=60&w=60" alt="{$datum.nome}"
                                     title="{$datum.nome}"
                                     style="height: 60px; width: 60px;"
                                     class="hover-opacity article-img">
                            </a>
                        </div>
                        <div class="rest padding-small">
                            <div class="col left font-xlarge padding-medium border-right" style="width: 50px">
                                {$i+1}
                            </div>
                            <header class="rest">
                                <a href="{$home}manga/{$datum.name}">
                                    <h1 class="font-large overflow-hidden padding-large"
                                        style="height: 52px;">{$datum.nome}</h1>
                                </a>
                            </header>
                        </div>
                    </article>
                {/if}
            {/foreach}
        </div>
    </section>
</div>