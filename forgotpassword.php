<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<body class="animsition">
	<?php
	include ("partials/header.php");


?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about1.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
		Forgot password
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w ">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					
                    
                    <form action="handler/forgothandler.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Forgot password
						</h4>


                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="uname" placeholder="Enter your username here" required>
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
                      		<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Enter Email Address " required>
                      		<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
                        <p>You will receive a new password for this email </p>

                        <br><br>

                        

						

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" name="requestpassword">
						   Request for password
						</button>
					</form>
				</div>

				

			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>



	<!-- Footer -->
	<?php
	include('partials/footer.php');
	?>

</body>
</html>