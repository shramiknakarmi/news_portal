<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechNews</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

    <!--typeahead js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <style>
        .container {
            font-family: 'Oswald', sans-serif;

        }
        #fooerwa{
            padding-bottom: 20px;
            color: #0b0b0b;

        }


    </style>


</head>
<body>
@include('news-portal.commonlayouts.navbar')
<script type="text/javascript">

    var path = "{{ route('autocomplete') }}";

    $('input.typeahead').typeahead({

        source:  function (query, process) {

            return $.get(path, { query: query }, function (data) {

                return process(data);

            });

        }

    });

</script>
<div class="container">
    @yield('substitute_content')
</div>
</body>
<div class="container">
    @yield('substitute_footer')
</div>

</html>

