<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email" >Email:</label>
        <input type="email" name="email" min="8"  value="{{ old('email') }}" required >
            @error('email')
                <h3>{{ $message }}</h3>
            @enderror
        <label for="password" >password:</label>
        <input type="password" name="password" required >
            @error('password')
                <h3>{{ $message }}</h3>
            @enderror
        <input type="submit">
    </form>
</body>
</html>
