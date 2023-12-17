/*function test() {
    $.ajax({
        url:'http://freegeoip.net/json/',
        type:'get',
        crossDomain: true,
        headers: {
            'Access-Control-Allow-Credentials' : true,
            'Access-Control-Allow-Origin':'*',
            'Access-Control-Allow-Methods':'GET',
            'Access-Control-Allow-Headers':'application/json'
        },
        dataType:'jsonp'
    }).done(function(data) {
        console.log(data.ip);
    });
}*/

/*async function myFunction(){
    var remoteCode = await getHTML('http://freegeoip.net/json');
    console.log(remoteCode);
}
myFunction();

function getHTML(url) {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.open('get', url, true);
        xhr.responseType = 'json';
        xhr.onload = function () {
            var status = xhr.status;
            if (status == 200) {

                resolve(xhr.response.documentElement.innerHTML);
            } else {
                reject(status);
            }
        };
        xhr.send();
    });
}*/



function myFunction()
{
    $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {

        var testy = data;
       // var testy =  (JSON.stringify(data, null, 2));
        //console.log(testy.stateProv);
        const userAgent = navigator.userAgent;
       // console.log(userAgent);

        arrinfo = [
            testy.ipAddress,
            testy.stateProv,
            userAgent
        ];
        console.log(arrinfo);

        $.ajax({

            url: "../savetodb.php",
            // dataType: "json", // Для использования JSON формата получаемых данных
            method: "POST", // Что бы воспользоваться POST методом, меняем данную строку на POST
            data: {"ip_address": arrinfo[0],"city": arrinfo[1], "platform": arrinfo[2]},
            success: function(data) {

                console.log(data);
            }
        });
    });

};
