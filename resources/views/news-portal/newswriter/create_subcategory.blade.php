@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')
    <div class="col-lg-8">
        <div class="well">
            <form role="form" action="{{route('subcategories.store')}}" method="post">
                {{csrf_field()}}
                <h3><i><b><u>Add a New Subcategory</u></b></i></h3>
                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select class="form-control"  name="category_id" style="max-width:500px">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Title">Name of the Subcategory</label>
                    <input type="title" class="form-control" id="title" name="subcategory_name" placeholder="Eg. Technology - Robotics" style="max-width:500px">
                </div>
                <div class="form-group">
                    <label for="status">Select Status</label>
                    <select class="form-control" id="status" name="publication_status">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Create</button>
            </form>


        </div>

    </div>
    @stop