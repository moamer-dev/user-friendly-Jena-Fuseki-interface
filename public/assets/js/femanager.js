function createUploader(e) {
  if (0 != e("#femanager_field_fine-uploader").length) {
    var a = {
      imageNames: {},
      getImageNames: function () {
        return e
          .map(this.imageNames, function (e) {
            return e;
          })
          .join(",");
      },
      addImageName: function (a, t) {
        (this.imageNames[a] = t),
          e("#femanager_field_image").val(this.getImageNames());
      },
      deleteImageName: function (a) {
        delete this.imageNames[a],
          e("#femanager_field_image").val(this.getImageNames());
      },
    };
    new qq.FineUploader({
      element: document.getElementById("femanager_field_fine-uploader"),
      request: {
        endpoint:
          Femanager.getBaseUrl() +
          "index.php?eID=femanagerFileUpload&id=" +
          e("#femanagerPid").val(),
        customHeaders: { Accept: "application/json" },
      },
      multiple: !0,
      template: e(".image_container_template:first").html(),
      fileTemplate:
        '<li><div class="qq-progress-bar"></div><span class="qq-upload-spinner"></span><span class="qq-upload-finished"></span><span class="qq-upload-file"></span><span class="qq-upload-size"></span><a class="qq-upload-cancel" href="#">{cancelButtonText}</a><a class="qq-upload-retry" href="#">{retryButtonText}</a><a class="qq-upload-delete icon-trash" href="#">{deleteButtonText}</a><span class="qq-upload-status-text">{statusText}</span></li>',
      deleteFile: {
        enabled: !0,
        forceConfirm: !0,
        endpoint:
          Femanager.getBaseUrl() +
          "index.php?eID=femanagerFileDelete&id=" +
          e("#femanagerPid").val(),
      },
      classes: { success: "alert alert-success", fail: "alert alert-error" },
      validation: {
        allowedExtensions: getValueFromField(
          "#uploadFileExtension",
          "jpeg, jpg, gif, png, bmp",
          "array"
        ),
        sizeLimit: getValueFromField("#uploadSize", 25e6, "int"),
        itemLimit: getValueFromField("#uploadAmount", 1, "int"),
      },
      callbacks: {
        onComplete: function (t, n, i) {
          if (i.success) {
            var l = e("<img />")
              .addClass("fileupload_image")
              .prop("src", e("#uploadFolder").val() + "/" + i.uploadName)
              .prop("alt", i.uploadName);
            l.appendTo(this.getItemByFileId(t)),
              a.addImageName(t, i.uploadName);
          }
        },
        onDeleteComplete: function (e, t, n) {
          a.deleteImageName(e);
        },
      },
    });
    return a;
  }
}
function getValueFromField(e, a, t) {
  var n = a;
  return (
    $(e).length && (n = $(e).val()),
    void 0 !== t &&
      ("int" === t
        ? (n = parseInt(n))
        : "array" === t &&
          ((n = n.toString()),
          (n = n.replace(/[\s,]+/g, ",")),
          (n = n.split(",")))),
    n
  );
}
jQuery(document).ready(function (e) {
  function a(e) {
    e += "";
    var a = e.charAt(0).toLowerCase();
    return a + e.substr(1);
  }
  var t;
  (t =
    null != document.querySelector(".tx-femanager[data-labels]")
      ? JSON.parse(
          document.querySelector(".tx-femanager[data-labels]").dataset.labels
        )
      : []),
    e(".feManagerValidation").femanagerValidation(e);
  var n = createUploader(e);
  e("#femanager_field_image").length > 0 &&
    e.each(e("#femanager_field_image").val().split(","), function (e, a) {
      a.trim().length > 0 && n.addImageName(a, a);
    }),
    e("#femanager_field_preview-image")
      .find(".qq-upload-delete")
      .click(function (a) {
        a.preventDefault();
        var t = e(a.target).parent();
        n.deleteImageName(t.find(".qq-upload-file").text()),
          t.fadeOut("", function () {
            e(this).remove();
          });
      }),
    e("*[data-confirm]").click(function (a) {
      var t = e(this).attr("data-confirm");
      confirm(t) || a.preventDefault();
    }),
    document.querySelectorAll("[data-data-endpoint]").forEach(function (n) {
      var i = function (i) {
          var l = n.dataset.dataEndpoint,
            o = {
              "tx_femanager_pi1[action]": l,
              "tx_femanager_pi1[controller]": "Data",
            };
          arguments = JSON.parse(JSON.stringify(n.dataset));
          for (var r in arguments)
            if (arguments.hasOwnProperty(r) && r.match("arguments")) {
              var s = document.getElementById(arguments[r]);
              if (s) {
                var d = a(r.substr(9));
                o["tx_femanager_pi1[" + d + "]"] = s.value;
              }
            }
          var p =
              Femanager.getBaseUrl() +
              "index.php?id=" +
              e("#femanagerPid").val() +
              "&type=1594138042",
            m = n.dataset.selectedValue;
          e.ajax({
            url: p,
            data: o,
            type: "POST",
            cache: !1,
            beforeSend: function () {
              (n.disabled = 1),
                (n.options.length = 0),
                (n.options[0] = new Option(t.loading_states));
            },
            success: function (e) {
              (n.disabled = 1),
                (n.options.length = 0),
                "" === m ||
                  e.hasOwnProperty(m) ||
                  (n.options[n.options.length] = new Option(t.please_choose));
              for (var a in e)
                if (e.hasOwnProperty(a)) {
                  var i = a === m;
                  (n.options[n.options.length] = new Option(e[a], a, i, i)),
                    (n.disabled = 0);
                }
            },
            error: function () {
              console.log(
                "Error: The called url is not available - if you use TYPO3 in a subfolder, please use config.baseURL in TypoScript"
              );
            },
          });
        },
        l = n.dataset.triggerFields;
      void 0 !== l
        ? l.split(",").forEach(function (e) {
            var a = document.getElementById(e);
            void 0 !== a && a.addEventListener("change", i);
          })
        : n.addEventListener("change", i),
        i();
    });
}),
  (window.Femanager = {}),
  (window.Femanager.getBaseUrl = function () {
    var e;
    if (jQuery("base").length > 0) e = jQuery("base").prop("href");
    else if (window.location.hostname.indexOf("localhost") !== -1) e = "";
    else {
      var a = "";
      window.location.port.length > 0 && (a = ":" + window.location.port),
        (e =
          "https:" !== window.location.protocol
            ? "http://" + window.location.hostname + a + "/"
            : "https://" + window.location.hostname + a + "/");
    }
    return e;
  });
