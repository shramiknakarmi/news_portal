<style>
    .table {
        font-family: 'Oswald', sans-serif;
        font-size: 18px;
    }
    .modal-header, .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-header, .modal-body {
        padding: 40px 50px;
    }

    #titlewala{
        white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
        max-width:300px;
    }

</style>

@section('title')
    News
@stop
@extends('news-portal.commonlayouts.writer_admin_dashboard')

@section('substitute_content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins:'link code',
            menubar:'false',
            height : "250",
            resize:'true'


        });
    </script>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h4><b><i>You have total <span class="badge">{{count($items)}}</span> news !!</i></b></h4>
            </div>

            <div class="pull-right">

                {{--<a class="btn btn-success" href="{{ route('newsaction.create') }}"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Create</a>--}}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Create</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Create a News</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{route('newsaction.store')}}" method="post" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="Title">Title of the News</label>
                                        <input type="title" class="form-control" id="title" name="news_title" >
                                        <input type="hidden" name="author_name" value="{{Auth::user()->name}}">
                                        <input type="hidden" name="author_email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Short Description</label>
                                        <input type="description" class="form-control" id="description" name="short_description"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <select class="form-control" id ="category12" name="category_id" >
                                            <option selected disabled>- Categories -</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}} ">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Select Subcategory</label>
                                        <select class="form-control" id="subcategory12" name="subcategory_id" >
                                            <option>- select a subcategory -</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Long Description</label>
                                        <textarea class="form-control" rows="10" id="long_description" name="long_description"   ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Image"><i>Choose Image to Upload :</i></label>
                                        <input type="file"  id="image" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Create News</button>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>


    @if (Session::has('flash_message'))

        <div style="max-width: 100%" class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important': ''}}">
            @if(Session::has('flash_message_important'))
            @endif
            {{session('flash_message')}}
        </div>

    @endif
@if(count($items)>0)

    <table class="table table-striped">
</thead>
        <tr>

            <th>#</th>

            <th>Title</th>

            <th width="120px">Image</th>
            <th>Created on </th>
            <th>Updated on</th>
            <th width="80px">Action</th>
            <th>Status</th>

        </tr>
        </thead>
        <tbody>

        @foreach ($items as $key => $item)

            <tr>

                <td>{{ ++$i }}</td>
                <td id="titlewala"><a  href="{{ route('newsaction.show',$item->id) }}">{{$item->news_title}}</a></td>
                <td>
                    <div class="w3-dropdown-hover"><img src="{{url('images/newswriter/'.$item->image)}}" alt="X" style="width:30%">
                            <div class="w3-dropdown-content" style="width:150px">
                                <img src="{{url('images/newswriter/'.$item->image)}}" alt="X" style="width:150%">
                            </div>
                        </div>
                </td>


             {{--   <td>{{$created_diff_date[$loop->index]}}</td>--}}

                <td>{{$item->created_at->diffForHumans()}}</td>

                <td>{{$item->updated_at->diffForHumans()}}</td>

              {{--  <td>{{$updated_diff_date[$loop->index]}}</td>--}}

                <td>

                   @if($item->publication_status ==0)
                    <a class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="edit" href="{{ route('newsaction.edit',$item->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                    @else
                        <a class="btn btn-xs btn-success disabled" href="{{ route('newsaction.edit',$item->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                       @endif
                    {!! Form::open(['method' => 'DELETE','route' => ['newsaction.destroy', $item->id],'style'=>'display:inline']) !!}

                    <button type="submit" data-toggle="tooltip" data-placement="top" title="delete"class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></button>

                    {!! Form::close() !!}


                </td>
                <td>
                   {{-- {!! Form::model($item, array('route'=>array('status',$item->id),'method'=>'PATCH','style'=>'display:inline')) !!}
                    <button type="submit" class="btn btn-xs btn-block btn-default">{{$item->publication_status == 1 ? 'Published ':'Pending'}}</button>
                    {!! Form::close() !!}--}}
                    {{$item->publication_status == 1 ? 'Published ':'Pending'}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $items->render() !!}

    @else
     There are no news in your list !!
    @endif


    <script>
        $('div.alert').not('.alert-important').delay(1500).slideUp(300);
    </script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


    <!-- AJAX for Category and Subcategory -->
    <script>
        $('#category12').on('change',function (e) {

            console.log(e);
            var cat_id=e.target.value;

            //ajax
            $.get('{{URL::to('')}}/ajax-subcat?cat_id='+cat_id,function (data) {
                $('#subcategory12').empty();
                $.each(data,function(index,subcatObj){


                    $('#subcategory12').append('<option value="'+subcatObj.id+'">'+subcatObj.subcategory_name+'</option>');
                });


            });
        });


    </script>

    <script>

        var pusher = new Pusher('{{env("PUSHER_KEY")}}');
        var channel = pusher.subscribe('postpublished-channel');
        channel.bind('postpublished-notification', function(data) {

            toastr.options = {
                "debug": true,
                "newestOnTop": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,

            }

            toastr.success(data.text, null);

        });

    </script>


@endsection

