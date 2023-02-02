<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table4data</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>
        <a href="/add-staff">Add Staff</a>
    </h1>
    <table style="width:100%">
        <tr>
            <th>S/N</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Staff ID</th>
            <th>Department</th>
            <th>Date Of Birth</th>
            <th>Sex</th>
            <th>Position held</th>
            <th></th>
        </tr>
        @foreach ($staff as $index => $staff)
            <tr>
                <td>{{ $index + 1 }} </td>
                <td>{{ $staff->fname }}</td>
                <td>{{ $staff->lname }}</td>
                <td>{{ $staff->email }}</td>
                <td>{{ $staff->staff }}</td>
                <td>{{ $staff->dpt }}</td>
                <td>{{ $staff->dob }}</td>
                <td>{{ $staff->gender }}</td>
                <td>{{ $staff->position }}</td>

                <td>
                    <a href="/{{$staff->id}}/view">View</a> ||
                    <a href="/{{$staff->id}}/delete">Delete</a> ||

                </td>
            </tr>
        @endforeach
    </table>

</html>
