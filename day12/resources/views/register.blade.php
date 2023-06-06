@extends('index')

@section('content')
    <h1>Buat Akun Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="/" type="GET">
        <p>First Name:</p>
        <input type="text">
        <br>
        <p>Last Name:</p>
        <input type="text">
        <p>Gender:</p>
        <input type="radio"><label for="">Male</label> <br>
        <input type="radio"><label for="">Female</label><br>
        <input type="radio"><label for="">Other</label><br>
        <p>Nationality:</p>
        <select id="">
            <option value="indonesia">Indonesia</option>
            <option value="singapura">Singapura</option>
            <option value="thailand">Thailand</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox"><label for="">Bahasa Indonesia</label> <br>
        <input type="checkbox"><label for="">English</label><br>
        <input type="checkbox"><label for="">Other</label><br>
        <p>Bio:</p>
        <textarea id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">Sign Up</button>
    </form>
@endsection
