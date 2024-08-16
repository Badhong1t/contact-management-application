<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>


    <h1>Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <button type="submit">Create</button>

    </form>


</body>
</html>
