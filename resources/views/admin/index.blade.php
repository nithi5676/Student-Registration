<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> </head>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Reg No</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">StudentId</th>
      <th scope="col">Zipcode</th>
      <th scope="col">Specialization</th>
      <th scope="col">College Name</th>
      <th scope="col">Degree</th>



      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->email}}</th>
      <td>{{$user->reg_no}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->dob}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->state}}</td>
      <td>{{$user->student_id}}</td>
      <td>{{$user->zipcode}}</td>
      <td>{{$user->speciality}}</td>
      <td>{{$user->college_name}}</td>
      <td>{{$user->degree}}</td>



      
      <td><a href="{{ url('/edit-records/'.$user->id)}}" class="btn btn-primary  active" role="button" aria-pressed="true">edit</a>
</td>
<td><form action="{{ url('/delete-records/'.$user->id)}}" method="POST">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger">Delete</button>
</form>
</td>





    </tr>
   
    </tr>
    @endforeach
    
  </tbody>
</table>
</html>