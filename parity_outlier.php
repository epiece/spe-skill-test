<a href="index.php">Kembali</a>
<br>
<script>
var a = [2, 4, 0, 100, 4, 11, 2602, 36]
// Should return: 11 (the only odd number)
var b = [160, 3, 1719, 19, 11, 13, -21]
// Should return: 160 (the only even number)
var c = [11, 13, 15, 19, 9, 13, -21]
// Should return: false (all odd integer, no outlier)

function outlier(integers) {
  function par(i) { return i & 1; }

  let parity = par(integers[0]);
  if (parity != par(integers[1])) {
    if (parity == par(integers[2]))
      // [0] and [2] are the true parity so [1] is the outlier
      return integers[1];

    // [1] and [2] are the true parity so [0] is the outlier
    return integers[0];
  }
  return integers.find((i) => par(i) != parity);
}

document.write(outlier(a)+'<br>');
document.write(outlier(b)+'<br>');
if(outlier(c) == undefined){
	document.write(false);
}
</script>