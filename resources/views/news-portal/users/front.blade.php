
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }
    </style>

</head>

<body>


<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark primary-color-dark">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">MDB</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <!--Search form-->
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

</header>

<main>

    <!--Main layout-->
    <div class="container">
        <div class="row">

            <!--Main column-->
            <div class="col-md-8">

                <!--Post-->
                <div class="post-wrapper">
                    <!--Post data-->
                    <h1 class="h1-responsive">Post title <small class="text-muted">Secondary text</small></h1>
                    <h5>Written by <a href="">John Doe</a>, 30.04.2016</h5>

                    <br>

                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="{{url('images/'.'4.jpg')}}" class="img-fluid " alt="">
                        <div class="mask">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates harum. Repellendus, impedit.</p>

                    <!--"Read more" button-->
                    <button class="btn btn-primary">Read more</button>
                </div>
                <!--/.Post-->

                <hr>

                <!--Post-->
                <div class="post-wrapper">
                    <!--Post data-->
                    <h1 class="h1-responsive">Post title <small class="text-muted">Secondary text</small></h1>
                    <h5>Written by <a href="">John Doe</a>, 30.04.2016</h5>

                    <br>

                    <!--Featured image -->
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="{{url('images/'.'8.jpg')}}" class="img-fluid " alt="">
                        <div class="mask">
                        </div>
                    </div>

                    <br>

                    <!--Post excerpt-->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates harum. Repellendus, impedit.</p>

                    <!--"Read more" button-->
                    <button class="btn btn-primary">Read more</button>
                </div>
                <!--/.Post-->

                <hr>

                <!--Pagination-->
                <nav class="text-xs-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--/.Pagination-->

                <hr>

            </div>

            <!--Sidebar-->
            <div class="col-md-4">

                <div class="widget-wrapper">
                    <h4>Categories:</h4>
                    <br>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Sport</a>
                        <a href="#" class="list-group-item">Music</a>
                        <a href="#" class="list-group-item">Travels</a>
                        <a href="#" class="list-group-item">Fashion</a>
                        <a href="#" class="list-group-item">Parties</a>
                    </div>
                </div>



                <div class="widget-wrapper">
                    <h4>Subscription form:</h4>
                    <br>
                    <div class="card">
                        <div class="card-block">
                            <p><strong>Subscribe to our newsletter</strong></p>
                            <p>Once a week we will send you a summary of the most useful news</p>
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your name</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form2" class="form-control">
                                <label for="form2">Your email</label>
                            </div>
                            <button class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>

            </div>
            <!--/.Sidebar-->
        </div>
    </div>
    <!--/.Main layout-->

</main>

<!--Footer-->
<footer class="page-footer center-on-small-only primary-color-dark">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">First column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Second column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Third column</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <h4>Material Design for Bootstrap</h4>
        <ul>
            <li>
                <h5>Get our UI KIT for free</h5></li>
            <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-danger">Sign up!</a></li>
            <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default">Learn more</a></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>