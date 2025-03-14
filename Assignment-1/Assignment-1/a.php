<!DOCTYPE html>
<html>
<head>
    <title>Patient Management</title>
    <style>
        body { 
            font-family: Arial; 
            padding: 20px; 
        }
        table { 
            border-collapse: collapse; 
            width: 50%; 
            margin: 20px 0; 
        }
        td { 
            padding: 10px; 
        }
        input[type="text"], 
        input[type="email"] { 
            width: 200px; 
            padding: 5px; 
        }
    </style>
</head>
<body>
    <h2>Patient Management System</h2>
    <form name="f1" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Patient ID:</td>
                <td><input type="text" name="patient_id" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Mobile No:</td>
                <td><input type="text" name="number" pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required></td>
            </tr>
        </table>
        <input type="submit" name="b1" value="Add">
        <input type="submit" name="b2" value="Delete">
        <input type="submit" name="b3" value="Update">
        <input type="submit" name="b4" value="Display">
    </form>

    <?php
    
    if(isset($_POST['b1'])) {
        echo "<script>alert('Added successfully');</script>";
    }
    if(isset($_POST['b2'])) {
        echo "<script>alert('Deleted successfully');</script>";
    }
    if(isset($_POST['b3'])) {
        echo "<script>alert('Updated successfully');</script>";
    }
    if(isset($_POST['b4'])) {
        echo "<script>alert('Display successfully');</script>";
    }
    ?>
</body>
</html>