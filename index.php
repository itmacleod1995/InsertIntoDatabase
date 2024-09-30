<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Insert Into Database</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <h1>Insert Into Databse</h1>

        <form action="insert.php" method="POST">
            <div>
                <label>ID</label>
                <input type="text" name="id">
            <div>
            <br>
            <div>
                <label>Title</label>
                <input type="text" name="title">
            <div>
            <br>
            <div>
                <label>Content</label>
                <input type="text" name="content">
            <div>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <br>
        <br>

        <table>

        <?php
            $query = "SELECT * FROM notes";
            $conn = require_once("conn.php");

            $res = mysqli_query($conn, $query);

            echo "<tr>
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
            </tr>";

            while($result = mysqli_fetch_assoc($res)){
                echo "<tr>" . "<td>" . $result['id'] . "</td>" .
                     "<td>" . $result['title'] . "</td>" .
                     "<td>" . $result['content'] . "</td>" . "</tr>";
            }
        ?>

        </table>

        

        
        <script src="" async defer></script>
    </body>
</html>