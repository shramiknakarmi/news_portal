<style>
    .table{
        font-family: 'Oswald', sans-serif;

    }
    .modal-header, h4, .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-header, .modal-body {
        padding: 40px 50px;
    }
</style>
@section('title')
   Category
@stop
@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')
    <div class="row">
        <div class="col-sm-8">
        <h1><b>Categories of News</b></h1>
<br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                        <tr>

                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->publication_status}}</td>

                            <td>

                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$category->id}}"><span class="glyphicon glyphicon-pencil"></span></button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{$category->id}}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Edit the Category</h4>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::model($category, ['method' => 'PATCH','route' => ['categories.update', $category->id]]) !!}

                                                <div class="form-group">
                                                    <label for="ID">ID</label>
                                                    <input type="id" class="form-control" id="id" value="{{$category->id}}" style="max-width:500px" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Title">Name of the Category</label>
                                                    <input type="title" class="form-control" id="title" name="category_name" value="{{$category->category_name}}" placeholder=" " style="max-width:500px">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Select Status</label>
                                                    <select class="form-control" id="status" name="publication_status">
                                                        <option>0</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-success btn-block">Edit</button>
                                                {!! Form::close() !!}

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}

                                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {!! $categories->render() !!}
        </div>
<br><br><br><br>
        <div class="col-sm-4">
            <h2>Add a New Category</h2>
            <div class="well">
                <form role="form" action="{{route('categories.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="Title">Name of the Category</label>
                        <input type="title" class="form-control" id="title" name="category_name" placeholder="Eg. Technology" style="max-width:500px">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Create</button>
                </form>


            </div>

        </div>





    </div>
@stop