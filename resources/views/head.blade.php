<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/themify-icons.css")}}" />
    <link rel="stylesheet" href="{{asset("css/elegant-icons.css")}}" />
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/nice-select.css")}}" />
    <link rel="stylesheet" href="{{asset("css/jquery-ui.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/slicknav.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>

    <script rel="stylesheet" type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('ab1448c9d4c7d5a9a0b1', {
            cluster: 'ap1',
            forceTLS: true
        });

        var channel = pusher.subscribe('fashi-update');
        channel.bind('create_category', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>
