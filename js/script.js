$(document).ready(function(){

    $("input[name='author']").keyup(function(){
        var value = $(this).val();
        $("input[name='authorID']").val("");
        getAutoComplete(value);
    }).focus(function(){
        var value = $(this).val();
        if(value.length > 0){
            getAutoComplete(value);
        }
    });

});


$(document).on("click", "#autocomplete-authors div", function(){
    var value = $(this).text();
    var id = $(this).data("id");
    $("input[name='author']").val(value);
    $("input[name='authorID']").val(id);
    $("#autocomplete-authors").empty().hide();
});

var input = $("input[name='author']");
$(document).click(function(evt){
    var target = $(evt.target);
    if( !target.is( '#autocomplete-authors') && !target.is(input) ){
          $("#autocomplete-authors").empty().hide();
     }
});

function getAutoComplete(value){
    $.ajax({
        type: "get",
        url: "api/listAuthors.php",
        data: {
            inputValue: value
        },
        success:function(dataFromAPI){
            $("#autocomplete-authors").empty();
            if(dataFromAPI){
                for (var i = 0; i < dataFromAPI.length; i++) {
                    $("#autocomplete-authors").append("<div data-id='"+dataFromAPI[i].id+"'>"+dataFromAPI[i].author_name+"</div>");
                }
                $("#autocomplete-authors").show();
            } else {
                $("#autocomplete-authors").hide();
            }
        },
        error: function(){
            console.log("something went wrong, can't connect to the api");
        }
    });
}
