<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <div class="table-responsive">

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Category ID</th>
                <th>Price</th>
            </tr>
            <?php

            while ($row = $this->result["products"]->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["slug"] . "</td>";
                echo "<td>" . $row["category_id"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "</tr>";
            }
            ?>

        </table>

    </div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</body>
</html>