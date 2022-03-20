@extends('layouts.master')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <section class="col-md-10">
            @include('Student.list')
        </section>
    </div> 
</div>
    
@endsection