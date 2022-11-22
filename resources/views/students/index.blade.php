<h1>
    Students List
</h1>
<a href="{{ route('create')}}">
    Create
</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>
                {{ $student->id }}
            </td>
            <td>{{ $student-> fullName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->genderName }}</td>
        </tr>
    @endforeach
</table>
