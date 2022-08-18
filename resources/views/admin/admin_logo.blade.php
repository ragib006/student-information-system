@extends('layout')

@section('content')





              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">

                        <p class="alert-danger">
                            <?php
                            $exception=Session::get('exception');
                            if($exception)
                            {
                            echo $exception;
                            Session::put('exception',null);
                            }
                            ?>
                            </p>



                          <h2 class="card-title">Basic form elements</h2>



                          <form class="forms-sample" method="post" action="{{URL::to('/admin_logo_change_formaction')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}






                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Logo Name</label>
                                         <input type="text" class="form-control p-input" name="logo_name" aria-describedby="emailHelp" placeholder="Enter logo name">

                                     </div>

                              <div class="form-group">
                                  <label>Upload Logo</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="logo_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted"></small>
                                    </div>
                                  </div>
                              </div>


                              <div class="col" style="color:blue;">
                                 <label class="control-label" for="textarea2">Publication Status</label>
                                 <div class="controls" style="width:50px;" >
                                <input type="checkbox" name="publication_status" value="1">
                                 </div>
                                </div>






                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>















@endsection
