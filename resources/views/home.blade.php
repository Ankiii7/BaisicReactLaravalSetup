@extends('layouts.app')

@section('content')
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How To Install React in Laravel 9 with Vite</title>

     @viteReactRefresh
    @vite('resources/js/app.js')
</head>
<body>
	<div id="root"></div>
</body>
</html>
@endsection
