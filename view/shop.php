<?php
// Individual
if (isset($_GET['id']) && $_GET['id'] !== null):
    include ('product.php');
else:
    include ('products.php');
endif;