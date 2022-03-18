    <?php 
    require 'connect.php';
    include 'nav.php';
    session_start();

    var_dump($_SESSION['casrt']);

    if (empty($_SESSION['cart'])) {
        echo "<p>Your cart is empty</p>";
    }
    else{
        $whereIn = implode(',',$_SESSION['cart']);

    echo $whereIn;

    $sql ="
        SELECT * FROM productTest
        WHERE productID IN ($whereIn);
    ";
    $result = $conn->query($sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            if(isset($whereIn)) {
                $quantity = substr_count($whereIn, $row["productID"]);
            }
            echo "
            <h3>{$row['productName']}</h3>
            <p>Price: \${$row['productPrice']}</p>
            Quantity: {$quantity}
            ";
        }
    }
}
    ?>