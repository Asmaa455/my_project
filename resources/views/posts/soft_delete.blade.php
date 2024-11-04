<h1>Show All Posts SoftDelete</h1>

@foreach ($posts as $item)
    {{ $item->id }}<br>
    {{ $item->title }}<br>
    {{ $item->body }}<br>
    {{ $item->created_at }}<br>
    {{ $item->updated_at }}<br>
    <a href="{{ route('posts.restore',$item->id) }}">restore</a><br>
    <form action="{{route('posts.delete',$item->id)}}" method="get">
        @csrf
        <button type="submit">delete</button>
    </form>
@endforeach
