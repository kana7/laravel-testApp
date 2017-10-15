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
        <h1>View Employees</h1>
        <a style="float:right;" href="{{route('employee.index')}}">Go Back</a>
    </div>
    <br/>
    <br/>
    Name: {{ $employee->name }}<br>
    Email: {{ $employee->email }}<br>
    Mobile: {{ $employee->mobile }}<br>
    Employee Code: {{ $employee->employee_code }}<br>
    Designation: {{ $employee->designation}}<br>
</body>
</html>