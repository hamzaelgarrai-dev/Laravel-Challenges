<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('register.submit') }}" method="POST">
        @csrf 

        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" >
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">email :</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" >
             @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" >
             @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-top: 10px;">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>