<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
</head>
<body>
    <h1>View Courses</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Author</th>
                <th>Rating</th>
            </tr>
        </thead>
        {{-- <tbody>
            @if (!empty($course))
            {{ dd($course) }}
                @foreach($course as $course)
                
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->author }}</td>
                        <td>{{ $course->rating }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No courses found</td>
                </tr>
            @endif
        </tbody> --}}

        <tbody>
            @if (!empty($course))
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->author }}</td>
                    <td>{{ $course->rating }}</td>
                </tr>
            @else
                <tr>
                    <td colspan="5">No course found</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
