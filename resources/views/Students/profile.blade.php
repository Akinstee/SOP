<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>

    <h1>Student Profile</h1>

    <form method="post" action="{{ url('/profile/update') }}" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" readonly>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}">

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value="{{ $student->phone }}">

        <label for="state">State of Residence:</label>
        <input type="text" id="state" name="state" value="{{ $student->state }}">

        <label for="image">Profile Picture:</label>
        <input type="file" id="image" name="image">


        <button type="submit">Update Profile</button>
    </form>

</body>
</html>
