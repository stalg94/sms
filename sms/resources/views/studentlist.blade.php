<div class="card mb-3">
    <img class="card-img-top w-50 p-3" src="https://www.digital-dividend.com/wp-content/uploads/2016/07/educational2-01.png" alt="Education pilt">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here an information about students.</p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->secondName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Show</a>
                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form class="p-2" method="post" action="{{ route('student.delete',$student->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


