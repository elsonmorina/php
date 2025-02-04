<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* General body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #007BFF;
    color: white;
}

th, td {
    padding: 12px 15px;
    text-align: left;
}

th {
    font-weight: bold;
}

tbody tr {
    background-color: #ffffff;
    transition: background-color 0.3s;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #e9ecef;
}

/* Responsive styles */
@media (max-width: 600px) {
    table {
        font-size: 14px;
    }
}
    </style>
</head>
<body>
    
    <?php
        include_once("config.php");
        $sql = "SELECT * FROM users";
        $getUsers = $conn->prepare($sql);
        $getUsers->execute();
        $users = $getUsers->fetchAll();    
    ?>

    <br>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            foreach($users as $user){
            ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['surname']?></td>
                <td><?= $user['email']?></td>
            </tr>
            <?php } ?>


        </tbody>    
    </table>
    <a href="in.php">add user</a>


</body>
</html>