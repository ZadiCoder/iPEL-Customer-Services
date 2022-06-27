<h1>Create New User Type</h1>
<form action="{{route('usertype.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    <input type="button" value="Submit">
</form>