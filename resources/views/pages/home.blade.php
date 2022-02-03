@extends('layouts.main-layout')

@section('content')


@auth

    <h3>Logged as: {{ Auth::user() -> name }}</h3>
    <a class="btn btn-secondary" href="{{ route('logout') }}">Log out</a>
    <br>
    <hr>
    <h2>Registered users: {{ count($users) }} </h2>
    <br>
    <h3>Users list:</h3>
    <ul>
        @foreach ($users as $user)
        <li>
            {{ $user -> id }} - {{ $user -> name }} - {{ $user -> email }}
        </li>
        @endforeach
    </ul>
    
    @else
    
        <h2>Registered users: {{ count($users) }} </h2>
        <h5>Register/login to see the usernames and emails</h5>

        <h6>Register here:</h6>
    
        <form action="{{ route('register') }}" method="POST">
    
            @method('POST')
            @csrf
        
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Nome"> <br>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="E-mail"> <br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password"> <br>
            <label for="password_confirmation">Password confirm:</label>
            <input type="password" name="password_confirmation" placeholder="Password again"> <br>
            
            <input type="submit" value="REGISTER">
    
        </form>
        <br><hr>
    
        <h6>Login here:</h6>

        <form action="{{ route('login') }}" method="POST">
    
            @method('POST')
            @csrf
        
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="E-mail"> <br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password"> <br>
            <input type="submit" value="LOGIN">
    
        </form>

    @endauth

        <hr>

    
@endsection