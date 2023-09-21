<?php
	include_once '../header.php';
	include_once '../google_analitics.php';
	echo $google_analitics;
	?>
	<meta charset="utf-8">
	<title>6 Minute Walk Test Calculator</title>
    <link rel="stylesheet" href="normalize.min.css">
    <style type="text/css" media="screen">
        .srx-title {
            font-size: 30px !important;
        }
        .wt-sect {
            margin: 0 auto;
        }
        .box {
        	display: none;
        }
        .wt-left {
            float: left;
            border: 4px dotted #5a5a5a;
            padding: 12px;
            margin: 0px 30px 0px 0px;
            margin-left: 2% !important;
        }
        .wt-right {
            float: left;
            min-height: 166px;
            box-shadow: 0px 0px 6px #4e4d4d8f;
            margin: 0px 0px 0px 26px;
            padding: 12px;
        }
        .srx-tt-m h1, .srx-tt-m p{
        	margin-left: -2% !important;
        }
        .srx-tool-container select{
        	margin-left: -10% !important;
        }
        h4.text-warning.text-center {
            padding: 8px;
            border-bottom: 1px solid #6663;
        }
        select.form-control {
            width: 80%;
            margin: 0 auto;
        }
        label{
                display: block;
        }
        .wt-sect.box .wt-left, .wt-sect.box .wt-right {
		    float: left !important;
		    min-height: 245px;
		}
		.srx-tool-container select {
		    padding: 6px 6px;
		    border-radius: 3px;
		}
		.history p {
			color: #000;
		}
		@media screen and (max-width: 2200px){
			.srx-txt{
				margin-left: 3% !important;
			}
			.mb-3, .my-3{
				margin-left: -3% !important;
			}
		}
		@media screen and (max-width: 1100px){
			.wt-right{
				height: 100% !important;
			}
			.mb-3, .my-3{
				margin-left: -5% !important;
                margin-right: 5% !important;
			}
			.wt-left{
				margin-left: 18px !important;
			}
			.srx-tt-m h1, .srx-tt-m p{
				margin-left: -18px !important;
			}
		}
		@media screen and (max-width: 1099px) and (min-width: 992px){
			.srx-tt-m h1, .srx-tt-m p{
				margin-left: -10px !important;
			}
			.wt-left{
				margin-left: -22% !important;
			}
			.srx-txt{
				margin-left: 3% !important;
			}
			.mb-3, .my-3{
				margin-left: 0% !important; 
                margin-right: 0% !important;
			}
		}
		@media screen and (max-width: 768px){
			.srx-tt-m h1, .srx-tt-m p{
				margin-left: -12% !important;
			}
			.wt-left{
				margin-left: -5% !important;
			}
			.formula-right{
                    margin-left: -15px !important;
            }
           .srx-txt{
				margin-left: -4% !important;
			} 
			.srx-tool-container select{
				margin-left: -24% !important;
			}
		}
		@media screen and (max-width: 767px) and (min-width: 601px){
			.srx-tt-m h1, .srx-tt-m p{
				margin-left: - 9% !important;
			}
			.wt-left{
                height: 50% !important;
                width: 92%;
                margin-left: -8px !important;
            }
            .wt-right{
                margin-left: -8px !important;
                margin-top: 15px !important;
                width: 91.5%;
                height: 50% !important;   
            }
            .srx-txt{
                padding-left: 25px !important;
            }
            .srx-content-align{
            	padding-left: 25px !important;
            }
            .mb-3, .my-3{
            	margin-left: -2% !important;
            	margin-right: 0 !important;
            }
            .btn{
				display: block !important;
				margin-top: 5px;
			}
		}
		
		@media only screen and (max-width: 560px) {
			.wt-right {
			    margin: 12px 6px;
			}
			.srx-copy i {
		    	font-size: 36px;
		    	bottom: 14%;
			}
			.srx-tt-m h1, .srx-tt-m p{
				margin-left: -18% !important;
			}
			.mb-3, .my-3{
				margin-left: -12% !important;
				margin-right: 0 !important;
			}
		}
    </style>
<script>
window.console = window.console || function(t) {};
</script>
<script>

</script>
</head>
<body translate="no">
	<div class="">
        <?php include_once '../side_bar.php'; ?>
    	<div class="srx-tool-container">
        	<div class="container">
            	<div class="row mt-3">
                	<div class="col-lg-12 srx-tt-m text-center">
                    	<h1 class="srx-title text-center" id="unit-con-title">6 Minute Walk Test Calculator</h1>
                    	<p class="font-weight-normal text-dark wc-text"></p>
                    	<select class="sel-opt mb-2">
                    		<option value="first">Men</option>
                    		<option value="sec">Women</option>
                    		<!-- <option value="third" selected>Flow Rate</option> -->
                    	</select>
                	</div>
                	<div class="col-lg-8 text-center wt-sect box first">
						<div class="col-md-5 wt-left srx-wt-left">
							<h4 class="text-warning text-center srx-input-title">Input</h4>
							<form name="form1">
								<div class="col-md-12">
									<div class="form-group">
										<input id="age" placeholder="Age" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_test_men_cal()">
									</div>
									<div class="form-group">
										<input id="ht" placeholder="Height cm" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_test_men_cal()">
									</div>
									<div class="form-group">
										<input id="we" placeholder="Weight kg" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_test_men_cal()">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-5 wt-right srx-wt-right">
							<h4 class="text-warning text-center srx-input-title">Output</h4>
							<div class="col-md-12 flex">
								<div class="area">6MWD in Healthy Person</div>
								<div class="walk_test_men_cal" >0</div>
							</div>
						</div>
					</div>
					<div class="box first">
						<div class="formula col-md-11 mt-4 d-flex">
							<div class="col-md-6 formula-left float-left">
								<?php if ($_SERVER['REMOTE_ADDR'] !='198.54.125.196') {
                                include('../common-sample/left_box.php');
                            } 
                            else {
                            include('../common/left_box.php');
                            }
                            ?>
							</div>
							<div class="col-md-6 mt-4 mb-4 formula-right float-left">
								<h4 class="text-dark text-left">Formula</h4>
								<div class="col-md-12 text-center">
									<img src="./img/6mint.png">
								</div>
								<!-- <div class="mt-4">
									<ul type="none" class="p-0">
										<li><b>0.636</b> = Constant</li>
										<li><b>DC</b> = Direct Current</li>
										<li><b>AC</b> = Alternating Current</li>
									</ul>
								</div> -->
							</div>
						</div>
						<div class="content history col-lg-11 mt-4 mb-4 srx-txt">
							<h4 class="col-md-12 mt-4 mb-2 p-0"><i class="fas fa-info-circle text-warning mr-2"></i> Defination / Uses</h4>
							<p>A 6 minute walk test is a submaximal exercise test that measures the distance walked over the span of 6 twinkles. This is a quick and affordable measure of physical function, as it reflects the capacity to perform everyday conditioning. It can be used to assess the functional status of cases, their response to treatment, and their prognostic. A case's 6 minute walk distance is reduced by several types of conditions, including obstructive lung complaint, heart failure, arthritis, and neuromuscular complaint. </p>
							<p>Distances walked by healthy grown-ups may vary significantly. In 1998, Enright and associates created gender-specific equations to read walking distance in healthy grown-ups. To do that, they took measures from 117 healthy men and 173 healthy women, aged 40 to 80 times.</p>
							
						</div>
					</div>
                	<div class="col-lg-8 text-center wt-sect box sec">
						<div class="col-md-5 wt-left srx-wt-left">
							<h4 class="text-warning text-center srx-input-title">Input</h4>
							<form name="form1">
								<div class="col-md-12">
									<div class="form-group">
										<input id="age_w" placeholder="Age" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_w_cal()">
									</div>
									<div class="form-group">
										<input id="ht_w" placeholder="Height cm" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_w_cal()">
									</div>
									<div class="form-group">
										<input id="we_w" placeholder="Weight kg" class="form-control pr-0 srx-bg-yellow" type="number" oninput="walk_w_cal()">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-5 wt-right srx-wt-right">
							<h4 class="text-warning text-center srx-input-title">Output</h4>
							<div class="col-md-12 flex">
								<div class="area">6MWD in Healthy Person</div>
								<div class="walk_w_cal" >0</div>
							</div>
						</div>
					</div>
					<div class="box sec">
						<div class="formula col-md-11 mt-4 d-flex">
							<div class="col-md-6 formula-left float-left">
								<?php if ($_SERVER['REMOTE_ADDR'] !='198.54.125.196') {
                                include('../common-sample/left_box.php');
                            } 
                            else {
                            include('../common/left_box.php');
                            }
                            ?>
							</div>
							<div class="col-md-6 mt-4 mb-4 formula-right float-left">
								<h4 class="text-dark text-left">Formula</h4>
								<div class="col-md-12 text-center">
									<img src="./img/6mint.png">
								</div>
								<!-- <div class="mt-4">
									<ul type="none" class="p-0">
										<li><b>0.636</b> = Constant</li>
										<li><b>DC</b> = Direct Current</li>
										<li><b>AC</b> = Alternating Current</li>
									</ul>
								</div> -->
							</div>
						</div>
						<div class="content history col-lg-11 mt-4 mb-4 srx-txt">
							<h4 class="col-md-12 mt-4 mb-2 p-0"><i class="fas fa-info-circle text-warning mr-2"></i> Defination / Uses</h4>
							<p>Electrical current that flows in a single direction is known as direct current (DC).</p>
							<p>This calculator is a combo of an ac to dc and a dc to ac converter. Current adaptors for electric supply are known as AC and DC. In contrast to direct current, an alternating current (AC) is an electrical current whose magnitude and direction change cyclically (DC). Direct Current (DC) is always in the same direction.</p>
							<p>Direct current (DC) is used to charge batteries and is also the power supply in practically all electronic systems. Today, nearly all of the electric power distributed throughout the world is Alternating Current (AC). By utilising the formula, the sophisticated online AC to DC Converter calculates and converts electric currents from Alternating Current (AC) to Direct Current (DC).</p>
						</div>
					</div>
        		</div>
        		<div class="row">
        			<div class="row">
        			<div class="content col-lg-11 mt-4 srx-txt">
        				<!-- <h4>How to use AC to DC converter calculator</h4>
	        			<p>There is no long procedure to to convert AC to DC or visa versa. This is a single step mechanism. You just have to put AC or DC value in form field according to requirement. Get the accurate answer in less than a single second. Hertz (Hz) used as SI unit for AC and DC. This online AC to DC converter is a free tool. We provide our all wee tools absolutely free for our users forever. No sign-up, registration OR Captcha is required to use this tool.
	        			</p> -->
	        		</div>
        		</div>
        		</div>
			</div>
		</div>
	</div>
<?php include_once '../footer.php'; ?>
	<script>
		function walk_test_men_cal(){

			var age = parseFloat(document.getElementById("age").value);
			var ht = parseFloat(document.getElementById("ht").value);
			var we = parseFloat(document.getElementById("we").value);

			if ( !(isNaN(age)) && !(isNaN(ht)) && !(isNaN(we)) )
			{
				var answere = (((7.57) * (ht)) - ((5.02) * (age)) - ((1.76) * (we)) - (309)).toFixed(2);
				 $('.walk_test_men_cal').html("" + (answere) + " m");
			}
		}
		function walk_w_cal(){

			var age_w = parseFloat(document.getElementById("age_w").value);
			var ht_w = parseFloat(document.getElementById("ht_w").value);
			var we_w = parseFloat(document.getElementById("we_w").value);

			if ( !(isNaN(age_w)) && !(isNaN(ht_w)) && !(isNaN(we_w)) )
			{
				var answere = (((2.11) * (ht_w)) - ((5.78) * (age_w)) - ((2.29) * (we_w)) + (667)).toFixed(2);
				 $('.walk_w_cal').html("" + (answere) + " m");
			}
		}

		//      SHOW SINGL BOX TYPE AT A TIME

		$(document).ready(function(){
		    $("select").change(function(){
		        $(this).find("option:selected").each(function(){
		            var optionValue = $(this).attr("value");
		            if(optionValue){
		                $(".box").not("." + optionValue).hide();
		                $("." + optionValue).show();
		            } else{
		                $(".box").hide();
		            }
		        });
		    }).change();
		});
	</script>

</body>
</html>
