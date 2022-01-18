function calcDividenda() {
  var e = document.getElementById("dividende-input").value;
  if (aaaaa(e)) {
    var t, n, i;
    12436.399,
      170407.45,
      0,
      -786.48 / 0.701,
      (t = e < 0 ? "UNESITE VECU CIFRU" : (i = 1.176471 * e).toFixed(2)),
      (n = e < 0 ? "UNESITE VECU CIFRU" : (0.15 * i).toFixed(2)),
      (document.getElementById("dividende-res1").value = t),
      (document.getElementById("dividende-res1").readOnly = !0),
      (document.getElementById("dividende-res2").value = n),
      (document.getElementById("dividende-res2").readOnly = !0);
  } else alert("Proverite iznos koji ste uneli.");
}
function aaaaa(e) {
  var t,
    n = !0;
  for (i = 0; i < e.length && 1 == n; i++)
    (t = e.charAt(i)), -1 == "0123456789.".indexOf(t) && (n = !1);
  return n;
}
