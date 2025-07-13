<?php
// This would be your framework default bootstrap file

// During dev, this file would be hit when accessing your local host, like:
// http://vite-php-setup.test

require_once __DIR__ . '/helpers.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite App</title>

    <?= vite('main.js') ?>
</head>

<body>

    <div class="vue-app">
        <!-- how to render PHP code/variables into Vue -->
        <!-- Loaded from the Vue component -->
        <?php
            // Loadded from the "CodeIndex.vue" component
            $featureitem = "New PHP Feature";
            $username = "Cedric Reed";
            // Loadded from the "FeatureItem.vue" component
            $phpfeatureitem = "Second PHP Feature";
            // Loadded from the "NewProduct.vue" component
            $newproduct = "The New Product";
        ?>

        <div id="product" data-newproduct="<?php echo htmlspecialchars($newproduct); ?>"></div>
        <div id="app" data-featureitem="<?php echo htmlspecialchars($featureitem); ?>"></div>
        <div id="user" data-username="<?php echo htmlspecialchars($username); ?>"></div>
        <div id="feature" data-phpfeatureitem="<?php echo htmlspecialchars($phpfeatureitem); ?>"></div>
        <!-- END/php render -->
    
        <hello-world msg="Hello World Component"></hello-world>
        <!-- <new-product></new-product> -->
        <!-- <code-index></code-index> -->
        <!-- <feature-item></feature-item> -->
    </div>

</body>

</html>
