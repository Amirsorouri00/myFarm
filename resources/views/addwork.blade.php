@extends('layouts.app')
@inject('Departments','App\Department')
@inject('Works','App\Work')
@inject('Courses','App\Course')
<?php
    $departments = $Departments::all();
    $courses = $Courses::all();
    $works=$Works::all();
?>

@section('content2')
    <style>
        #bt:hover{
            //background-color: deepskyblue;
            background-color: lawngreen;
        }
    </style>
@endsection

@section('content')

    <div style="margin-right:5%; margin-left:5%;">
        <div class="page-header">
            <h2 id="text" style="display: none;">Add Work</h2>
        </div>
    </div>

    <div class="row"  style="margin-top: 1%;" >
        <div class="col-md-offset-1 col-sm-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Work
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
                    <form action="/workToDB" method="POST" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-md-2 control-label">Work</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                             <div class="col-sm-12">
                             <h3 class="">Related Departments</h3>
                             </div>
                         </div>
                         -->
                        <div class="form-group">

                            <label for="fselect" class="col-sm-2 control-label"> Department </label>
                            <div class="col-sm-10">
                                <br>
                                <select id ="fselect" class="form-control" name="department">
                                    @foreach($departments as $var)
                                            <!--$names = $var->name;-->
                                    <option value = {{$var->name}}> {{$var->name}} </option>
                                    @endforeach
                                </select>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"> Course </label>
                            <div class="col-sm-10">
                                <br>
                                <select id ="fselect" class="form-control" name="course">
                                    @foreach($courses as $var)
                                            <!--$names = $var->name;-->
                                    <option value={{$var->name}}> {{$var->name}} </option>
                                    @endforeach
                                </select>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-md-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" id="task-name" class="input-lg form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-2 control-label">Due Date</label>
                            <div class="col-sm-10">
                                <input class="w3-input w3-hover-blue w3-animate-input form-control" name="date" style="width:30%"type="date">
                            </div>

                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-1">
                                <button id="bt" type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Work
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

            <img class="img img-rounded col-md-5" style="height: 100%;" src="{{ URL::to('/') }}/images/addwork.jpg">


    </div>

    <script type="text/javascript">
        $(document).ready(function(){
           $('#text').fadeIn(3000);
        });
    </script>

@endsection