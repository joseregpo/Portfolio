$('#save_graph').on("click", function (evt) {

    evt.preventDefault();

    var items = [];
    var id = $("#id").val();
    var languageID = $("#languageID").val();
    var data = { id: id, type: type, items: JSON.stringify(items), languageID: languageID };

    $.ajax({
        url: "/section/saveContactItems",
        type: "POST",
        data: data,
        cache: false,
        contentType: 'application/json; charset=utf-8',
        processData: false,
        success: function (response)
        {
            console.log(response);
        }
    });
});