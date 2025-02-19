<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin index</title>
</head>
<body>

    admin dashboard


    @foreach ($articles as $article)


        <p>article Name: {{ $article->title }}</p>
        <p>article Content: {{ $article->content }}</p>

    @endforeach

</body>
</html>
