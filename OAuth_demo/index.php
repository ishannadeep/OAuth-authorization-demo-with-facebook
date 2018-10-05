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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                FB.getLoginStatus(function (response) {
                    if (response.status === 'connected') {
                        var accessToken = response.authResponse.accessToken;
                        console.log("connected");
                        setCookie('token', accessToken);
                        window.top.location = "home.php";

                        console.log("connected");
                    } else if (response.status === 'authorization_expired') {
                        FB.logout();
                        console.log("authorization_expired");
                    } else if (response.status === 'not_authorized') {
                        FB.logout();
                        console.log("not_authorized");
                    } else {
                        console.log("notlogin");
                    }
                });
            };
            function red() {
                location.reload();
            }
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
        <div class="container" style="margin-top: 100px">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" >User Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user" placeholder="Enter User Name" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="fb-root"></div>
        <div class="fb-login-button" onclick="" onlogin= "red()" id="fbbut" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true" style="margin-left: 315px;"></div>
    </body>
</html>
