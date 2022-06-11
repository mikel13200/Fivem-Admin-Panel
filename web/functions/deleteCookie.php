<?php
$redirect = $_GET['redirect'];
?>
<body onload="delete_cookie()"></body>
<script>
    function delete_cookie() {
		document.cookie = 'PHPSESSID=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        window.location = "<?php echo $redirect?>";
	}
</script>