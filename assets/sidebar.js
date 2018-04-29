function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function search(search) {
    location.href = HOME + "busca/" + search;
}

$(function () {
    $(".search").off("keypress").on("keypress", function (e) {
        if(e.which === 13)
            search($(this).val());
    });
});