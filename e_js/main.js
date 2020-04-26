$("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});

$("#emri").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Emri i kontaktit").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Shënoni në këtë hapësirë emrin e personit të dyshuar me Covid-19 që keni pasur kontakte me të").fadeIn(400);
    });
    $("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});
});

$("#mbiemri").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Mbiemri i kontaktit").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Shënoni në këtë hapësirë mbiemrin e personit të dyshuar me Covid-19 që keni pasur kontakte me të").fadeIn(400);
    });
    $("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});
});

$("#vendbanimi").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Vendbanimi i kontaktit").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Qyteti në të cilin banon kontakti juaj i dyshimtë me Covid-19").fadeIn(400);
    });
    $("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});
});

$("#adresa").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Adresa e kontaktit").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Shënoni këtu adresën (lagje apo zonë) e kontaktit të dyshuar me Covid-19 (OPCIONALE)").fadeIn(400);
    });
    $("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});
});

$("#lastseen").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Koha e kontaktit").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Shënoni datën kur ka qenë kontakti i fundit me personin e dyshuar me Covid-19").fadeIn(400);
    });
    $("#example").fadeOut(400, function () {
    $(this).css("display", "none");
});
});

$("#extrainfo").focus(function () {
    $("#title").fadeOut(400, function () {
        $(this).html("Informata shtesë").fadeIn(400);
    });
    $("#tutorial").fadeOut(400, function () {
        $(this).html("Ndonjë informatë shtesë që do të na tregonit rreth personit të dyshuar me Covid-19?").fadeIn(400);
    });
    $("#example").fadeOut(700, function () {
        $(this).css("display", "inherit");
    });
});