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
    <?if($_SESSION['add_data'] == 1):?>
        <h4 style="color: #4CAF50">Data added</h4>
    <?endif;?>
    <?php unset($_SESSION['add_data'])?>
    <form action="http://makhmudovcoursework.loc/admin/add_in_table" method="post">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="lname">Age </label>
        <input type="number" id="" name="age" placeholder="Your age.." min="1" max="100">

        <label for="job">Job </label>
        <input type="text" id="job" name="job" placeholder="Your job.." min="1" max="100">

        <label for="location">Location</label>
        <select id="location" name="location">
            <option value="Moscow">Moscow</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Washington">Washington</option>
            <option value="Makhachkala">Makhachkala</option>
        </select>
        <input type="hidden" name="add_data_in_table_people" value="1">
        <input type="submit" value="Submit">
    </form>
    <small>&copy; Magomed Makhmudov</small>
</div>

</body>
</html>