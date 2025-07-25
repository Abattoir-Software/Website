<?php
include_once 'includes/content/media.php';
include_once 'includes/altcha-autoload.php';
include_once 'includes/altcha-settings.php';

$altcha= new AltchaOrg\Altcha\Altcha($captcha_key);
$options = new AltchaOrg\Altcha\ChallengeOptions(
	maxNumber: 50000, // the maximum random number
//	expires: (new \DateTimeImmutable())->add(new \DateInterval('PT10S')),
);
$challenge = $altcha->createChallenge($options);

$pageTitle = "Contact";
head_content($pageTitle);
?>
				<p class="lead">Have a question or want further information?</p>
				<p>Fill in the short form and we will get back to you as soon as possible.</p>
				<br/>
				<div class="panel panel-default well">
					<div class="panel-body">
						<form class="form-horizontal" method="post" id="contact" action="contact_response.php">
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
										<input type="text" class="form-control required" id="name" placeholder="Enter name*" name="name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
										<input type="text" class="form-control required" id="email" placeholder="Enter email*" name="email">
									</div>
								</div>
								<div class="col-sm-6"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
										<input type="text" class="form-control" id="company" placeholder="Enter company" name="company">
									</div>
								</div>
								<div class="col-sm-6"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></div>
										<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
									</div>
								</div>
								<div class="col-sm-6"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<div class="input-group-addon"> <i class="glyphicon glyphicon-comment"></i></div>
										<textarea class="form-control" name="message" id="message" rows="5" style="width: 99.9%" placeholder="Enter your message here*"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group" id="recaptchaArea">
								<label for="captcha" class="form-label col-form-label-md">Are you human?</label>
								<script async defer src="assets/scripts/altcha.min.js" type="module"></script>
								<altcha-widget challengejson='<?php echo json_encode($challenge); ?>'></altcha-widget>
							</div>
							<div class="row" id="noticeArea"></div>
							<div class="form-group">
								<div class="col-sm-12">
									<button id="submit" name="submitButton" type="submit" class="btn btn-default btn-info">
										<i class="glyphicon glyphicon-send"> </i>&nbsp;&nbsp; Send
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br/>
				<h3>Mailing Address</h3>
				<hr/>
				<address>
					<b>Abattoir Software LLC</b><br />
					16 Albatross Dr<br />
					Howell, NJ 07731-2869<br />
				</address>
<?php end_content(""."\t".'<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>'."\n\t".'<script src="assets/scripts/contact_form.js"></script>');?>
