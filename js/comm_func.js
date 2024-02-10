function load_file({ target, url }) {
    let node_list = [];
    if (!url) return;
    $.ajax({
        async: false, // ajax를 동기방식으로 사용한다.
        url: url,
        success: function (rs) {
            rs = rs.replaceAll("${path}", url.match(/(.*)\//i)[1]);
            switch (typeof target) {
                case "object":
                    $(target).after(rs);
                    break;
                case "string":
                    switch (target) {
                        case "main":
                            $("#main").empty().append(rs);
                            break;
                        default:
                            $("#" + target)
                                .empty()
                                .append(rs);
                    }
            }
        },
        error: function () {
            let err = "[File not found : " + url + "]";
            switch (typeof target) {
                case "object":
                    $(target).after(err);
                    break;
                case "string":
                    switch (target) {
                        case "main":
                            $("#main").empty().append(err);
                            break;
                        default:
                            $("#" + target)
                                .empty()
                                .append(err);
                    }
            }
        },
        complete: function () {
            switch (typeof target) {
                case "object":
                    target.remove();
                    break;
                case "string":
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
