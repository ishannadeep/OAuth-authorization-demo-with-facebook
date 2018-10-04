<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

        <script>
            function setCookie(cname, cvalue) {

                console.log("cookie set");
                console.log(cvalue);
                document.cookie = cname + "=" + cvalue + ";path=/";
            }
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '238515270159151',
                    cookie: true,
                    xfbml: true,
                    version: 'v3.1'
                });
                FB.AppEvents.logPageView();
               
                FB.login(function (response) {
                    if (response.authResponse) {

                        var accessToken = response.authResponse.accessToken;
                        console.log("connected");
                        setCookie('token', accessToken);
                        window.top.location = "home.php";
                    }
                });
                FB.getLoginStatus(function (response) {
                    if (response.status === 'connected') {
                        console.log("connected");
                    } else if (response.status === 'authorization_expired') {

                        console.log("authorization_expired");
                    } else if (response.status === 'not_authorized') {

                        console.log("not_authorized");
                    } else {

                        console.log("notlogin");
                    }
                });
            };
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        </script>
        <div>
            <form action="#" method="post" >
                <label>user name</label>
                <input type="text" name="userName" style="width: 100px;"><br>
                <label>Password</label>
                <input type="password" name="password" style="width: 100px;"><br>
                <input type="submit" value="go" >

            </form><br>

        </div>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=238515270159151&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>

    </body>
</html>
