<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alldata</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
<body>
    <?php
    session_start();
    use App\loginmanager;
    use App\signup;
    $da = signup::all();

    if (!$da) {
        throw new Exception('error');
    }

    $response["status"] = "ok";

    // foreach ($da as $x) {
    //     echo "$x <br>";
    //   }
      
?>
 <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
               <th>Username</th>
               <th>Email@</th>
               <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($da as $x ): ?>
                <tr>
                    <td><?php echo $x->id; ?></td>
                    <td><?php echo $x->username; ?></td>
                    <td><?php echo $x->name; ?></td>
                    <td><?php echo $x->email; ?></td>
                    <td><?php echo $x->password; ?></td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>
</html>
