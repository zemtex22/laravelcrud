<html>
<head> <title> USERS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>

<div class="container">
    <h1> ALL USERS </h1> 
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name </th>
            <th>Email </th>
            <th>Address </th>
            <th>Mobile Number </th>
            <th>Mother's Name </th>
            <th>Actions </th>
</tr>
</thead>
<tbody>
        
            @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->userDetails->address }}</td>
        <td>{{ $user->userDetails->mobile_number }}</td>
        <td>{{ $user->userDetails->mother_name }}</td>
        <td>
            <a href="{{ route('edit', encrypt($user->id)) }}"><button class="btn btn-primary mx-2" type="button">Edit</button></a>
            <a href="{{ route('destroy', encrypt($user->id)) }}"><button class="btn btn-danger" type="button">Delete</button></a>
        </td>
    </tr>
@endforeach

                
</tbody>
</table>
</div>

</body>

</html>