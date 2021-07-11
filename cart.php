<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ("partials/head.php");
?>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

 .card{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea {
	border: 2px solid #78e4ff;
}

</style>

<body class="animsition">
	<?php
	include ("partials/header.php");

    ?>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Action</th>
									<th class="column-2">Name</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Update</th>
								</tr>
								<?php 
								$total=0;
								if (isset($_SESSION['cart'])) {
									
									foreach ($_SESSION['cart'] as $key => $value) {
									
									$total=$total+$value['item_price']*$value['quantity'];



								?>

								
								<tr class="table_row">
									<td class="column-1">
										<div class="">
											<form action="cartremove.php" method="POST">
											<button class="btn btn-sm btn-outline-danger" name="remove">Remove</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</div>
									</td>
									<td class="column-2"><?php echo $value['item_name'] ?>;</td>
									<td class="column-3">$ <?php echo $value['item_price'] ?></td>
									<td class="column-4">
										<form action="cartupdate.php" method="POST">
											
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input name="quantity" class="mtext-104 cl3 txt-center num-product" type="number" id="num1" name="num-product1" value="<?php echo $value['quantity'] ?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">
										<button class="btn btn-sm btn-outline-danger" name="update">Update</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</td>
								</tr>
								<?php }
									
								} ?>
								
							</table>
							<hr>
						</div>
       
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							
						<form role="form" action="receiveorder.php" method="post" enctype="multipart/form-data">
          <h1>Products</h1>
              <div class="box-body">
                
                
                
                
			  <h2>payment details</h2><br><br>

<label for="adr">Enter full address</label>
<textarea placeholder="123 Main Street, New York, NY 10030" id="adr" name="address" rows="4" cols="50" required>
</textarea>

<label  for="cardno">Enter card number </label>
<input 
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
class="card" type="number" id="cardno" name="cardnum"  maxlength="16" placeholder="1223 1234 1345 5332" required>

<label for="expno">Enter expiry number </label>
<input 
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
class="card" type="number" id="expno" name="expnum"   maxlength="4" placeholder="0124" required>

<label for="cvvno">Enter cvv number </label>
<input 
oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
class="card" type="number" id="cvvno" name="cvvnum"   maxlength="3" placeholder="098" required>

<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
<input type="hidden" name="item_price" value="<?php echo $value['item_price'] ?>">
<input type="hidden" name="quantity" value="<?php echo $value['quantity'] ?>">

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name = "submit" class="btn btn-primary">Place order</button>
              </div>
            </form>

      
						  
						  
						  
						  </div>


 



							
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209" name ="subtotal1">
								<span class="mtext-110 cl2" name="subtotal">
									$<?php echo $total ?>
								</span>
							</div>
						</div>
                        
						 
						 <div>

                              

						 </div>
						 


						
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
		

	<?php
	include('partials/footer.php');
	?>
</body>
</html>