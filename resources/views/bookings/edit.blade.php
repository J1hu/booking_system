<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Booking</title>
</head>
<body>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('bookings.update', $booking->id) }}">
  @csrf
  @method('put')

  <label for="booking_title">Booking Title:</label>
  <input type="text" id="booking_title" name="booking_title" value="{{ $booking->booking_title }}" required><br>

  <label for="booking_description">Booking Description:</label>
  <input type="text" id="booking_description" name="booking_description" value="{{ $booking->booking_description }}" required><br>
  
  <label for="booking_date">Booking Date:</label>
  <input type="date" id="booking_date" name="booking_date" value="{{ $booking->booking_date }}" required><br>

  <button type="submit">Update Booking</button>
</form>
  
</body>
</html>