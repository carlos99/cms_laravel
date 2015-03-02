<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <h1>New Sections</h1>

    {{Form::open(['url'=>'admin/sections', 'method' => 'post'])}}
        {{Form::label('name', 'Name')}}
        {{Form::text('name')}}

        {{Form::label('slug_url', 'Slug URL')}}
        {{Form::text('slug_url')}}

        {{Form::label('type', 'Type')}}
        {{Form::text('type')}}

        {{Form::submit('Create Section')}}

    {{Form::close()}}
</body>
</html>