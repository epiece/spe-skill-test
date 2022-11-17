<a href="index.php">Kembali</a>
<br>
<br>
<script>
function blueOcean(array1, array2){
	if(array1.length === 0){return []}
	if(array2.length === 0){return array1}
	
	let returnArray = [];
	array1.forEach(function included(element){
	if(!array2.includes(element)){returnArray.push(element)}
	});
	
	return returnArray;
}

document.write(blueOcean([1, 2, 3, 4, 6, 10], [1])+"<br>");
document.write(blueOcean([1, 5, 5, 5, 5, 3], [5]));
</script>