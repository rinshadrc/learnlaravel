<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Todo;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TodoController extends Controller
{


    // todo controller

    public function index(){

        $todos = Todo::all();

        $data = [
            'todos' => $todos
        ];

        
        return view('welcome',$data);

    }
    public function addtask(){

        $task = request('task');

        Todo :: create([
            'task' => $task
        ]);
        return redirect()->route('welcome');
       


    }
    public function update($taskid){
        $task_data = Todo::find(decrypt($taskid));

        return view('update',compact('task_data'));


    }
    public function edit(){

        $updatedtask = request('updatedtask');
        $task_id = request('task_id');

        $task = Todo::find($task_id) ;

        $task->update(['task'=>$updatedtask]);

        return redirect()->route('welcome')->with('message','Task updated successfully !!');

  
    }
    public function delete($taskid)
    {
    $task = Todo::find(decrypt($taskid));

    if (!$task) {
        return redirect()->route('welcome')->with('message', 'Task not found.');
    }

    $task->delete();

    return redirect()->route('welcome')->with('message', 'Task deleted successfully!');
    }




    // customer controller
    
    public function addcustomers(){
        return view('add_customers');

    }
    public function customers(){

        $users = Customer::all();
    

        return view('customers',compact('users'));

    }
    public function save(){

        $name = request('name');
        $address = request('address');
        $email = request('email');
        $dob = request('dob');
        $password = request('password');

        $formattedDob = Carbon::createFromFormat('d/m/Y', $dob)->format('Y-m-d');


        Customer::create([
            'name' => $name,
            'address' => $address,
            'email' => $email,
            'dob' => $formattedDob,
            'password' => $password,


        ]);
        return redirect()->route('customers')->with('message','User created successfully !!');


    }
 

}
