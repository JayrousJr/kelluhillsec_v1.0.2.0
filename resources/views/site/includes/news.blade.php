<!DOCTYPE html>
<html lang="en">

<head>
    <title>News | Kellu Hill School</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/storage/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/storage/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/storage/assets/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/storage/assets/styles/news.css">
    <link rel="stylesheet" type="text/css" href="/storage/assets/styles/news_responsive.css">
    <link href="/storage/assets/img/logo/logo.png" rel="icon">

    <style>
        .success {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            /* Adjust the z-index as needed to ensure it's above other content */
            padding: 15px;
            /* Adjust padding to style the notification box */
            text-align: center;
            /* Center the text horizontally */
            width: 300px;
            /* Set a width for the notification box */
            background-color: #4CAF50;
            border: 1px solid #fff;
            /* Background color for success */
            color: #fff;
            /* Text color */
            border-radius: 5px;
            /* Rounded corners for the box */
        }

        a {
            color: #4CAF50;
        }

        a:hover {
            color: #6ad86e;
        }

        .error {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            /* Adjust the z-index as needed to ensure it's above other content */
            padding: 15px;
            /* Adjust padding to style the notification box */
            text-align: center;
            /* Center the text horizontally */
            width: 300px;
            /* Set a width for the notification box */
            background-color: rgba(224, 0, 3, 1.00);
            border: 1px solid #fff;
            /* Background color for success */
            color: #fff;
            /* Text color */
            border-radius: 5px;
            /* Rounded corners for the box */
        }
    </style>
</head>

<body>
    @include('/site/includes/nav')