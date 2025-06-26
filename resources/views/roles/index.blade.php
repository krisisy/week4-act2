<div>
    <a href={{route('roles.create')}}> Create Role </a>
    <table>
        <th>
            <tr>Role Name</tr>
            <tr>Action</tr>
        </th>
        @foreach ($roles as $role)
        <tr>
            <td>{{$role->role_name}}</td>
            <td><a href={{route('roles.show', $role->id)}}>Show</a></td>
            <td><a href={{route('roles.edit', $role->id)}}>Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>