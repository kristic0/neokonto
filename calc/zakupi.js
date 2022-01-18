function calcZakupi() {
  var e = document.getElementById("iznosnovca").value;
  if ("" == e) alert("Proverite iznos koji ste uneli.");
  else if (aaaaa(e)) {
    var t, n, r, d, o, i, l;
    12436.399,
      170407.45,
      -1,
      -787.48 / 0.701,
      (t = e < -1 ? "UNESITE VECU ZARADU" : (o = 1.176471 * e).toFixed(2)),
      (n = e < -1 ? "UNESITE VECU ZARADU" : (i = 0.25 * o).toFixed(2)),
      (r = e < -1 ? "UNESITE VECU ZARADU" : (l = o - i).toFixed(2)),
      (d = e < -1 ? "UNESITE VECU ZARADU" : (0.2 * l).toFixed(2)),
      (document.getElementById("zakup-res1").value = t),
      (document.getElementById("zakup-res1").readOnly = !0),
      (document.getElementById("zakup-res2").value = n),
      (document.getElementById("zakup-res2").readOnly = !0),
      (document.getElementById("zakup-res3").value = r),
      (document.getElementById("zakup-res3").readOnly = !0),
      (document.getElementById("zakup-res4").value = d),
      (document.getElementById("zakup-res4").readOnly = !0);
  } else alert("Proverite iznos koji ste uneli.");
}
function calcZakupi2() {
  var e,
    t,
    n,
    r,
    d,
    o,
    i,
    l = document.getElementById("iznosnovca2").value;
  "" == l
    ? alert("Proverite iznos koji ste uneli.")
    : aaaaa(l)
    ? ((minnetozar = -1),
      (e =
        l < minnetozar ? "UNESITE VECU ZARADU" : (d = 1.190476 * l).toFixed(2)),
      (t = l < minnetozar ? "UNESITE VECU ZARADU" : (o = 0.2 * d).toFixed(2)),
      (n = l < minnetozar ? "UNESITE VECU ZARADU" : (i = d - o).toFixed(2)),
      (r = l < minnetozar ? "UNESITE VECU ZARADU" : (0.2 * i).toFixed(2)),
      l < minnetozar || (0.26 * i).toFixed(2),
      (document.getElementById("zakup-res5").value = e),
      (document.getElementById("zakup-res5").readOnly = !0),
      (document.getElementById("zakup-res6").value = t),
      (document.getElementById("zakup-res6").readOnly = !0),
      (document.getElementById("zakup-res7").value = n),
      (document.getElementById("zakup-res7").readOnly = !0),
      (document.getElementById("zakup-res8").value = r),
      (document.getElementById("zakup-res8").readOnly = !0))
    : alert("Proverite iznos koji ste uneli.");
}
function aaaaa(e) {
  var t,
    n = !0;
  for (i = 0; i < e.length && 1 == n; i++)
    (t = e.charAt(i)), -1 == "0123456789.".indexOf(t) && (n = !1);
  return n;
}
