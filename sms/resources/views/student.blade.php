<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Management System</title>
</head>
<body>
@include('navbar')

<div class="header-container-justify-comtent-center">
<div class="header">
    <h1>Student Management System</h1>
</div>
</div>

@if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://varteq.com/wp-content/uploads/2021/07/education_apps1-680x360.png" alt="Adding card">
                    <div class="card-body">
                        <h5 class="card-title">Enter information about new students</h5>
                        <form method="post" action="{{url('/store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input type="text" name="cne" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input type="text" name="secondName" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <button type="submit" class="btn btn-info" value="Save">Save</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://d3pbdh1dmixop.cloudfront.net/readdle/Blog/free-educational-apps/Resources%20for%20online%20learning.png" alt="Update Image">
                    <div class="card-body">
                        <h5 class="card-title">You can edit information about students</h5>
                        <form action="{{url('/update/'.$student->id)}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input value="{{$student->cne}}" type="text" name="cne" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input value="{{$student->firstName}}"  type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="secondName">Last Name</label>
                                <input value="{{$student->secondName}}"  type="text" name="secondName" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input value="{{$student->age}}"  type="text" name="age" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input value="{{$student->speciality}}"  type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <button type="submit" class="btn btn-info" value="Update">Update</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
@endif

</body>
</html>
