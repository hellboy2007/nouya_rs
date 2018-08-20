$(function(){

  $('.loginbtn').on('click', function(){

    var mail      = $('#login_form input[name="mail"]').val()
    var password  = $('#login_form input[name="password"]').val()
    var data      = {'mail':mail, 'password':password};

    var passpt = $("#passpt").val()
    var jamppt = $("#jamppt").val()

    $.getJSON(passpt, data, function(rs)
    {
        var backrs = JSON.parse(rs)
        console.log(backrs)
        if(backrs.status==1)
        {
           location.href = jamppt;
        }else{
            alert(rs.content);
        }
    });
  })


})
