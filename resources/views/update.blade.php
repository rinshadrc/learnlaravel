@extends('layout')
@section('content')

    <div class="todo-container">

        <h1 >todo app</h1>

        <!-- Todo Form -->

        <form id="todo-form" method="POST" action="{{ route('edit') }}">
        @csrf

            <input type="hidden"   name="task_id" value="{{$task_data->task_id}}" >

            <input type="text" id="task"  name="updatedtask" value="{{$task_data->task}}" required>
            <button type="submit">Update</button>
        </form>

        <!-- Todo List -->

    </div>



@endsection