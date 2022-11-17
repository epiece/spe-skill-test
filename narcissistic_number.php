<a href="index.php">Kembali</a>
<br>
<input type="number" id="number">
<button onclick="cek_value()">Cek narcisstic number</button>
<script>
	function cek_value(){
		number = document.getElementById('number').value;
		alert(narcissistic(number));
	}
    // Javascript program for checking of
    // Narcissistic number
    
    function narcissistic(st)
    {
        let sum = 0;
        let length = st.length;
 
        // Traversing through the string
        for (let i = 0; i < length; i++)
        {
 
            // Since ascii value of numbers
            // starts from 48 so we subtract it from sum
            sum = sum + Math.pow(st[i] - '0', length);
        }
 
        // Converting string to integer
        let number = parseInt(st, 10);
 
        // Comparing number and sum
        if (number == sum)
            return true;
        else
            return false;
    }
</script>