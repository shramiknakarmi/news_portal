@extends('news-portal.commonlayouts.masterlayout')
@section('substitute_content')


    <!--Main column-->
    <main>
        <div class="container">
            @if (Session::has('flash_message'))

                <div style="max-width: 80%" class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important': ''}}">
                  @if(Session::has('flash_message_important'))
                      @endif
                 {{session('flash_message')}}
                </div>

            @endif
    <div class="col-lg-8">

        <!--Post-->
        <div class="post-wrapper">
            <!--Post data-->

            <h1 class="text text-uppercase"><b>{{ $item->news_title }}</b></h1>
            <h5 class="text-success"><span class="glyphicon glyphicon-time"></span> Written by <a >{{$item->author_name}}</a> on {{ date('F d, Y', strtotime($item->created_at)) }}</h5>
            <h5><span class="label label-success">{{$item->category->category_name}}</span> <span class="label label-warning">{{$item->subcategory->subcategory_name}}</span></h5>

            <br>

            <!--Featured image -->
            <div class="view overlay hm-white-light z-depth-1-half">
                <img src="{{url('images/newswriter/'.$item->image)}}" style="width:730px" alt="Image">
            </div>

            <br>

            <!--Post excerpt-->
            <h4 class="text-justify"> {{ $item->short_description }}</h4>

            <p class="text text-justify">{!!$item->long_description !!}</p>

        </div>
    </div>
        <!--/.Post-->

                <div class="col-lg-4">

                        <h2>Accordion Example</h2>
                        <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>


                    </div>

                </div>
        &nbsp;
        <!--Comment-->

        <div class="col-lg-8">
            <h4 class="comments-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;<b>Comments</b> <span class="badge">{{count($comments)}}</span></h4>
            <hr>
            @foreach($comments as $comment)
                @if($comment->comment_status == 1)
                <div class="media">
                    <div class="media-left">
                        <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$comment->name}} <small><i>Posted on {{ date('F d, Y', strtotime($comment->created_at)) }}</i></small></h4>
                        <p>{{$comment->comment}}</p>
                        <hr>
                    </div>
                </div>
                @endif
            @endforeach
            <h3><b>LEAVE YOUR COMMENT</b></h3>
            <div class="well">


                {!! Form::open(['method' => 'POST','route' => ['comment.store']]) !!}
                {{csrf_field()}}
                <div class="form-group">
                    <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
                    <input type="hidden" name="comment_status" value="0">
                    <input type="hidden" name="news_id" value="{{$item->id}}">
                    <input type="hidden" name="news_title" value="{{$item->news_title}}">
                    <input type="hidden" name="news_author_email" value="{{$item->author_email}}">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"  required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="2" id="comment" name="comment" placeholder="Comment ..." required></textarea>
                </div>
                <button type="submit" class="btn btn-danger btn-block"><b>Comment</b></button>


                {!! Form::close() !!}
            </div>
        </div>












        </div>
    <!--/.Main layout-->


</main>


    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
@stop

@section('substitute_footer')
    <!-- Footer -->
    <footer id='fooerwa'class="text-center">
        <p>Copyright &copy TechNews.com, 2017. All Rights Reserved.</p>
    </footer>
    @endsection


