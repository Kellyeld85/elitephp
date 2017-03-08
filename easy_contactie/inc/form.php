<?php


	if ($validFormDisplay)
	{


		echo '
		<div class="contactform">';

			if ($successSent) echo '<div id="successMessage">'.$successMessage.'</div>';

		echo '
			

	                <h1>Get In Touch</h1>

	                <hr class="style17">

	                <div class="getintough gitcontact">
		                <h2>CALL US</h2>
		                <p>0208 442 9119 </p>
	                </div>
					<div class="getintough gitcontact gone">
		                <h2>SEND US A MESSAGE</h2>
		                <p>Fill in the form below</p>
	                </div>
					<div class="getintough gitcontact">
		                <h2>EMAIL US</h2>
		                <p>info@elitechandelier.com</p>
	                </div>

	                 <div class="clearfix"></div>

	                <hr class="style1 ">

		<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post"  '.$formEnctype.'  >
			<div class="inputareas">
			    <div class="mainformleft contactright "> ';

					foreach ($easyForm->field as $varName => $arrValue) {
							$easyForm->displayField($varName, $successSent);
					}

		echo 	'</div>
				<div class="mainformright contactleft "> ';

						foreach ($easyForm2->field as $varName => $arrValue) {
							$easyForm2->displayField($varName, $successSent);
					}

		echo 	'</div>

		 		<div class="clearfix"></div>
                </div>

	            <!-- button  -->
	            <div class="submitbtn">
	                   <input name="submit" type="submit" id="submit" value="Submit" />
	            </div>
	            <!-- end button  -->

        </form>
		</div>';



	}
	else
	{
		echo "This is not the form!";
	}


?>
