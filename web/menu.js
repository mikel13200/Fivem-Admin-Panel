<script>
console.log("MENU")
var url = "http://yourapi.com/api/getMenuPermissions";

var xhr = new XMLHttpRequest();
xhr.open("GET", url);

xhr.onreadystatechange = function () {
   if (xhr.readyState === 4) {
		console.log(xhr.responseText)
		const json = JSON.parse(xhr.responseText);
		console.log(json)
		if(!json.BanList){
			document.getElementById('banList').style.display = 'none';
		}
   }};

xhr.send();
</script>
