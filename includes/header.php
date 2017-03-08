
 <div id="animatedModal">
 <div class="card">

	<div class="front">
		<div class="wrap">
	        <div class="close-animatedModal close-btn">
	          X
	        </div>

	        <div class="modal-content">

			    <div class="modallogoimg">
			    <img src="img/elitelogonobottom.svg" alt="elite logo">
			    </div>

			    <div class="modalnav">
			        <nav class="navcont">
			            <ul class="accordion">

			                <li><a href="index.php">Home</a></li>
			                <li><a href="about.php">About us</a></li>
			                <li><a href="client.php">Clients</a></li>
			                <li>
			                	<a href="javascript:void(0)" class="js-accordion-trigger"> Services <span data-text-swap="−" data-text-original="X" class="mobile-swap">X</span></a>
								  <ul class="submenu">
								      <li>
								        <a href="services.php">Service Overview</a>
								      </li>
								      <li>
								        <a href="cleaning.php">Cleaning</a>
								      </li>
								      <li>
								        <a href="load-testing.php">Load Testing</a>
								      </li>
				                      <li>
				                       <a href="winch-testing.php">Winch Testing</a>
				                     </li>
								      <li>
								        <a href="installation-removal.php">Installation &amp; Removal</a>
								      </li>
								      <li>
								        <a href="restore-repair.php">Restore &amp; Repair</a>
								      </li>
								      <li>
								        <a href="secure-storage.php">Secure Storage</a>
								      </li>
								  </ul>
			                </li>
			                <li><span class="flip-btn">Contact us</span></li>

			            </ul>
			        </nav>

			        <a class="tel" href="tel:+442084429119">Tel : 0208 442 9119</a>
			        <br>
			        <a class="email" href="mailto:&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#101;&#108;&#105;&#116;&#101;&#99;&#104;&#97;&#110;&#100;&#101;&#108;&#105;&#101;&#114;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#101;&#108;&#105;&#116;&#101;&#99;&#104;&#97;&#110;&#100;&#101;&#108;&#105;&#101;&#114;&#46;&#99;&#111;&#109;</a>
			        <address>
			        Elite Chandelier Services Ltd, <br>
			        3rd Floor,
					207 Regent Street,
					London,
					W1B 3HH
					</address>

				</div>
			</div>
		</div>
	</div>


	<div class="back">
		<a href="#top"></a>
		<div class="modal-content">

			<div class="contactformwrap">

			<div class="close-animatedModal close-btn">
	          X
	        </div>

			<?php include 'easy_contact/inc/form.php'; ?>

			</div>
        </div>

	</div>

</div>
</div>

<!-------------------------------------------- start THE ASIDE BAR  ------- The navigation sidebar  -------------------------------->

 <aside>
	 <div class="ie9">
        <img src="img/elite-logo.svg" alt="elite logo">
        <nav class="navcont">
            <ul class="accordion">

                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="client.php">Clients</a></li>
                <li>
                	<a href="javascript:void(0)" class="js-accordion-trigger">Services <span data-text-swap="−" data-text-original="X" class="swap">X</span></a>
					  <ul class="submenu">
					      <li>
					        <a href="services.php">Service Overview</a>
					      </li>
					      <li>
					        <a href="cleaning.php">Cleaning</a>
					      </li>
					      <li>
					        <a href="load-testing.php">Load testing</a>
					      </li>
			                <li>
			                 <a href="winch-testing.php">Winch Testing</a>
			               </li>
					      <li>
					        <a href="installation-removal.php">Installation &amp; Removal</a>
					      </li>
					      <li>
					        <a href="restore-repair.php">Restore &amp; Repair</a>
					      </li>
					      <li>
					        <a href="secure-storage.php">Secure Storage</a>
					      </li>
					  </ul>
                </li>
                <?php
					if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== FALSE)
					{
						echo '<li><a href="contact.php"><span>Contact us</span></a></li>';
					
					} else {
						echo '<li><a id="menubuttonmodal" href="#animatedModal" class="flip-btn">Contact us</a></li>';
					}
					
					?>
            </ul>
        </nav>


        <a class="tel" href="tel:+442084429119">Tel : 0208 442 9119</a>
        <br>
        <a class="email" href="mailto:&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#101;&#108;&#105;&#116;&#101;&#99;&#104;&#97;&#110;&#100;&#101;&#108;&#105;&#101;&#114;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#101;&#108;&#105;&#116;&#101;&#99;&#104;&#97;&#110;&#100;&#101;&#108;&#105;&#101;&#114;&#46;&#99;&#111;&#109;</a>
        <address>
        Elite Chandelier Services Ltd, <br>
        3rd Floor,
		207 Regent Street,
		London,
		W1B 3HH
		</address>
	 </div>
    </aside>
    <!--End the navigation sidebar-->
    <script src="js/customjs.js"></script>
