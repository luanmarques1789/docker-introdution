<?php

$result = file_get_contents('http://docker-introduction-node:5030/products');
$products = json_decode($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<style>
  body {
    width: 100vw;
    height: 100vh;
  }
</style>

<body>

  <h1 class="text-center mt-5">Table of Products</h1>

  <div class="d-flex justify-content-center w-75 mt-5 m-auto">
    <table class="table table-striped m-auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) : ?>
          <tr>
            <td>
              <?php echo $product->name; ?>
            </td>
            <td>
              <?php echo $product->price; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      </thead>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>