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
                        window.top.location = "http://localhost:8080/OAuth-authorization-demo-with-facebook/OAuth_demo/home.html";
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
                        console.log("connected");
//                        location.href="home.html";



                    } else if (response.status === 'authorization_expired') {
                        // The user has signed into your application with
                        // Facebook Login but must go through the login flow
                        // again to renew data authorization. You might remind
                        // the user they've used Facebook, or hide other options
                        // to avoid duplicate account creation, but you should
                        // collect a user gesture (e.g. click/touch) to launch the
                        // login dialog so popup blocking is not triggered.
                        console.log("authorization_expired");
                    } else if (response.status === 'not_authorized') {
                        // The user hasn't authorized your application.  They
                        // must click the Login button, or you must call FB.login
                        // in response to a user gesture, to launch a login dialog.
                        console.log("not_authorized");
                    } else {
                        // The user isn't logged in to Facebook. You can launch a
                        // login dialog with a user gesture, but the user may have
                        // to log in to Facebook before authorizing your application.
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




//            FB.getLoginStatus(function (response) {
//                statusChangeCallback(response);
//            });
//            {
//                status: 'connected',
//                window.location="home.html";
//                        authResponse: {
//                            accessToken: '...',
//                            expiresIn: '...',
//                            signedRequest: '...',
//                            userID: '...'
//                        }
//            }



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
