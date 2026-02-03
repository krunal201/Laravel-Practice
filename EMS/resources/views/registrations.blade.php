<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>All Registration</h1>

    <form action="{{ route('registration.filter') }}" method="post">
        @csrf
        <!-- <input type="text" name="fil" id=""> -->
        <select name="fil" id="">
            <option value="none">Select Title</option>
            <option value="Conference" {{ request('fil') == 'Conference' ? 'selected' : '' }}>Conference</option>
            <option value="Person's Concert" {{ request('fil') == "Person's Concert" ? 'selected' : '' }} >Person's Concert</option>
            <option value="Webinar" {{ request('fil') == "Webinar" ? 'selected' : '' }} >Webinar</option>
        </select>
        <button>Filter</button>

        <a href="{{ route('export.csv') }}">download CSV File</a>
        <a href="{{ route('export.excel') }}">download Excel File</a>
    </form>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Event</th>
        </tr>

        @foreach ($reg as $r)
        <tr>
            <td>{{ $r->name }}</td>
            <td>{{ $r->email }}</td>    
            <td>{{ $r->phone }}</td>
            <td>{{ $r->title }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
