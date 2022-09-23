$(document).on("click", ".to_main, [data-target=main]", function () {
    var obj = $(this);
    var url = obj.attr("data-url");
    if (!url) return;
    load_file({ url: url });
    $("#main_menu .current").removeClass("current");
    obj.addClass("current");
});
