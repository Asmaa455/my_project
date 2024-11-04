<h1>Create new post</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="enter title"><br><br>
    <input type="text" name="body" placeholder="enter body"><br><br>
    <button type="submit">submit</button>
</form>        