!(function () {
  "use strict";
  var n,
    e = {},
    t = {};
  function r(n) {
    var o = t[n];
    if (void 0 !== o) return o.exports;
    var i = (t[n] = { exports: {} });
    return e[n].call(i.exports, i, i.exports, r), i.exports;
  }
  (r.m = e),
    (n = []),
    (r.O = function (e, t, o, i) {
      if (!t) {
        var u = 1 / 0;
        for (a = 0; a < n.length; a++) {
          (t = n[a][0]), (o = n[a][1]), (i = n[a][2]);
          for (var f = !0, c = 0; c < t.length; c++)
            (!1 & i || u >= i) &&
            Object.keys(r.O).every(function (n) {
              return r.O[n](t[c]);
            })
              ? t.splice(c--, 1)
              : ((f = !1), i < u && (u = i));
          if (f) {
            n.splice(a--, 1);
            var l = o();
            void 0 !== l && (e = l);
          }
        }
        return e;
      }
      i = i || 0;
      for (var a = n.length; a > 0 && n[a - 1][2] > i; a--) n[a] = n[a - 1];
      n[a] = [t, o, i];
    }),
    (r.n = function (n) {
      var e =
        n && n.__esModule
          ? function () {
              return n.default;
            }
          : function () {
              return n;
            };
      return r.d(e, { a: e }), e;
    }),
    (r.d = function (n, e) {
      for (var t in e)
        r.o(e, t) &&
          !r.o(n, t) &&
          Object.defineProperty(n, t, { enumerable: !0, get: e[t] });
    }),
    (r.g = (function () {
      if ("object" == typeof globalThis) return globalThis;
      try {
        return this || new Function("return this")();
      } catch (n) {
        if ("object" == typeof window) return window;
      }
    })()),
    (r.o = function (n, e) {
      return Object.prototype.hasOwnProperty.call(n, e);
    }),
    (r.r = function (n) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(n, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(n, "__esModule", { value: !0 });
    }),
    (r.p = "/typo3conf/ext/culture_portal/Resources/Public/Build/"),
    (function () {
      var n = { 666: 0 };
      r.O.j = function (e) {
        return 0 === n[e];
      };
      var e = function (e, t) {
          var o,
            i,
            u = t[0],
            f = t[1],
            c = t[2],
            l = 0;
          if (
            u.some(function (e) {
              return 0 !== n[e];
            })
          ) {
            for (o in f) r.o(f, o) && (r.m[o] = f[o]);
            if (c) var a = c(r);
          }
          for (e && e(t); l < u.length; l++)
            (i = u[l]), r.o(n, i) && n[i] && n[i][0](), (n[u[l]] = 0);
          return r.O(a);
        },
        t = (self.webpackChunkdigicademy_typo3_npm_install =
          self.webpackChunkdigicademy_typo3_npm_install || []);
      t.forEach(e.bind(null, 0)), (t.push = e.bind(null, t.push.bind(t)));
    })();
})();
