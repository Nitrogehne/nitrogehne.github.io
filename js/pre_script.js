$(function () {
    $("[data-load]")
        .each(function () {
            load_file({
                target:
                    this.getAttribute("data-load") == "this" ? this : undefined,
                url: this.getAttribute("data-url"),
            });
        })
        .promise()
        .done(function () {
            init_main();
            load_main();
        });
});

function init_main() {
    if (location.search != "") {
        arr_get = location.search.substr(1).split("?");
        obj_get = {};
        for (i = 0; i < arr_get.length; i++) {
            obj_get[arr_get[i].split("=")[0]] = decodeURIComponent(
                arr_get[i].split("=")[1]
            );
        }
        if (
            obj_get["menu"] &&
            $(
                "#main_menu a[data-url='page/" +
                    obj_get["menu"] +
                    "/index.html']"
            ).length
        ) {
            $("#main .load").attr(
                "data-url",
                "page/" + obj_get["menu"] + "/index.html"
            );
            $("#main_menu li.current").removeClass("current");
            $("#main_menu li.semi_current").removeClass("semi_current");
            $(
                "#main_menu a[data-url='page/" +
                    obj_get["menu"] +
                    "/index.html']"
            )
                .parent("li")
                .addClass("current")
                .parents(".nav_lv1")
                .addClass("semi_current");
        }
    }
}
function load_main() {
    $("#main .load")
        .each(function () {
            var obj = $(this);
            var url = obj.attr("data-url");
            $.ajax({
                async: false, // ajax를 동기방식으로 사용한다.
                url: url,
                success: function (rs) {
                    obj.after(rs);
                },
                error: function () {
                    obj.after("[File not found : " + url + "]");
                },
                complete: function () {
                    obj.remove();
                },
            });
        })
        .promise()
        .done(function () {
            if (0 < $(".load").length) {
                load_file();
            }
        });
}
