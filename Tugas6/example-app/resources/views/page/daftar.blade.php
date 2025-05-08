<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Create Account</h1>
    <h3>Form Sign Up</h3>
    <form>
        <label for name="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for name="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
    </form>

    <p>Gender</p>
    <form action="/">
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Male">
        <label for="vehicle1"> Male</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Female">
        <label for="vehicle2"> Female</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Other">
        <label for="vehicle3"> Other</label><br><br>
        <!-- <input type="submit" value="Submit"> -->
    </form>

    <form action="/">
        <label>Nationality:</label> <br> <br>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Inggris">Inggris</option>
        </select><br>
    </form>

    <form action="/">
        <label>Languange Spoken:</label> <br> <br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bindonesia">
        <label for="vehicle1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Binggris">
        <label for="vehicle2"> English</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Other">
        <label for="vehicle3"> Other</label><br>
        </input>
    </form>

    <p>Bio:</p>
    <form action="/selamat">
        <textarea name="message" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>