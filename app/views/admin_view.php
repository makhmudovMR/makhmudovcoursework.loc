<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>



<div style="width: 50%; margin: 0px auto">
    <h3>Admin Panel</h3>
    <form action="/action_page.php">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="lname">Age </label>
        <input type="number" id="" name="age" placeholder="Your age.." min="1" max="100">

        <label for="lname">Job </label>
        <input type="text" id="lname" name="lastname" placeholder="Your job.." min="1" max="100">

        <label for="country">Location</label>
        <select id="country" name="country">
            <option value="moscow">Moscow</option>
            <option value="tokyo">Tokyo</option>
            <option value="washington">Washington</option>
            <option value="makhachkala">Makhachkala</option>
        </select>

        <input type="submit" value="Submit">
    </form>
    <small>&copy; Magomed Makhmudov</small>
</div>

</body>
</html>