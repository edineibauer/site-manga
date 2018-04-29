<article class="col main relative margin-bottom">
    <div class="col manga-header relative">
        <img src="{$home}image/vendor/conn/meumanga/assets/cat.jpg&w=1900" height="320" class="col manga-background"/>
        <header class="padding-32 relative margin-top">
            <br><br><br>
            <p class="align-center col s12 margin-0 font-large color-text-white">
                Categoria
            </p>
            <h1 class="align-center color-text-white margin-bottom font-jumbo text-shadow font-bold margin-0 padding-4">{$titulo}</h1>
        </header>
        <input type="hidden" value="{$id}" id="categoria-id"/>
    </div>

    <div class="col manga-content relative">
        <div class="col color-white z-depth-2 manga-content-card">
            <div class="col s12 l4 right font-large font-light" id="sidebar-content">
                <h2 class="col upper font-xlarge color-text-grey-dark">Descrição:</h2>
                <span class="col color-text-grey">
                    {$descricao}
                </span>
            </div>
            <div class="col s12 l8 left">
                <div class="col">
                    <button class="btn margin-bottom border-theme left theme">
                        <i class="material-icons left">access_time</i>
                        <span class="padding-left">Recentes</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">timeline</i>
                        <span class="padding-left">Mais Vistos</span>
                    </button>
                    <button class="btn left border-theme hover-theme color-white hover-shadow">
                        <i class="material-icons left">star</i>
                        <span class="padding-left">Melhor Score</span>
                    </button>
                </div>
                <div class="col margin-bottom" id="categoria-corpo">
                    Carregando...
                </div>
            </div>
        </div>
    </div>
</article>