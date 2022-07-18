<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <style type="text/css">
        .email {
            display: block;
            width: 600px;
            height: auto;
            padding: 60px 100px;
            margin: 50px auto;
            background: #fff;
            box-shadow: 0 0 15px 0 #999;
            border-radius: 10px;
        }

        p {
            font-size: 18px;
            font: 16px Century Gothic, Arial;
            margin-bottom: 1em;
            margin-top: 1em;
            line-height: 1.6;
        }

        li {
            margin-bottom: 3px;
        }

        .button {
            /* background-color: #9a25cc; Green */
            border: #9a25cc solid 1px;
            border-radius: 5px;
            color: #9a25cc;
            padding: 10px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .main_logo_txt {
            font-size: 56px;
            text-align: center;
            color: #9a25cc;
            vertical-align: middle;
            font-family: arial;
            font-weight: 700;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: #000;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="email">
        <p>Please use the below link to reset your password.</p>
        <p><b>Email:</b> {{ $user }}</p>
        <p><b>Token:</b> {{ $request['token'] }}</p>
    </div>
</body>
</html>