@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-8">
            @include('Student.list')
        </div>
        <div class="col-md-4">
              <div class="card mb-3">
                <img src="{{asset('assets/images/education_3.jpg')}}" alt="" class="w-100 h-40">
                  <div class="card-header text-center">
                      <div class="card-title">
                       <h5>Update Information of student</h5>
                    </div>        
            </div>
            <div class="card-body">
                 <form action="{{ url('update/'.$student->id)}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">CNE</label>
                    <input type="text" name="cne" id="" class="form-control" value="{{$student->cne}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" id="" class="form-control"  value="{{$student->firstName}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Second Name</label>
                    <input type="text" name="secondName" id="" class="form-control"  value="{{$student->secondName}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Age</label>
                    <input type="number" name="age" id="" class="form-control"  value="{{$student->age}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Speciality</label>
                    <input type="text" name="speciality" id="" class="form-control"  value="{{$student->speciality}}">
                </div>

                 <div class="form-group mb-3">
                    <input type="submit" value="Update" class="btn btn-info w-100">
                </div>
            </form>
            </div>        
        </div>
     </div>
    </div> 
</div>
    
@endsection