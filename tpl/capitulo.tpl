{foreach item=cap key=i from=$data}
    <div class="col color-hover-grey-light manga-episodio">
        <a href="{$home}manga/{$manga}/capitulo/{$cap.id}" class="col left" style="width: 80px">
            <img src="{$home}image/{$cap.capa[0]['url']}&w=80&h=80" alt="cap {$cap.capitulo}: {$cap.subtitulo}"
                 title="Cap. {$cap.capitulo}: {$cap.subtitulo}" height="80" width="80" style="width: 80px"/>
        </a>
        <p class="col left font-xxxlarge margin-0" style="width: 80px; padding-left: 30px">
            {$cap.capitulo}
        </p>
        <div class="col right color-text-grey font-large padding-16" style="width: 95px">
            <a href="{$home}manga/{$manga}/capitulo/{$cap.id}" class="btn margin-0 color-white color-border-green hover-shadow opacity hover-opacity-off"><i class="material-icons left padding-right">chrome_reader_mode</i> ler</a>
        </div>
        <div class="rest padding-16">
            <p class="col left color-text-grey margin-0 overflow-hidden" style="max-height: 45px">
                {$cap.subtitulo}
            </p>
            <p class="col left color-text-grey margin-0">
                {$cap.data}
            </p>
        </div>
    </div>
{/foreach}