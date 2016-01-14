$("#proyHuellas").change(function(){
    if($('#proyHuellas').is(":checked")){
        $('#proyHuellas').val("on");
    } else {
        $('#proyHuellas').val("off");
    }
});

$("#proyJMF").change(function(){
    if($('#proyJMF').is(":checked")){
        $('#proyJMF').val("on");
    } else {
        $('#proyJMF').val("off");
    }
});

$("#seccionPrimaria").change(function(){
    if($('#seccionPrimaria').is(":checked")){
        $('#seccionPrimaria').val("on");
    } else {
        $('#seccionPrimaria').val("off");
    }
});

$("#seccionSecundaria").change(function(){
    if($('#seccionSecundaria').is(":checked")){
        $('#seccionSecundaria').val("on");
    } else {
        $('#seccionSecundaria').val("off");
    }
});