<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Operations</title>
</head>
<body>
    <div>
        <h1>Create New Employee</h1>
        <a style="float:right;" href="{{route('employee.index')}}">Go back</a>
    </div>
    <br/>
    <br/>
    @if (count($errors) > 0)
    <div>
        <strong>Whoops!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::open(array('route'=>'employee.store', 'method'=>'POST')) !!}
    Name:<br>
    <input type="text" name="name"><br>
    Email:<br>
    <input type="text" name="email"><br>
    Mobile:<br>
    <input type="text" name="mobile"><br>
    Employee Code:<br>
    <input type="text" name="employee_code"><br>
    Designation:<br>
    <input type="text" name="designation"><br>
    <input type="submit" value="Submit">
    {!! Form::close() !!}
</body>
</html>