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
@if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col">
                <form>
                    <div class="form-group">
                        <label for="cne">CNE</label>
                        <input type="text" name="cne" class="form-control" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label for="firstName">First Name"</label>
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
            </section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentlist')
            </section>
            <section class="col"></section>
        </div>
    </div>
@endif
</body>
</html>
