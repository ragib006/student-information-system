@extends('layout')

@section('content')








     <div class="card" style="width:100%;">
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

                         <th>Name</th>
                         <th>Phone</th>
                          <th>Address</th>
                         <th>Image</th>

                         <th>Department</th>
                         <th>Action</th>

                     </tr>
                   </thead>
                   <tbody style="text-align:center">
                        @foreach($all_teacher_info as $v_teacher)
                     <tr>

                         <td >{{$v_teacher->teachers_name}}</td>
                         <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}" height="60" width="70" style="border-radius:50%;"></td>

                         <td>

                           @if($v_teacher->teachers_department==1)
                                                         <span class="label label-success">{{'CSE'}}</span>

                                                    @elseif($v_teacher->teachers_department==2)
                                                          <span class="label label-success">{{'EEE'}}</span>

                                                    @elseif($v_teacher->teachers_department==3)
                                                          <span class="label label-success">{{'IPE'}}</span>

                                                    @elseif($v_teacher->teachers_department==4)
                                                          <span class="label label-success">{{'BBA'}}</span>

                                                    @elseif($v_teacher->teachers_department==5)
                                                        <span class="label label-success">{{'ME'}}</span>

                                                        @elseif($v_teacher->teachers_department==6)
                                                            <span class="label label-success">{{'CLVIL'}}</span>


                                                    @else
                                                       <span class="label label-success">{{'Not Define'}}</span>
                                                    @endif



                          </td>







                         <td style="width:230px;">

                          <a href="{{URL::to('/all_teachers_view/'.$v_teacher->teachers_id)}}"> <button class="btn btn-outline-primary">View</button></a>
                          <a href="{{URL::to('/all_teacher_edit/'.$v_teacher->teachers_id)}}"><button class="btn btn-outline-primary">Edit</button>
                          <a href="{{URL::to('all_teachers_delate/'.$v_teacher->teachers_id)}}" id="delate"> <button class="btn btn-outline-primary">Delate</button></a>
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
