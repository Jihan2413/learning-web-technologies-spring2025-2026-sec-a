

<!DOCTYPE html>
<html>
<head>

    <title>Online Computer Shop</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php include "../app/views/layouts/navbar.php"; ?>

<h2>Categories</h2>

<div class="categories">

    <?php foreach($categories as $category) : ?>

        <button><?php echo $category['name']; ?></button>

    <?php endforeach; ?>

</div>

<h2>Featured Components</h2>

<div class="products">

    <?php foreach($products as $product) : ?>

        <div class="card">

            <h3><?php echo $product['name']; ?></h3>

            <p>
                <?php echo $product['manufacturer_review']; ?>
            </p>

            <h4>$<?php echo $product['price']; ?></h4>

        </div>

    <?php endforeach; ?>

</div>

</body>
</html>