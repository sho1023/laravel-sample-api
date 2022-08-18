<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create(Request $request)
    {
       $todo = new Todo();
       $todo->title = $request->input('title');
       $todo->content = $request->input('content');
       $todo->created_at = now();
       $todo->updated_at = now();
    //    $todo->save();
       return response()->json($todo);
    }

    public function list()
    {
       $todo = new Todo();
       $todo->title = 'study';
       $todo->content = 'study php';
       $todo->created_at = now();
       $todo->updated_at = now();
       return response()->json($todo);
    }

    public function get(String $id)
    {
       $todo = new Todo();
       $todo->title = $id;
       $todo->content = $id;
       $todo->created_at = now();
       $todo->updated_at = now();
       return response()->json($todo);
    }
}
