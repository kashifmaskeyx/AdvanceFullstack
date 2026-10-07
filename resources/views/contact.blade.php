<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form method="POST" action="/contact">

        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email">
        <br><br>
        <button type="submit">Submit</button>

    </form>
    
</body>
</html>