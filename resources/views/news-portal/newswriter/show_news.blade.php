@extends('news-portal.commonlayouts.writer_admin_dashboard')



@section('substitute_content')
    <div class="row">

        <div class="col-lg-12 margin-tb">


            <div class="pull-right">

@if(Auth::user()->role ==1)
                <a class="btn btn-primary" href="{{ route('newsaction.index') }}"><span class="glyphicon glyphicon-chevron-left"></span>Back</a>
@else
                    <a class="btn btn-primary" href="{{ route('news_list') }}"><span class="glyphicon glyphicon-chevron-left"></span>Back</a>
    @endif
            </div>

        </div>

    </div>


    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                <div class="col-md-8">

                    <!--Post-->
                    <div class="post-wrapper">
                        <!--Post data-->
                        <h1 class="text text-uppercase"><b>{{ $item->news_title }}</b></h1>
                        <h5 class="text-success">Written by <a >{{$item->author_name}}</a> on {{ date('F d, Y', strtotime($item->created_at)) }}</h5>
                        <h5 class="text-info">Posted in : {{$item->category->category_name}} , {{$item->subcategory->subcategory_name}}</h5>

                        <br>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="{{url('images/newswriter/'.$item->image)}}" style="width:750px" alt="Image">
                            <div class="mask">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        <h4 class="text-justify"> {{ $item->short_description }}</h4>

                        <p class="text text-justify">{!! $item->long_description !!}</p>
                    </div>
                    <!--/.Post-->

                    <hr>



            </div>
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
                    </div>



                </div>
        </div>
            </div>
        <!--/.Main layout-->

    </main>

@endsection