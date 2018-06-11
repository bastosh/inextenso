<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Motivations Generator</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <style>
            body {
                background: <?= $color;?>;
            }
            h1.h2 {
                color: #343a40;
            }
            .btn-light {
                background: #fff;
                color: <?= $color;?>;
            }
            .btn-light:hover {
                background: #fff;
                color: <?= $color;?>;
            }
            p {
                color : #fff;
            }
            p a {
                color : #fff;
                text-decoration: underline;
            }
            img {
                width: 100px;
                position: absolute;
                top: 10px;
                left: 10px;
            }
            @media screen and (max-width: 600px) {
                img {
                    display:none;
                }
            }
        </style>
    </head>
        <body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <img src="33reasons.png" alt="logo 33 reasons why">
            <main class="container text-center">


