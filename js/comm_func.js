function load_file({ target, url }) {
    let node_list = [];
    if (!url) return;
    $.ajax({
        async: false, // ajax를 동기방식으로 사용한다.
        url: url,
        success: function (rs) {
            rs = rs.replaceAll("${path}", url.match(/(.*)\//i)[1]);
            if (!!target) {
                $(target).after(rs);
            } else {
                $("#main").empty().append(rs);
            }
        },
        error: function () {
            let err = "[File not found : " + url + "]";
            if (!!target) {
                $(target).after(err);
            } else {
                $("#main").empty().append(err);
            }
        },
        complete: function () {
            if (!!target) {
                target.remove();
            }

            $("[data-load]").each(function () {
                load_file({
                    target:
                        this.getAttribute("data-load") == "this"
                            ? this
                            : undefined,
                    url: this.getAttribute("data-url"),
                });
            });
        },
    });
}
