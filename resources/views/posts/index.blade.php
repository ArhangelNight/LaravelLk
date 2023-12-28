<h2>Hello, World! {{$some}}</h2>
<ul>
    @foreach($posts as $post)
        <li>{{$post['id']}}</li>
    @endforeach
</ul>
