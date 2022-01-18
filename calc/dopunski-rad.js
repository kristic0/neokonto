function calcDopunskiRad() {
  var e = document.getElementById("dr-input").value;
  if (aaaaa(e)) {
    var t, n, d, r, l, E, m, o;
    12436.399,
      170407.45,
      1e3,
      304.5934379457917,
      (t = e < 1e3 ? "UNESITE VECU CIFRU" : (E = 1.5822785 * e).toFixed(2)),
      (n = e < 1e3 ? "UNESITE VECU CIFRU" : (m = 0.2 * E).toFixed(2)),
      (d = e < 1e3 ? "UNESITE VECU CIFRU" : (o = E - m).toFixed(2)),
      (r = e < 1e3 ? "UNESITE VECU CIFRU" : (0.2 * o).toFixed(2)),
      (l = e < 1e3 ? "UNESITE VECU CIFRU" : (0.26 * o).toFixed(2)),
      (document.getElementById("dopunski-rad-res1").value = t),
      (document.getElementById("dopunski-rad-res1").readOnly = !0),
      (document.getElementById("dopunski-rad-res2").value = n),
      (document.getElementById("dopunski-rad-res2").readOnly = !0),
      (document.getElementById("dopunski-rad-res3").value = d),
      (document.getElementById("dopunski-rad-res3").readOnly = !0),
      (document.getElementById("dopunski-rad-res4").value = r),
      (document.getElementById("dopunski-rad-res4").readOnly = !0),
      (document.getElementById("dopunski-rad-res5").value = l),
      (document.getElementById("dopunski-rad-res5").readOnly = !0);
  } else alert("Proverite iznos koji ste uneli.");
}
function aaaaa(e) {
  var t,
    n = !0;
  for (i = 0; i < e.length && 1 == n; i++)
    (t = e.charAt(i)), -1 == "0123456789.".indexOf(t) && (n = !1);
  return n;
}
