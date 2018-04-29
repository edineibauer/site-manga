function readMangas(offset) {
    post("meumanga", "read/categoria", {categoria: parseInt($("#categoria-id").val()), off: offset}, function (data) {
        $("#categoria-corpo").html(data);
    });
}

$(function () {
    readMangas(1);
});
