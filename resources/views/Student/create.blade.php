@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <section class="col-md-8">
            @include('Student.list')
        </section>
        <section class="col-md-4">
             <div class="card mb-3">
                <img src="{{asset('assets/images/education_3.jpg')}}" alt="" class="w-100 h-40">
                  <div class="card-header text-center">
                      <div class="card-title">
                       <h5>Enter Information of the new Student</h5>
                    </div>  
                  </div> 
                <div class="card-body">
                
                    <form action="{{ url('store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">CNE</label>
                            <input type="text" name="cne" id="" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="firstName" id="" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Second Name</label>
                            <input type="text" name="secondName" id="" class="form-control" placeholder="Enter Second Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="number" name="age" id="" class="form-control" placeholder="Enter Age">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Speciality</label>
                            <input type="text" name="speciality" id="" class="form-control" placeholder="Enter speciality">
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" value="Save" class="btn btn-info w-100">
                        </div>
                    </form>
                </div>
             </div>
         </div>
        </section> 
</div>
    
@endsection