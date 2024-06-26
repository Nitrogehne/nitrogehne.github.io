$(document).ready(() => {
    var $table = $("#perfect_maker table");
    var $thead = $("#perfect_maker table thead");
    var title = [
        ["순서", "order", "order"],
        ["삭제", "del", "btn", "-", remove],
        ["다음에 추가", "add", "btn", "+", add],
        ["사탕 그룹", "candy_group", "txt"],
        ["도감 번호", "pokedex_no", "txt"],
        ["이름", "name", "txt"],
        ["반짝반짝", "lucky", "chk"],
        ["색이 다른", "shiny", "chk"],
        ["그림자", "shadow", "chk"],
        ["정화", "purified", "chk"],
        [
            "지방",
            "region",
            "sel",
            [
                ["", ""],
                ["a", "알로라"],
                ["g", "가라르"],
                ["h", "히스이"],
            ],
        ],
        ["복장", "costume", "txt"],
        ["모습", "image", "txt"],
        ["암수구분", "distinction", "chk", true],
        [
            "성별",
            "gender",
            "sel",
            [
                ["", ""],
                ["m", "수"],
                ["f", "&nbsp;&nbsp;&nbsp;암"],
            ],
        ],
        ["몸무게", "weight", "txt"],
        ["키", "height", "txt"],
        ["특별한 기술", "knows_attack", "txt"],
        [
            "만남",
            "meet",
            "sel",
            [
                ["w", "야생"],
                ["f", "필드리서치"],
                ["g", "고로켓단"],
                ["", "알"],
                ["r", "레이드"],
                ["rr", "리모트레이드"],
                ["p", "엽서"],
                ["s", "스페셜리서치"],
            ],
        ],
        [
            "볼",
            "ball",
            "sel",
            [
                ["p", "포켓볼"],
                ["s", "슈퍼볼"],
                ["h", "하이퍼볼"],
                ["pr", "프리미어볼"],
                ["ub", "울트라비스트볼"],
                ["", "알 부화"],
                ["m", "마스터볼"],
            ],
        ],
        ["교환한 날", "trade_date", "date"],
        ["잡은 날", "caught_date", "date"],
        [
            "알 종류",
            "egg_type",
            "sel",
            [
                ["", ""],
                ["2", "2km"],
                ["5", "5km"],
                ["7", "7km"],
                ["10", "10km"],
                ["12", "12km"],
            ],
        ],
        ["알 받은 날", "egg_received_date", "date"],
        ["알 부화 날", "egg_hatched_date", "date"],
        ["엽서 받은 날", "postcard_received_date", "date"],
        ["행사", "event", "txt"],
        ["추가정보", "info", "txt"],
    ];
    $(".top_head th").attr("colspan", title.length);
    $(".bottom_foot td").attr("colspan", title.length);
    $tr = $("<tr>");
    $thead.append($tr);
    for (let title_arr of title) {
        let $th = $("<th>");
        $tr.append($th);
        $th.html(title_arr[0]);
    }
    var $tbody = $("#perfect_maker table tbody");
    var pkm_arr;
    var view_row = 20;
    var arr_idx = [0, view_row];
    var draw_idx = [...arr_idx];
    if (localStorage.pkm_arr) {
        let pkm_arr_json = localStorage.pkm_arr;
        $("#export").val("var perfect_pokemons = " + pkm_arr_json + ";");
        pkm_arr = JSON.parse(pkm_arr_json);
        draw_table();
    } else {
        $tbody.append(get_row(0));
    }
    function get_row(idx) {
        let $tr = $("<tr>").attr("data-idx", idx);
        for (let title_arr of title) {
            let $td = $("<td>");
            $tr.append($td);
            $td.attr("data-key", title_arr[1]).append(get_el(idx, title_arr));
        }
        return $tr;
    }
    function save_export() {
        let $tr_list = $("#perfect_maker tbody tr");
        pkm_arr = [];
        for (let tr of $tr_list) {
            let $tr = $(tr);
            let obj = {};
            let $td_list = $tr.find("td");
            for (let td of $td_list) {
                let $td = $(td);
                let key = $td.attr("data-key");
                if (key === "add" || key === "remove") continue;
                let val = $td.find("input, select").val();
                if (val === "on") val = $td.find("input").prop("checked");
                obj[key] = val;
            }
            pkm_arr.push(obj);
        }
        let pkm_arr_json = JSON.stringify(pkm_arr);
        $("#export").val("var perfect_pokemons = " + pkm_arr_json + ";");
        localStorage.pkm_arr = pkm_arr_json;
    }
    function import_data() {
        let pkm_arr_json = $("#export").val();
        pkm_arr_json = pkm_arr_json.replace("var perfect_pokemons = ", "");
        pkm_arr_json = pkm_arr_json.substring(0, pkm_arr_json.length - 1);
        pkm_arr = JSON.parse(pkm_arr_json);
        draw_table();
    }
    function draw_table() {
        $tbody.empty();
        let s =
            0 <= arr_idx[0] && arr_idx[0] + view_row < pkm_arr.length
                ? arr_idx[0]
                : 0;
        let e = s + view_row < pkm_arr.length ? s + view_row : pkm_arr.length;
        console.log(s, e, arr_idx[1], pkm_arr.length);
        for (let i = s; i < e; i++) {
            let pkm = pkm_arr[i];
            let $tr = $("<tr>");
            $tbody.append($tr);
            for (let title_arr of title) {
                let $td = $("<td>");
                $tr.append($td);
                let sel = $("<select>");
                $td.attr("data-key", title_arr[1]).append(
                    get_el_with_data(title_arr, pkm, i)
                );
            }
        }
    }
    function redraw_table() {
        let s = 0 <= arr_idx[0] ? arr_idx[0] : 0;
        let e = arr_idx[1] < pkm_arr.length ? arr_idx[1] : pkm_arr.length - 1;
        for (let i = s; i < e; i++) {
            let pkm = pkm_arr[i];
            let $tr = $("<tr>");
            $tbody.append($tr);
            for (let title_arr of title) {
                let $td = $("<td>");
                $tr.append($td);
                let sel = $("<select>");
                $td.attr("data-key", title_arr[1]).append(
                    get_el_with_data(title_arr, pkm, i)
                );
            }
        }
    }
    function add() {
        $(this).closest("tr").after(get_row());
        save_export();
    }
    function remove() {
        $(this).closest("tr").remove();
    }
    function get_el(idx, data_arr) {
        switch (data_arr[2]) {
            case "btn":
                return $("<button>").html(data_arr[3]).on("click", data_arr[4]);
                break;
            case "txt":
                return $("<input type=text>").attr("name", data_arr[2]);
                break;
            case "chk":
                return $("<input type=checkbox>")
                    .attr("name", data_arr[2])
                    .prop("checked", data_arr[3]);
                break;
            case "sel":
                let sel = $("<select>").attr("name", data_arr[2]);
                for (let op of data_arr[3]) {
                    sel.append($("<option>").val(op[0]).html(op[1]));
                }
                return sel;
                break;
            case "date":
                return $("<input type=text>").attr("name", data_arr[2]);
                break;
            default:
                return $("<span>");
        }
    }
    function get_el_with_data(data_arr, pkm_obj, idx) {
        let el = get_el(data_arr);
        switch (data_arr[2]) {
            case "btn":
                break;
            case "sel":
                el.val(pkm_obj[data_arr[1]]);
                break;
            case "txt":
            case "chk":
            case "date":
                switch (el.attr("type")) {
                    case "checkbox":
                        el.prop("checked", pkm_obj[data_arr[1]]);
                        break;
                    default:
                        el.val(pkm_obj[data_arr[1]]);
                }
                break;
            case "order":
                el.text(idx + 1);
        }
        return el;
    }
    $(document)
        .on(
            "change",
            "#perfect_maker td input, #perfect_maker td select",
            function () {
                save_export();
            }
        )
        .on("wheel", "#perfect_maker table", function (e) {
            const deltaY = e.originalEvent.deltaY;
            let delta;
            if (deltaY > 0) {
                // 위 방향으로 휠 굴림
                delta = 2;
            } else if (deltaY < 0) {
                // 아래 방향으로 휠 굴림
                delta = -2;
            }
            arr_idx[0] += delta;
            arr_idx[1] += delta;
            if (arr_idx[0] < 0) {
                arr_idx[0] = 0;
                arr_idx[1] = view_row;
            }else if(pkm_arr.length <= arr_idx[1]){
                arr_idx[0] = pkm_arr.length - view_row - 1;
                arr_idx[1] = pkm_arr.length - 1;
            }
            draw_table();
        })
        .on("input", "#slider", (e) => {
            console.log(e.target.value);
        });
});
