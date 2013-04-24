//Nu-Design.com  6/13/2012

$(document).ready(function() {
	function sendImage() {
		navigator.camera.getPicture(success, fail, {quality: 70, sourceType: Camera.PictureSourceType.CAMERA, destinationType: Camera.DestinationType.DATA_URL, encodingType: Camera.EncodingType.JPEG, targetWidth: 480, targetHeight: 640});
		function success(imageData) {
			$.post('http://www.nu-design.com/DWmob2/imgUpl.php', {image: imageData}, function(returnData) {
				$('#appfooter').html('AntiFest Rules!');
				$('#festimage').attr('src', returnData);
				navigator.notification.vibrate(500);
				navigator.notification.beep(1);
			});
		}
		function fail(message) { alert(message); }
	}
	$('#takephoto').click(function() { sendImage(); }); 
});