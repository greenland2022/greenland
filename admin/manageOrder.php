<?php
ob_start();
include('include/header.php');
require('include/conection.php');
?>
<br><br><br><br><br><br><br><br>
<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">


                                <?php
                                $query="SELECT * FROM checkout";
                                $result=mysqli_query($conn,$query);
                                while ($checkout=mysqli_fetch_assoc($result)) {
                                    echo '<table class="table">';
                                    echo "<thead><tr><th colspan='2'>Billing Information </th></tr></thead><tbody><tr><td>Full Name</td>";
                                    echo "<td class='information'>{$checkout['first_name']}  {$checkout['first_name']}</td>";
                                    echo "</tr><tr><td>City</td>";
                                    echo "<td class='information'>{$checkout['city']} </td>";
                                    echo "</tr><tr><td>Telephone</td>";
                                    echo "<td class='information'>{$checkout['phone_number']}</td>";
                                    echo "</tr><tr><td>Address</td>";
                                    echo "<td class='information'>{$checkout['address']}</td>"; 
                                    echo "</tr><tr><td>POSTECODE</td>";
                                    echo "<td class='information'>{$checkout['postcode']}</td>";
                                    echo '</tr></tbody>';
                                    echo '</table>';
                                    echo '<div class="space-bottom"></div>';
                                    echo '<h1 class="page-title">Checkout Review</h1><div class="separator-2"></div><table class="table cart"><thead><tr><th>Product </th><th>Price </th></tr></thead>';
                                    $cartName = explode(' ', $checkout['orders_name']);
                                    $cartPrice = explode(' ', $checkout['cart_price']);
                                    $arrLength = count($cartName);
                                    $total="";
                                    for($i = 0; $i < $arrLength; $i++) {
                                        echo '<tbody><tr>';
                                        echo "<td class='product'> <small>{$cartName[$i]}</small></td>";
                                        echo "<td class='price'> {$cartPrice[$i]} </td>";
                                        echo '</tr>';
                                        $total+=$cartPrice[$i];
                                    }
                                    echo "
                                    <tr>
										<td class='total-quantity' colspan='3'>Total $i Items</td>
										<td class='total-amount'>$  $total</td>
									</tr>
								</tbody>
							</table>
                                    ";
                                    echo '<div class="space-bottom"></div>';
                                    echo '<div class="space-bottom"></div>';
                                }

                                ?>
									
                                       
							
							
						

					</div>
				</div>
 
<?php
 include('include/footer.php');
 ?>