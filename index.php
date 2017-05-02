<?php require_once("header.php"); ?>

	<!-- Header with full-height image -->
	<header class="bgimg-0 w3-display-container w3-grayscale-min" id="home">
		<div class="w3-display-left w3-text-white" style="padding:48px">
			<span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
			<span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
			<span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
		</div> 
		<div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
			<i class="fa fa-facebook-official w3-hover-opacity"></i>
			<i class="fa fa-instagram w3-hover-opacity"></i>
			<i class="fa fa-snapchat w3-hover-opacity"></i>
			<i class="fa fa-pinterest-p w3-hover-opacity"></i>
			<i class="fa fa-twitter w3-hover-opacity"></i>
			<i class="fa fa-linkedin w3-hover-opacity"></i>
		</div>
	</header>

	<!--CONTENT-->
	<!----------->
		
	<!-- Contact Section -->
	<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
		<h3 class="w3-center">CONTACT</h3>
		<p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
		<div class="w3-row-padding" style="margin-top:64px">
			<div class="w3-half">
				<p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>ภาควิชาวิศวกรรมคอมพิวเตอร์ ชั้น 4 ตึก 30 ปี คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเชียงใหม่ 239 ถนนห้วยแก้ว ตำบลสุเทพ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>
				<p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i><b>Phone</b>: 08-4614-0006, 0-5394-2023</p>
				<p><i class="fa fa-fax fa-fw w3-xxlarge w3-margin-right"></i><b>Fax</b>: 0-5394-2072</p>
				<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i><b>Email</b>: cpe@eng.cmu.ac.th</p><br>
				<form action="contact_add.php" method="POST" role="form">
					<p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Email" required name="email"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Message" required name="message"></p>
					<p><input class="w3-button w3-black" type="submit" value="Send Message"></p>
				</form>
			</div>
			<div class="w3-half"><br>
			<!-- Add Google Maps -->
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.0560226717757!2d98.95256418090533!3d18.79565651948875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a6e0df4c5d5%3A0xe42967aba2a42c7!2z4Lig4Liy4LiE4Lin4Li04LiK4Liy4Lin4Li04Lio4Lin4LiB4Lij4Lij4Lih4LiE4Lit4Lih4Lie4Li04Lin4LmA4LiV4Lit4Lij4LmMIOC4iuC4seC5ieC4mSA0IOC4leC4tuC4gSAzMCDguJvguLUg4LiE4LiT4Liw4Lin4Li04Lio4Lin4LiB4Lij4Lij4Lih4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5gOC4iuC4teC4ouC4h-C5g-C4q-C4oeC5iA!5e0!3m2!1sen!2sth!4v1492393963040" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<?php require_once("footer.php"); ?>