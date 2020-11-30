@extends('admin.includes.app')


@section('content')


    <div class="container">



        <div class="card mb-4 shadow">

            <form method="POST" action="{{ route('candidates.store') }}">
                @csrf

                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand">Add Candidate</a>
                        <button type="submit" id="createPostSubmit" class="btn btn-success btn-lg d-none d-md-block">
                            Add</button>

                    </nav>
                </div>
                <div class="card-body">

                    <div class="row">

                        <div class="col-12 col-md-8">

                            <select class="form-control form-control-lg selectpicker" id="candidate" name="candidate_id" value="" required>
                                <option value="">Select Candidate</option>
                                @foreach ( $users  as $user )
                                
                                <option value={{ $user->id }} >{{ $user->name }}</option>

                                @endforeach
                                    
                            </select>
                            <div class="pt-4 mt-4  p-4 bg-light ">
                                <h2>  Lorem, ipsum dolor.</h2>
                                <b> Email: Ruhul.ok@GMAIL.COM</b> <br>
                                <b> Phone: 0125454545</b> <br>
                                <b> Campus: Sylhet Engineering College</b>
                              

                            </div>


                        </div>



                        <div class="col-12 col-md-4 bg-light p-2 p-4" >


                            <div class="form-group">
                            <select class="form-control form-control-lg mt-4 " value="" name="election_id" required>
                                <option>Select Election</option>
                                @foreach ( $elections  as $election )
                                
                                <option value={{ $election->id }} >{{ $election->name }}</option>

                                @endforeach
                            </select>
                            </div>



                           
                            <div class="form-group">

                            <select class="form-control form-control-lg mt-4 "  value="" name="designation_id" required>
                                <option>Select Designation</option>
                                @foreach ( $campusDesignation  as $designation )
                                
                                <option value={{ $designation->id }} >{{ $designation->name }}</option>

                                @endforeach

                            </select>       
                            </div>                      

                            {{-- <select class="form-control form-control-lg mt-4 "  value="" name="designation_id" required>
                                <option>Select Designation</option>
                                @foreach ( $centralDesignation  as $designation )
                                
                                <option value={{ $designation->id }} >{{ $designation->name }}</option>

                                @endforeach

                            </select> --}}



                            <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><i class="fa fa-info-circle"  title="Image Resulation: 600 X 375" aria-hidden="true"></i><br>
                            <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required >

{{--                           
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file " name="image"  required>
                                  </div> --}}

                        </div>





                    </div>

                </div>
            </form>
        </div>
    </div>





@endsection