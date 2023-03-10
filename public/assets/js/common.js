"use strict";
(self.webpackChunkdigicademy_typo3_npm_install =
  self.webpackChunkdigicademy_typo3_npm_install || []).push([
  [592],
  {
    856: function (e, t, n) {
      n(1539), n(4747);
      var o = n(5169),
        i = n(9755),
        a = n.n(i),
        r =
          (n(7941),
          n(2222),
          n(7327),
          n(6992),
          n(8783),
          n(4129),
          n(3948),
          n(1955)),
        s = JSON.parse(
          '{"lang":"en","copy":{"en":"<p>We use cookies. Some of these cookies are necessary to keep this website running, while others help us to improve your experience by providing insight into how the site is being used. The collected data are fully anonymised and used to continuously develop this website and its services. To this end we use <a href=\'https://matomo.org/gdpr-analytics\' target=\'_blank\'>Matomo</a>, a GDPR-compliant on-premise analytics tool. For more information, have a look at the section on web statistics of our <a href=\'https://nfdi4culture.de/privacy-policy.html\'>privacy policy</a>.</p>","de":"<p>Wir benutzen Cookies. Einige davon sind für das Funktionieren der Website notwendig; andere geben uns Einblick darin, wie die Seite genutzt wird und helfen uns so, das Nutzer:innen-Erlebnis zu verbessern. Die gesammelten Daten sind vollständig anonymisiert und werden von uns verwendet, um diese Website und die hier angebotenen Dienste fortwährend zu verbessern.Zu diesem Zweck verwenden wir <a href=\'https://matomo.org/gdpr-analytics\' target=\'_blank\'>Matomo</a>, eine DSGVO-konforme, auf unseren eigenen Servern betriebene Analyse-Software. Weitere Informationen finden Sie auch im Abschnitt zu Webstatistiken in unserer <a href=\'https://nfdi4culture.de/de/translate-to-deutsch-privacy-policy.html\'>Datenschutzerklärung</a>.<p>"},"cookieNames":{"lang":"site-language-preference","consent":"cookie_consent"},"cookieProperties":{"name":{"en":"Name","de":"Name"},"purpose":{"en":"Purpose","de":"Zweck"},"lifetime":{"en":"Lifetime","de":"Lebensdauer"}},"cookieTypes":{"necessary":{"en":"Necessary","de":"Notwendig"},"optional":{"en":"Optional","de":"Optional"}},"buttonLabels":{"showDetails":{"en":"Learn more","de":"Mehr erfahren"},"hideDetails":{"en":"Hide details","de":"Details ausblenden"},"reject":{"en":"Reject optional cookies","de":"Optionale Cookies ablehnen"},"accept":{"en":"Accept all","de":"Alle akzeptieren"}},"cookies":[{"name":"site-language-preference","purpose":{"en":"Used to store users\' language preference.","de":"Wird verwendet, um die Sprachauswahl für Nutzer:innen zu speichern."},"necessary":true,"lifetime":{"en":"30 days","de":"30 Tage"}},{"name":"_pk_id.37.9970","purpose":{"en":"Used to store a few details about users such as the unique visitor ID.","de":"Wird verwendet, um einge Details zu Nutzer:innen zu speichern, etwa eine eindeutige Besucher:innen-ID."},"necessary":false,"lifetime":{"en":"13 months","de":"13 Monate"}},{"name":"_pk_ses.37.9970","purpose":{"en":"Short lived cookie used to temporarily store data for the visit.","de":"Kurzlebiger Cookie, der verwendet wird, um vorübergehend Informationen zum Besuch zu speichern."},"necessary":false,"lifetime":{"en":"30 minutes","de":"30 Minuten"}},{"name":"cookie_consent","purpose":{"en":"Used to store users\' consent to the use of non-necessary cookies.","de":"Wird verwendet, um die Zustimmung von Nutzer:innen zur Verwendung von Cookies zu speichern."},"necessary":true,"lifetime":{"en":"12 months","de":"12 Monate"}}]}'
        );
      function c() {
        if ("1" === r.Z.get("cookie_consent")) {
          var e = "http".concat(
            "https:" === document.location.protocol ? "s" : "",
            "://stats.adwmainz.net/"
          );
          _paq.push(["setTrackerUrl", "".concat(e, "piwik.php")]),
            _paq.push(["setSiteId", "37"]);
          var t = document,
            n = t.createElement("script"),
            o = t.getElementsByTagName("script")[0];
          (n.type = "text/javascript"),
            (n.defer = !0),
            (n.async = !0),
            (n.src = "".concat(e, "piwik.js")),
            o.parentNode.insertBefore(n, o);
        }
      }
      function l(e, t) {
        for (var n = 0; n < t.length; n++) {
          var o = t[n];
          (o.enumerable = o.enumerable || !1),
            (o.configurable = !0),
            "value" in o && (o.writable = !0),
            Object.defineProperty(e, o.key, o);
        }
      }
      function u(e, t, n) {
        !(function (e, t) {
          if (t.has(e))
            throw new TypeError(
              "Cannot initialize the same private elements twice on an object"
            );
        })(e, t),
          t.set(e, n);
      }
      function d(e, t) {
        var n = (function (e, t, n) {
          if (!t.has(e))
            throw new TypeError(
              "attempted to " + n + " private field on non-instance"
            );
          return t.get(e);
        })(e, t, "get");
        return (function (e, t) {
          if (t.get) return t.get.call(e);
          return t.value;
        })(e, n);
      }
      var p = new WeakMap(),
        h = (function () {
          function e() {
            !(function (e, t) {
              if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function");
            })(this, e),
              u(this, p, { writable: !0, value: s }),
              void 0 === r.Z.get(d(this, p).cookieNames.consent) &&
                (this.getLanguage(), this.render());
          }
          var t, n, i;
          return (
            (t = e),
            (n = [
              {
                key: "optionalCookiesAccepted",
                get: function () {
                  return "1" === r.Z.get("cookie_consent");
                },
              },
              {
                key: "getLanguage",
                value: function () {
                  "1" === r.Z.get(d(this, p).cookieNames.lang) &&
                    (d(this, p).lang = "de");
                },
              },
              {
                key: "render",
                value: function () {
                  var e,
                    t,
                    n = this,
                    i = !1,
                    a = document.createElement("div"),
                    r = Object.keys(d(this, p).cookieProperties),
                    s = function (e) {
                      var t = "";
                      return (
                        r.forEach(function (o) {
                          t += "<td>".concat(
                            "name" === o ? e[o] : e[o][d(n, p).lang],
                            "</td>"
                          );
                        }),
                        "<tr>".concat(t, "</tr>")
                      );
                    };
                  a.insertAdjacentHTML(
                    "afterbegin",
                    '<div class="modal-dialog"><div class="modal-content container"><div>'
                      .concat(
                        d(this, p).copy[d(this, p).lang],
                        '</div><div class="mb-3"><button type="button" class="button button-full-green toggle-details">'
                      )
                      .concat(
                        d(this, p).buttonLabels[
                          i ? "hideDetails" : "showDetails"
                        ][d(this, p).lang],
                        '</button></div><div class="table-wrapper mb-4"><table><thead><tr>'
                      )
                      .concat(
                        ((e = ""),
                        (t = document.documentElement),
                        r.forEach(function (o) {
                          (e += "<th>".concat(
                            d(n, p).cookieProperties[o][d(n, p).lang],
                            "</th>"
                          )),
                            t.style.setProperty(
                              "--label-".concat(o),
                              "'".concat(
                                d(n, p).cookieProperties[o][d(n, p).lang],
                                "'"
                              )
                            );
                        }),
                        e),
                        "</tr></thead><tbody>"
                      )
                      .concat(
                        (function () {
                          var e = "";
                          return (
                            (e += '<tr><td class="type" colspan="'
                              .concat(r.length, '">')
                              .concat(
                                d(n, p).cookieTypes.necessary[d(n, p).lang],
                                "</td></tr>"
                              )),
                            d(n, p)
                              .cookies.filter(function (e) {
                                return e.necessary;
                              })
                              .forEach(function (t) {
                                e += s(t);
                              }),
                            (e += '<tr><td class="type" colspan="'
                              .concat(r.length, '">')
                              .concat(
                                d(n, p).cookieTypes.optional[d(n, p).lang],
                                "</td></tr>"
                              )),
                            d(n, p)
                              .cookies.filter(function (e) {
                                return !e.necessary;
                              })
                              .forEach(function (t) {
                                e += s(t);
                              }),
                            e
                          );
                        })(),
                        '</tbody></table></div><div class="text-end"><button type="button" class="button button-full-green cookie-decision me-3" data-acceptance="0">'
                      )
                      .concat(
                        d(this, p).buttonLabels.reject[d(this, p).lang],
                        '</button><button type="button" class="button button-full-green cookie-decision" data-acceptance="1">'
                      )
                      .concat(
                        d(this, p).buttonLabels.accept[d(this, p).lang],
                        "</button></div></div></div>"
                      )
                  ),
                    a.setAttribute("tabindex", "-1"),
                    a.setAttribute("class", "modal fade cookie-consent"),
                    document.body.appendChild(a),
                    (a.querySelector(".toggle-details").onclick = function (e) {
                      var t = a.querySelector(".table-wrapper").classList;
                      i
                        ? ((i = !1),
                          t.remove("open"),
                          (e.target.textContent = d(
                            n,
                            p
                          ).buttonLabels.showDetails[d(n, p).lang]))
                        : ((i = !0),
                          t.add("open"),
                          (e.target.textContent = d(
                            n,
                            p
                          ).buttonLabels.hideDetails[d(n, p).lang]));
                    }),
                    a
                      .querySelectorAll(".cookie-decision")
                      .forEach(function (e) {
                        e.onclick = function (e) {
                          n.setConsentCookie(e), l.hide();
                        };
                      });
                  var l = new o.u_(a, { backdrop: "static", keyboard: !1 });
                  a.addEventListener("hidden.bs.modal", function () {
                    l.dispose(), a.remove(), n.optionalCookiesAccepted && c();
                  }),
                    l.show();
                },
              },
              {
                key: "setConsentCookie",
                value: function (e) {
                  r.Z.set(
                    d(this, p).cookieNames.consent,
                    e.target.getAttribute("data-acceptance")
                  );
                },
              },
            ]) && l(t.prototype, n),
            i && l(t, i),
            Object.defineProperty(t, "prototype", { writable: !1 }),
            e
          );
        })();
      function f(e, t) {
        for (var n = 0; n < t.length; n++) {
          var o = t[n];
          (o.enumerable = o.enumerable || !1),
            (o.configurable = !0),
            "value" in o && (o.writable = !0),
            Object.defineProperty(e, o.key, o);
        }
      }
      var g = (function () {
        function e() {
          !(function (e, t) {
            if (!(e instanceof t))
              throw new TypeError("Cannot call a class as a function");
          })(this, e);
        }
        var t, n, o;
        return (
          (t = e),
          (o = [
            {
              key: "addListener",
              value: function (e) {
                var t = 0,
                  n = e
                    .closest(".ordered-facets-section.restricted-display")
                    .querySelector(".viewport"),
                  o = n.querySelector(".tag-list"),
                  i = n.getBoundingClientRect().height,
                  a = { more: e.dataset.more, less: e.dataset.less },
                  r = function () {
                    n.style.height = "".concat(
                      0 === t ? i : o.getBoundingClientRect().height,
                      "px"
                    );
                  },
                  s = function () {
                    e.textContent = a[0 === t ? "more" : "less"];
                  };
                e.removeAttribute("data-more"),
                  e.removeAttribute("data-less"),
                  s(),
                  e.addEventListener("click", function () {
                    (t = 0 === t ? 1 : 0), r(), s();
                  });
              },
            },
          ]),
          (n = null) && f(t.prototype, n),
          o && f(t, o),
          Object.defineProperty(t, "prototype", { writable: !1 }),
          e
        );
      })();
      (window.$ = window.jQuery = a()),
        new h().optionalCookiesAccepted && c(),
        document
          .querySelectorAll(
            ".ordered-facets-section.restricted-display button.toggle"
          )
          .forEach(g.addListener);
    },
  },
  function (e) {
    e.O(0, [703, 290], function () {
      return (t = 856), e((e.s = t));
      var t;
    });
    e.O();
  },
]);
