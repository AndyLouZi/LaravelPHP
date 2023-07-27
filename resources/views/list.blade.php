<h1>This User List</h1>
<table>
    <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
    </tr>
    @foreach ($users as $user)
    <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
    </tr>
    @endforeach
</table>
<a class="btn btn-danger" href="">Delete</a>