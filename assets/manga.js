function readCapitulos(offset) {
    post("meumanga", "read/capitulo", {manga: parseInt($("#manga-id").val()), off: offset}, function (data) {
        $("#manga-capitulo").html(data);
    });
}

function readNextCapitulo() {
    post("meumanga", "read/leitorPagina", {capitulo: parseInt($("#capitulo-id").val())}, function (data) {
        $(".pag-leitor").removeClass("disabled").prop("disabled", false);
        if (data.anterior === null)
            $(".pag-anterior").addClass("disabled").prop("disabled", true);
        if (data.proximo === null)
            $(".pag-proximo").addClass("disabled").prop("disabled", true);

        $(".pag-anterior").attr("href", data.anterior);
        $(".pag-proximo").attr("href", data.proximo);
    });
}

function follow(manga) {
    post("meumanga", "user/follow", {manga: manga}, function (g) {
        if (g === "1")
            $(".follow-btn").removeClass("color-hover-red color-text-red color-white").addClass("color-text-white color-red").find("span").text("Seguindo");
        else if (g === "2")
            $(".follow-btn").addClass("color-hover-red color-text-red color-white").removeClass("color-text-white color-red").find("span").text("Seguir");
    });
}

$(function () {
    if ($("#manga-id").length)
        readCapitulos();
    else
        readNextCapitulo();

    $(".follow-btn").off("click").on("click", function () {
        follow($(this).attr("rel"));
    });
});
