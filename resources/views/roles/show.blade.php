<div>
    <label for="role_name">Role Name:</label>
    <textarea name="role_name" disabled rows="15" cols="20">
        {{$role->role_name}}
    </textarea>

    <label for="description">Description:</label>
    <textarea name="description" disabled rows="15" cols="20">
        {{$role->role_name}}
    </textarea>
    <br/>
    <a href={{route('roles.index')}}>Back </a>
</div>