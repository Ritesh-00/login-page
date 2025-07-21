<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
                body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #7f7f7f;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form {
    background-color: grey;
    padding: 20px 28px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    width: 230px;
}

.form input {
    padding: 8px 10px;
    font-size: 12px;
    border: 2px solid grey;
    border-radius: 6px;
    outline: none;
    transition: border-color 0.3s ease;
    margin-bottom: 6px; /* tight gap between fields */
}

.form input:focus {
    border-color: black;
}

.button {
    margin-top: 12px; /* more space above the button */
    padding: 8px 10px;
    font-size: 13px;
    background-color: black;
    color: white;
    border: 1px solid lightgrey;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.button:hover {
    background-color: lightgrey;
    color: white;
}

/* Error Message Styling */
ul {
    padding: 8px 10px;
    background-color: #ffebee;
    border: 1px solid green;
    border-radius: 6px;
    color: green;
    font-size: 12px;
    list-style: square inside;
    margin-top: 12px;
}

    </style>

</head>
<body>
<form method="POST" class ="form" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" class="name" required><br>
    <input type="email" name="email" placeholder="Email" class="email" required><br>
    <input type="password" name="password" placeholder="Password" class="password" required><br>
    <input type="password" name="password_confirmation" class="password_confirmation" placeholder="Confirm Password" required><br>
    <button type="submit" class="button" >Sign Up</button>

    @if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach
</ul>

@endif
</form>

</body>
</html>