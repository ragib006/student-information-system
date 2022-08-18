@extends('layout')

@section('content')








     <div class="card"style="width:100%;">
           <div class="card-body">
             <h2 class="card-title">Data table</h2>

            <p style="background:#28C76F;color:white;padding-left:10px;font-family:cursive;border-radius:5px;width:285px;">
                 <?php
                 $exception=Session::get('exception');
                 if($exception)
                 {
                 echo $exception;
                 Session::put('exception',null);
                 }
                 ?>
                 </p>

             <div class="row">
               <div class="col-12">
                 <table id="order-listing" class="table table-striped" style="width:100%;">
                   <thead>
                     <tr style="text-align:center;">
                         <th>Roll</th>
                         <th>Name</th>
                         <th>Phone</th>
                         <th>Image</th>
                         <th>Address</th>
                         <th>Department</th>
                         <th>Action</th>

                     </tr>
                   </thead>
                   <tbody style="text-align:center;">
                        @foreach($eee_student_info as $v_eee)
                     <tr>
                         <td>{{$v_eee->student_roll}}</td>
                         <td>{{$v_eee->student_name}}</td>
                         <td>{{$v_eee->student_phone}}</td>
                         <td><img src="{{URL::to($v_eee->student_image)}}" height="60" width="70" style="border-radius:50%;"></td>
                         <td>{{$v_eee->student_address}}</td>
                         <td>

                           @if($v_eee->student_department==1)
                                                         <span class="label label-success">{{'eee'}}</span>

                                                    @elseif($v_eee->student_department==2)
                                                          <span class="label label-success">{{'EEE'}}</span>

                                                    @elseif($v_eee->student_department==3)
                                                          <span class="label label-success">{{'IPE'}}</span>

                                                    @elseif($v_eee->student_department==4)
                                                          <span class="label label-success">{{'BBA'}}</span>

                                                    @elseif($v_eee->student_department==5)
                                                        <span class="label label-success">{{'ME'}}</span>

                                                        @elseif($v_eee->student_department==6)
                                                            <span class="label label-success">{{'CLVIL'}}</span>


                                                    @else
                                                       <span class="label label-success">{{'Not Define'}}</span>
                                                    @endif



                          </td>
                         <td style="width:300px;">


                          <a href="{{URL::to('/eee_student_view/'.$v_eee->student_id)}}"> <button class="btn btn-outline-primary">View</button></a>
                           <a href="{{URL::to('/eee_student_edit/'.$v_eee->student_id)}}"> <button class="btn btn-outline-primary">Edit</button></a>
                           <a href="{{URL::to('eee_student_delate/'.$v_eee->student_id)}}" id="delate"><button class="btn btn-outline-primary">Delate</button></a>
                         </td>
                     </tr>









                   @endforeach
                   </tbody>

                 </table>
               </div>
             </div>
           </div>
         </div>









































































@endsection
