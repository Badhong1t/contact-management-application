<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>

    <h1>Contacts</h1>

    <form action="{{ route('contacts.index') }}" method="GET">

        @csrf

        <input type="text" name="search" placeholder="Search by name or email" value="{{ request()->search }}">
        <button type="submit">Search</button>

    </form>

    <table>

        <thead>

            <tr>
                <th>

                    <a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request()->direction === 'asc' ? 'desc' : 'asc']) }}">Name</a>

                </th>

                <th>Email</th>

                <th>Phone</th>

                <th>Address</th>

                <th>

                    <a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request()->direction === 'asc' ? 'desc' : 'asc']) }}">Created At</a>

                </th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($contacts as $contact)

            <tr>

                <td> {{ $contact->name }} </td>
                <td> {{ $contact->email }} </td>
                <td> {{ $contact->phone }} </td>
                <td> {{ $contact->address }} </td>
                <td> {{ $contact->created_at }} </td>
                <td>

                    <a href="{{ route('contacts.show', $contact) }}">View</a>

                    <a href="{{ route('contacts.edit', $contact) }}">Edit</a>

                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST">

                        @csrf

                        @method('DELETE')

                        <button type="submit">Delete</button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</body>
</html>
