<html>
<head>
    <title>BC blog</title>
</head>
<body>

<form style="margin:50px 100px" method="post"
      action="{{action('PostController@store')}}">

    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="hidden" name="user_id" value="1">
    <br/>
    <textarea name="content" rows="10"></textarea>
    <br/>

    <button type="submit">Create</button>
</form>



<a href="{{action('PostController@index')}}">back to index</a>
</body>
</html>