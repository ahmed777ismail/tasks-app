@extends('layout.app')
@section('content')
    <div class="col-12">

        <h1 class="p-3  text-center my-3">Edit Taske</h1>
    </div>
    <div class="col-8 mx-auto">

        <form action="{{ url('tasks/create') }}" method="POST" class="form  border p-3">

            <div class="mb-3">
                <label for="">Task title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="mb-3">
                <label for="">Task Description</label>
                <textarea name="" class="form-control" rows="7"></textarea>
            </div>


            <div class="mb-3">
                <label for="">Writer </label>
                <select name="user_id" class="form-control">
                    <option value="1">Ahmed</option>
                    <option value="2">Ali</option>
                </select>
            </div>


            <div class="mb-3">

                <input type="submit" class="form-control  bg-success" value="save">
            </div>

        </form>
    </div>
@endsection
