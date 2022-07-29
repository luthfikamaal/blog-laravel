$(document).ready(function () {
    $("#addLink").click(function () {
        var value = $("#textarea").val();
        var link = prompt("Masukkan Link");
        var text = prompt("Masukkan text");
        value =
            value + '<a href="' + link + '" target="_blank">' + text + "</a>";
        $("#demo").html(value);
        $("#textarea").val(value).focus();
    });
    $("#addImg").click(function () {
        var value = $("#textarea").val();
        var link = prompt("Masukkan link gambar");
        var alt = prompt("Masukkan alt gambar");
        value =
            value +
            '<img src="' +
            link +
            '" alt="' +
            alt +
            '" class="w-100 my-2 rounded">';
        $("#demo").html(value);
        $("#textarea").val(value).focus();
    });
    $("#addPS").click(function () {
        var value = $("#textarea").val();
        var par = prompt("Masukkan paragraf");
        value = value + "<p>" + par + "</p>";
        $("#demo").html(value);
        $("#textarea").val(value).focus();
    });
    $("#addPE").click(function () {
        var value = $("#textarea").val();
        value = value + "</p>";
        $("#demo").html(value);
        $("#textarea").val(value).focus();
    });
    $("#textarea").keyup(function () {
        $("#demo").html($("#textarea").val());
    });
});
