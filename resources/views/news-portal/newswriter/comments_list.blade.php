@section('title')
  Comments
    @stop
<style>
    #commentwala{
       white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
        max-width:350px;
    }
</style>

@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')

    @if (Session::has('flash_message'))

        <div style="max-width: 100%" class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important': ''}}">
            @if(Session::has('flash_message_important'))
            @endif
            {{session('flash_message')}}
        </div>

    @endif
    <h3>List of Comments</h3>
    @if(count($comments)>0)
        <div id="load">
        <table class="table table-responsive">
            </thead>
            <tr>

                <th>#</th>
                <th>News ID</th>
                <th>Commenter's Name</th>
                <th>Commenter's Email</th>
                <th>Comment</th>
                <th>Commented</th>
                <th>Enable/Disable</th>

            </tr>
            </thead>
            <tbody>

            @foreach ($comments as $key => $comment)


                <tr>

                    <td>{{ ++$i }}</td>
                    <td ><a data-toggle="tooltip" data-placement="down" title="{{$comment->news_title}}" >{{$comment->news_id}}</a></td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->email}}</td>
                    <td id="commentwala"><a data-toggle="tooltip" data-placement="left" title="{{$comment->comment}}">{{$comment->comment}}</a></td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::model($comment, array('route'=>array('comment_status',$comment->id),'method'=>'PATCH','style'=>'display:inline')) !!}

                        @if($comment->comment_status==1)
                            <button type="submit" class="btn btn-xs btn-block btn-success">Published</button>
                        @else
                            <button type="submit" class="btn btn-xs btn-block btn-danger">Pending</button>
                        @endif
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <div class="pull-left">
            {{$comments->render()}}
        </div>



    @else
        There are no comments in your list !!
    @endif
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();

        });
    </script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>

@stop