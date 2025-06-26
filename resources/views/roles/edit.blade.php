<form method="POST" action={{route('roles.update', $role->id)}}>
    @csfr
    @method('PUT')
    <label for="role_name">Role Name:</label>
    <input id="role_name" name="role_name" type="text" />

    <label for="description">Description:</label>
    <textarea id="description" name="description">{{$role->description}}</textarea>

    <button type="submit">Save </button>
    <a href={{route('roles.index')}}>Back </a>
</form>