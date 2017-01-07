<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<h1>Welcome to Weddincart</h1>
    <h3 style="color: #001199">Dear Couple</h3>
    <p>Thank you and congratulation on registering with WeddinCart.com.</p>
    <p>To complete the process, please click <a href="{{ url("register/verifyEmail/{$user->verification_token}") }}">here</a></p>
    <br>
    <p>We will keep you posted about information on our launch through this email.</p>
    <br>
    <p>Sincerely</p>
    <h3 style="color: #001199">Team WeddinCart.com</h3>
</body>
</html>


