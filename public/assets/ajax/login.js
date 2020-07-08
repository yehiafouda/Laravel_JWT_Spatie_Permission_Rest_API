/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#login").click(function () {
    $.ajax({
        url: api_url + '/login',
        method: 'POST',
        data: {
            email: $("#email").val(),
            password: $("#password").val()
        },
        success: function (data) {
            if (data.status_code == '200') {
                localStorage.setItem("api_token", data.data.api_token);
                window.location.replace('/home');
            }
            if (data.status_code == '422') {
                alert('Validation Failed');
            }
        }
    });
});