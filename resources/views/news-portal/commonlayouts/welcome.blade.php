@section('title')
    Welcome
@stop
<style>
    .glyphicon { margin-right:10px; }
    .panel-body { padding:0px; }
    .panel-body table tr td { padding-left: 15px }
    .panel-body .table {margin-bottom: 0px; }
</style>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,900,700,300);
    .heading4{font-size:18px;font-weight:400;font-family:'Oswald', sans-serif;color:#111111;margin:0px 0px 5px 0px;}
    .heading1{font-size:30px;line-height:20px;font-family:'Oswald', sans-serif;text-transform:uppercase;color:#1b2834;font-weight:900;}
    .content-quality{float:left;width:193px;}
    .content-quality p{margin-left:10px;font-family:'Oswald', sans-serif;font-size:14px;font-weight:600;line-height:17px;}
    .content-quality p span{display:block;}
    .tabtop li a{font-family:'Oswald', sans-serif;font-weight:700;color:#1b2834;border-radius:0px;margin-right:22.008px;border:1px solid #ebebeb !important;}
    .tabtop .active a:before{content:"♦";position:absolute;top:15px;left:82px;color:#e31837;font-size:30px;}
    .tabtop li a:hover{color:#e31837 !important;text-decoration:none;}
    .tabtop .active a:hover{color:#fff !important;}
    .tabtop .active a{background-color:#e31837 !important;color:#FFF !important;}
    .margin-tops{margin-top:30px;}
    .tabtop li a:last-child{padding:10px 22px;}
    .thbada{padding:10px 28px !important;}
    section p{font-family:'Oswald', sans-serif;}
    .margin-tops4{margin-top:20px;}
    .tabsetting{border-top:5px solid #ebebeb;padding-top:6px;}
    .services{background-color:#d4d4d4;min-height:710px;padding:65px 0 27px 0;}
    .services a:hover{color:#000;}
    .services h1{margin-top:0px !important;}
    .heading-container p{font-family:'Lato', sans-serif;text-align:center;font-size:16px !important;text-transform:uppercase;}
</style>
@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')

       {{-- <div class="nav nav-pills   ">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Content</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-pencil text-primary"></span><a data-toggle="pill" href="#articles">Articles</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-flash text-success"></span><a data-toggle="pill" href="#news">News</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-file text-info"></span><a href="#newsletters">Newsletters</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-comment text-success"></span><a href="#comments">Comments</a>
                                                <span class="badge">42</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Invoices</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Shipments</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Tex</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Change Password</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                                    Delete Account</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-content">
                <div class="col-sm-9 col-md-9">
                    <div id="articles" class="tab-pane fade">
                    <div class="well">
                        <h1>
                            Accordion Menu With Icon</h1>
                        Admin Dashboard Accordion Menu
                    </div>
                </div>
            </div>
                    <div class="col-sm-9 col-md-9">
                        <div id="news" class="tab-pane fade">
                            <div class="well">
                                <h1>
                                    Accordion Menu With Icon</h1>
                                News
                            </div>
                        </div>
                    </div>
                    </div>



        --}}{{--  <div class="row">
              <div class="col-sm-12">
                  <div class="panel panel-default text-left">
                      <div class="panel-body">
                          <p contenteditable="true"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}} , You are logged in !! </p>
                      </div>
                  </div>
              </div>
          </div>
      <div class="row">
          <div class="col-sm-3">
              <div class="well">
                  <p>News</p>

              </div>
          </div>
          <div class="col-sm-9">
              <div class="well">
                  <p>remember.... </p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-3">
              <div class="well">
                  <p>Category</p>

              </div>
          </div>
          <div class="col-sm-9">
              <div class="well">
                  <p>no I don't.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-3">
              <div class="well">
                  <p>Subcategory</p>

              </div>
          </div>
          <div class="col-sm-9">
              <div class="well">
                  <p> wait. I remember.... no I don't.</p>
              </div>
          </div>
      </div>--}}{{--

    </div>

            <script>
                $(document).ready(function(){
                    $(".nav-tabs a").click(function(){
                        $(this).tab('show');
                    });
                });
            </script>--}}


            <!--home-content-top starts from here-->

            <section class="home-content-top">
                <div class="container">

                    <!--our-quality-shadow-->
                    <div class="clearfix"></div>

                    <h1 class="heading1">Welcome , {{Auth::user()->name}}</h1>
                    <div class="tabbable-panel margin-tops4 ">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs tabtop  tabsetting">
                                <li class="active"> <a href="#tab_default_1" data-toggle="tab"><i class="glyphicon glyphicon-bell"></i>Notifications
                                        <span class="badge badge-default">{{11}}</span></a> </li>
                                <li> <a href="#tab_default_2" data-toggle="tab"> <i class="glyphicon glyphicon-envelope"></i>Feedbacks
                                        <span class="badge badge-default">{{10}}</span></a></li>
                                <li> <a href="#tab_default_3" data-toggle="tab"> <i class="glyphicon glyphicon-file"></i>News Listing
                                        <span class="badge badge-default">{{10}}</span></a></li>
                                <li> <a href="#tab_default_4" data-toggle="tab"> <i class="glyphicon glyphicon-envelope"></i>Feedbacks
                                        <span class="badge badge-default">{{10}}</span></a></li>
                                <li> <a href="#tab_default_5" data-toggle="tab" class="thbada"><i class="glyphicon glyphicon-envelope"></i>Feedbacks
                                        <span class="badge badge-default">{{10}}</span></a> </li>
                            </ul>
                            <div class="tab-content margin-tops">
                                <div class="tab-pane active fade in" id="tab_default_1">

                                    <div class="col-md-12">
                                        <h4 class="heading4">Magento Product Upload Services</h4>
                                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                                        <h4 class="heading4">Magento Product Upload Services</h4>
                                        <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
                                        <a href="#">
                                            <div class="btns">View More <i class="fa fa-angle-right"></i></div>
                                        </a> </div>
                                </div>
                                <div class="tab-pane fade" id="tab_default_2">
                                    <div class="col-md-12">
                                        <h4 class="heading4">Yahoo Store Data Entry</h4>
                                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                                        <h4 class="heading4">Yahoo Store Data Entry</h4>
                                        <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
                                        <a href="#">
                                            <div class="btns">View More <i class="fa fa-angle-right"></i></div>
                                        </a> </div>
                                </div>
                                <div class="tab-pane fade" id="tab_default_3">

                                    <div class="col-md-12">
                                        <h4 class="heading4">Shopify Product Upload </h4>
                                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                                        <h4 class="heading4">Shopify Product Upload </h4>
                                        <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
                                        <a href="#">
                                            <div class="btns">View More <i class="fa fa-angle-right"></i></div>
                                        </a> </div>
                                </div>
                                <div class="tab-pane fade" id="tab_default_4">
                                    <div class="col-md-12">
                                        <h4 class="heading4">OpenCart Product Upload</h4>
                                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                                        <h4 class="heading4">OpenCart Product Upload</h4>
                                        <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
                                        <a href="#">
                                            <div class="btns">View More <i class="fa fa-angle-right"></i></div>
                                        </a> </div>
                                </div>
                                <div class="tab-pane fade" id="tab_default_5">

                                    <div class="col-md-12">
                                        <h4 class="heading4">Amazon Product Listing </h4>
                                        <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
                                        <h4 class="heading4">Amazon Product Listing</h4>
                                        <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
                                        <a href="#">
                                            <div class="btns">View More <i class="fa fa-angle-right"></i></div>
                                        </a> </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--home-content-top ends here-->




@stop
