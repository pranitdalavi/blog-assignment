<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Homepage</title>
    <li class="nav-item">
        <u><a class="nav-link" href="{{ route('login') }}">Login</a></u>
    </li>
</head>

<body>

    <div class="container my-5 py-5 px-5 mx-5">
        <h1>Blogs List :</h1>


        @foreach($posts as $post)
        <div>
            Title : {{ $post->title }}<br>
            Date : {{ $post->date }}<br>
            Post author : {{ $post->author }}<br>
            Post Description : {{ $post->description }}<br>
            Post tags : {{ $post->tags }}
        </div><br>
        @endforeach

        </ul>
    </div>
</body>

</html>