<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $result = file_get_contents('http://node-container:5030/products');
    $products = json_decode($result);
  ?>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product): ?>
        <tr>
          <td><?php echo $product->name; ?></td>
          <td><?php echo $product->price; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    </thead>
  </table>
</body>
</html>