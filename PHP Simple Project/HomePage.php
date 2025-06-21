<?php
require_once "conndb.php";

$query = "SELECT* FROM registration";

$result = $conn->query($query);

if($result){
    $data = mysqli_fetch_array($result);
}

?>


<?php while($data = mysqli_fetch_array($result)):?>
    <tr>
        <td>
            <h1>
                Welcome <?php echo $data['Name'];?>
            </h1>
        </td>

    </tr>
    <tr>
        <td>
            <h3>You are From : <?php echo $data['District'];?></h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Your City Name is : <?php echo $data['City'];?></h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Your Course name : <?php echo $data['Course'];?></h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Your Class ID : <?php echo $data['Id'];?></h3>
        </td>
    </tr></br></br></br>
<?php endwhile;?>
