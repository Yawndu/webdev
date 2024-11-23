<?php
include './database/dbconnection.php';

$sql = "SELECT * FROM pinera_products WHERE idnumber='123'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while ($row = $result->fetch-assoc()){
?>

            <div class = " col md-4 product-card">
                <div calss ="card">
                    <div class = "card-body">
                        <h5 class="card-title"><?php echo $row["prodcut_name"]; ?></h5>
                        <p class="card-text><?php echo $row["product_desc"]; ?></p>
                        <p class="card-text">Price: $<?php echo $row["price"]; ?></p>
                        <a href="./product-update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                        <a href="./delete.php?id=<php echo $row['id']; ?>"class="btn btn-danger" style="float:right">Delete</a>
                    </div>  
                </div>  
            </div>
<?php            
    }
} else{
    echo "0 results";
}
$conn->close();
?>