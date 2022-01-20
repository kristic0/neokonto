eval(
  (function (p, a, c, k, e, r) {
    e = function (c) {
      return (
        (c < a ? "" : e(parseInt(c / a))) +
        ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
      );
    };
    if (!"".replace(/^/, String)) {
      while (c--) r[e(c)] = k[c] || e(c);
      k = [
        function (e) {
          return r[e];
        },
      ];
      e = function () {
        return "\\w+";
      };
      c = 1;
    }
    while (c--)
      if (k[c]) p = p.replace(new RegExp("\\b" + e(c) + "\\b", "g"), k[c]);
    return p;
  })(
    '12 j=[{e:"k",b:0},{e:"D",b:0},{e:"t",b:0},{e:"u",b:0},{e:"v",b:0},{e:"z",b:0},{e:"c",b:0},{e:"w",b:0},{e:"x",b:0},{e:"A",b:0},{e:"f",b:0},],13=0.15,16=0.17,18=0,19=0.1a,l=0.1,m=0.14,p=0.P,q=0.1b,r=0.11,s=0.P,y=1c,h=1d,i=1e,Q=h-(h-y)*l-h*m-h*p-h*q,R=i-(i-y)*l-i*m-i*p-i*q,G=h*(r+s),H=i*(r+s),S=h+h*r+h*s,T=i+i*r+i*s;B k=0,D=0,t=0,u=0,v=0,z=0,c=0,w=0,x=0,A=0,f=0,1f=0,1g=0,1h=0,1i=0;I(B a J j){B o=K.L(a.e);o.U("1j",()=>V(o)),o.U("1k",()=>W(o))}C V(a){1l("k"===a.e||"c"===a.e||"f"===a.e)I(B a J j)(a.b=0),M()}C W(a){1m(a.e){N"k":(k=O(a.b)),(c=k<Q?(k-y*l+h*(m+p+q))/(1-l):k>R?(k-y*l+i*(m+p+q))/(1-l):(k-y*l)/(1-(l+m+p+q))),E(),(f=c+A);X;N"c":(c=O(a.b)),E(),(k=c-z),(f=c+A);X;N"f":f=O(a.b);B o=(F*G)/(f-G),n=(F*H)/(f-H);(c=f<S?f-(f*o)/(F+o):f>T?f-(f*n)/(F+n):f/(1+r+s)),E(),(k=c-z)}Y()}C E(){c<h?((t=h*m),(u=h*p),(v=h*q),(w=h*r),(x=h*s)):c>i?((t=i*m),(u=i*p),(v=i*q),(w=i*r),(x=i*s)):((t=c*m),(u=c*p),(v=c*q),(w=c*r),(x=c*s)),(z=(D=(c-y)*l)+t+u+v),(A=w+x)}C Y(){(j[0].b=k),(j[1].b=D),(j[2].b=t),(j[3].b=u),(j[4].b=v),(j[5].b=z),(j[6].b=c),(j[7].b=w),(j[8].b=x),(j[9].b=A),(j[10].b=f),M()}C M(){I(B a J j)0===a.b?(K.L(a.e).b=""):(K.L(a.e).b=Z(1n.1o(a.b)))}C Z(a){1p a.1q().1r(/(\\d)(?=(\\d{3})+(?!\\d))/g,"$1.")+" 1s."}',
    62,
    91,
    "|||||||||||value|bruto1||id|bruto2||najnizaOsnovica|najvisaOsnovica|calculatorInputs|netoZarada|poreskaStopa|pio|||zdravstvo|nezaposlenost|zaradePio|zaradeZdravstvo|doprinosZaPio1|doprinosZaZdravstvo1|doprinosZaNezaposlenost|doprinosZaPio2|doprinosZaZdravstvo2|neoporezivi|poreziDoprinosi|doprinosiNaZarade|let|function|porez|calculateContributions|100|doprinosiMin|doprinosiMax|for|of|document|getElementById|renderInputValues|case|parseInt|0515|netoMin|netoMax|bruto2Min|bruto2Max|addEventListener|handleClick|handleChange|break|updateCalculatorInputValues|formatNumber|||const|brutoProcenat||478|doprinosiProcenat|299|zaradeNezaposlenost|zaradeProcenat|179|0075|19300|30880|441140|subvencije65|trosakPoslodavca65|subvencije75|trosakPoslodavca75|click|change|if|switch|Math|round|return|toString|replace|din".split(
      "|"
    ),
    0,
    {}
  )
);
