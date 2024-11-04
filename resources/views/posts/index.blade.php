<h1>Show All Posts</h1>

@foreach ($posts as $item)
    {{ $item->id }}<br>
    {{ $item->title }}<br>
    {{ $item->body }}<br>
    {{ $item->created_at }}<br>
    {{ $item->updated_at }}<br>
    <a href="{{ route('posts.edit',$item->id) }}">Edit</a><br>
    <form action="{{route('posts.destroy',$item->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">delete</button>
    </form>
@endforeach
