<?php

namespace App\Http\Controllers;


use App\Task;
use App\Casts;
use App\Genre;
use App\movie_cast;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function index()
 {

 $movie = Task::all();
 $cast =  Casts::all();
 $genre = Genre::all();
 $movie_cast = movie_cast::all();
 




$allmovies = [];
$allcast = [];
$test = [];



  foreach($movie as $member) {
    $result[] = array(
        'Id' => $member->ID,
        'Moviename' => $member->Name,
        'Director' => $member->Director,
        'Summary' => $member->Summary,
        'movietype' => $member->Type,
        'genre' => $member->FK_Genres,
        'Cast' => $cast->where('FK_Movies', $member->FK_Casts)
        
    );

   
} 






return $result;

 } 







 public function store(Request $request)
 {
 $task = Task::create([
 "content" => $request->content,
 "completed" => false
 ]);
 return response()->json([
 "task" => $task
 ], 200);
 }

public function delete(Request $request)
 {
 $task = Task::whereId($request->id)->first();
 if(!is_null($task)){
 $task->delete();
 }
 return response(200);
 }

 public function complete(Request $request)
 {
 $task = Task::whereId($request->id)->first();
 if(!is_null($task)){
 $task->completed = !$task->completed;
 $task->save();
 }
 return response(200);
 }

  
}