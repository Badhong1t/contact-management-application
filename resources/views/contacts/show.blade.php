<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">

</head>
<body>

    <h1>Contact Details</h1>

    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Address: {{ $contact->address }}</p>
    <p>Created At: {{ $contact->created_at }}</p>
    <p>Updated At: {{ $contact->updated_at }}</p>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
    
</body>
</html>