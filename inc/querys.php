<?php
if (isset($_GET["p"]) && $_GET['p'] == "shop" && isset($_GET["id"])) {
    $products = $conn->query("SELECT * FROM `products`  where md5(id) = '{$_GET['id']}' ");
    if ($products->num_rows > 0) {
        foreach ($products->fetch_assoc() as $k => $v) {
            $$k = stripslashes($v);
        }
        $upload_path = 'uploads/product_' . $id;
        $img = "";
        if (is_dir($upload_path)) {
            $fileO = scandir($upload_path);
            if (isset($fileO[2]))
                $img = "uploads/product_" . $id . "/" . $fileO[2];
            // echo $img;
            // var_dump($fileO);
        }
        $inventory = $conn->query("SELECT * FROM inventory where product_id = " . $id);
        $inv = array();
        while ($ir = $inventory->fetch_assoc()) {
            $inv[] = number_format($ir['price']);
        }
    }
}

elseif ($_GET['p'] == "shop") {
    $products = $conn->query("SELECT * FROM `products` where status = 1 order by date_created limit 12");

}