@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br><br>
                    <?php
                    print("<b>Popis radova:</b>");
                    print("<br>");
                    $tasks = DB::table('tasks')->pluck('naziv_rada');
                    if(empty($tasks)) {
                      print("No tasks in your database");
                    } else {
                        $size = sizeof($tasks);
                        for($i=0; $i<$size; $i++){
                            print($tasks[$i]);
                            print("<br>");
                        }
                    }
                    ?>
                    <br><br>

                    <div class="links">
                      <a href="/tasks">Add new task</a>
                    </div>
                    <div class="links">
                      <a href="/roles">Select your role(be honest)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
