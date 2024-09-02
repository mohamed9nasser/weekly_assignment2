<?php
include "store.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $store->getName(); ?></title>
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1><?php echo $store->getName(); ?></h1>
        <img src="<?php echo $store->getImage(); ?>" alt="<?php echo $store->getName(); ?>">
        <p><?php echo $store->getDescription(); ?></p>
    </header>
    <main>
        <h2>Products</h2>
        <div class="products">
            <?php
            $products = $store->getProducts();
            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<h3>" . $product->getTitle() . "</h3>";
                echo "<img src='" . $product->getImage() . "' alt='" . $product->getTitle() . "'>";
                echo "<p>Price: $" . $product->getPrice() . "</p>";
                
                echo "</div>";
            }
            ?>
        </div>
    </main>
</body>
</html>