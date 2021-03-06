<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

                        <div class="row header">
                            <div class="cell">
                                Full Name
                            </div>
                            <div class="cell">
                                Age
                            </div>
                            <div class="cell">
                                Job
                            </div>
                            <div class="cell">
                                Location
                            </div>
                        </div>
                        <?if(!empty($table)):?>
                            <?foreach ($table as $row):?>
                                <div class="row">
                                    <div class="cell">
                                        <?=$row['name']?>
                                    </div>
                                    <div class="cell">
                                        <?=$row['age']?>
                                    </div>
                                    <div class="cell">
                                        <?=$row['job_title']?>
                                    </div>
                                    <div class="cell">
                                        <?=$row['location']?>
                                    </div>
                                </div>
                            <?endforeach;?>
                        <?else:?>
                            <div class="row">
                                <div class="cell" data-title="Full Name">

                                </div>
                                <div class="cell" data-title="Age">
                                    no data
                                </div>
                                <div class="cell" data-title="Job Title">

                                </div>
                                <div class="cell" data-title="Location">

                                </div>
                            </div>
                        <?endif;?>

						<!--<div class="row">
							<div class="cell" data-title="Full Name">
								Joseph Smith
							</div>
							<div class="cell" data-title="Age">
								27
							</div>
							<div class="cell" data-title="Job Title">
								Project Manager
							</div>
							<div class="cell" data-title="Location">
								Somerville, MA
							</div>
						</div>-->

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="<?=ROOT?>/app/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=ROOT?>/app/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=ROOT?>/app/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=ROOT?>/app/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=ROOT?>/app/js/main.js"></script>

</body>
</html>