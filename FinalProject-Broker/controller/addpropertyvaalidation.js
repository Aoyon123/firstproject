<script>
	function validate() {
		var x = document.getElementById('username').value;
		var y = document.getElementById('propertytype').value;
		var z = document.getElementById('propertyprice').value;
		var a = document.getElementById('propertylocation').value;
		
		
		if(x == "") {
			document.getElementById('errorMsg').innerHTML = "Username is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(y == "") {
			document.getElementById('errorMsg').innerHTML = "Propertytype is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(z == "") {
			document.getElementById('errorMsg').innerHTML = "propertyprice is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;


       if(a == "") {
			document.getElementById('errorMsg').innerHTML = "propertylocation is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		return true;
	}
</script>