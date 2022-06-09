@extends('masterC')

@section('menu')
<html>

    <body>

        <h2>HTML Forms</h2>

        <form action="/action_page.php">
            <label for="fname">Appoinment ID:</label><br>
            <input name="appoinmentID" type="string" placeholder="Type here"><br>
            <label for="lname">Date:</label><br>
            <input name="date" type="date" placeholder="Type here"><br>
            <input type="submit" value="Submit">
        </form>

    </body>

    </html>
@endsection
