@extends('layout')

@section('content')




       

		
		
		
		
		
		
        <div class="col-sm-6 col-md-3 grid-margin" style="margin-left:140px">
            <div class="card">
            <div class="card-body">
              <h2 class="card-title">All-Students</h2>
          
              <?php

                $student=DB::table('student_tb1')
                       ->count('student_id');
              ?>

           <P style="font-family:cursive;font-weight:bold;font-size:30px;text-align:center;margin-top:20px;">{{$student}}</P>
            </div>
            <div class="dashboard-chart-card-container">
              <div id="dashboard-card-chart-2" class="card-float-chart"></div>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
        <div class="col-sm-6 col-md-3 grid-margin">
            <div class="card">
            <div class="card-body">
              <h2 class="card-title">All-Teachers</h2>
              <?php

                $teacher=DB::table('teachers_tb1')
                       ->count('teachers_id');

            ?>

           <P style="font-family:cursive;font-weight:bold;font-size:30px;text-align:center;margin-top:20px;">{{$teacher}}</P>
            </div>
            <div class="dashboard-chart-card-container">
              <div id="dashboard-card-chart-2" class="card-float-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 grid-margin">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Tution-Fee</h2>


             <P style="font-family:cursive;font-weight:bold;font-size:30px;text-align:center;margin-top:20px;">88000tk</P>

            </div>
            <div class="dashboard-chart-card-container">
              <div id="dashboard-card-chart-3" class="card-float-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 grid-margin">

      </div>


















@endsection
