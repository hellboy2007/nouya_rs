$(function(){

var data = $('#login').serialize();
var passpt = $("#passpt").val()
var jamppt = $("#jamppt").val()
    $.post(passpt, data, function(rs)
    {
        console.log(rs)
        if(rs.status==1)
        {
           location.href = jamppt;
        }else{
            alert(rs.content);
        }
    });

})