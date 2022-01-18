function calcZarada() {
  var e = document.getElementById("zarada-input").value;
  if (aaaaa(e)) {
    var t, d, n, E, l, m, r, o, u, I, a, y, c, U, i, z, g, A, B;
    13149.919,
      171120.97,
      15840,
      14340 / 0.701,
      (t =
        e < 15840
          ? "UNESITE VECU ZARADU"
          : (a = (e - 1124.2) / 0.701).toFixed(2)),
      (d = e < 15840 ? "UNESITE VECU ZARADU" : (y = a - 11242).toFixed(2)),
      (n = e < 15840 ? "UNESITE VECU ZARADU" : (c = 0.1 * y).toFixed(2)),
      (E = e < 15840 ? "UNESITE VECU ZARADU" : (U = 0.14 * a).toFixed(2)),
      (l = e < 15840 ? "UNESITE VECU ZARADU" : (i = 0.0515 * a).toFixed(2)),
      (m = e < 15840 ? "UNESITE VECU ZARADU" : (z = 0.0075 * a).toFixed(2)),
      (r = e < 15840 ? "UNESITE VECU ZARADU" : (g = 0.12 * a).toFixed(2)),
      (o = e < 15840 ? "UNESITE VECU ZARADU" : (A = 0.0515 * a).toFixed(2)),
      (u = e < 15840 ? "UNESITE VECU ZARADU" : (B = 0.0075 * a).toFixed(2)),
      (I =
        e < 15840
          ? "UNESITE VECU ZARADU"
          : (1 * e + c + U + i + z + g + A + B).toFixed(2)),
      (document.getElementById("zarada-res1").value = t),
      (document.getElementById("zarada-res1").readOnly = !0),
      (document.getElementById("zarada-res2").value = d),
      (document.getElementById("zarada-res2").readOnly = !0),
      (document.getElementById("zarada-res3").value = n),
      (document.getElementById("zarada-res3").readOnly = !0),
      (document.getElementById("zarada-res4").value = E),
      (document.getElementById("zarada-res4").readOnly = !0),
      (document.getElementById("zarada-res5").value = l),
      (document.getElementById("zarada-res5").readOnly = !0),
      (document.getElementById("zarada-res6").value = m),
      (document.getElementById("zarada-res6").readOnly = !0),
      (document.getElementById("zarada-res7").value = r),
      (document.getElementById("zarada-res7").readOnly = !0),
      (document.getElementById("zarada-res8").value = o),
      (document.getElementById("zarada-res8").readOnly = !0),
      (document.getElementById("zarada-res9").value = u),
      (document.getElementById("zarada-res9").readOnly = !0),
      (document.getElementById("zarada-res10").value = I),
      (document.getElementById("zarada-res10").readOnly = !0);
  } else alert("Proverite iznos koji ste uneli.");
}
function aaaaa(e) {
  var t,
    d = !0;
  for (i = 0; i < e.length && 1 == d; i++)
    (t = e.charAt(i)), -1 == "0123456789.".indexOf(t) && (d = !1);
  return d;
}
