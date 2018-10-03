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
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '238515270159151',
                    cookie: true,
                    xfbml: true,
                    version: 'v3.1'
                });
                FB.AppEvents.logPageView();
                console.log("haii");
                FB.login(function (response) {
                    if (response.authResponse) {
                        console.log("authres");

                        window.top.location = "home.php"
                    }
                });
                FB.getLoginStatus(function (response) {
                    if (response.status === 'connected') {
                        // The user is logged in and has authenticated your
                        // app, and response.authResponse supplies
                        // the user's ID, a valid access token, a signed
                        // request, and the time the access token 
                        // and signed request each expire.
                        var uid = response.authResponse.userID;
                        var accessToken = response.authResponse.accessToken;
//                        console.log(accessToken);
                        console.log("connected");
                        function setCookie(cname, cvalue) {

                            console.log("cookie set");
                            console.log(cvalue);
                            document.cookie = cname + "=" + cvalue + ";path=/";
                        }

                        setCookie('token', accessToken);
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
            <form action="login.php" method="post" >
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

        <div>
            <form action="https://facebook.com/oauth/authorize?response_type= token&client_id=209518916300016&redirect_uri=http%3A%2F%2Flocalhost%3A8080%2FOAuth-authorization-demo-with-facebook%2FOAuth_demo%2Flogin.php&scope=public_profile%20user_posts%20user_friends%20user_photos" method="get" >

                <input type="submit" value="go" >

            </form><br>

        </div>
    </body>
</html>
