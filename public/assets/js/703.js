(self.webpackChunkdigicademy_typo3_npm_install =
  self.webpackChunkdigicademy_typo3_npm_install || []).push([
  [703],
  {
    9662: function (t, r, n) {
      var e = n(7854),
        o = n(614),
        i = n(6330),
        u = e.TypeError;
      t.exports = function (t) {
        if (o(t)) return t;
        throw u(i(t) + " is not a function");
      };
    },
    6077: function (t, r, n) {
      var e = n(7854),
        o = n(614),
        i = e.String,
        u = e.TypeError;
      t.exports = function (t) {
        if ("object" == typeof t || o(t)) return t;
        throw u("Can't set " + i(t) + " as a prototype");
      };
    },
    1223: function (t, r, n) {
      var e = n(5112),
        o = n(30),
        i = n(3070),
        u = e("unscopables"),
        c = Array.prototype;
      null == c[u] && i.f(c, u, { configurable: !0, value: o(null) }),
        (t.exports = function (t) {
          c[u][t] = !0;
        });
    },
    9670: function (t, r, n) {
      var e = n(7854),
        o = n(111),
        i = e.String,
        u = e.TypeError;
      t.exports = function (t) {
        if (o(t)) return t;
        throw u(i(t) + " is not an object");
      };
    },
    8533: function (t, r, n) {
      "use strict";
      var e = n(2092).forEach,
        o = n(9341)("forEach");
      t.exports = o
        ? [].forEach
        : function (t) {
            return e(this, t, arguments.length > 1 ? arguments[1] : void 0);
          };
    },
    1318: function (t, r, n) {
      var e = n(5656),
        o = n(1400),
        i = n(6244),
        u = function (t) {
          return function (r, n, u) {
            var c,
              a = e(r),
              f = i(a),
              s = o(u, f);
            if (t && n != n) {
              for (; f > s; ) if ((c = a[s++]) != c) return !0;
            } else
              for (; f > s; s++)
                if ((t || s in a) && a[s] === n) return t || s || 0;
            return !t && -1;
          };
        };
      t.exports = { includes: u(!0), indexOf: u(!1) };
    },
    2092: function (t, r, n) {
      var e = n(9974),
        o = n(1702),
        i = n(8361),
        u = n(7908),
        c = n(6244),
        a = n(5417),
        f = o([].push),
        s = function (t) {
          var r = 1 == t,
            n = 2 == t,
            o = 3 == t,
            s = 4 == t,
            p = 6 == t,
            v = 7 == t,
            l = 5 == t || p;
          return function (y, h, g, b) {
            for (
              var x,
                d,
                m = u(y),
                O = i(m),
                S = e(h, g),
                w = c(O),
                j = 0,
                P = b || a,
                A = r ? P(y, w) : n || v ? P(y, 0) : void 0;
              w > j;
              j++
            )
              if ((l || j in O) && ((d = S((x = O[j]), j, m)), t))
                if (r) A[j] = d;
                else if (d)
                  switch (t) {
                    case 3:
                      return !0;
                    case 5:
                      return x;
                    case 6:
                      return j;
                    case 2:
                      f(A, x);
                  }
                else
                  switch (t) {
                    case 4:
                      return !1;
                    case 7:
                      f(A, x);
                  }
            return p ? -1 : o || s ? s : A;
          };
        };
      t.exports = {
        forEach: s(0),
        map: s(1),
        filter: s(2),
        some: s(3),
        every: s(4),
        find: s(5),
        findIndex: s(6),
        filterReject: s(7),
      };
    },
    1194: function (t, r, n) {
      var e = n(7293),
        o = n(5112),
        i = n(7392),
        u = o("species");
      t.exports = function (t) {
        return (
          i >= 51 ||
          !e(function () {
            var r = [];
            return (
              ((r.constructor = {})[u] = function () {
                return { foo: 1 };
              }),
              1 !== r[t](Boolean).foo
            );
          })
        );
      };
    },
    9341: function (t, r, n) {
      "use strict";
      var e = n(7293);
      t.exports = function (t, r) {
        var n = [][t];
        return (
          !!n &&
          e(function () {
            n.call(
              null,
              r ||
                function () {
                  throw 1;
                },
              1
            );
          })
        );
      };
    },
    1589: function (t, r, n) {
      var e = n(7854),
        o = n(1400),
        i = n(6244),
        u = n(6135),
        c = e.Array,
        a = Math.max;
      t.exports = function (t, r, n) {
        for (
          var e = i(t),
            f = o(r, e),
            s = o(void 0 === n ? e : n, e),
            p = c(a(s - f, 0)),
            v = 0;
          f < s;
          f++, v++
        )
          u(p, v, t[f]);
        return (p.length = v), p;
      };
    },
    7475: function (t, r, n) {
      var e = n(7854),
        o = n(3157),
        i = n(4411),
        u = n(111),
        c = n(5112)("species"),
        a = e.Array;
      t.exports = function (t) {
        var r;
        return (
          o(t) &&
            ((r = t.constructor),
            ((i(r) && (r === a || o(r.prototype))) ||
              (u(r) && null === (r = r[c]))) &&
              (r = void 0)),
          void 0 === r ? a : r
        );
      };
    },
    5417: function (t, r, n) {
      var e = n(7475);
      t.exports = function (t, r) {
        return new (e(t))(0 === r ? 0 : r);
      };
    },
    7072: function (t, r, n) {
      var e = n(5112)("iterator"),
        o = !1;
      try {
        var i = 0,
          u = {
            next: function () {
              return { done: !!i++ };
            },
            return: function () {
              o = !0;
            },
          };
        (u[e] = function () {
          return this;
        }),
          Array.from(u, function () {
            throw 2;
          });
      } catch (t) {}
      t.exports = function (t, r) {
        if (!r && !o) return !1;
        var n = !1;
        try {
          var i = {};
          (i[e] = function () {
            return {
              next: function () {
                return { done: (n = !0) };
              },
            };
          }),
            t(i);
        } catch (t) {}
        return n;
      };
    },
    4326: function (t, r, n) {
      var e = n(1702),
        o = e({}.toString),
        i = e("".slice);
      t.exports = function (t) {
        return i(o(t), 8, -1);
      };
    },
    648: function (t, r, n) {
      var e = n(7854),
        o = n(1694),
        i = n(614),
        u = n(4326),
        c = n(5112)("toStringTag"),
        a = e.Object,
        f =
          "Arguments" ==
          u(
            (function () {
              return arguments;
            })()
          );
      t.exports = o
        ? u
        : function (t) {
            var r, n, e;
            return void 0 === t
              ? "Undefined"
              : null === t
              ? "Null"
              : "string" ==
                typeof (n = (function (t, r) {
                  try {
                    return t[r];
                  } catch (t) {}
                })((r = a(t)), c))
              ? n
              : f
              ? u(r)
              : "Object" == (e = u(r)) && i(r.callee)
              ? "Arguments"
              : e;
          };
    },
    9920: function (t, r, n) {
      var e = n(2597),
        o = n(3887),
        i = n(1236),
        u = n(3070);
      t.exports = function (t, r, n) {
        for (var c = o(r), a = u.f, f = i.f, s = 0; s < c.length; s++) {
          var p = c[s];
          e(t, p) || (n && e(n, p)) || a(t, p, f(r, p));
        }
      };
    },
    8544: function (t, r, n) {
      var e = n(7293);
      t.exports = !e(function () {
        function t() {}
        return (
          (t.prototype.constructor = null),
          Object.getPrototypeOf(new t()) !== t.prototype
        );
      });
    },
    4994: function (t, r, n) {
      "use strict";
      var e = n(3383).IteratorPrototype,
        o = n(30),
        i = n(9114),
        u = n(8003),
        c = n(7497),
        a = function () {
          return this;
        };
      t.exports = function (t, r, n, f) {
        var s = r + " Iterator";
        return (
          (t.prototype = o(e, { next: i(+!f, n) })),
          u(t, s, !1, !0),
          (c[s] = a),
          t
        );
      };
    },
    8880: function (t, r, n) {
      var e = n(9781),
        o = n(3070),
        i = n(9114);
      t.exports = e
        ? function (t, r, n) {
            return o.f(t, r, i(1, n));
          }
        : function (t, r, n) {
            return (t[r] = n), t;
          };
    },
    9114: function (t) {
      t.exports = function (t, r) {
        return {
          enumerable: !(1 & t),
          configurable: !(2 & t),
          writable: !(4 & t),
          value: r,
        };
      };
    },
    6135: function (t, r, n) {
      "use strict";
      var e = n(4948),
        o = n(3070),
        i = n(9114);
      t.exports = function (t, r, n) {
        var u = e(r);
        u in t ? o.f(t, u, i(0, n)) : (t[u] = n);
      };
    },
    654: function (t, r, n) {
      "use strict";
      var e = n(2109),
        o = n(6916),
        i = n(1913),
        u = n(6530),
        c = n(614),
        a = n(4994),
        f = n(9518),
        s = n(7674),
        p = n(8003),
        v = n(8880),
        l = n(1320),
        y = n(5112),
        h = n(7497),
        g = n(3383),
        b = u.PROPER,
        x = u.CONFIGURABLE,
        d = g.IteratorPrototype,
        m = g.BUGGY_SAFARI_ITERATORS,
        O = y("iterator"),
        S = "keys",
        w = "values",
        j = "entries",
        P = function () {
          return this;
        };
      t.exports = function (t, r, n, u, y, g, A) {
        a(n, r, u);
        var T,
          E,
          L,
          _ = function (t) {
            if (t === y && M) return M;
            if (!m && t in C) return C[t];
            switch (t) {
              case S:
              case w:
              case j:
                return function () {
                  return new n(this, t);
                };
            }
            return function () {
              return new n(this);
            };
          },
          I = r + " Iterator",
          k = !1,
          C = t.prototype,
          F = C[O] || C["@@iterator"] || (y && C[y]),
          M = (!m && F) || _(y),
          R = ("Array" == r && C.entries) || F;
        if (
          (R &&
            (T = f(R.call(new t()))) !== Object.prototype &&
            T.next &&
            (i || f(T) === d || (s ? s(T, d) : c(T[O]) || l(T, O, P)),
            p(T, I, !0, !0),
            i && (h[I] = P)),
          b &&
            y == w &&
            F &&
            F.name !== w &&
            (!i && x
              ? v(C, "name", w)
              : ((k = !0),
                (M = function () {
                  return o(F, this);
                }))),
          y)
        )
          if (((E = { values: _(w), keys: g ? M : _(S), entries: _(j) }), A))
            for (L in E) (m || k || !(L in C)) && l(C, L, E[L]);
          else e({ target: r, proto: !0, forced: m || k }, E);
        return (
          (i && !A) || C[O] === M || l(C, O, M, { name: y }), (h[r] = M), E
        );
      };
    },
    9781: function (t, r, n) {
      var e = n(7293);
      t.exports = !e(function () {
        return (
          7 !=
          Object.defineProperty({}, 1, {
            get: function () {
              return 7;
            },
          })[1]
        );
      });
    },
    317: function (t, r, n) {
      var e = n(7854),
        o = n(111),
        i = e.document,
        u = o(i) && o(i.createElement);
      t.exports = function (t) {
        return u ? i.createElement(t) : {};
      };
    },
    8324: function (t) {
      t.exports = {
        CSSRuleList: 0,
        CSSStyleDeclaration: 0,
        CSSValueList: 0,
        ClientRectList: 0,
        DOMRectList: 0,
        DOMStringList: 0,
        DOMTokenList: 1,
        DataTransferItemList: 0,
        FileList: 0,
        HTMLAllCollection: 0,
        HTMLCollection: 0,
        HTMLFormElement: 0,
        HTMLSelectElement: 0,
        MediaList: 0,
        MimeTypeArray: 0,
        NamedNodeMap: 0,
        NodeList: 1,
        PaintRequestList: 0,
        Plugin: 0,
        PluginArray: 0,
        SVGLengthList: 0,
        SVGNumberList: 0,
        SVGPathSegList: 0,
        SVGPointList: 0,
        SVGStringList: 0,
        SVGTransformList: 0,
        SourceBufferList: 0,
        StyleSheetList: 0,
        TextTrackCueList: 0,
        TextTrackList: 0,
        TouchList: 0,
      };
    },
    8509: function (t, r, n) {
      var e = n(317)("span").classList,
        o = e && e.constructor && e.constructor.prototype;
      t.exports = o === Object.prototype ? void 0 : o;
    },
    8113: function (t, r, n) {
      var e = n(5005);
      t.exports = e("navigator", "userAgent") || "";
    },
    7392: function (t, r, n) {
      var e,
        o,
        i = n(7854),
        u = n(8113),
        c = i.process,
        a = i.Deno,
        f = (c && c.versions) || (a && a.version),
        s = f && f.v8;
      s && (o = (e = s.split("."))[0] > 0 && e[0] < 4 ? 1 : +(e[0] + e[1])),
        !o &&
          u &&
          (!(e = u.match(/Edge\/(\d+)/)) || e[1] >= 74) &&
          (e = u.match(/Chrome\/(\d+)/)) &&
          (o = +e[1]),
        (t.exports = o);
    },
    748: function (t) {
      t.exports = [
        "constructor",
        "hasOwnProperty",
        "isPrototypeOf",
        "propertyIsEnumerable",
        "toLocaleString",
        "toString",
        "valueOf",
      ];
    },
    2109: function (t, r, n) {
      var e = n(7854),
        o = n(1236).f,
        i = n(8880),
        u = n(1320),
        c = n(3505),
        a = n(9920),
        f = n(4705);
      t.exports = function (t, r) {
        var n,
          s,
          p,
          v,
          l,
          y = t.target,
          h = t.global,
          g = t.stat;
        if ((n = h ? e : g ? e[y] || c(y, {}) : (e[y] || {}).prototype))
          for (s in r) {
            if (
              ((v = r[s]),
              (p = t.noTargetGet ? (l = o(n, s)) && l.value : n[s]),
              !f(h ? s : y + (g ? "." : "#") + s, t.forced) && void 0 !== p)
            ) {
              if (typeof v == typeof p) continue;
              a(v, p);
            }
            (t.sham || (p && p.sham)) && i(v, "sham", !0), u(n, s, v, t);
          }
      };
    },
    7293: function (t) {
      t.exports = function (t) {
        try {
          return !!t();
        } catch (t) {
          return !0;
        }
      };
    },
    9974: function (t, r, n) {
      var e = n(1702),
        o = n(9662),
        i = n(4374),
        u = e(e.bind);
      t.exports = function (t, r) {
        return (
          o(t),
          void 0 === r
            ? t
            : i
            ? u(t, r)
            : function () {
                return t.apply(r, arguments);
              }
        );
      };
    },
    4374: function (t, r, n) {
      var e = n(7293);
      t.exports = !e(function () {
        var t = function () {}.bind();
        return "function" != typeof t || t.hasOwnProperty("prototype");
      });
    },
    6916: function (t, r, n) {
      var e = n(4374),
        o = Function.prototype.call;
      t.exports = e
        ? o.bind(o)
        : function () {
            return o.apply(o, arguments);
          };
    },
    6530: function (t, r, n) {
      var e = n(9781),
        o = n(2597),
        i = Function.prototype,
        u = e && Object.getOwnPropertyDescriptor,
        c = o(i, "name"),
        a = c && "something" === function () {}.name,
        f = c && (!e || (e && u(i, "name").configurable));
      t.exports = { EXISTS: c, PROPER: a, CONFIGURABLE: f };
    },
    1702: function (t, r, n) {
      var e = n(4374),
        o = Function.prototype,
        i = o.bind,
        u = o.call,
        c = e && i.bind(u, u);
      t.exports = e
        ? function (t) {
            return t && c(t);
          }
        : function (t) {
            return (
              t &&
              function () {
                return u.apply(t, arguments);
              }
            );
          };
    },
    5005: function (t, r, n) {
      var e = n(7854),
        o = n(614),
        i = function (t) {
          return o(t) ? t : void 0;
        };
      t.exports = function (t, r) {
        return arguments.length < 2 ? i(e[t]) : e[t] && e[t][r];
      };
    },
    1246: function (t, r, n) {
      var e = n(648),
        o = n(8173),
        i = n(7497),
        u = n(5112)("iterator");
      t.exports = function (t) {
        if (null != t) return o(t, u) || o(t, "@@iterator") || i[e(t)];
      };
    },
    8554: function (t, r, n) {
      var e = n(7854),
        o = n(6916),
        i = n(9662),
        u = n(9670),
        c = n(6330),
        a = n(1246),
        f = e.TypeError;
      t.exports = function (t, r) {
        var n = arguments.length < 2 ? a(t) : r;
        if (i(n)) return u(o(n, t));
        throw f(c(t) + " is not iterable");
      };
    },
    8173: function (t, r, n) {
      var e = n(9662);
      t.exports = function (t, r) {
        var n = t[r];
        return null == n ? void 0 : e(n);
      };
    },
    7854: function (t, r, n) {
      var e = function (t) {
        return t && t.Math == Math && t;
      };
      t.exports =
        e("object" == typeof globalThis && globalThis) ||
        e("object" == typeof window && window) ||
        e("object" == typeof self && self) ||
        e("object" == typeof n.g && n.g) ||
        (function () {
          return this;
        })() ||
        Function("return this")();
    },
    2597: function (t, r, n) {
      var e = n(1702),
        o = n(7908),
        i = e({}.hasOwnProperty);
      t.exports =
        Object.hasOwn ||
        function (t, r) {
          return i(o(t), r);
        };
    },
    3501: function (t) {
      t.exports = {};
    },
    490: function (t, r, n) {
      var e = n(5005);
      t.exports = e("document", "documentElement");
    },
    4664: function (t, r, n) {
      var e = n(9781),
        o = n(7293),
        i = n(317);
      t.exports =
        !e &&
        !o(function () {
          return (
            7 !=
            Object.defineProperty(i("div"), "a", {
              get: function () {
                return 7;
              },
            }).a
          );
        });
    },
    8361: function (t, r, n) {
      var e = n(7854),
        o = n(1702),
        i = n(7293),
        u = n(4326),
        c = e.Object,
        a = o("".split);
      t.exports = i(function () {
        return !c("z").propertyIsEnumerable(0);
      })
        ? function (t) {
            return "String" == u(t) ? a(t, "") : c(t);
          }
        : c;
    },
    2788: function (t, r, n) {
      var e = n(1702),
        o = n(614),
        i = n(5465),
        u = e(Function.toString);
      o(i.inspectSource) ||
        (i.inspectSource = function (t) {
          return u(t);
        }),
        (t.exports = i.inspectSource);
    },
    9909: function (t, r, n) {
      var e,
        o,
        i,
        u = n(8536),
        c = n(7854),
        a = n(1702),
        f = n(111),
        s = n(8880),
        p = n(2597),
        v = n(5465),
        l = n(6200),
        y = n(3501),
        h = "Object already initialized",
        g = c.TypeError,
        b = c.WeakMap;
      if (u || v.state) {
        var x = v.state || (v.state = new b()),
          d = a(x.get),
          m = a(x.has),
          O = a(x.set);
        (e = function (t, r) {
          if (m(x, t)) throw new g(h);
          return (r.facade = t), O(x, t, r), r;
        }),
          (o = function (t) {
            return d(x, t) || {};
          }),
          (i = function (t) {
            return m(x, t);
          });
      } else {
        var S = l("state");
        (y[S] = !0),
          (e = function (t, r) {
            if (p(t, S)) throw new g(h);
            return (r.facade = t), s(t, S, r), r;
          }),
          (o = function (t) {
            return p(t, S) ? t[S] : {};
          }),
          (i = function (t) {
            return p(t, S);
          });
      }
      t.exports = {
        set: e,
        get: o,
        has: i,
        enforce: function (t) {
          return i(t) ? o(t) : e(t, {});
        },
        getterFor: function (t) {
          return function (r) {
            var n;
            if (!f(r) || (n = o(r)).type !== t)
              throw g("Incompatible receiver, " + t + " required");
            return n;
          };
        },
      };
    },
    7659: function (t, r, n) {
      var e = n(5112),
        o = n(7497),
        i = e("iterator"),
        u = Array.prototype;
      t.exports = function (t) {
        return void 0 !== t && (o.Array === t || u[i] === t);
      };
    },
    3157: function (t, r, n) {
      var e = n(4326);
      t.exports =
        Array.isArray ||
        function (t) {
          return "Array" == e(t);
        };
    },
    614: function (t) {
      t.exports = function (t) {
        return "function" == typeof t;
      };
    },
    4411: function (t, r, n) {
      var e = n(1702),
        o = n(7293),
        i = n(614),
        u = n(648),
        c = n(5005),
        a = n(2788),
        f = function () {},
        s = [],
        p = c("Reflect", "construct"),
        v = /^\s*(?:class|function)\b/,
        l = e(v.exec),
        y = !v.exec(f),
        h = function (t) {
          if (!i(t)) return !1;
          try {
            return p(f, s, t), !0;
          } catch (t) {
            return !1;
          }
        },
        g = function (t) {
          if (!i(t)) return !1;
          switch (u(t)) {
            case "AsyncFunction":
            case "GeneratorFunction":
            case "AsyncGeneratorFunction":
              return !1;
          }
          try {
            return y || !!l(v, a(t));
          } catch (t) {
            return !0;
          }
        };
      (g.sham = !0),
        (t.exports =
          !p ||
          o(function () {
            var t;
            return (
              h(h.call) ||
              !h(Object) ||
              !h(function () {
                t = !0;
              }) ||
              t
            );
          })
            ? g
            : h);
    },
    4705: function (t, r, n) {
      var e = n(7293),
        o = n(614),
        i = /#|\.prototype\./,
        u = function (t, r) {
          var n = a[c(t)];
          return n == s || (n != f && (o(r) ? e(r) : !!r));
        },
        c = (u.normalize = function (t) {
          return String(t).replace(i, ".").toLowerCase();
        }),
        a = (u.data = {}),
        f = (u.NATIVE = "N"),
        s = (u.POLYFILL = "P");
      t.exports = u;
    },
    111: function (t, r, n) {
      var e = n(614);
      t.exports = function (t) {
        return "object" == typeof t ? null !== t : e(t);
      };
    },
    1913: function (t) {
      t.exports = !1;
    },
    2190: function (t, r, n) {
      var e = n(7854),
        o = n(5005),
        i = n(614),
        u = n(7976),
        c = n(3307),
        a = e.Object;
      t.exports = c
        ? function (t) {
            return "symbol" == typeof t;
          }
        : function (t) {
            var r = o("Symbol");
            return i(r) && u(r.prototype, a(t));
          };
    },
    9212: function (t, r, n) {
      var e = n(6916),
        o = n(9670),
        i = n(8173);
      t.exports = function (t, r, n) {
        var u, c;
        o(t);
        try {
          if (!(u = i(t, "return"))) {
            if ("throw" === r) throw n;
            return n;
          }
          u = e(u, t);
        } catch (t) {
          (c = !0), (u = t);
        }
        if ("throw" === r) throw n;
        if (c) throw u;
        return o(u), n;
      };
    },
    3383: function (t, r, n) {
      "use strict";
      var e,
        o,
        i,
        u = n(7293),
        c = n(614),
        a = n(30),
        f = n(9518),
        s = n(1320),
        p = n(5112),
        v = n(1913),
        l = p("iterator"),
        y = !1;
      [].keys &&
        ("next" in (i = [].keys())
          ? (o = f(f(i))) !== Object.prototype && (e = o)
          : (y = !0)),
        null == e ||
        u(function () {
          var t = {};
          return e[l].call(t) !== t;
        })
          ? (e = {})
          : v && (e = a(e)),
        c(e[l]) ||
          s(e, l, function () {
            return this;
          }),
        (t.exports = { IteratorPrototype: e, BUGGY_SAFARI_ITERATORS: y });
    },
    7497: function (t) {
      t.exports = {};
    },
    6244: function (t, r, n) {
      var e = n(7466);
      t.exports = function (t) {
        return e(t.length);
      };
    },
    133: function (t, r, n) {
      var e = n(7392),
        o = n(7293);
      t.exports =
        !!Object.getOwnPropertySymbols &&
        !o(function () {
          var t = Symbol();
          return (
            !String(t) ||
            !(Object(t) instanceof Symbol) ||
            (!Symbol.sham && e && e < 41)
          );
        });
    },
    8536: function (t, r, n) {
      var e = n(7854),
        o = n(614),
        i = n(2788),
        u = e.WeakMap;
      t.exports = o(u) && /native code/.test(i(u));
    },
    30: function (t, r, n) {
      var e,
        o = n(9670),
        i = n(6048),
        u = n(748),
        c = n(3501),
        a = n(490),
        f = n(317),
        s = n(6200),
        p = s("IE_PROTO"),
        v = function () {},
        l = function (t) {
          return "<script>" + t + "</" + "script>";
        },
        y = function (t) {
          t.write(l("")), t.close();
          var r = t.parentWindow.Object;
          return (t = null), r;
        },
        h = function () {
          try {
            e = new ActiveXObject("htmlfile");
          } catch (t) {}
          var t, r;
          h =
            "undefined" != typeof document
              ? document.domain && e
                ? y(e)
                : (((r = f("iframe")).style.display = "none"),
                  a.appendChild(r),
                  (r.src = String("javascript:")),
                  (t = r.contentWindow.document).open(),
                  t.write(l("document.F=Object")),
                  t.close(),
                  t.F)
              : y(e);
          for (var n = u.length; n--; ) delete h.prototype[u[n]];
          return h();
        };
      (c[p] = !0),
        (t.exports =
          Object.create ||
          function (t, r) {
            var n;
            return (
              null !== t
                ? ((v.prototype = o(t)),
                  (n = new v()),
                  (v.prototype = null),
                  (n[p] = t))
                : (n = h()),
              void 0 === r ? n : i.f(n, r)
            );
          });
    },
    6048: function (t, r, n) {
      var e = n(9781),
        o = n(3353),
        i = n(3070),
        u = n(9670),
        c = n(5656),
        a = n(1956);
      r.f =
        e && !o
          ? Object.defineProperties
          : function (t, r) {
              u(t);
              for (var n, e = c(r), o = a(r), f = o.length, s = 0; f > s; )
                i.f(t, (n = o[s++]), e[n]);
              return t;
            };
    },
    3070: function (t, r, n) {
      var e = n(7854),
        o = n(9781),
        i = n(4664),
        u = n(3353),
        c = n(9670),
        a = n(4948),
        f = e.TypeError,
        s = Object.defineProperty,
        p = Object.getOwnPropertyDescriptor,
        v = "enumerable",
        l = "configurable",
        y = "writable";
      r.f = o
        ? u
          ? function (t, r, n) {
              if (
                (c(t),
                (r = a(r)),
                c(n),
                "function" == typeof t &&
                  "prototype" === r &&
                  "value" in n &&
                  y in n &&
                  !n.writable)
              ) {
                var e = p(t, r);
                e &&
                  e.writable &&
                  ((t[r] = n.value),
                  (n = {
                    configurable: l in n ? n.configurable : e.configurable,
                    enumerable: v in n ? n.enumerable : e.enumerable,
                    writable: !1,
                  }));
              }
              return s(t, r, n);
            }
          : s
        : function (t, r, n) {
            if ((c(t), (r = a(r)), c(n), i))
              try {
                return s(t, r, n);
              } catch (t) {}
            if ("get" in n || "set" in n) throw f("Accessors not supported");
            return "value" in n && (t[r] = n.value), t;
          };
    },
    1236: function (t, r, n) {
      var e = n(9781),
        o = n(6916),
        i = n(5296),
        u = n(9114),
        c = n(5656),
        a = n(4948),
        f = n(2597),
        s = n(4664),
        p = Object.getOwnPropertyDescriptor;
      r.f = e
        ? p
        : function (t, r) {
            if (((t = c(t)), (r = a(r)), s))
              try {
                return p(t, r);
              } catch (t) {}
            if (f(t, r)) return u(!o(i.f, t, r), t[r]);
          };
    },
    1156: function (t, r, n) {
      var e = n(4326),
        o = n(5656),
        i = n(8006).f,
        u = n(1589),
        c =
          "object" == typeof window && window && Object.getOwnPropertyNames
            ? Object.getOwnPropertyNames(window)
            : [];
      t.exports.f = function (t) {
        return c && "Window" == e(t)
          ? (function (t) {
              try {
                return i(t);
              } catch (t) {
                return u(c);
              }
            })(t)
          : i(o(t));
      };
    },
    8006: function (t, r, n) {
      var e = n(6324),
        o = n(748).concat("length", "prototype");
      r.f =
        Object.getOwnPropertyNames ||
        function (t) {
          return e(t, o);
        };
    },
    5181: function (t, r) {
      r.f = Object.getOwnPropertySymbols;
    },
    9518: function (t, r, n) {
      var e = n(7854),
        o = n(2597),
        i = n(614),
        u = n(7908),
        c = n(6200),
        a = n(8544),
        f = c("IE_PROTO"),
        s = e.Object,
        p = s.prototype;
      t.exports = a
        ? s.getPrototypeOf
        : function (t) {
            var r = u(t);
            if (o(r, f)) return r[f];
            var n = r.constructor;
            return i(n) && r instanceof n
              ? n.prototype
              : r instanceof s
              ? p
              : null;
          };
    },
    7976: function (t, r, n) {
      var e = n(1702);
      t.exports = e({}.isPrototypeOf);
    },
    6324: function (t, r, n) {
      var e = n(1702),
        o = n(2597),
        i = n(5656),
        u = n(1318).indexOf,
        c = n(3501),
        a = e([].push);
      t.exports = function (t, r) {
        var n,
          e = i(t),
          f = 0,
          s = [];
        for (n in e) !o(c, n) && o(e, n) && a(s, n);
        for (; r.length > f; ) o(e, (n = r[f++])) && (~u(s, n) || a(s, n));
        return s;
      };
    },
    1956: function (t, r, n) {
      var e = n(6324),
        o = n(748);
      t.exports =
        Object.keys ||
        function (t) {
          return e(t, o);
        };
    },
    5296: function (t, r) {
      "use strict";
      var n = {}.propertyIsEnumerable,
        e = Object.getOwnPropertyDescriptor,
        o = e && !n.call({ 1: 2 }, 1);
      r.f = o
        ? function (t) {
            var r = e(this, t);
            return !!r && r.enumerable;
          }
        : n;
    },
    7674: function (t, r, n) {
      var e = n(1702),
        o = n(9670),
        i = n(6077);
      t.exports =
        Object.setPrototypeOf ||
        ("__proto__" in {}
          ? (function () {
              var t,
                r = !1,
                n = {};
              try {
                (t = e(
                  Object.getOwnPropertyDescriptor(Object.prototype, "__proto__")
                    .set
                ))(n, []),
                  (r = n instanceof Array);
              } catch (t) {}
              return function (n, e) {
                return o(n), i(e), r ? t(n, e) : (n.__proto__ = e), n;
              };
            })()
          : void 0);
    },
    288: function (t, r, n) {
      "use strict";
      var e = n(1694),
        o = n(648);
      t.exports = e
        ? {}.toString
        : function () {
            return "[object " + o(this) + "]";
          };
    },
    2140: function (t, r, n) {
      var e = n(7854),
        o = n(6916),
        i = n(614),
        u = n(111),
        c = e.TypeError;
      t.exports = function (t, r) {
        var n, e;
        if ("string" === r && i((n = t.toString)) && !u((e = o(n, t))))
          return e;
        if (i((n = t.valueOf)) && !u((e = o(n, t)))) return e;
        if ("string" !== r && i((n = t.toString)) && !u((e = o(n, t))))
          return e;
        throw c("Can't convert object to primitive value");
      };
    },
    3887: function (t, r, n) {
      var e = n(5005),
        o = n(1702),
        i = n(8006),
        u = n(5181),
        c = n(9670),
        a = o([].concat);
      t.exports =
        e("Reflect", "ownKeys") ||
        function (t) {
          var r = i.f(c(t)),
            n = u.f;
          return n ? a(r, n(t)) : r;
        };
    },
    1320: function (t, r, n) {
      var e = n(7854),
        o = n(614),
        i = n(2597),
        u = n(8880),
        c = n(3505),
        a = n(2788),
        f = n(9909),
        s = n(6530).CONFIGURABLE,
        p = f.get,
        v = f.enforce,
        l = String(String).split("String");
      (t.exports = function (t, r, n, a) {
        var f,
          p = !!a && !!a.unsafe,
          y = !!a && !!a.enumerable,
          h = !!a && !!a.noTargetGet,
          g = a && void 0 !== a.name ? a.name : r;
        o(n) &&
          ("Symbol(" === String(g).slice(0, 7) &&
            (g = "[" + String(g).replace(/^Symbol\(([^)]*)\)/, "$1") + "]"),
          (!i(n, "name") || (s && n.name !== g)) && u(n, "name", g),
          (f = v(n)).source ||
            (f.source = l.join("string" == typeof g ? g : ""))),
          t !== e
            ? (p ? !h && t[r] && (y = !0) : delete t[r],
              y ? (t[r] = n) : u(t, r, n))
            : y
            ? (t[r] = n)
            : c(r, n);
      })(Function.prototype, "toString", function () {
        return (o(this) && p(this).source) || a(this);
      });
    },
    4488: function (t, r, n) {
      var e = n(7854).TypeError;
      t.exports = function (t) {
        if (null == t) throw e("Can't call method on " + t);
        return t;
      };
    },
    3505: function (t, r, n) {
      var e = n(7854),
        o = Object.defineProperty;
      t.exports = function (t, r) {
        try {
          o(e, t, { value: r, configurable: !0, writable: !0 });
        } catch (n) {
          e[t] = r;
        }
        return r;
      };
    },
    8003: function (t, r, n) {
      var e = n(3070).f,
        o = n(2597),
        i = n(5112)("toStringTag");
      t.exports = function (t, r, n) {
        t && !n && (t = t.prototype),
          t && !o(t, i) && e(t, i, { configurable: !0, value: r });
      };
    },
    6200: function (t, r, n) {
      var e = n(2309),
        o = n(9711),
        i = e("keys");
      t.exports = function (t) {
        return i[t] || (i[t] = o(t));
      };
    },
    5465: function (t, r, n) {
      var e = n(7854),
        o = n(3505),
        i = "__core-js_shared__",
        u = e[i] || o(i, {});
      t.exports = u;
    },
    2309: function (t, r, n) {
      var e = n(1913),
        o = n(5465);
      (t.exports = function (t, r) {
        return o[t] || (o[t] = void 0 !== r ? r : {});
      })("versions", []).push({
        version: "3.21.0",
        mode: e ? "pure" : "global",
        copyright: "© 2014-2022 Denis Pushkarev (zloirock.ru)",
        license: "https://github.com/zloirock/core-js/blob/v3.21.0/LICENSE",
        source: "https://github.com/zloirock/core-js",
      });
    },
    8710: function (t, r, n) {
      var e = n(1702),
        o = n(9303),
        i = n(1340),
        u = n(4488),
        c = e("".charAt),
        a = e("".charCodeAt),
        f = e("".slice),
        s = function (t) {
          return function (r, n) {
            var e,
              s,
              p = i(u(r)),
              v = o(n),
              l = p.length;
            return v < 0 || v >= l
              ? t
                ? ""
                : void 0
              : (e = a(p, v)) < 55296 ||
                e > 56319 ||
                v + 1 === l ||
                (s = a(p, v + 1)) < 56320 ||
                s > 57343
              ? t
                ? c(p, v)
                : e
              : t
              ? f(p, v, v + 2)
              : s - 56320 + ((e - 55296) << 10) + 65536;
          };
        };
      t.exports = { codeAt: s(!1), charAt: s(!0) };
    },
    1400: function (t, r, n) {
      var e = n(9303),
        o = Math.max,
        i = Math.min;
      t.exports = function (t, r) {
        var n = e(t);
        return n < 0 ? o(n + r, 0) : i(n, r);
      };
    },
    5656: function (t, r, n) {
      var e = n(8361),
        o = n(4488);
      t.exports = function (t) {
        return e(o(t));
      };
    },
    9303: function (t) {
      var r = Math.ceil,
        n = Math.floor;
      t.exports = function (t) {
        var e = +t;
        return e != e || 0 === e ? 0 : (e > 0 ? n : r)(e);
      };
    },
    7466: function (t, r, n) {
      var e = n(9303),
        o = Math.min;
      t.exports = function (t) {
        return t > 0 ? o(e(t), 9007199254740991) : 0;
      };
    },
    7908: function (t, r, n) {
      var e = n(7854),
        o = n(4488),
        i = e.Object;
      t.exports = function (t) {
        return i(o(t));
      };
    },
    7593: function (t, r, n) {
      var e = n(7854),
        o = n(6916),
        i = n(111),
        u = n(2190),
        c = n(8173),
        a = n(2140),
        f = n(5112),
        s = e.TypeError,
        p = f("toPrimitive");
      t.exports = function (t, r) {
        if (!i(t) || u(t)) return t;
        var n,
          e = c(t, p);
        if (e) {
          if (
            (void 0 === r && (r = "default"), (n = o(e, t, r)), !i(n) || u(n))
          )
            return n;
          throw s("Can't convert object to primitive value");
        }
        return void 0 === r && (r = "number"), a(t, r);
      };
    },
    4948: function (t, r, n) {
      var e = n(7593),
        o = n(2190);
      t.exports = function (t) {
        var r = e(t, "string");
        return o(r) ? r : r + "";
      };
    },
    1694: function (t, r, n) {
      var e = {};
      (e[n(5112)("toStringTag")] = "z"),
        (t.exports = "[object z]" === String(e));
    },
    1340: function (t, r, n) {
      var e = n(7854),
        o = n(648),
        i = e.String;
      t.exports = function (t) {
        if ("Symbol" === o(t))
          throw TypeError("Cannot convert a Symbol value to a string");
        return i(t);
      };
    },
    6330: function (t, r, n) {
      var e = n(7854).String;
      t.exports = function (t) {
        try {
          return e(t);
        } catch (t) {
          return "Object";
        }
      };
    },
    9711: function (t, r, n) {
      var e = n(1702),
        o = 0,
        i = Math.random(),
        u = e((1).toString);
      t.exports = function (t) {
        return "Symbol(" + (void 0 === t ? "" : t) + ")_" + u(++o + i, 36);
      };
    },
    3307: function (t, r, n) {
      var e = n(133);
      t.exports = e && !Symbol.sham && "symbol" == typeof Symbol.iterator;
    },
    3353: function (t, r, n) {
      var e = n(9781),
        o = n(7293);
      t.exports =
        e &&
        o(function () {
          return (
            42 !=
            Object.defineProperty(function () {}, "prototype", {
              value: 42,
              writable: !1,
            }).prototype
          );
        });
    },
    5112: function (t, r, n) {
      var e = n(7854),
        o = n(2309),
        i = n(2597),
        u = n(9711),
        c = n(133),
        a = n(3307),
        f = o("wks"),
        s = e.Symbol,
        p = s && s.for,
        v = a ? s : (s && s.withoutSetter) || u;
      t.exports = function (t) {
        if (!i(f, t) || (!c && "string" != typeof f[t])) {
          var r = "Symbol." + t;
          c && i(s, t) ? (f[t] = s[t]) : (f[t] = a && p ? p(r) : v(r));
        }
        return f[t];
      };
    },
    6992: function (t, r, n) {
      "use strict";
      var e = n(5656),
        o = n(1223),
        i = n(7497),
        u = n(9909),
        c = n(3070).f,
        a = n(654),
        f = n(1913),
        s = n(9781),
        p = "Array Iterator",
        v = u.set,
        l = u.getterFor(p);
      t.exports = a(
        Array,
        "Array",
        function (t, r) {
          v(this, { type: p, target: e(t), index: 0, kind: r });
        },
        function () {
          var t = l(this),
            r = t.target,
            n = t.kind,
            e = t.index++;
          return !r || e >= r.length
            ? ((t.target = void 0), { value: void 0, done: !0 })
            : "keys" == n
            ? { value: e, done: !1 }
            : "values" == n
            ? { value: r[e], done: !1 }
            : { value: [e, r[e]], done: !1 };
        },
        "values"
      );
      var y = (i.Arguments = i.Array);
      if (
        (o("keys"), o("values"), o("entries"), !f && s && "values" !== y.name)
      )
        try {
          c(y, "name", { value: "values" });
        } catch (t) {}
    },
    1539: function (t, r, n) {
      var e = n(1694),
        o = n(1320),
        i = n(288);
      e || o(Object.prototype, "toString", i, { unsafe: !0 });
    },
    8783: function (t, r, n) {
      "use strict";
      var e = n(8710).charAt,
        o = n(1340),
        i = n(9909),
        u = n(654),
        c = "String Iterator",
        a = i.set,
        f = i.getterFor(c);
      u(
        String,
        "String",
        function (t) {
          a(this, { type: c, string: o(t), index: 0 });
        },
        function () {
          var t,
            r = f(this),
            n = r.string,
            o = r.index;
          return o >= n.length
            ? { value: void 0, done: !0 }
            : ((t = e(n, o)), (r.index += t.length), { value: t, done: !1 });
        }
      );
    },
    4747: function (t, r, n) {
      var e = n(7854),
        o = n(8324),
        i = n(8509),
        u = n(8533),
        c = n(8880),
        a = function (t) {
          if (t && t.forEach !== u)
            try {
              c(t, "forEach", u);
            } catch (r) {
              t.forEach = u;
            }
        };
      for (var f in o) o[f] && a(e[f] && e[f].prototype);
      a(i);
    },
    3948: function (t, r, n) {
      var e = n(7854),
        o = n(8324),
        i = n(8509),
        u = n(6992),
        c = n(8880),
        a = n(5112),
        f = a("iterator"),
        s = a("toStringTag"),
        p = u.values,
        v = function (t, r) {
          if (t) {
            if (t[f] !== p)
              try {
                c(t, f, p);
              } catch (r) {
                t[f] = p;
              }
            if ((t[s] || c(t, s, r), o[r]))
              for (var n in u)
                if (t[n] !== u[n])
                  try {
                    c(t, n, u[n]);
                  } catch (r) {
                    t[n] = u[n];
                  }
          }
        };
      for (var l in o) v(e[l] && e[l].prototype, l);
      v(i, "DOMTokenList");
    },
  },
]);
