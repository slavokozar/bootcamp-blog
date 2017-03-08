<html>
<head>
    <title>BC blog</title>
</head>
<body>
    <h1>{{$post->name}}</h1>

    <p>{{$post->content}}</p>

    <a href="{{action('PostController@index')}}">back to index</a>
</body>
</html>