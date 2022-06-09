@extends('masterC')

@section('menu')
<html>

    <body>

        <h2>HTML Forms</h2>

        <form action="/action_page.php">
            <label for="fname">Cooordinator ID:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Coordinator Name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <label for="lname">Student Name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <label for="lname">Student Phone Number:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <label for="lname">Date:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <label for="lname">Reason:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <input type="submit" value="Submit">
        </form>

    </body>

    </html>
@endsection
