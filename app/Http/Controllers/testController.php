<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Lesson;
use App\Tag;
use App\Work;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Barryvdh\DomPDF\PDF as PDF;



class testController extends Controller
{

    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }


    //
    public function users(){
        return view('layouts.test');
    }

    /*
     * This function is an example for doing operations on many to many relations.
     * */


    public function userV(Request $request){

        $user = $request->user();
        //$dep = new Department();
        //$dep->name = 'math';
        //$dep->save();
        //$request->user()->departments()->attach('1');
        $less = Lesson::first();
        //dd($less);

        /*$lesson = new Lesson();
        $lesson->title = 'math';
        $lesson->save();

        $tag = new Tag();
        $tag->name = 'mathtag';
        $tag->save();

        $lesson->tags()->save($tag);

        //$less->tags()->attach(3);*/

        return view('layouts.testV', ['tasks' => null]);
    }

    public function departments(){
        $departments = Department::all();

        $var = array();
        for($i = 0;$i < count($departments);$i++){
            $var[] = $departments[$i];
        }

        $works = array();
        for($i = 0;$i < count($var);$i++){
            $works[] = $var[$i]->works()->get();
        }

        //return view('testt');
        return view('departments',['deps' => $departments, 'works' => $works]);
    }

    public function addwork(){
        return view('addwork');
    }

    public function workToDB(Request $request){
        $work = new Work();
        $work->title = $request->title;
        $work->due_date = $request->date;
        $work->description = $request->description;
        $work->save();
        $request->user()->works()->save($work);
        $course = Course::where('name','=',$request->course)->firstOrFail();
        $department = Department::where('name','=',$request->department. " dept")->firstOrFail();
        $course->works()->save($work);
        $department->works()->save($work);
        return redirect('/addwork');
    }

    public function home(){
        return view('home');
    }

    public function getPDF(){
        $pdf = \PDF::loadView('welcome');
        return $pdf->stream('works.pdf');
    }

}
