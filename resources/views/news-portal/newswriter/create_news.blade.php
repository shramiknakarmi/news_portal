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

                        <h2>Add a News</h2>

                    </div>

                    <div class="pull-right">

                        <a class="btn btn-primary" href="{{ route('newsaction.index') }}"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Back</a>

                    </div>

                </div>
            </div>
            <hr>
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



