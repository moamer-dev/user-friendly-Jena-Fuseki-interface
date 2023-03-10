jQuery.fn.femanagerValidation = function (e) {
  function a(a) {
    (d = new m({
      numRequest: a.find("*[data-validation]").length,
      element: a,
    })),
      a.find("*[data-validation]").each(function () {
        n(e(this), !0);
      });
  }
  function n(a, n) {
    if (a.prop("disabled")) return void (n && d.addCallbackToQueue(!0));
    var o = a.closest("form"),
      c = o
        .find("div:first")
        .find('input[name="tx_femanager_pi1[user][__identity]"]')
        .val(),
      p = o
        .find("div:first")
        .find('input[name="tx_femanager_pi1[__referrer][@action]"]')
        .val(),
      m =
        Femanager.getBaseUrl() +
        "?id=" +
        e("#femanagerPid").val() +
        "&type=1548935210",
      g = s(a),
      v = a.val();
    "checkbox" == a.prop("type") && 0 == a.prop("checked") && (v = "");
    var h = "";
    if (l(g, "sameAs")) {
      var _ = l(g, "sameAs"),
        b = f(_),
        x = e('input[name="tx_femanager_pi1[user][' + b + ']"]');
      (h = x.val()),
        "checkbox" == x.prop("type") && 0 == x.prop("checked") && (h = "");
    }
    e.ajax({
      url: m,
      data: {
        "tx_femanager_pi1[validation]": a.attr("data-validation"),
        "tx_femanager_pi1[value]": v,
        "tx_femanager_pi1[field]": r(a),
        "tx_femanager_pi1[user]": void 0 !== c ? c : "",
        "tx_femanager_pi1[additionalValue]": h ? h : "",
        "tx_femanager_pi1[plugin]": o.data("femanager-plugin"),
        "tx_femanager_pi1[referrerAction]": p,
        storagePid: e("#femanagerStoragePid").val(),
        L: e("#femanagerLanguage").val(),
        id: e("#femanagerPid").val(),
      },
      type: "POST",
      cache: !1,
      success: function (e) {
        if ((n && d.addCallbackToQueue(!0), e))
          try {
            e.validate ? i(a) : t(a, e.message);
          } catch (r) {
            a.before(data);
          }
      },
      error: function () {
        u();
      },
    });
  }
  function r(e) {
    var a = "",
      n = e.prop("name").split("[");
    return (a =
      void 0 !== n[2] ? n[2].replace("]", "") : n[1].replace("]", ""));
  }
  function t(a, n) {
    i(a);
    var r = e(".femanager_validation_container")
      .html()
      .replace("###messages###", n);
    a.before(r),
      a.closest(".form-group").addClass("has-error"),
      a.addClass("error");
  }
  function i(e) {
    e.closest(".form-group").removeClass("has-error"),
      e.siblings(".alert").remove(),
      e.removeClass("error");
  }
  function o(a) {
    0 == a.find(".error").length
      ? ((p = !0), a.trigger("submit"))
      : e("html,body").animate({
          scrollTop: a.find(".error:first").offset().top,
        });
  }
  function l(e, a) {
    for (var n = 0; n < e.length; n++) if (e[n].indexOf(a) !== -1) return e[n];
    return "";
  }
  function s(e) {
    return e.attr("data-validation").split(",");
  }
  function f(e) {
    var a = "";
    if (e.indexOf("(") !== -1) {
      var n = e.split("(");
      a = n[1].substr(0, n[1].length - 1);
    }
    return a;
  }
  function u() {
    "object" == typeof console &&
      console.log(
        "Error: The called url is not available - if you use TYPO3 in a subfolder, please use config.baseURL in TypoScript"
      );
  }
  var d,
    c = e(this),
    p = !1;
  0 == c.find("*[data-validation]").length && (p = !0);
  var m = (function () {
    var a, n, r;
    return function (t) {
      t || (t = {}),
        (a = t.numRequest || 0),
        (n = t.requestsCompleted || 0),
        (c = t.element || 0),
        (r = []);
      var i = function () {
        e("body").css("cursor", "default"), o(c);
        for (var a = 0; a < r.length; a++) r[a]();
      };
      t.singleCallback && r.push(t.singleCallback),
        (this.addCallbackToQueue = function (e, t) {
          e && n++, t && r.push(t), n == a && i();
        }),
        (this.requestComplete = function (e) {
          e && n++, n == a && i();
        }),
        (this.setCallback = function (e) {
          r.push(callBack);
        });
    };
  })();
  e("*[data-validation]").on("blur", function () {
    n(e(this), !1);
  }),
    c.on("submit", function (n) {
      e("body").css("cursor", "wait"), p || (n.preventDefault(), a(e(this)));
    });
};
