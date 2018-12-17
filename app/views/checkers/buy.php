<?php require APPROOT.'/views/inc/headerCheck.php'; ?>
<div class="container" style="text-align: center">
		<h1> QR Code </h1>
		<br><br>

		<div id="qr" style="display: inline-block; width: 600px; height: 450px; border: 1px solid silver"></div>
		<br><br>

		<div style="padding:20px;" class="row">
        <div class="col">
        <button style="padding:10px;font-size:18px;" id="scan" class="btn btn-success btn-sm">start scaning</button>
        </div>
        <div class="col">
        <button style="padding:10px;font-size:18px;" id="stop" class="btn btn-warning btn-sm disabled">stop scanning</button>
        </div>
			
		
		</div>
        <div class="row">
			<div class="col-md-12">
				<code>Start Scanning</code> <span class="feedback"></span>
			</div>
		</div>
		<br><br>
	</div>

<?php require APPROOT.'/views/inc/footercamera.php'; ?>