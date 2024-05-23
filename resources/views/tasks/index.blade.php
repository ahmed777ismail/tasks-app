@extends('layout.app')
@section('content')
    <div class="col-12">

        <a href="{{ url('tasks/create') }}" class="btn btn-primary my-3">Add New Task</a>
        <h1 class="p-3 border text-center my-3">All Taskes</h1>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Writer</th>
                    <th>Edite</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>First Task</td>
                    <td>First Description </td>
                    <td>Ahmed Ismail</td>
                    <td><a href="{{ url('tasks/1/edit') }}" class="btn btn-info">Edite</a></td>
                    <td>
                        <form action="#" method="POST">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
