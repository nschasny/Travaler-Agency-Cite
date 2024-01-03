
<?
    $dbname = 'cn93741_db';
    $dbuser = 'cn93741_db';
    $dbpass = 'N2002L1978t';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser,$dbpass);
    $stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List </title>
    <style>
        table{
            border: 1px solid darkgray;
            border-collapse: collapse;
        }

        th {
            background-color:lightblue;
        }

        th,td {
            border: 1px solid darkgray;
            padding:5px;
        }
    </style>
</head>
<body>
    <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <?
                foreach ($stmt as $row){
                echo '<tr>';
                echo '<td>' .$row['id'] . '</td>';
                echo '<td>' .$row['name'] . '</td>';
                echo '<td>' .$row['phone'] . '</td>';
                echo '<td>' .$row['email'] . '</td>';
                echo '</tr>';
                }
            ?>
        </table>
</body>
</html>

