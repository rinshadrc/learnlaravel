@extends('layout')
@section('content')
<div>
    @if(session()->has('message'))
    <p class="text-success">{{session()->get('message')}}</p>
    @endif
  </div>

    <div class="todo-container">

        <h1 >todo app</h1>

        <!-- Todo Form -->

        <form id="todo-form" method="POST" action="{{ route('addtask') }}">
        @csrf
            <input type="text" id="task" placeholder="Add a new task" name="task" required>
            <button type="submit">Add</button>
        </form>

        <!-- Todo List -->

        <ul id="todo-list">

        @foreach($todos as $todo)
          <li>
                <span>{{ucfirst($todo->task)}}</span>
                <div class="buttons">
                    <a href="{{ route('update',encrypt($todo->task_id) )}}"><button class="edit-btn">Edit</button></a>

                   <a href="{{ route('delete',encrypt($todo->task_id) )}}"><button class="delete-btn">Delete</button></a>
                </div>
            </li>
        @endforeach
         

        </ul>
    </div>



@endsection