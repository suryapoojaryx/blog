<h1> Lara Blog </h1>

<br>


@foreach ($posts as $post )

<h4> {{ $post->title }} </h4>
<p> {{ $post->body }} </p>

<p><i> By {{ $post->user->name }} </i></p>

<hr>
    
@endforeach