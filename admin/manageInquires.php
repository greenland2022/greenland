
<?php
ob_start();
include('include/header.php');
require('include/conection.php');
   
?>
<br><br><br><br>

<div class="col-lg-8">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Massage</th>
                    <th>Mail</th>
                </tr>
            </thead>
            <tbody>

                <?php 
$sql ="SELECT * FROM contact "; 
$admin=mysqli_query($conn,$sql);

while($result=mysqli_fetch_assoc($admin)){
    echo "<tr>";
echo "<td>{$result['Name']} </td>";
echo "<td>{$result['Mail']} </td>";
echo "<td>{$result['Massage']} </td>";
}
?>

            </tbody>
        </table>
    </div>
</div>

<?php
 include('include/footer.php')?>