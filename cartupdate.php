<?php
session_start();

$qty=$_POST['quantity'];


if (isset($_POST['update'])) {
	foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['item_name']==$_POST['item_name']) {
				$_SESSION['cart'][$key]['quantity']=$qty;
				echo "<script>
					alert('Item Updated');
					window.location.href='cart.php';
					</script>
				";
						# code...
					}		# code...
	}
	# code...
}





?>


<div class="flex-w flex-m m-r-20 m-tb-5">

							<form action=receiveorder.php method="POST">

							 <h2>payment details</h2><br><br>

							   <label for="adr">Enter full address</label>
							   <textarea placeholder="123 Main Street, New York, NY 10030" id="adr" name="address" rows="4" cols="50" >
                               </textarea>

							   <label  for="cardno">Enter card number </label>
							   <input 
							   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
							   class="card" type="number" id="cardno" name="cardnum"  maxlength="16" placeholder="1223 1234 1345 5332" >

							   <label for="expno">Enter expiry number </label>
							   <input 
							   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
							   class="card" type="number" id="expno" name="expnum"   maxlength="4" placeholder="0124">

							   <label for="cvvno">Enter cvv number </label>
							   <input 
							   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
							   class="card" type="number" id="cvvno" name="cvvnum"   maxlength="3" placeholder="098">

							   <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
							   <input type="hidden" name="item_price" value="<?php echo $value['item_price'] ?>">
							   <input type="hidden" name="quantity" value="<?php echo $value['quantity'] ?>">
							   
                               

							   <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Proceed To Checkout</button>
                               </div>

							   </form>




								
							</div>