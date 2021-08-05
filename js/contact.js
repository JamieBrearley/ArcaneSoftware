$(document).ready(function () {
  let fadeOutDelay;
  dynamicElementHandler();
  dynamicCheckboxHandler();

  $("#submit").click(function (e) {
    e.preventDefault();
    onSubmit();
  });

  $(".input-control").on("input", function () {
    if (this.value) {
      $(this).addClass("notEmpty");
    } else {
      $(this).removeClass("notEmpty");
    }
  });

  // validate on input
  $(".validate input[type=text]:not(#hostingURL),.validate input[type=tel]").on("input", function () {
    if ($(this).val() == "") $(this).parent().addClass("validateFailed");
    else $(this).parent().removeClass("validateFailed");
  });
  $("#hostingURL").on("input", function () {
    if (validateURL($(this).val())) $(this).parent().parent().removeClass("validateFailed");
    else $(this).parent().parent().addClass("validateFailed");
  });

  $(".validate input[type=email]").on("input", function () {
    if (!validateEmail($(this).val())) {
      $(this).parent().addClass("validateFailed");
    } else {
      $(this).parent().removeClass("validateFailed");
    }
  });
  $("input[type=tel]").on("input", function () {
    if (!validatePhone($(this).val()) && $(this).val().length > 0) {
      $(this).parent().addClass("validateFailed");
    } else {
      $(this).parent().removeClass("validateFailed");
    }
  });

  function onSubmit() {
    formValidation();

    if ($(".validateFailed").length > 0) return;

    $.ajax({
      url: "inc/contact.php",
      type: "post",
      data: {
        name: $("#name").val(),
        business: $("#business").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),

        services: getCheckboxInputValues($("#services input")),
        webInfoType: getCheckboxInputValues($("#webInfoType input")),
        webBudget: getCheckboxInputValues($("#webInfoBudget input")),
        seoBudget: getCheckboxInputValues($("#seoBudget input")),
        digMrkt: getCheckboxInputValues($("#digMrkt input")),
        digMrktBudget: getCheckboxInputValues($("#digMrktBudget input")),
        socialMediaAccounts: getCheckboxInputValues($("#socialMediaAccounts input")),
        socialMrktBudget: getCheckboxInputValues($("#socialBudget input")),
        logoBudget: getCheckboxInputValues($("#graphicDesign input")),
        hostingURL: $("#hostingURL").val(),
        message: $("#message").val(),
      },
      success: function (response) {
        $("#postResult").text("Successfully submitted! We'll contact you within a single business day.");
        $("#postResult").addClass("postSuccess");
        $("#postResult").removeClass("postFailed");
        $("#postResult").css("visibility", "visible");
        $("form").addClass("disappearingForm");
        setTimeout(() => {
          $("form").css("display", "none");
        }, 500);
      },
      error: function () {
        $("#postResult").text(
          "The goblins have seemed to made off with our logic again. Please contact us via another method and we'll resolve this immediately."
        );
        $("#postResult").addClass("postFailed");
        $("#postResult").removeClass("postSuccess");
        $("#postResult").css("visibility", "visible");
        $("form").addClass("disappearingForm");
        setTimeout(() => {
          $("form").css("display", "none");
        }, 500);
      },
    });
  }

  function getCheckboxInputValues(elements) {
    let toReturn = "";
    $(elements).each(function () {
      // check if the input is checked
      if ($(this).prop("checked")) {
        // find the label
        let label = $("label[for='" + $(this).attr("id") + "']");

        // grab the closest label if not found
        if (label.length == 0) {
          label = $(this).closet("label");
        }

        // if there still isn't a label use the id, otherwise use the label text
        if (label.length == 0) {
          toReturn += $(this).attr("id");
        } else {
          toReturn += label.text();
        }
        toReturn += ", ";
      }
    });
    return toReturn.substring(0, toReturn.length - 2);
  }

  function formValidation() {
    // check client details is satisfactory
    $(".validate input[type=text]").each(function () {
      if ($(this).val() == "") $(this).parent().addClass("validateFailed");
      else $(this).parent().removeClass("validateFailed");
    });

    // check email is satisfactory
    $(".validate input[type=email]").each(function () {
      if (!validateEmail($(this).val())) {
        $(this).parent().addClass("validateFailed");
      } else {
        $(this).parent().removeClass("validateFailed");
      }
    });

    // check phone is satisfactory
    $(".validate input[type=tel]").on("input", function () {
      if (!validatePhone($(this).val())) {
        $(this).parent().addClass("validateFailed");
      } else {
        $(this).parent().removeClass("validateFailed");
      }
    });
    // remove class for invisible elements
    $("ul.validate:not(.show)").each(function () {
      $(this).removeClass("validateFailed");
      $(this).children().removeClass("validateFailed");
    });
    $("#hosting:not(.show)").children().removeClass("validateFailed");
    $("#hosting.show").each(function () {
      let element = $(this).find("input[type=text]");
      if (validateURL($(element).val())) $(this).removeClass("validateFailed");
      else $(this).addClass("validateFailed");
    });

    // change visible elements is satisfactory
    $("ul.validate.show").each(function () {
      validateDynamicCheckbox(this);
    });
  }

  function dynamicCheckboxHandler() {
    function webDesignCheckbox() {
      if ($("#webDesignCheckbox").prop("checked")) {
        delayTurnOff($("#webInfoType"), true);
        delayTurnOff($("#webInfoBudget"), true);
      } else {
        delayTurnOff($("#webInfoType"), false);
        delayTurnOff($("#webInfoBudget"), false);
      }
    }
    webDesignCheckbox();
    $("#webDesignCheckbox").change(function () {
      webDesignCheckbox();
    });

    function searchEngineCheckbox() {
      if ($("#searchEngineCheckbox").prop("checked")) {
        delayTurnOff($("#seoBudget"), true);
        delayTurnOff($("#hosting"), true);
      } else {
        if (!$("#websiteHostingCheckbox").prop("checked")) {
          delayTurnOff($("#hosting"), false);
        }
        delayTurnOff($("#seoBudget"), false);
      }
    }
    searchEngineCheckbox();
    $("#searchEngineCheckbox").change(function () {
      searchEngineCheckbox();
    });

    function marketingCheckbox() {
      if ($("#marketingCheckbox").prop("checked")) {
        delayTurnOff($("#digMrkt"), true);
        delayTurnOff($("#digMrktBudget"), true);
      } else {
        delayTurnOff($("#digMrkt"), false);
        delayTurnOff($("#digMrktBudget"), false);
      }
    }
    marketingCheckbox();
    $("#marketingCheckbox").change(function () {
      marketingCheckbox();
    });

    function socialMediaCheckbox() {
      if ($("#socialMediaCheckbox").prop("checked")) {
        delayTurnOff($("#socialMediaAccounts"), true);
        delayTurnOff($("#socialBudget"), true);
      } else {
        if (!$("#socialManagementCheckbox").prop("checked")) {
          delayTurnOff($("#socialMediaAccounts"), false);
        }
        delayTurnOff($("#socialBudget"), false);
      }
    }
    socialMediaCheckbox();
    $("#socialMediaCheckbox").change(function () {
      socialMediaCheckbox();
    });

    function socialManagementCheckbox() {
      if ($("#socialManagementCheckbox").prop("checked")) {
        delayTurnOff($("#socialMediaAccounts"), true);
      } else {
        if (!$("#socialMediaCheckbox").prop("checked")) {
          delayTurnOff($("#socialMediaAccounts"), false);
        }
      }
    }
    socialManagementCheckbox();
    $("#socialManagementCheckbox").change(function () {
      socialManagementCheckbox();
    });

    function graphicDesignCheckbox() {
      if ($("#graphicDesignCheckbox").prop("checked")) {
        delayTurnOff($("#graphicDesign"), true);
      } else {
        delayTurnOff($("#graphicDesign"), false);
      }
    }
    graphicDesignCheckbox();
    $("#graphicDesignCheckbox").change(function () {
      graphicDesignCheckbox();
    });

    function websiteHostingCheckbox() {
      if ($("#websiteHostingCheckbox").prop("checked")) {
        delayTurnOff($("#hosting"), true);
      } else {
        if (!$("#searchEngineCheckbox").prop("checked")) {
          delayTurnOff($("#hosting"), false);
        }
      }
    }
    websiteHostingCheckbox();
    $("#websiteHostingCheckbox").change(function () {
      websiteHostingCheckbox();
    });
  }

  function dynamicElementHandler() {
    $(".dynamic>*").each(function () {
      if (!$(this).hasClass("show")) {
        $(this).css("visibility", "hidden");
        $(this).css("position", "absolute");
      }
    });
  }

  function delayTurnOff(element, show) {
    clearTimeout(fadeOutDelay);
    if (show) $(element).addClass("show");
    else $(element).removeClass("show");

    if ($(element).hasClass("show")) {
      $(element).css("visibility", "visible");
      $(element).css("position", "relative");
    } else {
      fadeOutDelay = setTimeout(() => {
        dynamicElementHandler();
      }, 500);
    }
  }

  function validateEmail(email) {
    const re =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function validatePhone(phone) {
    const re = /^[\+]?[-\s\.]?[0-9]{10,12}$/;
    return re.test(String(phone).toLowerCase());
  }

  function validateURL(url) {
    const re = /(https?:\/\/)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/;
    console.log(url);
    console.log(re.test(String(url).toLowerCase()));
    return re.test(String(url).toLowerCase());
  }

  function validateDynamicCheckbox(element) {
    let ok = false;
    $(element)
      .find("input[type=checkbox],input[type=radio]")
      .each(function () {
        if ($(this).prop("checked")) ok = true;
      });

    if (ok) $(element).removeClass("validateFailed");
    else $(element).addClass("validateFailed");
  }
});
