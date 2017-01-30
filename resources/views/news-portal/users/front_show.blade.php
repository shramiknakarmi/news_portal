@extends('news-portal.commonlayouts.masterlayout')
@section('substitute_content')


    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">
                <div class="move-text">
                    <div class="breaking_news">
                        <h2>Breaking News</h2>
                    </div>
                    <div class="marquee">
                        @foreach($items as $item)
                        <div class="marquee1"><a class="breaking" href="single.html">{{$item->news_title}}</a></div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <script type="text/javascript" src="js/jquery.marquee.js"></script>
                    <script>
                        $('.marquee').marquee({ pauseOnHover: true });
                        //@ sourceURL=pen.js
                    </script>
                </div>
                <!-- news-and-events -->
                <div class="news">
                    <div class="news-grids">
                        <div class="col-md-8 news-grid-left">
                            <h3>latest news & events</h3>
                            <ul>
                                @foreach($items as $item)
                                <li>
                                    <div class="news-grid-left1">
                                        <img src="{{url('images/newswriter/'.$item->image)}}" alt="x" class="img-thumbnail" />
                                        <h4><span class="label label-success"><b>{{$item->category->category_name}}</b></span> <span class="label label-warning"><b>{{$item->subcategory->subcategory_name}}</b></span></h4>
                                    </div>
                                    <div class="news-grid-right1">
                                        <h4><a href="{{ route('fetchSingle',$item->id) }}">{{$item->news_title}}</a></h4>
                                        <h5>By <a>{{$item->author_name}}</a> <label>|</label> <i>{{ date('F d, Y', strtotime($item->created_at)) }}</i></h5>
                                        <p>{{$item->short_description}}</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="col-md-4 news-grid-left">
                            <h3>POPULAR News</h3>
                            <ul>
                                    @foreach($items as $item)
                                        <li>
                                            <div class="news-grid-left1">
                                                <img src="{{url('images/newswriter/'.$item->image)}}" alt="x" class="img-thumbnail" />

                                            </div>
                                            <div class="news-grid-right1">
                                                <h4><a href="{{ route('fetchSingle',$item->id) }}">{{$item->news_title}}</a></h4>
                                                <h5><a>{{$item->category->category_name}}</a> <label>|</label> <a>{{$item->subcategory->subcategory_name}}</a> <label>|</label> <i>{{ date('F d, Y', strtotime($item->created_at)) }}</i></h5>

                                            </div>
                                            <div class="clearfix"> </div>
                                        </li>
                                    @endforeach
                                </ul>

                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <!-- //news-and-events -->




                <!-- footer -->

                <div class="footer-top">
                    <div class="container">
                        <p>at least 150 missing and there dead in landslide after monsoon
                            rains in central Sri Lanka, officials say <a href="#">http//example.com</a></p>
                    </div>
                </div>
            </div>
            </div>
        <!--/.Main layout-->

    </main>


    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-bottom-grids">
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#">Health</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>120 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt1">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="sport">Sports</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>200 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>13,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt2">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="plane">Economic</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>180 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>18,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt3">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="general">General</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>150 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>15,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="banner-bottom-grids">
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt4">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="pol">Politics</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>450 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>12,965 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt5">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="world">World</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>212 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>18,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt6">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="national">international</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>261 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>15,536 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid-left">
                    <div class="br-bm-gd-lt br-bm-gd-lt7">
                        <div class="overlay">
                            <div class="arrow-left"></div>
                            <div class="rectangle"></div>
                        </div>
                        <div class="health-pos">
                            <div class="health">
                                <ul>
                                    <li><a href="#" class="business">business</a></li>
                                    <li>25 Dec 2015</li>
                                </ul>
                            </div>
                            <h3>But I must explain to you how all this mistaken idea.</h3>
                            <div class="dummy">
                                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut maiores alias.</p>
                            </div>
                            <div class="com-heart">
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>297 Comments</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>9,996 Likes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>



            <!-- footer -->
            <div class="footer">
                <div class="container">
                    <div class="footer-grids">
                        <div class="col-md-4 footer-grid-left">
                            <h3>contact form</h3>
                            <form>

                                <input type="text" value="enter your full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your full name';}" required="">
                                <input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
                                <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                <input type="submit" value="Submit" >
                            </form>
                        </div>
                        <div class="col-md-4 footer-grid-left">
                            <h3>about us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                <span>But I must explain to you how all this mistaken idea of denouncing
						pleasure and praising pain was born and I will give you a complete
						account of the system, and expound the actual teachings of the
						great explorer.</span>
                                <i>- The Entire TLG Team</i></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                </div>
                <hr>
                    <div class="myfooter">
                    <div class="text text-center">
                        <div>© 2016 Shramik Nakarmi. All rights reserved.</div>
                    </div>
                        </div>

            </div>
            <!-- //footer -->






@stop