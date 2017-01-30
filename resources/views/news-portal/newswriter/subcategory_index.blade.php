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
   Subcategory
@stop
@extends('news-portal.commonlayouts.writer_admin_dashboard')
@section('substitute_content')
    <div class="row">
        <div class="col-sm-8">
            @if (Session::has('flash_message'))

                <div style="max-width: 80%" class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important': ''}}">
                    @if(Session::has('flash_message_important'))
                    @endif
                    {{session('flash_message')}}
                </div>

            @endif
            <h1><b>Subcategories of News</b></h1>
            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tbody>
                @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory->category->category_name}}</td>
                        <td>{{$subcategory->subcategory_name}}</td>
                        <td>{{$subcategory->publication_status}}</td>

                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$subcategory->id}}"><span class="glyphicon glyphicon-pencil"></span></button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal{{$subcategory->id}}" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit the Subcategory</h4>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::model($subcategory, ['method' => 'PATCH','route' => ['subcategories.update', $subcategory->id]]) !!}
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="category" class="form-control" id="category"   value="{{$subcategory->category->category_name}}" style="max-width:500px" disabled>

                                            </div>
                                            <div class="form-group">
                                                <label for="Title">Update the Subcategory</label>
                                                <input type="title" class="form-control" id="title" name="subcategory_name"  value="{{$subcategory->subcategory_name}}" style="max-width:500px">
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
                            {!! Form::open(['method' => 'DELETE','route' => ['subcategories.destroy', $subcategory->id],'style'=>'display:inline']) !!}

                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>

                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                </thead>
            </table>
            {{$subcategories->render()}}
        </div>
        <br><br><br><br>
        <div class="col-sm-4">
            <h2>Add a New Subcategory</h2>
            <div class="well">
                <form role="form" action="{{route('subcategories.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select class="form-control"  name="category_id" style="max-width:500px">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Title">Name of the Subcategory</label>
                        <input type="title" class="form-control" id="title" name="subcategory_name" placeholder="Eg. Technology - Robotics" style="max-width:500px">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Create</button>
                </form>


            </div>

        </div>
    </div>
    <script>
        $('div.alert').not('.alert-important').delay(2000).slideUp(300);
    </script>
@stop