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
    {!! Form::model($employee, ['route'=>['employee.update', $employee->id], 'method'=>'PATCH']) !!}
    Name:<br>
    {!! Form::text('name', null, array())!!}<br>
    Email:<br>
    {!! Form::text('email', null, array())!!}<br>
    Mobile:<br>
    {!! Form::text('mobile', null, array())!!}<br>
    Employee Code:<br>
    {!! Form::text('employee_code', null, array())!!}<br>
    Designation:<br>
    {!! Form::text('designation', null, array())!!}<br>
    <input type="submit" value="Submit">
    {!! Form::close() !!}
</body>
</html>