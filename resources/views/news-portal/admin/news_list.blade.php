<style>
    .table{
        font-size: 16px;
    }
    #titlewala{
        white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
        max-width:200px;
    }
</style>
@section('title')
    News List
@stop
@extends('news-portal.commonlayouts.writer_admin_dashboard')

@section('substitute_content')
    @if (Session::has('flash_message'))

        <div style="max-width: 100%" class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important': ''}}">
            @if(Session::has('flash_message_important'))
            @endif
            {{session('flash_message')}}
        </div>

    @endif
    <h1><b>List of News</b></h1>
    <br>
    @if(count($items)>0)


        <table class="table table-striped ">
            </thead >
            <tr>

                <th>#</th>
                <th>Title</th>
                <th width="150px">Author Name</th>
                <th width="110px">Author Email</th>
                <th width="110px">Created</th>
                <th width="115px">Updated</th>
                <th>Enable/Disable</th>

            </tr>
            </thead>
            <tbody>

            @foreach ($items as $key => $item)

                <tr>

                    <td>{{ ++$i }}</td>
                    <td id="titlewala"><a  href="{{ route('newsaction.show',$item->id) }}">{{$item->news_title}}</a></td>

                    <td>{{$item->author_name}}</td>
                    <td>{{$item->author_email}}</td>
                    <td>{{$item->created_at->diffForHumans()}}</td>

                    <td>{{$item->updated_at->diffForHumans()}}</td>

                    {{--  <td>{{$updated_diff_date[$loop->index]}}</td>--}}
                    <td>
                        {!! Form::model($item, array('route'=>array('status',$item->id),'method'=>'PATCH','style'=>'display:inline')) !!}
                        @if($item->publication_status==1)
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
        {!! $items->render() !!}

    @else
        There are no news !!

    @endif


    <script>
        $('div.alert').not('.alert-important').delay(1500).slideUp(300);
    </script>

@endsection

