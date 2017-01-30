@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins:'link code',
            menubar:'false'
        });
    </script>

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
        <div class="row">

            <div class="col-lg-12 margin-tb">

                <div class="pull-left">

                    <h2>Edit the News</h2>

                </div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="{{ route('newsaction.index') }}"><span class="glyphicon glyphicon-chevron-left"></span>Back</a>

                </div>

            </div>

        </div>
        <hr>

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif
    {!! Form::model($item, ['method' => 'PATCH','route' => ['newsaction.update', $item->id],'files'=>'true']) !!}
    {{ csrf_field() }}


        <div class="form-group">
            <label for="Title">Title of the News</label>
            <input type="title" class="form-control" value="{{$item->news_title}}" id="title" name="news_title" >
            <input type="hidden" name="author_name" value="{{Auth::user()->name}}">
            <input type="hidden" name="author_email" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group">
            <label for="description">Short Description</label>
            <input type="description" class="form-control" value="{{$item->short_description}}" id="description" name="short_description">
        </div>
        <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id ="category12" name="category_id" >

                <option value="{{$item->category->id}}"selected disabled>{{$item->category->category_name}}</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}} ">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category">Select Subcategory</label>
            <select class="form-control" id="subcategory12" name="subcategory_id">
                <option value="{{$item->subcategory->id}}" selected disabled>{{$item->subcategory->subcategory_name}}</option>


            </select>
        </div>
        <div class="form-group">
            <label for="description">Long Description</label>
            <textarea class="form-control"  rows="10" id="long_description" name="long_description" >
                {{$item->long_description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="Image"><i>Update Featured Image :</i></label>
            <img src="{{url('images/newswriter/'.$item->image)}}" style="width:20%" alt="Image">
            <input type="file" value="{{$item->image}}" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-success btn-block">Edit News</button>
        {!! Form::close() !!}
        <hr>
        </div>
    </div>
</div>



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

@endsection