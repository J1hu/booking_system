<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Bookings</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
</head>
<body>
  // sample navigation
  <nav class="flex">
    <div><a href="{{ route('bookings.about') }}">About page</a></div>
    <a href="route"></a>
    <a href="route"></a>
  </nav>

  <h1>All Bookings</h1>

  @if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
  @endif

  @if (session('error'))
    <div style="color: red;">{{ session('error') }}</div>
  @endif

  <table>
    <tr>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>DATE</th>
      <th></th>
      <th></th>
    </tr>
    @foreach ($bookings as $booking)
    <tr>
      <td>{{ $booking->booking_title }}</td>
      <td>{{ $booking->booking_description }}</td>
      <td>{{ $booking->booking_date }}</td>
      <td><a class="color: blue;" href="{{ route('bookings.edit', $booking->id) }}">Edit</a></td>
      <td>
          <form method="post" action="{{ route('bookings.destroy', $booking->id) }}">
          @csrf
          @method('delete')
        
          <button class="color: red;" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>

<a href="{{ route('bookings.create') }}">Create Booking</a>
</body>
</html>