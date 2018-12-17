</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT; ?>/javascript/main.js"></script>
<script src="<?php echo URLROOT; ?>/javascript/html5-qrcode.js"></script>
<script src="<?php echo URLROOT; ?>/javascript/jsqrcode-combined.js"></script>
<script>
$(document).ready(function() {
	$("#scan").on('click', function() {
		$("code").html('scanning');
		$('#qr').html5_qrcode(function(data){
		         // do something when code is read
		         $(".feedback").html('code scanned as: ' +data);
		    },
		    function(error){
		        //show read errors 
		        $(".feedback").html('Unable to scan the code! Error: ' +error)
		    }, function(videoError){
		        //the video stream could be opened
		        $(".feedback").html('Video error');
		    }
		);

		$("#scan").addClass('disabled');
		$("#stop").removeClass('disabled');
		$("#change").removeClass('disabled');
	});
	$("#stop").on('click', function() {
		$("#qr").html5_qrcode_stop();
		$("code").html('Start Scanning');

		$("#scan").removeClass('disabled');
		$("#stop").addClass('disabled');
		$("#change").addClass('disabled');
	});
	$("#change").on('click', function() {
		$("#qr").html5_qrcode_changeCamera();

		$("#scan").addClass('disabled');
		$("#stop").removeClass('disabled');
	});
});


$(document).ready(function() {
	$("#scan").on('click', function() {
		$("code").html('scanning');
		$('#qr').html5_qrcode(function(data){
		         // do something when code is read
		         $(".feedback").html('code scanned as: ' +data);
		    }
		);
	});
});
</script>
</body>
</html>