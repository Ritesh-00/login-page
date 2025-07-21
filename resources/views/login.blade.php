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
    background-color: #7f7f7f; /* soft gray */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form {
    background-color: #ffffff;
    padding: 30px 40px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    gap: 15px;
    min-width: 300px;
}

.form input[type="email"],
.form input[type="password"] {
    padding: 10px 15px;
    font-size: 16px;
    border: 2px solid grey;
    border-radius: 8px;
    outline: none;
    transition: border-color 0.3s;
}

.form input[type="email"]:focus,
.form input[type="password"]:focus {
    border-color: black;
}

.submit {
    padding: 10px 20px;
    font-size: 16px;
    background-color: black;
    color: white;
    border: 2px solid grey;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.submit:hover {
    background-color: lightgrey;
    color: white;
}
    </style>

</head>
<body> 
        <form method = 'POST' action="{{ route('login') }}" class="form">
            
            @csrf
       <input type="email" name="email" placeholder = "email" class="email" id="email">
        <input type="password" name="password" placeholder = "pass" class="password" id="password">
        <input type="submit" class="submit" value="submit">
    </form>


</body>
</html>