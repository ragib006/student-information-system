@extends('layout')

@section('content')








     <div class="card">
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
                         <th>LOGO ID</th>
                         <th> LOGO Name</th>

                          <th> LOGO Image</th>
                          <th style="width:300px;">STATUS</th>

                         <th style="width:300px;">Action</th>

                     </tr>
                   </thead>
                   <tbody style="text-align:center;">
                        @foreach($all_logo_info as $v_student)
                     <tr>
                         <td>{{$v_student->logo_id}}</td>
                         <td>{{$v_student->logo_name}}</td>

                         <td><img src="{{URL::to($v_student->logo_image)}}" height="60" width="70" style="border-radius:50%;"></td>

                         <td>

                                                   @if($v_student->publication_status==1)
                                                         <span class="label label-success" style="background:green;border-radius:5px;color:white;font-family:tahoma;border:2px solid white; padding:3px;">{{'Active'}}</span>



                                                    @else
                                                       <span class="label label-success" style="background:red;border-radius:5px;color:white;font-family:tahoma;border:2px solid white;padding:3px;">{{'Not ACTIVE'}}</span>
                                                    @endif



                          </td>
                         <td style="">

                           @if($v_student->publication_status==1)
                                <a class="btn btn-success"  href="{{URL::to('/active_logo_unactive_route/'.$v_student->logo_id)}}">
                                  <i class="halflings-icon white thumbs-down"></i>

                                    @else
                                <a class="btn btn-danger" href="{{URL::to('/unactive_logo_active_route/'.$v_student->logo_id)}}">
                               <i class="halflings-icon white thumbs-up"></i>
                        @endif

                 </a>





                          <a href="{{URL::to('all_logo_delate/'.$v_student->logo_id)}}" id="delate"> <button class="btn btn-outline-primary">Delate</button></a>
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
