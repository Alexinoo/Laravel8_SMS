 <div class="card my-3">
     <img src="{{asset('assets/images/education_4.jpg')}}" alt="" class="w-100 h-40">
     <div class="card-header text-center">
        <div class="card-title">
              <h5 class="card-title">List of Students</h5>
                    <p  class="card-text">You can find here  all the information about students in the system</p>
            </div>        
     </div>
     <div class="card-body">
       
         <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope ="col">CNE</th>
                <th scope ="col">First Name</th>
                <th scope ="col">Second Name</th>
                <th scope ="col">Age</th>
                <th scope ="col"> Speciality</th>
                <th scope ="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                         <td>{{ $student->cne}}</td>
                        <td>{{ $student->firstName}}</td>
                         <td>{{ $student->secondName}}</td>
                         <td>{{ $student->age}}</td>
                         <td>{{ $student->speciality}}</td>
                         <td>
                              
                                <a href="{{ url('edit/'.$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                    </tr>
                    @endforeach
                
                </tbody>
        </table>
     </div>
 </div>
 
