<?php require_once('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="page-banner" style="background-image: url(assets/uploads/banner_product_category.png)">
    <div class="inner">
        <h1>Vật tư</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
          
            <div class="col-md-9">
                
                <h3>Tất cả vật tư</h3>
                <div class="product product-cat">
                    <div class="row">
                            
                        <?php
                            $statement = $pdo->prepare("SELECT * FROM tbl_supplies");
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                            if(!$result){
                                echo '<div class="pl_15">Không tìm thấy vật tư nào!!</div>';
                            }else{

                            foreach ($result as $row) {
                        ?>
                        
                        <div class="col-md-4 item item-product-cat">
                            <div class="inner">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(img/<?= $row['hinhanh']?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="supplies-single.php?id=<?= $row['id']?>"><?php echo $row['tenvt'] ?></a></h3>
                                    <p><a href="supplies-single.php?id=<?= $row['id']?>"><?php echo $row['mavt'] ?></a></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>





<?php require_once('footer.php'); ?>