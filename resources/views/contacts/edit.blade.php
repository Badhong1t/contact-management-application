<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">

</head>
<body>

    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">

        @csrf

        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $contact->address }}">

        <button type="submit">Update</button>


    </form>
    
</body>
</html>