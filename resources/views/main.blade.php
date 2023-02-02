<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>
        <a href="/">Home</a>
    </h1>
    <h1>OKIES EMPLOYEE DATA FORM </h1>
    <p>
        @if (count($errors->all()) > 0)
            @foreach ($errors->all() as $error)
                <div style="color:red; font-size:bolder">{{ $error }} </div>
            @endforeach
        @endif


        @if (session()->has('msg'))
            <div style="color:green; font-size:bolder">{{ session()->get('msg') }}</div>
        @endif
    </p>
    <table>

        <form method="POST" enctype="multipart/form-data" action="/save-biodata">
            @csrf

            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <br>
            <label for="staff">Staff:</label><br>
            <input type="staff" id="Mnumber" name="staff"><br>
            <br>
            <label for="dpt">Department:</label><br>
            <input type="text" id="dpt" name="dpt"><br>
            <br>
            <label for="DoB">DOB:</label><br>
            <input type="date" id="DoB" name="dob"><br>
            <br>
            <label for="gender">Sex:</label><br>
            <input type="text" id="gender" name="gender"><br>
            <br>
            <label for="Position">Position Held:</label><br>
            <input type="text" id="position" name="position"><br>


            <br>
            <br>
            <button type="submit">Submit</button>
        </form>

    </table>



</body>

</html>
