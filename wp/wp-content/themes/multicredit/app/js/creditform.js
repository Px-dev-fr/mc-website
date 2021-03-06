/* Form */

/* Translate Buttons */
var $nextlabel = "Last step";
var $submitlabel = "Submit the request";
var $yesfeedback = "Yes";
var $nofeedback = "No";

if (jQuery("body").hasClass("fr")) {
  $nextlabel = "Dernière étape";
  $submitlabel = "Soumettre la demande";
  $yesfeedback = "Oui";
  $nofeedback = "Non";
} else if (jQuery("body").hasClass("de")) {
  $nextlabel = "Letzter Schritt";
  $submitlabel = "Antrag einreichen";
  $yesfeedback = "Ja";
  $nofeedback = "Nein";
} else if (jQuery("body").hasClass("it")) {
  $nextlabel = "Ultimo passo";
  $submitlabel = "Presentare la richiesta";
  $yesfeedback = "Sì";
  $nofeedback = "No";
} else if (jQuery("body").hasClass("es")) {
  $nextlabel = "Última etapa";
  $submitlabel = "Enviar la solicitud";
  $yesfeedback = "Sí";
  $nofeedback = "No";
} else if (jQuery("body").hasClass("pt-pt")) {
  $nextlabel = "Último passo";
  $submitlabel = "Submeter o pedido";
  $yesfeedback = "Sim";
  $nofeedback = "Não";
} else if (jQuery("body").hasClass("tr")) {
  $nextlabel = "Son adım";
  $submitlabel = "Başvuruyu gönder";
  $yesfeedback = "Evet";
  $nofeedback = "Hayır";
} else if (jQuery("body").hasClass("sq")) {
  $nextlabel = "Hapi i fundit";
  $submitlabel = "Për të paraqitur një kërkesë";
  $yesfeedback = "Po";
  $nofeedback = "Jo";
}
// var $nextlabel = "Next";
// var $submitlabel = "Submit the request";
// var $yesfeedback = "Yes";
// var $nofeedback = "No";

// if (jQuery("body").hasClass("fr")) {
//   $nextlabel = "Suivant";
//   $submitlabel = "Soumettre la demande";
//   $yesfeedback = "Oui";
//   $nofeedback = "Non";
// } else if (jQuery("body").hasClass("de")) {
//   $nextlabel = "Weiter";
//   $submitlabel = "Antrag einreichen";
//   $yesfeedback = "Ja";
//   $nofeedback = "Nein";
// } else if (jQuery("body").hasClass("it")) {
//   $nextlabel = "Seguente";
//   $submitlabel = "Presentare la richiesta";
//   $yesfeedback = "Sì";
//   $nofeedback = "No";
// } else if (jQuery("body").hasClass("es")) {
//   $nextlabel = "Siguiente";
//   $submitlabel = "Enviar la solicitud";
//   $yesfeedback = "Sí";
//   $nofeedback = "No";
// } else if (jQuery("body").hasClass("pt-pt")) {
//   $nextlabel = "Próximo";
//   $submitlabel = "Submeter o pedido";
//   $yesfeedback = "Sim";
//   $nofeedback = "Não";
// } else if (jQuery("body").hasClass("tr")) {
//   $nextlabel = "Ileri / sonraki";
//   $submitlabel = "Başvuruyu gönder";
//   $yesfeedback = "Evet";
//   $nofeedback = "Hayır";
// } else if (jQuery("body").hasClass("sq")) {
//   $nextlabel = "Tutje";
//   $submitlabel = "Për të paraqitur një kërkesë";
//   $yesfeedback = "Po";
//   $nofeedback = "Jo";
// }

/*----- Add 10 last years to select list -----*/
var currentYear = new Date().getFullYear();
var max = currentYear;
var option = "";

// Gat all yearslist fields
var yearfields = document.getElementsByClassName("yearslist");
var i;
for (i = 0; i < yearfields.length; i++) {
  for (var year = currentYear - 10; year <= max; year++) {
    option = document.createElement("option");
    option.text = year;
    option.value = year;
    yearfields[i].prepend(option);
  }
}

/*----- Tab Navigation -----*/
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // window.scrollTo(0, 0);
  var aid = jQuery(".form-step-bar");

  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("nextBtn").classList.remove("SubmitCreditRequest");
  } else {
    document.getElementById("prevBtn").style.display = "inline";
    jQuery(document).scrollTop(jQuery(aid).offset().top);
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = $submitlabel;
    document.getElementById("nextBtn").classList.add("SubmitCreditRequest");
    setTimeout(
      function () {
        document.getElementById("nextBtn").classList.remove("mainformsteps");
      },
      1000,
      this
    );
  } else {
    document.getElementById("nextBtn").innerHTML = $nextlabel;
    document.getElementById("nextBtn").classList.add("mainformsteps");
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n);
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    submitForm();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

// Jeremy - Start
function getParameterByName(name) {
  var url =
    window.location !== window.parent.location
      ? document.referrer
      : document.location.href;

  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function submitForm() {
  $("#cr_f #localite").removeAttr("disabled");
  $("#cr_f #submit").attr("disabled", "disabled");
  $("#cr_f #submit").html("Chargement...");
  var poursuites = $("#cr_f #poursuites").val();
  var naissanceDate =
    $("#cr_f #naissance-yyyy").val() +
    "-" +
    $("#cr_f #naissance-mm").val() +
    "-" +
    $("#cr_f #naissance-dd").val();
  var dataToSubmit =
    $("#cr_f").serialize() +
    "&montant=" +
    getParameterByName("montant") +
    "&duree=" +
    getParameterByName("duree") +
    "&prestac=&naissance=" +
    naissanceDate +
    "&soumission=1&poursuites=" +
    poursuites;
  var xhr = new XMLHttpRequest();
  xhr.open(
    "POST",
    "/wp/wp-content/themes/multicredit/formulaire-demande-credit.php",
    true
  );
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      $("#cr_f #localite").attr("disabled", "disabled");
      $("#cf_f").hide();
      //$("#successmessage").removeClass('d-none');
      //$("#successmessage").html(xhr.responseText);
      $(".formnav").addClass("d-none");

      switch (document.getElementsByName("langue")[0].value) {
        case "fr":
          window.location.replace(
            "https://www.multicredit.ch/fr/merci-pour-votre-demande/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "en":
          window.location.replace(
            "https://www.multicredit.ch/en/thank-you-for-your-request/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "de":
          window.location.replace(
            "https://www.multicredit.ch/de/vielen-dank-fur-die-anfrage/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "it":
          window.location.replace(
            "https://www.multicredit.ch/it/grazie-per-la-vostra-richiesta/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "pt-pt":
          window.location.replace(
            "https://www.multicredit.ch/pt-pt/obrigado-pelo-seu-pedido/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "es":
          window.location.replace(
            "https://www.multicredit.ch/es/gracias-por-su-solicitud/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "sq":
          window.location.replace(
            "https://www.multicredit.ch/sq/faleminderit-per-kerkesen-tuaj/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        case "tr":
          window.location.replace(
            "https://www.multicredit.ch/tr/istegin-icin-tesekkurler/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
        default:
          window.location.replace(
            "https://www.multicredit.ch/fr/merci-pour-votre-demande/?retour=" +
              encodeURI(xhr.responseText)
          );
          break;
      }
      // window.location.replace("https://www.multicredit.ch/fr/merci-pour-votre-demande/?retour="+encodeURI(xhr.responseText));
    }
  };
  xhr.send(dataToSubmit);
  $("#contenu-principal").css("display", "none");
  $("#loadingmessage").removeClass("d-none");
  document.getElementById("loadingmessage").scrollIntoView("center");
}

// Jeremy - End

//add event construct for modern browsers or IE
//which fires the callback with a pre-converted target reference
function addEvent(node, type, callback) {
  if (node.addEventListener) {
    node.addEventListener(
      type,
      function (e) {
        callback(e, e.target);
      },
      false
    );
  } else if (node.attachEvent) {
    node.attachEvent("on" + type, function (e) {
      callback(e, e.srcElement);
    });
  }
}

//identify whether a field should be validated
//ie. true if the field is neither readonly nor disabled,
//and has either "pattern", "required" or "aria-invalid"
function shouldBeValidated(field) {
  return (
    !(field.getAttribute("readonly") || field.readonly) &&
    !(field.getAttribute("disabled") || field.disabled) &&
    (field.getAttribute("pattern") || field.getAttribute("required"))
  );
}

//field testing and validation function
function instantValidation(field) {
  document.getElementById("error-message-form").classList.remove("visible");

  // Validate Radiobutons
  var ckeckboxs = document.getElementsByClassName("checkbox-mc");
  var i;
  for (i = 0; i < ckeckboxs.length; i++) {
    if (ckeckboxs[i].checked == true) {
      ckeckboxs[i].parentNode.parentNode
        .querySelector(".form-field-valid")
        .classList.add("visible");
    }
    ckeckboxs[i].parentNode
      .querySelector(".for-checkbox-mc")
      .classList.remove("invalid");
  }

  // Validate Selectlists

  // Validate terms & cond checkbx
  var terms = document.getElementById("form_accord_1");
  if (terms.checked == true) {
    terms.parentNode.parentNode
      .querySelector(".form-field-invalid")
      .classList.remove("visible");
  }

  // Validate all other input fields
  if (shouldBeValidated(field)) {
    //the field is invalid if:
    //it's required but the value is empty
    //it has a pattern but the (non-empty) value doesn't pass
    var invalid =
      (field.getAttribute("required") && !field.value) ||
      (field.getAttribute("pattern") &&
        field.value &&
        !new RegExp(field.getAttribute("pattern")).test(field.value));

    var successmessage =
      field.parentNode.parentNode.querySelector(".form-field-valid");
    var errormessage = field.parentNode.parentNode.querySelector(
      ".form-field-invalid"
    );
    //add or remove the attribute is indicated by
    //the invalid flag and the current attribute state
    if (!invalid && !field.getAttribute("aria-invalid")) {
      field.classList.add("is-valid");
      successmessage.classList.add("visible");
      errormessage.classList.remove("visible");
    } else if (!invalid && field.getAttribute("aria-invalid")) {
      field.removeAttribute("aria-invalid");
      field.classList.add("is-valid");
      successmessage.classList.add("visible");
      errormessage.classList.remove("visible");
    } else if (invalid && !field.getAttribute("aria-invalid")) {
      field.setAttribute("aria-invalid", "true");
      field.classList.remove("is-valid");
      successmessage.classList.remove("visible");
      errormessage.classList.add("visible");
    }
  }

  // Salary
  var salary = document.getElementById("revenus");
  var frequency = document.getElementById("salaireX");
	frequency.classList.add("visible");
  if (salary.value != "") {
    var successmessage =
      salary.parentNode.parentNode.querySelector(".form-field-valid");
    var errormessage = salary.parentNode.parentNode.querySelector(
      ".form-field-invalid"
    );
    salary.removeAttribute("aria-invalid");
    successmessage.classList.remove("visible");
    errormessage.classList.remove("visible");

    if (jQuery(frequency).find(":selected").prop("disabled")) {
    } else {
      successmessage.classList.add("visible");
      errormessage.classList.remove("visible");
    }
  } 

  // Salary since
  /*
				var salarysince_mm = document.getElementById('salaire-quand-mois');
				var salarysince_yyyy = document.getElementById('salaire-quand-annee');

					if (salarysince_mm.value != "") {

						var successmessage = salarysince_mm.parentNode.parentNode.querySelector('.form-field-valid');
						var errormessage = salarysince_mm.parentNode.parentNode.querySelector('.form-field-invalid');

						salarysince_yyyy.classList.add("visible");
						salarysince_mm.removeAttribute("aria-invalid");
						successmessage.classList.remove("visible");
						errormessage.classList.remove("visible");

						if(jQuery(salarysince_yyyy).find(':selected').prop('disabled')){
						} else {
							successmessage.classList.add("visible");
							errormessage.classList.remove("visible");
							}

						} else {
							salarysince_yyyy.classList.remove("visible");
						}
				*/

  // Address since
  /*
				var addresssince_mm = document.getElementById('loyer-quand-mois');
				var addresssince_yyyy = document.getElementById('loyer-quand-annee');

					if (addresssince_mm.value != "") {

						var successmessage = addresssince_mm.parentNode.parentNode.querySelector('.form-field-valid');
						var errormessage = addresssince_mm.parentNode.parentNode.querySelector('.form-field-invalid');

						addresssince_yyyy.classList.add("visible");
						addresssince_mm.removeAttribute("aria-invalid");
						successmessage.classList.remove("visible");
						errormessage.classList.remove("visible");

						if(jQuery(addresssince_yyyy).find(':selected').prop('disabled')){
						} else {
							successmessage.classList.add("visible");
							errormessage.classList.remove("visible");
							}

						} else {
							addresssince_yyyy.classList.remove("visible");
						}
					*/

  /* Children at home */
  const nbEnfant = document.getElementById("choix_enfants").value;
  if (nbEnfant != "") {
    document.getElementById("childrens-birth").classList.add("visible");
    for (let i = 1; i <= 6; i++) {
      jQuery("#age_enfant_" + i).hide();
    }
    for (let i = 1; i <= nbEnfant; i++) {
      jQuery("#age_enfant_" + i).show();
    }
  } else {
    document.getElementById("childrens-birth").classList.remove("visible");
    document.getElementById("age_enfant_1").value = "";
    document.getElementById("age_enfant_2").value = "";
    document.getElementById("age_enfant_3").value = "";
    document.getElementById("age_enfant_4").value = "";
    document.getElementById("age_enfant_5").value = "";
    document.getElementById("age_enfant_6").value = "";
  }

  /* spouse salary at home */

  if (
    document.getElementById("etat_civil").value == "marie" ||
    document.getElementById("etat_civil").value == "partenariat"
  ) {
    document.getElementById("spouse_position").classList.add("visible");
    document
      .getElementById("type_conjoint")
      .setAttribute("required", "required");
  } else {
    document.getElementById("spouse_position").classList.remove("visible");
    document.getElementById("type_conjoint").value = "";
    document.getElementById("type_conjoint").removeAttribute("required");
  }

  if (
    document.getElementById("type_conjoint").value != "foyer" &&
    document.getElementById("type_conjoint").value != ""
  ) {
    document
      .getElementById("moyen_transport_conjoint_ligne")
      .classList.add("visible");
    document
      .getElementById("moyen_transport_conjoint")
      .setAttribute("required", "required");
    document
      .getElementById("frais_professionnels_conjoint_ligne")
      .classList.add("visible");
    document
      .getElementById("frais_professionnels_conjoint")
      .setAttribute("required", "required");

    document.getElementById("salary_spouse").classList.add("visible");
    document
      .getElementById("revenus_conjoint")
      .setAttribute("required", "required");
    document
      .getElementById("salaireX_conjoint")
      .setAttribute("required", "required");
  } else {
    document
      .getElementById("moyen_transport_conjoint_ligne")
      .classList.remove("visible");
    document
      .getElementById("frais_professionnels_conjoint_ligne")
      .classList.remove("visible");
    document.getElementById("moyen_transport_conjoint").value = "";
    document.getElementById("nb_kilometres_conjoint").value = 0;
    document.getElementById("frais_mensuels_transport_conjoint").value = 0;
    document
      .getElementById("frais_professionnels_conjoint")
      .removeAttribute("required");
    document
      .getElementById("moyen_transport_conjoint")
      .removeAttribute("required");

    document.getElementById("salary_spouse").classList.remove("visible");
    document.getElementById("revenus_conjoint").value = "";
    document.getElementById("salaireX_conjoint").value = "";
    document.getElementById("revenus_conjoint").removeAttribute("required");
    document.getElementById("salaireX_conjoint").removeAttribute("required");
  }

  // Validate input group fields
  var groupfields = document.getElementsByClassName("birth");
  if (field.classList.contains("birth")) {
    var successmessage =
      field.parentNode.parentNode.querySelector(".form-field-valid");
    var errormessage = field.parentNode.parentNode.querySelector(
      ".form-field-invalid"
    );
    var totalfields = groupfields.length;
    if (field.value) {
      field.removeAttribute("aria-invalid");
      field.classList.add("is-valid");
      successmessage.classList.remove("visible");
      var totalgroup = document.querySelectorAll(".birth.is-valid").length;
      // console.log(totalgroup);
      if (totalgroup == totalfields) {
        successmessage.classList.add("visible");
        errormessage.classList.remove("visible");
      }
    } else {
      field.setAttribute("aria-invalid", "true");
      field.classList.remove("is-valid");
      successmessage.classList.remove("visible");
      errormessage.classList.add("visible");
    }
  }

	var groupfields = document.getElementsByClassName("loyer");
  if (field.classList.contains("loyer")) {
    var successmessage =
      field.parentNode.parentNode.querySelector(".form-field-valid");
    var errormessage = field.parentNode.parentNode.querySelector(
      ".form-field-invalid"
    );
    var totalfields = groupfields.length;
    if (field.value) {
      field.removeAttribute("aria-invalid");
      field.classList.add("is-valid");
      successmessage.classList.remove("visible");
      var totalgroup = document.querySelectorAll(".loyer.is-valid").length;
      // console.log(totalgroup);
      if (totalgroup == totalfields) {
        successmessage.classList.add("visible");
        errormessage.classList.remove("visible");
      }
    } else {
      field.setAttribute("aria-invalid", "true");
      field.classList.remove("is-valid");
      successmessage.classList.remove("visible");
      errormessage.classList.add("visible");
    }
  }
}

// transport
// Moyen de transport
document
  .getElementById("moyen_transport")
  .addEventListener("change", function () {
    if (this.value == "voiture strictement nécessaire") {
      document.getElementById("nb_kilometres").classList.add("visible");
      document
        .getElementById("nb_kilometres")
        .setAttribute("required", "required");
    } else {
      document.getElementById("nb_kilometres").classList.remove("visible");
      document.getElementById("nb_kilometres").value = "";
      document.getElementById("nb_kilometres").removeAttribute("required");

      switch (this.value) {
        case "à pieds":
          document.getElementById("frais_mensuels_transport").value = "0";
          break;
        case "à vélo":
          document.getElementById("frais_mensuels_transport").value = "15";
          break;
        case "à moto":
          document.getElementById("frais_mensuels_transport").value = "55";
          break;
        case "transport en commun":
          document.getElementById("frais_mensuels_transport").value = "190";
          break;
        case "voiture sans stricte nécessite":
          document.getElementById("frais_mensuels_transport").value = "190";
      }
    }
  });

// Moyen de transport du coinjoint
document
  .getElementById("moyen_transport_conjoint")
  .addEventListener("change", function () {
    if (this.value == "voiture strictement nécessaire") {
      document
        .getElementById("nb_kilometres_conjoint")
        .classList.add("visible");
      document
        .getElementById("nb_kilometres_conjoint")
        .setAttribute("required", "required");
    } else {
      document
        .getElementById("nb_kilometres_conjoint")
        .classList.remove("visible");
      document.getElementById("nb_kilometres_conjoint").value = "";
      document
        .getElementById("nb_kilometres_conjoint")
        .removeAttribute("required");
      switch (this.value) {
        case "à pieds":
          document.getElementById("frais_mensuels_transport_conjoint").value =
            "0";
          break;
        case "à vélo":
          document.getElementById("frais_mensuels_transport_conjoint").value =
            "15";
          break;
        case "à moto":
          document.getElementById("frais_mensuels_transport_conjoint").value =
            "55";
          break;
        case "transport en commun":
          document.getElementById("frais_mensuels_transport_conjoint").value =
            "190";
          break;
        case "voiture sans stricte nécessite":
          document.getElementById("frais_mensuels_transport_conjoint").value =
            "190";
      }
    }
  });

document
  .getElementById("nb_kilometres")
  .addEventListener("focusout", function () {
    document.getElementById("frais_mensuels_transport").value =
      parseInt(this.value) * 20;
  });

document
  .getElementById("nb_kilometres_conjoint")
  .addEventListener("focusout", function () {
    document.getElementById("frais_mensuels_transport_conjoint").value =
      parseInt(this.value) * 20;
  });

//now bind a delegated change event
//== THIS FAILS IN INTERNET EXPLORER <= 8 ==//
//addEvent(document, 'change', function(e, target)
//{
//  instantValidation(target);
//});

//now bind a change event to each applicable for field
var fields = [
  document.getElementsByTagName("input"),
  document.getElementsByTagName("select"),
  document.getElementsByTagName("textarea"),
];
for (var a = fields.length, i = 0; i < a; i++) {
  for (var b = fields[i].length, j = 0; j < b; j++) {
    addEvent(fields[i][j], "change", function (e, target) {
      instantValidation(target);
    });
  }
}
var valid;
function validateForm() {
  // Inputs
  // This function deals with validation of the form fields
  var x,
    y,
    i,
    alert = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  valid = true;
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].getAttribute("required")) {
      // add data invalid
      y[i].setAttribute("aria-invalid", "true");
      var errormessage = y[i].parentNode.parentNode.querySelector(
        ".form-field-invalid"
      );
      errormessage.classList.add("visible");

      // set the current valid status to false:
      valid = false;
    }
  }

  // A loop that checks every select field in the current tab:
  x = document.getElementsByClassName("tab");
  v = x[currentTab].getElementsByTagName("select");
  for (i = 0; i < v.length; i++) {
    // If a field is empty...
    if (v[i].value == "" && v[i].getAttribute("required")) {
      // add data invalid
      v[i].setAttribute("aria-invalid", "true");
      var errormessage = v[i].parentNode.parentNode.querySelector(
        ".form-field-invalid"
      );
      errormessage.classList.add("visible");

      // set the current valid status to false:
      valid = false;
    }
  }

  // Radios
  var radios = document.getElementsByName("titre");
  var formValid = false;
  var n = 0;
  while (!formValid && n < radios.length) {
    if (radios[n].checked) formValid = true;
    n++;
  }
  if (!formValid) {
    var els = document.getElementsByClassName("for-checkbox-mc");
    Array.prototype.forEach.call(els, function (el) {
      el.className += " invalid";
    });
    valid = false;
  }

  var terms = document.getElementById("form_accord_1");

  if (terms.checked == false) {
    terms.parentNode.parentNode
      .querySelector(".form-field-invalid")
      .classList.add("visible");
    valid = false;
  }

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    // alert.textContent = '';
    document.getElementById("error-message-form").classList.remove("visible");
    document.getElementsByClassName("step")[currentTab].className += " finish";
  } else {
    document.getElementById("error-message-form").classList.add("visible");
  }

  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

jQuery("#naissance-dd").change(function () {
  var n = jQuery(this).val();
  if (n > 31) jQuery(this).val("31");
});

jQuery("#naissance-mm").change(function () {
  var n = jQuery(this).val();
  if (n > 12) jQuery(this).val("12");
});

jQuery("#naissance-yyyy").change(function () {
  var currentYear = new Date().getFullYear();
  var max = currentYear - 20;

  var n = jQuery(this).val();

  if (n > max) jQuery(this).val(max);
});

/* CPA Checker */

var cpa = new Array();
cpa[""] = "";
cpa["1000"] = "Lausanne";
cpa["1000"] = "Lausanne";
cpa["1000"] = "Lausanne";
cpa["1003"] = "Lausanne";
cpa["1004"] = "Lausanne";
cpa["1005"] = "Lausanne";
cpa["1006"] = "Lausanne";
cpa["1007"] = "Lausanne";
cpa["1008"] = "Jouxtens-Mézery";
cpa["1008"] = "Prilly";
cpa["1009"] = "Pully";
cpa["1010"] = "Lausanne";
cpa["1011"] = "Lausanne";
cpa["1012"] = "Lausanne";
cpa["1015"] = "Lausanne";
cpa["1018"] = "Lausanne";
cpa["1020"] = "Renens VD";
cpa["1022"] = "Chavannes-près-Renens";
cpa["1023"] = "Crissier";
cpa["1024"] = "Ecublens VD";
cpa["1025"] = "St-Sulpice VD";
cpa["1026"] = "Denges";
cpa["1026"] = "Echandens";
cpa["1027"] = "Lonay";
cpa["1028"] = "Préverenges";
cpa["1029"] = "Villars-Ste-Croix";
cpa["1030"] = "Bussigny-près-Lausanne";
cpa["1031"] = "Mex VD";
cpa["1032"] = "Romanel-sur-Lausanne";
cpa["1033"] = "Cheseaux-sur-Lausanne";
cpa["1034"] = "Boussens";
cpa["1035"] = "Bournens";
cpa["1036"] = "Sullens";
cpa["1037"] = "Etagnières";
cpa["1038"] = "Bercher";
cpa["1040"] = "Echallens";
cpa["1040"] = "St-Barthélemy VD";
cpa["1040"] = "Villars-le-Terroir";
cpa["1041"] = "Bottens";
cpa["1041"] = "Dommartin";
cpa["1041"] = "Montaubion-Chardonney";
cpa["1041"] = "Naz";
cpa["1041"] = "Poliez-Pittet";
cpa["1041"] = "Poliez-le-Grand";
cpa["1042"] = "Assens";
cpa["1042"] = "Bettens";
cpa["1042"] = "Bioley-Orjulaz";
cpa["1043"] = "Sugnens";
cpa["1044"] = "Fey";
cpa["1045"] = "Ogens";
cpa["1046"] = "Rueyres";
cpa["1047"] = "Oppens";
cpa["1052"] = "Le Mont-sur-Lausanne";
cpa["1053"] = "Bretigny-sur-Morrens";
cpa["1053"] = "Cugy VD";
cpa["1054"] = "Morrens VD";
cpa["1055"] = "Froideville";
cpa["1058"] = "Villars-Tiercelin";
cpa["1059"] = "Peney-le-Jorat";
cpa["1061"] = "Villars-Mendraz";
cpa["1062"] = "Sottens";
cpa["1063"] = "Boulens";
cpa["1063"] = "Chapelle-sur-Moudon";
cpa["1063"] = "Martherenges";
cpa["1063"] = "Peyres-Possens";
cpa["1066"] = "Epalinges";
cpa["1068"] = "Les Monts-de-Pully";
cpa["1070"] = "Puidoux";
cpa["1071"] = "Chexbres";
cpa["1071"] = "Rivaz";
cpa["1071"] = "St-Saphorin (Lavaux)";
cpa["1072"] = "Forel (Lavaux)";
cpa["1073"] = "Mollie-Margot";
cpa["1073"] = "Savigny";
cpa["1076"] = "Ferlens VD";
cpa["1077"] = "Servion";
cpa["1078"] = "Essertes";
cpa["1080"] = "Les Cullayes";
cpa["1081"] = "Montpreveyres";
cpa["1082"] = "Corcelles-le-Jorat";
cpa["1083"] = "Mézières VD";
cpa["1084"] = "Carrouge VD";
cpa["1085"] = "Vulliens";
cpa["1088"] = "Ropraz";
cpa["1090"] = "La Croix (Lutry)";
cpa["1091"] = "Aran";
cpa["1091"] = "Chenaux";
cpa["1091"] = "Grandvaux";
cpa["1092"] = "Belmont-sur-Lausanne";
cpa["1093"] = "La Conversion";
cpa["1094"] = "Paudex";
cpa["1095"] = "Lutry";
cpa["1096"] = "Cully";
cpa["1096"] = "Villette (Lavaux)";
cpa["1097"] = "Riex";
cpa["1098"] = "Epesses";
cpa["1110"] = "Morges";
cpa["1112"] = "Echichens";
cpa["1113"] = "St-Saphorin-sur-Morges";
cpa["1114"] = "Colombier VD";
cpa["1115"] = "Vullierens";
cpa["1116"] = "Cottens VD";
cpa["1117"] = "Grancy";
cpa["1121"] = "Bremblens";
cpa["1122"] = "Romanel-sur-Morges";
cpa["1123"] = "Aclens";
cpa["1124"] = "Gollion";
cpa["1125"] = "Monnaz";
cpa["1126"] = "Vaux-sur-Morges";
cpa["1127"] = "Clarmont";
cpa["1128"] = "Reverolle";
cpa["1131"] = "Tolochenaz";
cpa["1132"] = "Lully VD";
cpa["1134"] = "Chigny";
cpa["1134"] = "Vufflens-le-Château";
cpa["1135"] = "Denens";
cpa["1136"] = "Bussy-Chardonney";
cpa["1141"] = "Sévery";
cpa["1142"] = "Pampigny";
cpa["1143"] = "Apples";
cpa["1144"] = "Ballens";
cpa["1145"] = "Bière";
cpa["1146"] = "Mollens VD";
cpa["1147"] = "Montricher";
cpa["1148"] = "Chavannes-le-Veyron";
cpa["1148"] = "Cuarnens";
cpa["1148"] = "L'Isle";
cpa["1148"] = "La Coudre";
cpa["1148"] = "La Praz";
cpa["1148"] = "Mauraz";
cpa["1148"] = "Moiry VD";
cpa["1148"] = "Mont-la-Ville";
cpa["1148"] = "Villars-Bozon";
cpa["1149"] = "Berolle";
cpa["1162"] = "St-Prex";
cpa["1163"] = "Etoy";
cpa["1164"] = "Buchillon";
cpa["1165"] = "Allaman";
cpa["1166"] = "Perroy";
cpa["1167"] = "Lussy-sur-Morges";
cpa["1168"] = "Villars-sous-Yens";
cpa["1169"] = "Yens";
cpa["1170"] = "Aubonne";
cpa["1172"] = "Bougy-Villars";
cpa["1173"] = "Féchy";
cpa["1174"] = "Montherod";
cpa["1174"] = "Pizy";
cpa["1175"] = "Lavigny";
cpa["1176"] = "St-Livres";
cpa["1180"] = "Rolle";
cpa["1180"] = "Tartegnin";
cpa["1182"] = "Gilly";
cpa["1183"] = "Bursins";
cpa["1184"] = "Luins";
cpa["1184"] = "Vinzel";
cpa["1185"] = "Mont-sur-Rolle";
cpa["1186"] = "Essertines-sur-Rolle";
cpa["1187"] = "St-Oyens";
cpa["1188"] = "Gimel";
cpa["1188"] = "St-George";
cpa["1189"] = "Saubraz";
cpa["1195"] = "Bursinel";
cpa["1195"] = "Dully";
cpa["1196"] = "Gland";
cpa["1197"] = "Prangins";
cpa["1201"] = "Genève";
cpa["1202"] = "Genève";
cpa["1203"] = "Genève";
cpa["1204"] = "Genève";
cpa["1205"] = "Genève";
cpa["1206"] = "Genève";
cpa["1207"] = "Genève";
cpa["1208"] = "Genève";
cpa["1209"] = "Genève";
cpa["1212"] = "Grand-Lancy";
cpa["1213"] = "Onex";
cpa["1213"] = "Petit-Lancy";
cpa["1214"] = "Vernier";
cpa["1215"] = "Genève";
cpa["1216"] = "Cointrin";
cpa["1217"] = "Meyrin";
cpa["1218"] = "Le Grand-Saconnex";
cpa["1219"] = "Aïre";
cpa["1219"] = "Châtelaine";
cpa["1219"] = "Le Lignon";
cpa["1220"] = "Les Avanchets";
cpa["1222"] = "Vésenaz";
cpa["1223"] = "Cologny";
cpa["1224"] = "Chêne-Bougeries";
cpa["1224"] = "Chêne-Bougeries";
cpa["1225"] = "Chêne-Bourg";
cpa["1226"] = "Thônex";
cpa["1226"] = "Thônex";
cpa["1227"] = "Carouge GE";
cpa["1227"] = "Les Acacias";
cpa["1228"] = "Plan-les-Ouates";
cpa["1231"] = "Conches";
cpa["1232"] = "Confignon";
cpa["1233"] = "Bernex";
cpa["1234"] = "Vessy";
cpa["1236"] = "Cartigny";
cpa["1237"] = "Avully";
cpa["1239"] = "Collex";
cpa["1241"] = "Puplinge";
cpa["1242"] = "Satigny";
cpa["1243"] = "Presinge";
cpa["1244"] = "Choulex";
cpa["1245"] = "Collonge-Bellerive";
cpa["1246"] = "Corsier GE";
cpa["1247"] = "Anières";
cpa["1248"] = "Hermance";
cpa["1251"] = "Gy";
cpa["1252"] = "Meinier";
cpa["1253"] = "Vandoeuvres";
cpa["1254"] = "Jussy";
cpa["1255"] = "Veyrier";
cpa["1256"] = "Troinex";
cpa["1257"] = "La Croix-de-Rozon";
cpa["1258"] = "Perly";
cpa["1260"] = "Nyon";
cpa["1261"] = "Le Vaud";
cpa["1261"] = "Longirod";
cpa["1261"] = "Marchissy";
cpa["1262"] = "Eysins";
cpa["1263"] = "Crassier";
cpa["1264"] = "St-Cergue";
cpa["1265"] = "La Cure";
cpa["1266"] = "Duillier";
cpa["1267"] = "Coinsins";
cpa["1267"] = "Vich";
cpa["1268"] = "Begnins";
cpa["1268"] = "Burtigny";
cpa["1269"] = "Bassins";
cpa["1270"] = "Trélex";
cpa["1271"] = "Givrins";
cpa["1272"] = "Genolier";
cpa["1273"] = "Arzier";
cpa["1273"] = "Le Muids";
cpa["1274"] = "Grens";
cpa["1274"] = "Signy";
cpa["1275"] = "Chéserex";
cpa["1276"] = "Gingins";
cpa["1277"] = "Arnex-sur-Nyon";
cpa["1277"] = "Borex";
cpa["1278"] = "La Rippe";
cpa["1279"] = "Bogis-Bossey";
cpa["1279"] = "Chavannes-de-Bogis";
cpa["1281"] = "Russin";
cpa["1283"] = "Dardagny";
cpa["1283"] = "La Plaine";
cpa["1284"] = "Chancy";
cpa["1285"] = "Athenaz (Avusy)";
cpa["1286"] = "Soral";
cpa["1287"] = "Laconnex";
cpa["1288"] = "Aire-la-Ville";
cpa["1290"] = "Chavannes-des-Bois";
cpa["1290"] = "Versoix";
cpa["1291"] = "Commugny";
cpa["1292"] = "Chambésy";
cpa["1293"] = "Bellevue";
cpa["1294"] = "Genthod";
cpa["1295"] = "Mies";
cpa["1295"] = "Tannay";
cpa["1296"] = "Coppet";
cpa["1297"] = "Founex";
cpa["1298"] = "Céligny";
cpa["1298"] = "Céligny";
cpa["1299"] = "Crans-près-Céligny";
cpa["1299"] = "Crans-près-Céligny";
cpa["1302"] = "Vufflens-la-Ville";
cpa["1303"] = "Penthaz";
cpa["1304"] = "Allens";
cpa["1304"] = "Cossonay-Ville";
cpa["1304"] = "Dizy";
cpa["1304"] = "Senarclens";
cpa["1305"] = "Penthalaz";
cpa["1306"] = "Daillens";
cpa["1307"] = "Lussery-Villars";
cpa["1308"] = "La Chaux (Cossonay)";
cpa["1312"] = "Eclépens";
cpa["1313"] = "Ferreyres";
cpa["1315"] = "La Sarraz";
cpa["1316"] = "Chevilly";
cpa["1317"] = "Orny";
cpa["1318"] = "Pompaples";
cpa["1321"] = "Arnex-sur-Orbe";
cpa["1322"] = "Croy";
cpa["1323"] = "Romainmôtier";
cpa["1324"] = "Premier";
cpa["1325"] = "Vaulion";
cpa["1326"] = "Juriens";
cpa["1329"] = "Bretonnières";
cpa["1337"] = "Vallorbe";
cpa["1338"] = "Ballaigues";
cpa["1341"] = "Orient";
cpa["1342"] = "Le Pont";
cpa["1343"] = "Les Charbonnières";
cpa["1344"] = "L'Abbaye";
cpa["1345"] = "Le Lieu";
cpa["1345"] = "Le Séchey";
cpa["1346"] = "Les Bioux";
cpa["1347"] = "Le Sentier";
cpa["1347"] = "Le Solliat";
cpa["1348"] = "Le Brassus";
cpa["1350"] = "Orbe";
cpa["1352"] = "Agiez";
cpa["1353"] = "Bofflens";
cpa["1354"] = "Montcherand";
cpa["1355"] = "L'Abergement";
cpa["1355"] = "Sergey";
cpa["1356"] = "La Russille";
cpa["1356"] = "Les Clées";
cpa["1357"] = "Lignerolle";
cpa["1358"] = "Valeyres-sous-Rances";
cpa["1372"] = "Bavois";
cpa["1373"] = "Chavornay";
cpa["1374"] = "Corcelles-sur-Chavornay";
cpa["1375"] = "Penthéréaz";
cpa["1376"] = "Eclagnens";
cpa["1376"] = "Goumoens-la-Ville";
cpa["1376"] = "Goumoens-le-Jux";
cpa["1377"] = "Oulens-sous-Echallens";
cpa["1400"] = "Cheseaux-Noréaz";
cpa["1400"] = "Yverdon-les-Bains";
cpa["1404"] = "Cuarny";
cpa["1404"] = "Villars-Epeney";
cpa["1405"] = "Pomy";
cpa["1406"] = "Cronay";
cpa["1407"] = "Bioley-Magnoux";
cpa["1407"] = "Donneloye";
cpa["1407"] = "Gossens";
cpa["1407"] = "Mézery-près-Donneloye";
cpa["1408"] = "Prahins";
cpa["1409"] = "Chanéaz";
cpa["1410"] = "Correvon";
cpa["1410"] = "Denezy";
cpa["1410"] = "Prévondavaux";
cpa["1410"] = "St-Cierges";
cpa["1410"] = "Thierrens";
cpa["1412"] = "Ursins";
cpa["1412"] = "Valeyres-sous-Ursins";
cpa["1413"] = "Orzens";
cpa["1415"] = "Démoret";
cpa["1415"] = "Molondin";
cpa["1416"] = "Pailly";
cpa["1417"] = "Epautheyres";
cpa["1417"] = "Essertines-sur-Yverdon";
cpa["1418"] = "Vuarrens";
cpa["1420"] = "Fiez";
cpa["1421"] = "Fontaines-sur-Grandson";
cpa["1421"] = "Grandevent";
cpa["1422"] = "Grandson";
cpa["1423"] = "Fontanezier";
cpa["1423"] = "Romairon";
cpa["1423"] = "Vaugondry";
cpa["1423"] = "Villars-Burquin";
cpa["1424"] = "Champagne";
cpa["1425"] = "Onnens VD";
cpa["1426"] = "Concise";
cpa["1426"] = "Corcelles-près-Concise";
cpa["1427"] = "Bonvillars";
cpa["1428"] = "Mutrux";
cpa["1428"] = "Provence";
cpa["1429"] = "Giez";
cpa["1430"] = "Orges";
cpa["1431"] = "Novalles";
cpa["1431"] = "Vugelles-La Mothe";
cpa["1432"] = "Belmont-sur-Yverdon";
cpa["1432"] = "Gressy";
cpa["1433"] = "Suchy";
cpa["1434"] = "Ependes VD";
cpa["1435"] = "Essert-Pittet";
cpa["1436"] = "Chamblon";
cpa["1436"] = "Treycovagnes";
cpa["1437"] = "Suscévaz";
cpa["1438"] = "Mathod";
cpa["1439"] = "Rances";
cpa["1441"] = "Valeyres-sous-Montagny";
cpa["1442"] = "Montagny-près-Yverdon";
cpa["1443"] = "Champvent";
cpa["1443"] = "Essert-sous-Champvent";
cpa["1443"] = "Villars-sous-Champvent";
cpa["1445"] = "Vuiteboeuf";
cpa["1446"] = "Baulmes";
cpa["1450"] = "La Sagne (Ste-Croix)";
cpa["1450"] = "Le Château-de-Ste-Croix";
cpa["1450"] = "Ste-Croix";
cpa["1452"] = "Les Rasses";
cpa["1453"] = "Bullet";
cpa["1453"] = "Mauborget";
cpa["1454"] = "L'Auberson";
cpa["1454"] = "La Vraconnaz";
cpa["1462"] = "Yvonand";
cpa["1463"] = "Rovray";
cpa["1464"] = "Chavannes-le-Chêne";
cpa["1464"] = "Chêne-Pâquier";
cpa["1468"] = "Cheyres";
cpa["1470"] = "Bollion";
cpa["1470"] = "Estavayer-le-Lac";
cpa["1470"] = "Lully FR";
cpa["1470"] = "Seiry";
cpa["1473"] = "Châtillon FR";
cpa["1473"] = "Font";
cpa["1474"] = "Châbles FR";
cpa["1475"] = "Autavaux";
cpa["1475"] = "Forel FR";
cpa["1475"] = "Montbrelloz";
cpa["1482"] = "Cugy FR";
cpa["1483"] = "Frasses";
cpa["1483"] = "Montet (Broye)";
cpa["1483"] = "Vesin";
cpa["1484"] = "Aumont";
cpa["1484"] = "Granges-de-Vesin";
cpa["1485"] = "Nuvilly";
cpa["1486"] = "Vuissens";
cpa["1489"] = "Murist";
cpa["1509"] = "Vucherens";
cpa["1510"] = "Moudon";
cpa["1510"] = "Syens";
cpa["1512"] = "Chavannes-sur-Moudon";
cpa["1513"] = "Hermenches";
cpa["1513"] = "Rossenges";
cpa["1514"] = "Bussy-sur-Moudon";
cpa["1515"] = "Neyruz-sur-Moudon";
cpa["1515"] = "Villars-le-Comte";
cpa["1521"] = "Curtilles";
cpa["1522"] = "Lucens";
cpa["1522"] = "Oulens-sur-Lucens";
cpa["1523"] = "Granges-près-Marnand";
cpa["1524"] = "Marnand";
cpa["1525"] = "Henniez";
cpa["1525"] = "Seigneux";
cpa["1526"] = "Cremin";
cpa["1526"] = "Forel-sur-Lucens";
cpa["1527"] = "Villeneuve FR";
cpa["1528"] = "Praratoud";
cpa["1528"] = "Surpierre";
cpa["1529"] = "Cheiry";
cpa["1530"] = "Payerne";
cpa["1532"] = "Fétigny";
cpa["1533"] = "Ménières";
cpa["1534"] = "Chapelle (Broye)";
cpa["1534"] = "Sassel";
cpa["1534"] = "Sassel";
cpa["1535"] = "Combremont-le-Grand";
cpa["1536"] = "Combremont-le-Petit";
cpa["1537"] = "Champtauroz";
cpa["1538"] = "Treytorrens (Payerne)";
cpa["1541"] = "Bussy FR";
cpa["1541"] = "Morens FR";
cpa["1541"] = "Sévaz";
cpa["1542"] = "Rueyres-les-Prés";
cpa["1543"] = "Grandcour";
cpa["1544"] = "Gletterens";
cpa["1545"] = "Chevroux";
cpa["1551"] = "Vers-chez-Perrin";
cpa["1552"] = "Trey";
cpa["1553"] = "Châtonnaye";
cpa["1554"] = "Rossens VD";
cpa["1554"] = "Sédeilles";
cpa["1555"] = "Villarzel";
cpa["1562"] = "Corcelles-près-Payerne";
cpa["1563"] = "Dompierre FR";
cpa["1564"] = "Domdidier";
cpa["1565"] = "Missy";
cpa["1565"] = "Vallon";
cpa["1566"] = "Les Friques";
cpa["1566"] = "St-Aubin FR";
cpa["1567"] = "Delley";
cpa["1568"] = "Portalban";
cpa["1580"] = "Avenches";
cpa["1580"] = "Donatyre";
cpa["1580"] = "Oleyres";
cpa["1583"] = "Villarepos";
cpa["1584"] = "Villars-le-Grand";
cpa["1585"] = "Bellerive VD";
cpa["1585"] = "Cotterd";
cpa["1585"] = "Salavaux";
cpa["1586"] = "Vallamand";
cpa["1587"] = "Constantine";
cpa["1587"] = "Montmagny";
cpa["1588"] = "Cudrefin";
cpa["1589"] = "Chabrey";
cpa["1595"] = "Clavaleyres";
cpa["1595"] = "Faoug";
cpa["1607"] = "Les Tavernes";
cpa["1607"] = "Les Thioleyres";
cpa["1607"] = "Palézieux";
cpa["1607"] = "Palézieux-Village";
cpa["1608"] = "Bussigny-sur-Oron";
cpa["1608"] = "Chapelle (Glâne)";
cpa["1608"] = "Chesalles-sur-Oron";
cpa["1608"] = "Oron-le-Châtel";
cpa["1609"] = "Besencens";
cpa["1609"] = "Fiaugères";
cpa["1609"] = "Fiaugères";
cpa["1609"] = "St-Martin FR";
cpa["1610"] = "Châtillens";
cpa["1610"] = "Oron-la-Ville";
cpa["1610"] = "Vuibroye";
cpa["1611"] = "Le Crêt-près-Semsales";
cpa["1612"] = "Ecoteaux";
cpa["1613"] = "Maracon";
cpa["1614"] = "Granges (Veveyse)";
cpa["1615"] = "Bossonnens";
cpa["1616"] = "Attalens";
cpa["1617"] = "Remaufens";
cpa["1617"] = "Tatroz";
cpa["1618"] = "Châtel-St-Denis";
cpa["1619"] = "Les Paccots";
cpa["1623"] = "Semsales";
cpa["1624"] = "Grattavache";
cpa["1624"] = "La Verrerie";
cpa["1624"] = "Progens";
cpa["1624"] = "Progens";
cpa["1625"] = "Maules";
cpa["1625"] = "Sâles (Gruyère)";
cpa["1626"] = "Romanens";
cpa["1626"] = "Rueyres-Treyfayes";
cpa["1626"] = "Treyfayes";
cpa["1627"] = "Vaulruz";
cpa["1628"] = "Vuadens";
cpa["1630"] = "Bulle";
cpa["1632"] = "Riaz";
cpa["1633"] = "Marsens";
cpa["1633"] = "Vuippens";
cpa["1634"] = "La Roche FR";
cpa["1635"] = "La Tour-de-Trême";
cpa["1636"] = "Broc";
cpa["1637"] = "Charmey (Gruyère)";
cpa["1638"] = "Morlon";
cpa["1642"] = "Sorens";
cpa["1643"] = "Gumefens";
cpa["1644"] = "Avry-devant-Pont";
cpa["1645"] = "Le Bry";
cpa["1646"] = "Echarlens";
cpa["1647"] = "Corbières";
cpa["1648"] = "Hauteville";
cpa["1649"] = "Pont-la-Ville";
cpa["1651"] = "Villarvolard";
cpa["1652"] = "Botterens";
cpa["1652"] = "Villarbeney";
cpa["1653"] = "Châtel-sur-Montsalvens";
cpa["1653"] = "Crésuz";
cpa["1654"] = "Cerniat FR";
cpa["1656"] = "Im Fang";
cpa["1656"] = "Jaun";
cpa["1657"] = "Abländschen";
cpa["1658"] = "La Tine";
cpa["1658"] = "Rossinière";
cpa["1659"] = "Flendruz";
cpa["1659"] = "Rougemont";
cpa["1660"] = "Château-d'Oex";
cpa["1660"] = "L'Etivaz";
cpa["1660"] = "La Lécherette";
cpa["1660"] = "Les Moulins";
cpa["1661"] = "Le Pâquier-Montbarry";
cpa["1663"] = "Epagny";
cpa["1663"] = "Gruyères";
cpa["1663"] = "Moléson-sur-Gruyères";
cpa["1663"] = "Pringy";
cpa["1665"] = "Estavannens";
cpa["1666"] = "Grandvillard";
cpa["1666"] = "Villars-sous-Mont";
cpa["1667"] = "Enney";
cpa["1669"] = "Albeuve";
cpa["1669"] = "Les Sciernes-d'Albeuve";
cpa["1669"] = "Lessoc";
cpa["1669"] = "Montbovon";
cpa["1669"] = "Neirivue";
cpa["1670"] = "Bionnens";
cpa["1670"] = "Esmonts";
cpa["1670"] = "Ursy";
cpa["1673"] = "Auboranges";
cpa["1673"] = "Ecublens FR";
cpa["1673"] = "Gillarens";
cpa["1673"] = "Promasens";
cpa["1673"] = "Rue";
cpa["1674"] = "Montet (Glâne)";
cpa["1674"] = "Morlens";
cpa["1674"] = "Vuarmarens";
cpa["1675"] = "Blessens";
cpa["1675"] = "Mossel";
cpa["1675"] = "Vauderens";
cpa["1676"] = "Chavannes-les-Forts";
cpa["1677"] = "Prez-vers-Siviriez";
cpa["1678"] = "Siviriez";
cpa["1679"] = "Villaraboud";
cpa["1680"] = "Berlens";
cpa["1680"] = "Romont FR";
cpa["1681"] = "Billens";
cpa["1681"] = "Hennens";
cpa["1682"] = "Cerniaz VD";
cpa["1682"] = "Dompierre VD";
cpa["1682"] = "Lovatens";
cpa["1682"] = "Prévonloup";
cpa["1682"] = "Villars-Bramard";
cpa["1683"] = "Brenles";
cpa["1683"] = "Chesalles-sur-Moudon";
cpa["1683"] = "Sarzens";
cpa["1684"] = "Mézières FR";
cpa["1685"] = "Villariaz";
cpa["1686"] = "Grangettes-près-Romont";
cpa["1686"] = "La Neirigue";
cpa["1687"] = "Estévenens";
cpa["1687"] = "La Magne";
cpa["1687"] = "Vuisternens-devant-Romont";
cpa["1688"] = "Lieffrens";
cpa["1688"] = "Sommentier";
cpa["1689"] = "Le Châtelard-près-Romont";
cpa["1690"] = "Lussy FR";
cpa["1690"] = "Villaz-St-Pierre";
cpa["1691"] = "Villarimboud";
cpa["1692"] = "Massonnens";
cpa["1694"] = "Chavannes-sous-Orsonnens";
cpa["1694"] = "Orsonnens";
cpa["1694"] = "Villargiroud";
cpa["1694"] = "Villarsiviriaux";
cpa["1695"] = "Estavayer-le-Gibloux";
cpa["1695"] = "Rueyres-St-Laurent";
cpa["1695"] = "Villarlod";
cpa["1695"] = "Villarsel-le-Gibloux";
cpa["1696"] = "Vuisternens-en-Ogoz";
cpa["1697"] = "La Joux FR";
cpa["1697"] = "Les Ecasseys";
cpa["1699"] = "Bouloz";
cpa["1699"] = "Pont (Veveyse)";
cpa["1699"] = "Porsel";
cpa["1699"] = "Porsel";
cpa["1700"] = "Fribourg";
cpa["1712"] = "Tafers";
cpa["1713"] = "St. Antoni";
cpa["1714"] = "Heitenried";
cpa["1715"] = "Alterswil FR";
cpa["1716"] = "Oberschrot";
cpa["1716"] = "Plaffeien";
cpa["1716"] = "Schwarzsee";
cpa["1717"] = "St. Ursen";
cpa["1718"] = "Rechthalten";
cpa["1719"] = "Brünisried";
cpa["1719"] = "Zumholz";
cpa["1720"] = "Chésopelloz";
cpa["1720"] = "Corminboeuf";
cpa["1721"] = "Cormérod";
cpa["1721"] = "Cournillens";
cpa["1721"] = "Courtion";
cpa["1721"] = "Misery";
cpa["1722"] = "Bourguillon";
cpa["1723"] = "Marly";
cpa["1723"] = "Pierrafortscha";
cpa["1723"] = "Villarsel-sur-Marly";
cpa["1724"] = "Bonnefontaine";
cpa["1724"] = "Essert FR";
cpa["1724"] = "Ferpicloz";
cpa["1724"] = "Le Mouret";
cpa["1724"] = "Montévraz";
cpa["1724"] = "Oberried FR";
cpa["1724"] = "Senèdes";
cpa["1724"] = "Zénauva";
cpa["1725"] = "Posieux";
cpa["1726"] = "Farvagny";
cpa["1726"] = "Farvagny-le-Petit";
cpa["1726"] = "Grenilles";
cpa["1726"] = "Posat";
cpa["1727"] = "Corpataux-Magnedens";
cpa["1727"] = "Magnedens";
cpa["1728"] = "Rossens FR";
cpa["1730"] = "Ecuvillens";
cpa["1731"] = "Ependes FR";
cpa["1732"] = "Arconciel";
cpa["1733"] = "Treyvaux";
cpa["1734"] = "Tentlingen";
cpa["1735"] = "Giffers";
cpa["1736"] = "St. Silvester";
cpa["1737"] = "Plasselb";
cpa["1738"] = "Sangernboden";
cpa["1740"] = "Neyruz FR";
cpa["1741"] = "Cottens FR";
cpa["1742"] = "Autigny";
cpa["1744"] = "Chénens";
cpa["1745"] = "Lentigny";
cpa["1746"] = "Prez-vers-Noréaz";
cpa["1747"] = "Corserey";
cpa["1748"] = "Torny-le-Grand";
cpa["1749"] = "Middes";
cpa["1752"] = "Villars-sur-Glâne";
cpa["1753"] = "Matran";
cpa["1754"] = "Avry-sur-Matran";
cpa["1754"] = "Corjolens";
cpa["1754"] = "Rosé";
cpa["1756"] = "Lovens";
cpa["1756"] = "Onnens FR";
cpa["1757"] = "Noréaz";
cpa["1762"] = "Givisiez";
cpa["1763"] = "Granges-Paccot";
cpa["1772"] = "Grolley";
cpa["1772"] = "Nierlet-les-Bois";
cpa["1772"] = "Ponthaux";
cpa["1773"] = "Chandon";
cpa["1773"] = "Léchelles";
cpa["1773"] = "Russy";
cpa["1774"] = "Cousset";
cpa["1774"] = "Cousset";
cpa["1774"] = "Montagny-les-Monts";
cpa["1775"] = "Grandsivaz";
cpa["1775"] = "Mannens";
cpa["1776"] = "Montagny-la-Ville";
cpa["1782"] = "Autafond";
cpa["1782"] = "Belfaux";
cpa["1782"] = "Cormagens";
cpa["1782"] = "Formangueires";
cpa["1782"] = "La Corbaz";
cpa["1782"] = "Lossy";
cpa["1783"] = "Barberêche";
cpa["1783"] = "Pensier";
cpa["1784"] = "Courtepin";
cpa["1784"] = "Wallenried";
cpa["1785"] = "Cressier FR";
cpa["1786"] = "Sugiez";
cpa["1787"] = "Mur (Vully) FR";
cpa["1787"] = "Mur (Vully) VD";
cpa["1787"] = "Môtier (Vully)";
cpa["1788"] = "Praz (Vully)";
cpa["1789"] = "Lugnorre";
cpa["1791"] = "Courtaman";
cpa["1792"] = "Cordast";
cpa["1792"] = "Guschelmuth";
cpa["1793"] = "Jeuss";
cpa["1794"] = "Salvenach";
cpa["1795"] = "Courlevon";
cpa["1796"] = "Courgevaux";
cpa["1797"] = "Münchenwiler";
cpa["1800"] = "Vevey";
cpa["1801"] = "Le Mont-Pèlerin";
cpa["1802"] = "Corseaux";
cpa["1803"] = "Chardonne";
cpa["1804"] = "Corsier-sur-Vevey";
cpa["1805"] = "Jongny";
cpa["1806"] = "St-Légier-La Chiésaz";
cpa["1807"] = "Blonay";
cpa["1808"] = "Les Monts-de-Corsier";
cpa["1809"] = "Fenil-sur-Corsier";
cpa["1814"] = "La Tour-de-Peilz";
cpa["1815"] = "Clarens";
cpa["1816"] = "Chailly-Montreux";
cpa["1817"] = "Brent";
cpa["1820"] = "Montreux";
cpa["1820"] = "Territet";
cpa["1820"] = "Veytaux";
cpa["1822"] = "Chernex";
cpa["1823"] = "Glion";
cpa["1824"] = "Caux";
cpa["1832"] = "Chamby";
cpa["1832"] = "Villard-sur-Chamby";
cpa["1833"] = "Les Avants";
cpa["1844"] = "Villeneuve VD";
cpa["1845"] = "Noville";
cpa["1846"] = "Chessel";
cpa["1847"] = "Rennaz";
cpa["1852"] = "Roche VD";
cpa["1853"] = "Yvorne";
cpa["1854"] = "Leysin";
cpa["1856"] = "Corbeyrier";
cpa["1860"] = "Aigle";
cpa["1862"] = "La Comballaz";
cpa["1862"] = "Les Mosses";
cpa["1863"] = "Le Sépey";
cpa["1864"] = "Vers-l'Eglise";
cpa["1865"] = "Les Diablerets";
cpa["1866"] = "La Forclaz VD";
cpa["1867"] = "Ollon VD";
cpa["1867"] = "Panex";
cpa["1867"] = "St-Triphon";
cpa["1868"] = "Collombey";
cpa["1869"] = "Massongex";
cpa["1870"] = "Monthey";
cpa["1870"] = "Monthey";
cpa["1871"] = "Choëx";
cpa["1871"] = "Les Giettes";
cpa["1872"] = "Troistorrents";
cpa["1873"] = "Champoussin";
cpa["1873"] = "Les Crosets";
cpa["1873"] = "Val-d'Illiez";
cpa["1874"] = "Champéry";
cpa["1875"] = "Morgins";
cpa["1880"] = "Bex";
cpa["1880"] = "Fenalet-sur-Bex";
cpa["1880"] = "Frenières-sur-Bex";
cpa["1880"] = "Les Plans-sur-Bex";
cpa["1880"] = "Les Posses-sur-Bex";
cpa["1882"] = "Gryon";
cpa["1884"] = "Arveyes";
cpa["1884"] = "Huémoz";
cpa["1884"] = "Villars-sur-Ollon";
cpa["1885"] = "Chesières";
cpa["1890"] = "Mex VS";
cpa["1890"] = "St-Maurice";
cpa["1891"] = "Vérossaz";
cpa["1892"] = "Lavey-Village";
cpa["1892"] = "Lavey-les-Bains";
cpa["1892"] = "Morcles";
cpa["1893"] = "Muraz (Collombey)";
cpa["1895"] = "Vionnaz";
cpa["1896"] = "Miex";
cpa["1896"] = "Vouvry";
cpa["1897"] = "Bouveret";
cpa["1897"] = "Les Evouettes";
cpa["1898"] = "St-Gingolph";
cpa["1899"] = "Torgon";
cpa["1902"] = "Evionnaz";
cpa["1903"] = "Collonges";
cpa["1904"] = "Vernayaz";
cpa["1905"] = "Dorénaz";
cpa["1906"] = "Charrat";
cpa["1907"] = "Saxon";
cpa["1908"] = "Riddes";
cpa["1911"] = "Mayens-de-Chamoson";
cpa["1911"] = "Ovronnaz";
cpa["1912"] = "Dugny (Leytron)";
cpa["1912"] = "Leytron";
cpa["1912"] = "Montagnon (Leytron)";
cpa["1912"] = "Produit (Leytron)";
cpa["1913"] = "Saillon";
cpa["1913"] = "Saillon";
cpa["1914"] = "Auddes-sur-Riddes";
cpa["1914"] = "Isérables";
cpa["1918"] = "La Tzoumaz";
cpa["1920"] = "Martigny";
cpa["1921"] = "Martigny-Croix";
cpa["1922"] = "Les Granges (Salvan)";
cpa["1922"] = "Salvan";
cpa["1923"] = "Le Trétien";
cpa["1923"] = "Les Marécottes";
cpa["1925"] = "Finhaut";
cpa["1925"] = "Le Châtelard VS";
cpa["1926"] = "Fully";
cpa["1927"] = "Chemin";
cpa["1928"] = "Ravoire";
cpa["1929"] = "Trient";
cpa["1932"] = "Bovernier";
cpa["1932"] = "Les Valettes (Bovernier)";
cpa["1933"] = "Chamoille (Sembrancher)";
cpa["1933"] = "La Garde (Sembrancher)";
cpa["1933"] = "Sembrancher";
cpa["1933"] = "Vens (Sembrancher)";
cpa["1934"] = "Bruson";
cpa["1934"] = "Cotterg (Le Châble VS)";
cpa["1934"] = "Fontenelle (Le Châble VS)";
cpa["1934"] = "Le Châble VS";
cpa["1934"] = "Montagnier (Le Châble VS)";
cpa["1934"] = "Villette (Le Châble VS)";
cpa["1936"] = "Verbier";
cpa["1937"] = "Orsières";
cpa["1938"] = "Champex-Lac";
cpa["1941"] = "Cries (Vollèges)";
cpa["1941"] = "Vollèges";
cpa["1942"] = "Levron";
cpa["1943"] = "Praz-de-Fort";
cpa["1944"] = "La Fouly VS";
cpa["1945"] = "Chandonne (Liddes)";
cpa["1945"] = "Chez Petit (Liddes)";
cpa["1945"] = "Dranse (Liddes)";
cpa["1945"] = "Fontaine Dessous (Liddes)";
cpa["1945"] = "Fontaine Dessus (Liddes)";
cpa["1945"] = "Fornex (Liddes)";
cpa["1945"] = "Les Moulins VS (Liddes)";
cpa["1945"] = "Liddes";
cpa["1945"] = "Palasuit (Liddes)";
cpa["1945"] = "Petit Vichères (Liddes)";
cpa["1945"] = "Rive Haute (Liddes)";
cpa["1945"] = "Vichères (Liddes)";
cpa["1946"] = "Bourg-St-Pierre";
cpa["1947"] = "Champsec (Versegères)";
cpa["1947"] = "La Montoz (Versegères)";
cpa["1947"] = "Le Fregnoley (Versegères)";
cpa["1947"] = "Les Places (Versegères)";
cpa["1947"] = "Prarreyer (Versegères)";
cpa["1947"] = "Versegères";
cpa["1948"] = "Fionnay";
cpa["1948"] = "Le Morgnes (Lourtier)";
cpa["1948"] = "Le Planchamp (Lourtier)";
cpa["1948"] = "Lourtier";
cpa["1948"] = "Sarreyer";
cpa["1950"] = "Sion";
cpa["1955"] = "Chamoson";
cpa["1955"] = "Grugnay (Chamoson)";
cpa["1955"] = "Les Vérines (Chamoson)";
cpa["1955"] = "Némiaz (Chamoson)";
cpa["1955"] = "St-Pierre-de-Clages";
cpa["1957"] = "Ardon";
cpa["1958"] = "St-Léonard";
cpa["1958"] = "Uvrier";
cpa["1961"] = "Vernamiège";
cpa["1962"] = "Pont-de-la-Morge (Sion)";
cpa["1963"] = "Vétroz";
cpa["1964"] = "Conthey";
cpa["1965"] = "Chandolin-près-Savièse";
cpa["1965"] = "Drône VS";
cpa["1965"] = "Granois (Savièse)";
cpa["1965"] = "Mayens-de-la-Zour (Savièse)";
cpa["1965"] = "Monteiller-Savièse";
cpa["1965"] = "Ormône (Savièse)";
cpa["1965"] = "Roumaz (Savièse)";
cpa["1965"] = "St-Germain (Savièse)";
cpa["1965"] = "St-Germain (Savièse)";
cpa["1966"] = "Argnou (Ayent)";
cpa["1966"] = "Blignou (Ayent)";
cpa["1966"] = "Botyre (Ayent)";
cpa["1966"] = "Fortunau (Ayent)";
cpa["1966"] = "La Place (Ayent)";
cpa["1966"] = "Luc (Ayent)";
cpa["1966"] = "Saxonne (Ayent)";
cpa["1966"] = "Signèse (Ayent)";
cpa["1966"] = "St-Romain (Ayent)";
cpa["1966"] = "Villa (Ayent)";
cpa["1967"] = "Bramois";
cpa["1968"] = "Mase";
cpa["1969"] = "Eison (St.Martin)";
cpa["1969"] = "Liez (St-Martin)";
cpa["1969"] = "St-Martin VS";
cpa["1969"] = "Suen (St-Martin)";
cpa["1969"] = "Trogne (St-Martin)";
cpa["1971"] = "Champlan (Grimisuat)";
cpa["1971"] = "Grimisuat";
cpa["1972"] = "Anzère";
cpa["1973"] = "Nax";
cpa["1974"] = "Arbaz";
cpa["1975"] = "St-Séverin";
cpa["1976"] = "Aven";
cpa["1976"] = "Daillon";
cpa["1976"] = "Erde";
cpa["1977"] = "Icogne";
cpa["1978"] = "Lens";
cpa["1981"] = "Vex";
cpa["1982"] = "Euseigne";
cpa["1983"] = "Evolène";
cpa["1983"] = "Lanna";
cpa["1984"] = "La Tour VS";
cpa["1984"] = "Les Haudères";
cpa["1985"] = "La Forclaz VS";
cpa["1985"] = "La Sage";
cpa["1985"] = "Villa (Evolène)";
cpa["1986"] = "Arolla";
cpa["1987"] = "Hérémence";
cpa["1988"] = "Les Collons";
cpa["1988"] = "Thyon";
cpa["1991"] = "Arvillard (Salins)";
cpa["1991"] = "Misériez (Salins)";
cpa["1991"] = "Pravidondaz (Salins)";
cpa["1991"] = "Salins";
cpa["1991"] = "Turin (Salins)";
cpa["1992"] = "Crête-à-l'Oeil (Les Agettes)";
cpa["1992"] = "La Vernaz (Les Agettes)";
cpa["1992"] = "Les Agettes";
cpa["1992"] = "Les Mayens-de-Sion";
cpa["1993"] = "Clèbes (Nendaz)";
cpa["1993"] = "Veysonnaz";
cpa["1994"] = "Aproz (Nendaz)";
cpa["1996"] = "Baar (Nendaz)";
cpa["1996"] = "Basse-Nendaz";
cpa["1996"] = "Beuson (Nendaz)";
cpa["1996"] = "Bieudron (Nendaz)";
cpa["1996"] = "Brignon (Nendaz)";
cpa["1996"] = "Condémines (Nendaz)";
cpa["1996"] = "Fey (Nendaz)";
cpa["1996"] = "Saclentse";
cpa["1997"] = "Haute-Nendaz";
cpa["1997"] = "Siviez (Nendaz)";
cpa["1997"] = "Sornard (Nendaz)";
cpa["2000"] = "Neuchâtel";
cpa["2012"] = "Auvernier";
cpa["2013"] = "Colombier NE";
cpa["2014"] = "Bôle";
cpa["2015"] = "Areuse";
cpa["2016"] = "Cortaillod";
cpa["2017"] = "Boudry";
cpa["2019"] = "Chambrelien";
cpa["2019"] = "Rochefort";
cpa["2022"] = "Bevaix";
cpa["2023"] = "Gorgier";
cpa["2024"] = "St-Aubin-Sauges";
cpa["2025"] = "Chez-le-Bart";
cpa["2027"] = "Fresens";
cpa["2027"] = "Montalchez";
cpa["2028"] = "Vaumarcus";
cpa["2034"] = "Peseux";
cpa["2035"] = "Corcelles NE";
cpa["2036"] = "Cormondrèche";
cpa["2037"] = "Montezillon";
cpa["2037"] = "Montmollin";
cpa["2042"] = "Valangin";
cpa["2043"] = "Boudevilliers";
cpa["2046"] = "Fontaines NE";
cpa["2052"] = "Fontainemelon";
cpa["2052"] = "La Vue-des-Alpes";
cpa["2053"] = "Cernier";
cpa["2054"] = "Chézard-St-Martin";
cpa["2054"] = "Les Vieux-Prés";
cpa["2056"] = "Dombresson";
cpa["2057"] = "Villiers";
cpa["2058"] = "Le Pâquier NE";
cpa["2063"] = "Engollon";
cpa["2063"] = "Fenin";
cpa["2063"] = "Saules";
cpa["2063"] = "Vilars NE";
cpa["2065"] = "Savagnier";
cpa["2067"] = "Chaumont";
cpa["2068"] = "Hauterive NE";
cpa["2072"] = "St-Blaise";
cpa["2073"] = "Enges";
cpa["2074"] = "Marin-Epagnier";
cpa["2075"] = "Thielle";
cpa["2075"] = "Wavre";
cpa["2087"] = "Cornaux NE";
cpa["2088"] = "Cressier NE";
cpa["2103"] = "Noiraigue";
cpa["2105"] = "Travers";
cpa["2108"] = "Couvet";
cpa["2112"] = "Môtiers NE";
cpa["2113"] = "Boveresse";
cpa["2114"] = "Fleurier";
cpa["2115"] = "Buttes";
cpa["2116"] = "Mont-de-Buttes";
cpa["2117"] = "La Côte-aux-Fées";
cpa["2123"] = "St-Sulpice NE";
cpa["2124"] = "Les Sagnettes";
cpa["2126"] = "Les Verrières";
cpa["2127"] = "Les Bayards";
cpa["2149"] = "Brot-Dessous";
cpa["2149"] = "Champ-du-Moulin";
cpa["2149"] = "Fretereules";
cpa["2206"] = "Les Geneveys-sur-Coffrane";
cpa["2207"] = "Coffrane";
cpa["2208"] = "Les Hauts-Geneveys";
cpa["2300"] = "La Chaux-de-Fonds";
cpa["2300"] = "La Cibourg";
cpa["2314"] = "La Sagne NE";
cpa["2316"] = "Les Ponts-de-Martel";
cpa["2316"] = "Petit-Martel";
cpa["2318"] = "Brot-Plamboz";
cpa["2322"] = "Le Crêt-du-Locle";
cpa["2325"] = "Les Planchettes";
cpa["2333"] = "La Cibourg";
cpa["2333"] = "La Ferrière";
cpa["2336"] = "Les Bois";
cpa["2338"] = "Les Emibois";
cpa["2338"] = "Muriaux";
cpa["2340"] = "Le Noirmont";
cpa["2345"] = "La Chaux-des-Breuleux";
cpa["2345"] = "Le Cerneux-Veusil";
cpa["2345"] = "Les Breuleux";
cpa["2350"] = "Saignelégier";
cpa["2353"] = "Les Pommerats";
cpa["2354"] = "Goumois";
cpa["2360"] = "Le Bémont JU";
cpa["2362"] = "Montfaucon";
cpa["2362"] = "Montfavergier";
cpa["2363"] = "Les Enfers";
cpa["2364"] = "St-Brais";
cpa["2400"] = "Le Locle";
cpa["2400"] = "Le Locle";
cpa["2400"] = "Le Prévoux";
cpa["2405"] = "La Chaux-du-Milieu";
cpa["2406"] = "La Brévine";
cpa["2406"] = "La Châtagne";
cpa["2406"] = "Le Brouillet";
cpa["2406"] = "Les Taillères";
cpa["2414"] = "Le Cerneux-Péquignot";
cpa["2416"] = "Les Brenets";
cpa["2502"] = "Biel/Bienne";
cpa["2503"] = "Biel/Bienne";
cpa["2504"] = "Biel/Bienne";
cpa["2505"] = "Biel/Bienne";
cpa["2512"] = "Tüscherz-Alfermée";
cpa["2513"] = "Twann";
cpa["2514"] = "Ligerz";
cpa["2515"] = "Prêles";
cpa["2516"] = "Lamboing";
cpa["2517"] = "Diesse";
cpa["2518"] = "Nods";
cpa["2520"] = "La Neuveville";
cpa["2523"] = "Lignières";
cpa["2525"] = "Le Landeron";
cpa["2532"] = "Macolin";
cpa["2533"] = "Evilard";
cpa["2534"] = "Les Prés-d'Orvin";
cpa["2534"] = "Orvin";
cpa["2535"] = "Frinvillier";
cpa["2536"] = "Plagne";
cpa["2537"] = "Vauffelin";
cpa["2538"] = "Romont BE";
cpa["2540"] = "Grenchen";
cpa["2542"] = "Pieterlen";
cpa["2543"] = "Lengnau BE";
cpa["2544"] = "Bettlach";
cpa["2545"] = "Selzach";
cpa["2552"] = "Orpund";
cpa["2553"] = "Safnern";
cpa["2554"] = "Meinisberg";
cpa["2555"] = "Brügg BE";
cpa["2556"] = "Scheuren";
cpa["2556"] = "Schwadernau";
cpa["2557"] = "Studen BE";
cpa["2558"] = "Aegerten";
cpa["2560"] = "Nidau";
cpa["2562"] = "Port";
cpa["2563"] = "Ipsach";
cpa["2564"] = "Bellmund";
cpa["2565"] = "Jens";
cpa["2572"] = "Mörigen";
cpa["2572"] = "Sutz";
cpa["2575"] = "Gerolfingen";
cpa["2575"] = "Hagneck";
cpa["2575"] = "Täuffelen";
cpa["2576"] = "Lüscherz";
cpa["2577"] = "Finsterhennen";
cpa["2577"] = "Siselen BE";
cpa["2603"] = "Péry";
cpa["2604"] = "La Heutte";
cpa["2605"] = "Sonceboz-Sombeval";
cpa["2606"] = "Corgémont";
cpa["2607"] = "Cortébert";
cpa["2608"] = "Courtelary";
cpa["2608"] = "Montagne-de-Courtelary";
cpa["2610"] = "Les Pontins";
cpa["2610"] = "Mont-Crosin";
cpa["2610"] = "Mont-Soleil";
cpa["2610"] = "St-Imier";
cpa["2612"] = "Cormoret";
cpa["2613"] = "Villeret";
cpa["2615"] = "Montagne-de-Sonvilier";
cpa["2615"] = "Sonvilier";
cpa["2616"] = "La Cibourg";
cpa["2616"] = "Renan BE";
cpa["2710"] = "Tavannes";
cpa["2712"] = "Le Fuet";
cpa["2713"] = "Bellelay";
cpa["2714"] = "Le Prédame";
cpa["2714"] = "Les Genevez JU";
cpa["2715"] = "Châtelat";
cpa["2715"] = "Monible";
cpa["2716"] = "Sornetan";
cpa["2717"] = "Fornet-Dessous";
cpa["2717"] = "Rebévelier";
cpa["2718"] = "Fornet-Dessus";
cpa["2718"] = "Lajoux JU";
cpa["2720"] = "La Tanne";
cpa["2720"] = "Tramelan";
cpa["2722"] = "Les Reussilles";
cpa["2723"] = "Mont-Tramelan";
cpa["2732"] = "Loveresse";
cpa["2732"] = "Reconvilier";
cpa["2732"] = "Saicourt";
cpa["2732"] = "Saules BE";
cpa["2733"] = "Pontenet";
cpa["2735"] = "Bévilard";
cpa["2735"] = "Champoz";
cpa["2735"] = "Malleray";
cpa["2736"] = "Sorvilier";
cpa["2738"] = "Court";
cpa["2740"] = "Moutier";
cpa["2742"] = "Perrefitte";
cpa["2743"] = "Eschert";
cpa["2744"] = "Belprahon";
cpa["2745"] = "Grandval";
cpa["2746"] = "Crémines";
cpa["2747"] = "Corcelles BE";
cpa["2747"] = "Seehof";
cpa["2748"] = "Les Ecorcheresses";
cpa["2748"] = "Souboz";
cpa["2762"] = "Roches BE";
cpa["2800"] = "Delémont";
cpa["2802"] = "Develier";
cpa["2803"] = "Bourrignon";
cpa["2805"] = "Soyhières";
cpa["2806"] = "Mettembert";
cpa["2807"] = "Lucelle";
cpa["2807"] = "Pleigne";
cpa["2812"] = "Movelier";
cpa["2813"] = "Ederswiler";
cpa["2814"] = "Roggenburg";
cpa["2822"] = "Courroux";
cpa["2823"] = "Courcelon";
cpa["2824"] = "Vicques";
cpa["2825"] = "Courchapoix";
cpa["2826"] = "Corban";
cpa["2827"] = "Mervelier";
cpa["2827"] = "Schelten";
cpa["2828"] = "Montsevelier";
cpa["2829"] = "Vermes";
cpa["2830"] = "Courrendlin";
cpa["2830"] = "Vellerat";
cpa["2832"] = "Rebeuvelier";
cpa["2842"] = "Rossemaison";
cpa["2843"] = "Châtillon JU";
cpa["2852"] = "Courtételle";
cpa["2853"] = "Courfaivre";
cpa["2854"] = "Bassecourt";
cpa["2855"] = "Glovelier";
cpa["2856"] = "Boécourt";
cpa["2857"] = "Montavon";
cpa["2863"] = "Undervelier";
cpa["2864"] = "Soulce";
cpa["2873"] = "Saulcy";
cpa["2882"] = "St-Ursanne";
cpa["2882"] = "St-Ursanne";
cpa["2883"] = "Montmelon";
cpa["2884"] = "Montenol";
cpa["2885"] = "Epauvillers";
cpa["2886"] = "Epiquerez";
cpa["2887"] = "Soubey";
cpa["2888"] = "Seleute";
cpa["2889"] = "Ocourt";
cpa["2900"] = "Porrentruy";
cpa["2902"] = "Fontenais";
cpa["2903"] = "Villars-sur-Fontenais";
cpa["2904"] = "Bressaucourt";
cpa["2905"] = "Courtedoux";
cpa["2906"] = "Chevenez";
cpa["2907"] = "Rocourt";
cpa["2908"] = "Grandfontaine";
cpa["2912"] = "Roche-d'Or";
cpa["2912"] = "Réclère";
cpa["2914"] = "Damvant";
cpa["2915"] = "Bure";
cpa["2916"] = "Fahy";
cpa["2922"] = "Courchavon";
cpa["2923"] = "Courtemaîche";
cpa["2924"] = "Montignez";
cpa["2925"] = "Buix";
cpa["2926"] = "Boncourt";
cpa["2932"] = "Coeuve";
cpa["2933"] = "Damphreux";
cpa["2933"] = "Lugnez";
cpa["2935"] = "Beurnevésin";
cpa["2942"] = "Alle";
cpa["2943"] = "Vendlincourt";
cpa["2944"] = "Bonfol";
cpa["2946"] = "Miécourt";
cpa["2947"] = "Charmoille";
cpa["2950"] = "Courgenay";
cpa["2950"] = "Courtemautruy";
cpa["2952"] = "Cornol";
cpa["2953"] = "Fregiécourt";
cpa["2953"] = "Pleujouse";
cpa["2954"] = "Asuel";
cpa["3004"] = "Bern";
cpa["3005"] = "Bern";
cpa["3006"] = "Bern";
cpa["3007"] = "Bern";
cpa["3008"] = "Bern";
cpa["3010"] = "Bern";
cpa["3011"] = "Bern";
cpa["3011"] = "Bern";
cpa["3012"] = "Bern";
cpa["3013"] = "Bern";
cpa["3014"] = "Bern";
cpa["3015"] = "Bern";
cpa["3018"] = "Bern";
cpa["3019"] = "Bern";
cpa["3020"] = "Bern";
cpa["3027"] = "Bern";
cpa["3032"] = "Hinterkappelen";
cpa["3033"] = "Wohlen b. Bern";
cpa["3034"] = "Murzelen";
cpa["3035"] = "Frieswil";
cpa["3036"] = "Detligen";
cpa["3037"] = "Herrenschwanden";
cpa["3038"] = "Kirchlindach";
cpa["3042"] = "Ortschwaben";
cpa["3043"] = "Uettligen";
cpa["3044"] = "Innerberg";
cpa["3045"] = "Meikirch";
cpa["3046"] = "Wahlendorf";
cpa["3047"] = "Bremgarten b. Bern";
cpa["3048"] = "Worblaufen";
cpa["3049"] = "Säriswil";
cpa["3052"] = "Zollikofen";
cpa["3053"] = "Deisswil b. Münchenbuchsee";
cpa["3053"] = "Diemerswil";
cpa["3053"] = "Lätti";
cpa["3053"] = "Münchenbuchsee";
cpa["3053"] = "Wiggiswil";
cpa["3054"] = "Schüpfen";
cpa["3063"] = "Ittigen";
cpa["3065"] = "Bolligen";
cpa["3066"] = "Stettlen";
cpa["3067"] = "Boll";
cpa["3068"] = "Utzigen";
cpa["3072"] = "Ostermundigen";
cpa["3073"] = "Gümligen";
cpa["3074"] = "Muri b. Bern";
cpa["3075"] = "Rüfenacht BE";
cpa["3075"] = "Vielbringen b. Worb";
cpa["3076"] = "Worb";
cpa["3077"] = "Enggistein";
cpa["3078"] = "Richigen";
cpa["3082"] = "Schlosswil";
cpa["3083"] = "Trimstein";
cpa["3084"] = "Wabern";
cpa["3086"] = "Englisberg";
cpa["3086"] = "Zimmerwald";
cpa["3087"] = "Niedermuhlern";
cpa["3088"] = "Oberbütschel";
cpa["3088"] = "Rüeggisberg";
cpa["3089"] = "Hinterfultigen";
cpa["3095"] = "Spiegel b. Bern";
cpa["3096"] = "Oberbalm";
cpa["3097"] = "Liebefeld";
cpa["3098"] = "Köniz";
cpa["3098"] = "Schliern b. Köniz";
cpa["3099"] = "Rüti b. Riggisberg";
cpa["3110"] = "Münsingen";
cpa["3111"] = "Tägertschi";
cpa["3112"] = "Allmendingen b. Bern";
cpa["3113"] = "Rubigen";
cpa["3114"] = "Wichtrach";
cpa["3115"] = "Gerzensee";
cpa["3116"] = "Kirchdorf BE";
cpa["3116"] = "Mühledorf BE";
cpa["3116"] = "Noflen BE";
cpa["3122"] = "Kehrsatz";
cpa["3123"] = "Belp";
cpa["3124"] = "Belpberg";
cpa["3125"] = "Toffen";
cpa["3126"] = "Gelterfingen";
cpa["3126"] = "Kaufdorf";
cpa["3127"] = "Lohnstorf";
cpa["3127"] = "Mühlethurnen";
cpa["3128"] = "Kirchenthurnen";
cpa["3128"] = "Rümligen";
cpa["3132"] = "Riggisberg";
cpa["3144"] = "Gasel";
cpa["3145"] = "Niederscherli";
cpa["3147"] = "Mittelhäusern";
cpa["3148"] = "Lanzenhäusern";
cpa["3150"] = "Schwarzenburg";
cpa["3152"] = "Mamishaus";
cpa["3153"] = "Rüschegg Gambach";
cpa["3154"] = "Rüschegg Heubach";
cpa["3155"] = "Helgisried-Rohrbach";
cpa["3156"] = "Riffenmatt";
cpa["3157"] = "Milken";
cpa["3158"] = "Guggisberg";
cpa["3159"] = "Riedstätt";
cpa["3172"] = "Niederwangen b. Bern";
cpa["3173"] = "Oberwangen b. Bern";
cpa["3174"] = "Thörishaus";
cpa["3175"] = "Flamatt";
cpa["3176"] = "Neuenegg";
cpa["3177"] = "Laupen BE";
cpa["3178"] = "Bösingen";
cpa["3179"] = "Kriechenwil";
cpa["3182"] = "Ueberstorf";
cpa["3183"] = "Albligen";
cpa["3184"] = "Wünnewil";
cpa["3185"] = "Schmitten FR";
cpa["3186"] = "Düdingen";
cpa["3202"] = "Frauenkappelen";
cpa["3203"] = "Mühleberg";
cpa["3204"] = "Rosshäusern";
cpa["3205"] = "Gümmenen";
cpa["3206"] = "Biberen";
cpa["3206"] = "Ferenbalm";
cpa["3206"] = "Gammen";
cpa["3206"] = "Rizenbach";
cpa["3206"] = "Wallenbuch";
cpa["3207"] = "Golaten";
cpa["3207"] = "Wileroltigen";
cpa["3208"] = "Gurbrü";
cpa["3210"] = "Kerzers";
cpa["3212"] = "Gurmels";
cpa["3212"] = "Kleingurmels";
cpa["3213"] = "Kleinbösingen";
cpa["3213"] = "Liebistorf";
cpa["3214"] = "Ulmiz";
cpa["3215"] = "Büchslen";
cpa["3215"] = "Gempenach";
cpa["3215"] = "Lurtigen";
cpa["3216"] = "Agriswil";
cpa["3216"] = "Ried b. Kerzers";
cpa["3225"] = "Müntschemier";
cpa["3226"] = "Treiten";
cpa["3232"] = "Ins";
cpa["3233"] = "Tschugg";
cpa["3234"] = "Vinelz";
cpa["3235"] = "Erlach";
cpa["3236"] = "Gampelen";
cpa["3237"] = "Brüttelen";
cpa["3238"] = "Gals";
cpa["3250"] = "Lyss";
cpa["3251"] = "Ruppoldsried";
cpa["3251"] = "Wengi b. Büren";
cpa["3252"] = "Worben";
cpa["3253"] = "Schnottwil";
cpa["3254"] = "Balm b. Messen";
cpa["3254"] = "Messen";
cpa["3255"] = "Rapperswil BE";
cpa["3256"] = "Bangerten b. Dieterswil";
cpa["3256"] = "Dieterswil";
cpa["3256"] = "Seewil";
cpa["3257"] = "Ammerzwil BE";
cpa["3257"] = "Grossaffoltern";
cpa["3262"] = "Suberg";
cpa["3263"] = "Büetigen";
cpa["3264"] = "Diessbach b. Büren";
cpa["3266"] = "Wiler b. Seedorf";
cpa["3267"] = "Seedorf BE";
cpa["3268"] = "Lobsigen";
cpa["3270"] = "Aarberg";
cpa["3271"] = "Radelfingen b. Aarberg";
cpa["3272"] = "Epsach";
cpa["3272"] = "Walperswil";
cpa["3273"] = "Kappelen";
cpa["3274"] = "Bühl b. Aarberg";
cpa["3274"] = "Hermrigen";
cpa["3274"] = "Merzligen";
cpa["3280"] = "Greng";
cpa["3280"] = "Meyriez";
cpa["3280"] = "Murten";
cpa["3282"] = "Bargen BE";
cpa["3283"] = "Kallnach";
cpa["3283"] = "Niederried b. Kallnach";
cpa["3284"] = "Fräschels";
cpa["3285"] = "Galmiz";
cpa["3286"] = "Muntelier";
cpa["3292"] = "Busswil BE";
cpa["3293"] = "Dotzigen";
cpa["3294"] = "Büren an der Aare";
cpa["3294"] = "Meienried";
cpa["3295"] = "Rüti b. Büren";
cpa["3296"] = "Arch";
cpa["3297"] = "Leuzigen";
cpa["3298"] = "Oberwil b. Büren";
cpa["3302"] = "Moosseedorf";
cpa["3303"] = "Ballmoos";
cpa["3303"] = "Jegenstorf";
cpa["3303"] = "Münchringen";
cpa["3303"] = "Zuzwil BE";
cpa["3305"] = "Iffwil";
cpa["3305"] = "Scheunen";
cpa["3306"] = "Etzelkofen";
cpa["3307"] = "Brunnenthal";
cpa["3308"] = "Grafenried";
cpa["3309"] = "Kernenried";
cpa["3309"] = "Zauggenried";
cpa["3312"] = "Fraubrunnen";
cpa["3313"] = "Büren zum Hof";
cpa["3314"] = "Schalunen";
cpa["3315"] = "Bätterkinden";
cpa["3315"] = "Bätterkinden";
cpa["3315"] = "Kräiligen";
cpa["3317"] = "Limpach";
cpa["3317"] = "Mülchi";
cpa["3322"] = "Mattstetten";
cpa["3322"] = "Urtenen-Schönbühl";
cpa["3323"] = "Bäriswil BE";
cpa["3324"] = "Hindelbank";
cpa["3324"] = "Mötschwil";
cpa["3325"] = "Hettiswil b. Hindelbank";
cpa["3326"] = "Krauchthal";
cpa["3360"] = "Herzogenbuchsee";
cpa["3362"] = "Niederönz";
cpa["3363"] = "Oberönz";
cpa["3365"] = "Grasswil";
cpa["3365"] = "Seeberg";
cpa["3366"] = "Bettenhausen";
cpa["3366"] = "Bollodingen";
cpa["3367"] = "Ochlenberg";
cpa["3367"] = "Thörigen";
cpa["3368"] = "Bleienbach";
cpa["3372"] = "Wanzwil";
cpa["3373"] = "Heimenhausen";
cpa["3373"] = "Röthenbach Herzogenbuchsee";
cpa["3374"] = "Wangenried";
cpa["3375"] = "Inkwil";
cpa["3376"] = "Berken";
cpa["3376"] = "Graben";
cpa["3377"] = "Walliswil b. Wangen";
cpa["3380"] = "Walliswil b. Niederbipp";
cpa["3380"] = "Wangen an der Aare";
cpa["3400"] = "Burgdorf";
cpa["3412"] = "Heimiswil";
cpa["3413"] = "Kaltacker";
cpa["3414"] = "Oberburg";
cpa["3415"] = "Hasle b. Burgdorf";
cpa["3415"] = "Rüegsauschachen";
cpa["3415"] = "Schafhausen im Emmental";
cpa["3416"] = "Affoltern im Emmental";
cpa["3417"] = "Rüegsau";
cpa["3418"] = "Rüegsbach";
cpa["3419"] = "Biembach im Emmental";
cpa["3421"] = "Lyssach";
cpa["3421"] = "Lyssach";
cpa["3421"] = "Rüti b. Lyssach";
cpa["3422"] = "Alchenflüh";
cpa["3422"] = "Kirchberg BE";
cpa["3422"] = "Rüdtligen";
cpa["3423"] = "Ersigen";
cpa["3424"] = "Niederösch";
cpa["3424"] = "Oberösch";
cpa["3425"] = "Koppigen";
cpa["3425"] = "Willadingen";
cpa["3426"] = "Aefligen";
cpa["3427"] = "Utzenstorf";
cpa["3428"] = "Wiler b. Utzenstorf";
cpa["3429"] = "Hellsau";
cpa["3429"] = "Höchstetten";
cpa["3432"] = "Lützelflüh-Goldbach";
cpa["3433"] = "Schwanden im Emmental";
cpa["3434"] = "Landiswil";
cpa["3434"] = "Obergoldbach";
cpa["3435"] = "Ramsei";
cpa["3436"] = "Zollbrück";
cpa["3437"] = "Rüderswil";
cpa["3438"] = "Lauperswil";
cpa["3439"] = "Ranflüh";
cpa["3452"] = "Grünenmatt";
cpa["3453"] = "Heimisbach";
cpa["3454"] = "Sumiswald";
cpa["3455"] = "Grünen";
cpa["3456"] = "Trachselwald";
cpa["3457"] = "Wasen im Emmental";
cpa["3462"] = "Weier im Emmental";
cpa["3463"] = "Häusernmoos im Emmental";
cpa["3464"] = "Schmidigen-Mühleweg";
cpa["3465"] = "Dürrenroth";
cpa["3472"] = "Rumendingen";
cpa["3472"] = "Wynigen";
cpa["3473"] = "Alchenstorf";
cpa["3474"] = "Rüedisbach";
cpa["3475"] = "Hermiswil";
cpa["3475"] = "Riedtwil";
cpa["3476"] = "Oschwand";
cpa["3503"] = "Gysenstein";
cpa["3504"] = "Niederhünigen";
cpa["3504"] = "Oberhünigen";
cpa["3506"] = "Grosshöchstetten";
cpa["3507"] = "Biglen";
cpa["3508"] = "Arni BE";
cpa["3510"] = "Freimettigen";
cpa["3510"] = "Häutligen";
cpa["3510"] = "Konolfingen";
cpa["3512"] = "Walkringen";
cpa["3513"] = "Bigenthal";
cpa["3531"] = "Oberthal";
cpa["3532"] = "Mirchel";
cpa["3532"] = "Zäziwil";
cpa["3533"] = "Bowil";
cpa["3534"] = "Signau";
cpa["3535"] = "Schüpbach";
cpa["3536"] = "Aeschau";
cpa["3537"] = "Eggiwil";
cpa["3538"] = "Röthenbach im Emmental";
cpa["3543"] = "Emmenmatt";
cpa["3550"] = "Langnau im Emmental";
cpa["3551"] = "Oberfrittenbach";
cpa["3552"] = "Bärau";
cpa["3553"] = "Gohl";
cpa["3555"] = "Trubschachen";
cpa["3556"] = "Trub";
cpa["3557"] = "Fankhaus (Trub)";
cpa["3600"] = "Thun";
cpa["3603"] = "Thun";
cpa["3604"] = "Thun";
cpa["3608"] = "Thun";
cpa["3612"] = "Steffisburg";
cpa["3613"] = "Steffisburg";
cpa["3614"] = "Unterlangenegg";
cpa["3615"] = "Heimenschwand";
cpa["3616"] = "Schwarzenegg";
cpa["3617"] = "Fahrni b. Thun";
cpa["3618"] = "Süderen";
cpa["3619"] = "Eriz";
cpa["3619"] = "Innereriz";
cpa["3622"] = "Homberg b. Thun";
cpa["3623"] = "Buchen BE";
cpa["3623"] = "Horrenbach";
cpa["3623"] = "Teuffenthal b. Thun";
cpa["3624"] = "Goldiwil (Thun)";
cpa["3624"] = "Schwendibach";
cpa["3625"] = "Heiligenschwendi";
cpa["3626"] = "Hünibach";
cpa["3627"] = "Heimberg";
cpa["3628"] = "Kienersrüti";
cpa["3628"] = "Uttigen";
cpa["3629"] = "Jaberg";
cpa["3629"] = "Kiesen";
cpa["3629"] = "Oppligen";
cpa["3631"] = "Höfen b. Thun";
cpa["3632"] = "Niederstocken";
cpa["3632"] = "Oberstocken";
cpa["3633"] = "Amsoldingen";
cpa["3634"] = "Thierachern";
cpa["3635"] = "Uebeschi";
cpa["3636"] = "Forst b. Längenbühl";
cpa["3636"] = "Längenbühl";
cpa["3638"] = "Blumenstein";
cpa["3638"] = "Pohlern";
cpa["3645"] = "Gwatt (Thun)";
cpa["3645"] = "Zwieselberg";
cpa["3646"] = "Einigen";
cpa["3647"] = "Reutigen";
cpa["3652"] = "Hilterfingen";
cpa["3653"] = "Oberhofen am Thunersee";
cpa["3654"] = "Gunten";
cpa["3655"] = "Sigriswil";
cpa["3656"] = "Aeschlen ob Gunten";
cpa["3656"] = "Ringoldswil";
cpa["3656"] = "Tschingel ob Gunten";
cpa["3657"] = "Schwanden (Sigriswil)";
cpa["3658"] = "Merligen";
cpa["3661"] = "Uetendorf";
cpa["3662"] = "Seftigen";
cpa["3663"] = "Gurzelen";
cpa["3664"] = "Burgistein";
cpa["3665"] = "Wattenwil";
cpa["3671"] = "Brenzikofen";
cpa["3671"] = "Herbligen";
cpa["3672"] = "Aeschlen b. Oberdiessbach";
cpa["3672"] = "Oberdiessbach";
cpa["3673"] = "Linden";
cpa["3674"] = "Bleiken b. Oberdiessbach";
cpa["3700"] = "Spiez";
cpa["3702"] = "Hondrich";
cpa["3703"] = "Aeschi b. Spiez";
cpa["3703"] = "Aeschiried";
cpa["3704"] = "Krattigen";
cpa["3705"] = "Faulensee";
cpa["3706"] = "Leissigen";
cpa["3707"] = "Därligen";
cpa["3711"] = "Emdthal";
cpa["3711"] = "Mülenen";
cpa["3713"] = "Reichenbach im Kandertal";
cpa["3714"] = "Frutigen";
cpa["3714"] = "Wengi b. Frutigen";
cpa["3715"] = "Adelboden";
cpa["3716"] = "Kandergrund";
cpa["3717"] = "Blausee-Mitholz";
cpa["3718"] = "Kandersteg";
cpa["3722"] = "Scharnachtal";
cpa["3723"] = "Kiental";
cpa["3724"] = "Ried (Frutigen)";
cpa["3725"] = "Achseten";
cpa["3752"] = "Wimmis";
cpa["3753"] = "Oey";
cpa["3754"] = "Diemtigen";
cpa["3755"] = "Horboden";
cpa["3756"] = "Zwischenflüh";
cpa["3757"] = "Schwenden im Diemtigtal";
cpa["3758"] = "Latterbach";
cpa["3762"] = "Erlenbach im Simmental";
cpa["3763"] = "Därstetten";
cpa["3764"] = "Weissenburg";
cpa["3765"] = "Oberwil im Simmental";
cpa["3766"] = "Boltigen";
cpa["3770"] = "Zweisimmen";
cpa["3771"] = "Blankenburg";
cpa["3772"] = "St. Stephan";
cpa["3773"] = "Matten (St. Stephan)";
cpa["3775"] = "Lenk im Simmental";
cpa["3776"] = "Oeschseite";
cpa["3777"] = "Saanenmöser";
cpa["3778"] = "Schönried";
cpa["3780"] = "Gstaad";
cpa["3781"] = "Turbach";
cpa["3782"] = "Lauenen b. Gstaad";
cpa["3783"] = "Grund b. Gstaad";
cpa["3784"] = "Feutersoey";
cpa["3785"] = "Gsteig b. Gstaad";
cpa["3792"] = "Saanen";
cpa["3800"] = "Interlaken";
cpa["3800"] = "Interlaken";
cpa["3800"] = "Matten b. Interlaken";
cpa["3800"] = "Sundlauenen";
cpa["3800"] = "Unterseen";
cpa["3801"] = "Jungfraujoch";
cpa["3803"] = "Beatenberg";
cpa["3804"] = "Habkern";
cpa["3805"] = "Goldswil b. Interlaken";
cpa["3806"] = "Bönigen b. Interlaken";
cpa["3807"] = "Iseltwald";
cpa["3812"] = "Wilderswil";
cpa["3813"] = "Saxeten";
cpa["3814"] = "Gsteigwiler";
cpa["3815"] = "Gündlischwand";
cpa["3815"] = "Zweilütschinen";
cpa["3816"] = "Burglauenen";
cpa["3816"] = "Lütschental";
cpa["3818"] = "Grindelwald";
cpa["3822"] = "Isenfluh";
cpa["3822"] = "Lauterbrunnen";
cpa["3823"] = "Eigergletscher";
cpa["3823"] = "Kleine Scheidegg";
cpa["3823"] = "Wengen";
cpa["3824"] = "Stechelberg";
cpa["3825"] = "Mürren";
cpa["3826"] = "Gimmelwald";
cpa["3852"] = "Ringgenberg BE";
cpa["3853"] = "Niederried b. Interlaken";
cpa["3854"] = "Oberried am Brienzersee";
cpa["3855"] = "Axalp";
cpa["3855"] = "Brienz BE";
cpa["3855"] = "Schwanden b. Brienz";
cpa["3856"] = "Brienzwiler";
cpa["3857"] = "Unterbach BE";
cpa["3858"] = "Hofstetten b. Brienz";
cpa["3860"] = "Brünig";
cpa["3860"] = "Meiringen";
cpa["3860"] = "Rosenlaui";
cpa["3860"] = "Schattenhalb";
cpa["3862"] = "Innertkirchen";
cpa["3863"] = "Gadmen";
cpa["3864"] = "Guttannen";
cpa["3900"] = "Brig";
cpa["3900"] = "Brigerbad";
cpa["3900"] = "Gamsen";
cpa["3901"] = "Rothwald";
cpa["3902"] = "Glis";
cpa["3903"] = "Birgisch";
cpa["3903"] = "Mund";
cpa["3904"] = "Naters";
cpa["3905"] = "Saas-Almagell";
cpa["3906"] = "Saas-Fee";
cpa["3907"] = "Gabi (Simplon)";
cpa["3907"] = "Gondo";
cpa["3907"] = "Simplon Dorf";
cpa["3908"] = "Saas-Balen";
cpa["3910"] = "Saas-Grund";
cpa["3911"] = "Ried-Brig";
cpa["3912"] = "Termen";
cpa["3913"] = "Rosswald";
cpa["3914"] = "Belalp";
cpa["3914"] = "Blatten b. Naters";
cpa["3916"] = "Ferden";
cpa["3917"] = "Goppenstein";
cpa["3917"] = "Kippel";
cpa["3918"] = "Wiler (Lötschen)";
cpa["3919"] = "Blatten (Lötschen)";
cpa["3920"] = "Zermatt";
cpa["3922"] = "Eisten";
cpa["3922"] = "Kalpetran";
cpa["3922"] = "Stalden VS";
cpa["3923"] = "Törbel";
cpa["3924"] = "Gasenried";
cpa["3924"] = "St. Niklaus VS";
cpa["3925"] = "Grächen";
cpa["3926"] = "Embd";
cpa["3927"] = "Herbriggen";
cpa["3928"] = "Randa";
cpa["3929"] = "Täsch";
cpa["3930"] = "Eyholz";
cpa["3930"] = "Visp";
cpa["3931"] = "Lalden";
cpa["3932"] = "Visperterminen";
cpa["3933"] = "Staldenried";
cpa["3934"] = "Zeneggen";
cpa["3935"] = "Bürchen";
cpa["3937"] = "Baltschieder";
cpa["3937"] = "Baltschieder";
cpa["3938"] = "Ausserberg";
cpa["3939"] = "Eggerberg";
cpa["3940"] = "Steg VS";
cpa["3942"] = "Niedergesteln";
cpa["3942"] = "Raron";
cpa["3942"] = "St. German";
cpa["3943"] = "Eischoll";
cpa["3944"] = "Unterbäch VS";
cpa["3945"] = "Gampel";
cpa["3945"] = "Niedergampel";
cpa["3946"] = "Gruben";
cpa["3946"] = "Turtmann";
cpa["3947"] = "Ergisch";
cpa["3948"] = "Oberems";
cpa["3948"] = "Unterems";
cpa["3949"] = "Hohtenn";
cpa["3951"] = "Agarn";
cpa["3952"] = "Susten";
cpa["3953"] = "Inden";
cpa["3953"] = "Leuk Stadt";
cpa["3953"] = "Varen";
cpa["3954"] = "Leukerbad";
cpa["3955"] = "Albinen";
cpa["3956"] = "Guttet-Feschel";
cpa["3957"] = "Bratsch";
cpa["3957"] = "Erschmatt";
cpa["3960"] = "Corin-de-la-Crête";
cpa["3960"] = "Loc";
cpa["3960"] = "Muraz (Sierre)";
cpa["3960"] = "Niouc";
cpa["3960"] = "Sierre";
cpa["3960"] = "Sierre";
cpa["3961"] = "Ayer";
cpa["3961"] = "Chandolin";
cpa["3961"] = "Grimentz";
cpa["3961"] = "Mission";
cpa["3961"] = "St-Jean VS";
cpa["3961"] = "St-Luc";
cpa["3961"] = "Vissoie";
cpa["3961"] = "Zinal";
cpa["3963"] = "Aminona";
cpa["3963"] = "Crans-Montana";
cpa["3963"] = "Montana";
cpa["3965"] = "Chippis";
cpa["3966"] = "Chalais";
cpa["3966"] = "Réchy";
cpa["3967"] = "Vercorin";
cpa["3968"] = "Veyras";
cpa["3970"] = "Salgesch";
cpa["3971"] = "Chermignon";
cpa["3971"] = "Chermignon-d'en-Bas";
cpa["3971"] = "Ollon VS";
cpa["3972"] = "Miège";
cpa["3973"] = "Venthône";
cpa["3974"] = "Mollens VS";
cpa["3975"] = "Randogne";
cpa["3976"] = "Champzabé";
cpa["3976"] = "Noës";
cpa["3977"] = "Granges VS";
cpa["3978"] = "Flanthey";
cpa["3979"] = "Grône";
cpa["3982"] = "Bitsch";
cpa["3983"] = "Bister";
cpa["3983"] = "Filet";
cpa["3983"] = "Goppisberg";
cpa["3983"] = "Greich";
cpa["3983"] = "Mörel";
cpa["3984"] = "Fiesch";
cpa["3984"] = "Fiesch";
cpa["3984"] = "Fieschertal";
cpa["3985"] = "Geschinen";
cpa["3985"] = "Münster VS";
cpa["3986"] = "Ried-Mörel";
cpa["3987"] = "Riederalp";
cpa["3988"] = "Obergesteln";
cpa["3988"] = "Ulrichen";
cpa["3989"] = "Biel VS";
cpa["3989"] = "Blitzingen";
cpa["3989"] = "Niederwald";
cpa["3989"] = "Ritzingen";
cpa["3989"] = "Selkingen";
cpa["3991"] = "Betten";
cpa["3992"] = "Bettmeralp";
cpa["3993"] = "Grengiols";
cpa["3994"] = "Lax";
cpa["3994"] = "Martisberg";
cpa["3995"] = "Ausserbinn";
cpa["3995"] = "Ernen";
cpa["3995"] = "Mühlebach (Goms)";
cpa["3995"] = "Mühlebach (Goms)";
cpa["3995"] = "Steinhaus";
cpa["3995"] = "Steinhaus";
cpa["3996"] = "Binn";
cpa["3997"] = "Bellwald";
cpa["3998"] = "Gluringen";
cpa["3998"] = "Reckingen VS";
cpa["3999"] = "Oberwald";
cpa["4001"] = "Basel";
cpa["4051"] = "Basel";
cpa["4052"] = "Basel";
cpa["4052"] = "Basel";
cpa["4053"] = "Basel";
cpa["4054"] = "Basel";
cpa["4055"] = "Basel";
cpa["4056"] = "Basel";
cpa["4057"] = "Basel";
cpa["4058"] = "Basel";
cpa["4059"] = "Basel";
cpa["4101"] = "Bruderholz";
cpa["4102"] = "Binningen";
cpa["4103"] = "Bottmingen";
cpa["4104"] = "Oberwil BL";
cpa["4105"] = "Biel-Benken BL";
cpa["4106"] = "Therwil";
cpa["4107"] = "Ettingen";
cpa["4108"] = "Witterswil";
cpa["4112"] = "Bättwil";
cpa["4112"] = "Flüh";
cpa["4114"] = "Hofstetten SO";
cpa["4115"] = "Mariastein";
cpa["4116"] = "Metzerlen";
cpa["4117"] = "Burg im Leimental";
cpa["4118"] = "Rodersdorf";
cpa["4123"] = "Allschwil";
cpa["4124"] = "Schönenbuch";
cpa["4125"] = "Riehen";
cpa["4126"] = "Bettingen";
cpa["4127"] = "Birsfelden";
cpa["4132"] = "Muttenz";
cpa["4133"] = "Pratteln";
cpa["4142"] = "Münchenstein";
cpa["4143"] = "Dornach";
cpa["4144"] = "Arlesheim";
cpa["4145"] = "Gempen";
cpa["4146"] = "Hochwald";
cpa["4147"] = "Aesch BL";
cpa["4148"] = "Pfeffingen";
cpa["4153"] = "Reinach BL";
cpa["4202"] = "Duggingen";
cpa["4203"] = "Grellingen";
cpa["4204"] = "Himmelried";
cpa["4206"] = "Seewen SO";
cpa["4207"] = "Bretzwil";
cpa["4208"] = "Nunningen";
cpa["4222"] = "Zwingen";
cpa["4223"] = "Blauen";
cpa["4224"] = "Nenzlingen";
cpa["4225"] = "Brislach";
cpa["4226"] = "Breitenbach";
cpa["4227"] = "Büsserach";
cpa["4228"] = "Erschwil";
cpa["4229"] = "Beinwil SO";
cpa["4232"] = "Fehren";
cpa["4233"] = "Meltingen";
cpa["4234"] = "Zullwil";
cpa["4242"] = "Laufen";
cpa["4243"] = "Dittingen";
cpa["4244"] = "Röschenz";
cpa["4245"] = "Kleinlützel";
cpa["4246"] = "Wahlen b. Laufen";
cpa["4247"] = "Grindel";
cpa["4252"] = "Bärschwil";
cpa["4253"] = "Liesberg";
cpa["4254"] = "Liesberg Dorf";
cpa["4302"] = "Augst BL";
cpa["4303"] = "Kaiseraugst";
cpa["4304"] = "Giebenach";
cpa["4305"] = "Olsberg";
cpa["4310"] = "Rheinfelden";
cpa["4312"] = "Magden";
cpa["4313"] = "Möhlin";
cpa["4314"] = "Zeiningen";
cpa["4315"] = "Zuzgen";
cpa["4316"] = "Hellikon";
cpa["4317"] = "Wegenstetten";
cpa["4322"] = "Mumpf";
cpa["4323"] = "Wallbach";
cpa["4324"] = "Obermumpf";
cpa["4325"] = "Schupfart";
cpa["4332"] = "Stein AG";
cpa["4333"] = "Münchwilen AG";
cpa["4334"] = "Sisseln AG";
cpa["4402"] = "Frenkendorf";
cpa["4410"] = "Liestal";
cpa["4411"] = "Seltisberg";
cpa["4412"] = "Nuglar";
cpa["4413"] = "Büren SO";
cpa["4414"] = "Füllinsdorf";
cpa["4415"] = "Lausen";
cpa["4416"] = "Bubendorf";
cpa["4417"] = "Ziefen";
cpa["4418"] = "Reigoldswil";
cpa["4419"] = "Lupsingen";
cpa["4421"] = "St. Pantaleon";
cpa["4422"] = "Arisdorf";
cpa["4423"] = "Hersberg";
cpa["4424"] = "Arboldswil";
cpa["4425"] = "Titterten";
cpa["4426"] = "Lauwil";
cpa["4431"] = "Bennwil";
cpa["4432"] = "Lampenberg";
cpa["4433"] = "Ramlinsburg";
cpa["4434"] = "Hölstein";
cpa["4435"] = "Niederdorf";
cpa["4436"] = "Liedertswil";
cpa["4436"] = "Oberdorf BL";
cpa["4437"] = "Waldenburg";
cpa["4438"] = "Langenbruck";
cpa["4441"] = "Thürnen";
cpa["4442"] = "Diepflingen";
cpa["4443"] = "Wittinsburg";
cpa["4444"] = "Rümlingen";
cpa["4445"] = "Häfelfingen";
cpa["4446"] = "Buckten";
cpa["4447"] = "Känerkinden";
cpa["4448"] = "Läufelfingen";
cpa["4450"] = "Sissach";
cpa["4451"] = "Wintersingen";
cpa["4452"] = "Itingen";
cpa["4453"] = "Nusshof";
cpa["4455"] = "Zunzgen";
cpa["4456"] = "Tenniken";
cpa["4457"] = "Diegten";
cpa["4458"] = "Eptingen";
cpa["4460"] = "Gelterkinden";
cpa["4461"] = "Böckten";
cpa["4462"] = "Rickenbach BL";
cpa["4463"] = "Buus";
cpa["4464"] = "Maisprach";
cpa["4465"] = "Hemmiken";
cpa["4466"] = "Ormalingen";
cpa["4467"] = "Rothenfluh";
cpa["4468"] = "Kienberg";
cpa["4469"] = "Anwil";
cpa["4492"] = "Tecknau";
cpa["4493"] = "Wenslingen";
cpa["4494"] = "Oltingen";
cpa["4495"] = "Zeglingen";
cpa["4496"] = "Kilchberg BL";
cpa["4497"] = "Rünenberg";
cpa["4500"] = "Solothurn";
cpa["4512"] = "Bellach";
cpa["4513"] = "Langendorf";
cpa["4514"] = "Lommiswil";
cpa["4515"] = "Oberdorf SO";
cpa["4515"] = "Weissenstein b. Solothurn";
cpa["4522"] = "Rüttenen";
cpa["4523"] = "Niederwil SO";
cpa["4524"] = "Balmberg";
cpa["4524"] = "Günsberg";
cpa["4524"] = "Oberbalmberg";
cpa["4525"] = "Balm b. Günsberg";
cpa["4528"] = "Zuchwil";
cpa["4532"] = "Feldbrunnen";
cpa["4533"] = "Riedholz";
cpa["4534"] = "Flumenthal";
cpa["4535"] = "Hubersdorf";
cpa["4535"] = "Kammersrohr";
cpa["4536"] = "Attiswil";
cpa["4537"] = "Wiedlisbach";
cpa["4538"] = "Oberbipp";
cpa["4539"] = "Farnern";
cpa["4539"] = "Rumisberg";
cpa["4542"] = "Luterbach";
cpa["4543"] = "Deitingen";
cpa["4552"] = "Derendingen";
cpa["4553"] = "Subingen";
cpa["4554"] = "Etziken";
cpa["4554"] = "Hüniken";
cpa["4556"] = "Aeschi SO";
cpa["4556"] = "Bolken";
cpa["4556"] = "Burgäschi";
cpa["4556"] = "Steinhof SO";
cpa["4557"] = "Horriwil";
cpa["4558"] = "Heinrichswil";
cpa["4558"] = "Hersiwil";
cpa["4558"] = "Winistorf";
cpa["4562"] = "Biberist";
cpa["4563"] = "Gerlafingen";
cpa["4564"] = "Obergerlafingen";
cpa["4564"] = "Zielebach";
cpa["4565"] = "Recherswil";
cpa["4566"] = "Halten";
cpa["4566"] = "Kriegstetten";
cpa["4566"] = "Oekingen";
cpa["4571"] = "Ichertswil";
cpa["4571"] = "Lüterkofen";
cpa["4573"] = "Lohn-Ammannsegg";
cpa["4574"] = "Lüsslingen";
cpa["4574"] = "Nennigkofen";
cpa["4576"] = "Tscheppach";
cpa["4577"] = "Hessigkofen";
cpa["4578"] = "Bibern SO";
cpa["4579"] = "Gossliwil";
cpa["4581"] = "Küttigkofen";
cpa["4582"] = "Brügglen";
cpa["4583"] = "Aetigkofen";
cpa["4583"] = "Mühledorf SO";
cpa["4584"] = "Gächliwil";
cpa["4584"] = "Lüterswil";
cpa["4585"] = "Biezwil";
cpa["4586"] = "Kyburg-Buchegg";
cpa["4587"] = "Aetingen";
cpa["4588"] = "Brittern";
cpa["4588"] = "Oberramsern";
cpa["4588"] = "Unterramsern";
cpa["4600"] = "Olten";
cpa["4612"] = "Wangen b. Olten";
cpa["4613"] = "Rickenbach SO";
cpa["4614"] = "Hägendorf";
cpa["4615"] = "Allerheiligenberg";
cpa["4616"] = "Kappel SO";
cpa["4617"] = "Gunzgen";
cpa["4618"] = "Boningen";
cpa["4622"] = "Egerkingen";
cpa["4623"] = "Neuendorf";
cpa["4624"] = "Härkingen";
cpa["4625"] = "Oberbuchsiten";
cpa["4626"] = "Niederbuchsiten";
cpa["4628"] = "Wolfwil";
cpa["4629"] = "Fulenbach";
cpa["4632"] = "Trimbach";
cpa["4633"] = "Hauenstein";
cpa["4634"] = "Wisen SO";
cpa["4652"] = "Winznau";
cpa["4653"] = "Obergösgen";
cpa["4654"] = "Lostorf";
cpa["4655"] = "Rohr b. Olten";
cpa["4655"] = "Stüsslingen";
cpa["4656"] = "Starrkirch-Wil";
cpa["4657"] = "Dulliken";
cpa["4658"] = "Däniken SO";
cpa["4663"] = "Aarburg";
cpa["4665"] = "Oftringen";
cpa["4702"] = "Oensingen";
cpa["4703"] = "Kestenholz";
cpa["4704"] = "Niederbipp";
cpa["4704"] = "Wolfisberg";
cpa["4710"] = "Balsthal";
cpa["4712"] = "Laupersdorf";
cpa["4713"] = "Matzendorf";
cpa["4714"] = "Aedermannsdorf";
cpa["4715"] = "Herbetswil";
cpa["4716"] = "Gänsbrunnen";
cpa["4716"] = "Welschenrohr";
cpa["4717"] = "Mümliswil";
cpa["4718"] = "Holderbank SO";
cpa["4719"] = "Ramiswil";
cpa["4800"] = "Zofingen";
cpa["4802"] = "Strengelbach";
cpa["4803"] = "Vordemwald";
cpa["4805"] = "Brittnau";
cpa["4806"] = "Wikon";
cpa["4812"] = "Mühlethal";
cpa["4813"] = "Uerkheim";
cpa["4814"] = "Bottenwil";
cpa["4852"] = "Rothrist";
cpa["4853"] = "Murgenthal";
cpa["4853"] = "Murgenthal";
cpa["4853"] = "Riken AG";
cpa["4856"] = "Glashütten";
cpa["4900"] = "Langenthal";
cpa["4911"] = "Schwarzhäusern";
cpa["4912"] = "Aarwangen";
cpa["4913"] = "Bannwil";
cpa["4914"] = "Roggwil BE";
cpa["4915"] = "St. Urban";
cpa["4916"] = "Untersteckholz";
cpa["4917"] = "Busswil b. Melchnau";
cpa["4917"] = "Melchnau";
cpa["4919"] = "Reisiswil";
cpa["4922"] = "Bützberg";
cpa["4922"] = "Thunstetten";
cpa["4923"] = "Wynau";
cpa["4924"] = "Obersteckholz";
cpa["4932"] = "Gutenburg";
cpa["4932"] = "Lotzwil";
cpa["4933"] = "Rütschelen";
cpa["4934"] = "Madiswil";
cpa["4935"] = "Leimiswil";
cpa["4936"] = "Kleindietwil";
cpa["4937"] = "Ursenbach";
cpa["4938"] = "Rohrbach";
cpa["4938"] = "Rohrbachgraben";
cpa["4942"] = "Walterswil BE";
cpa["4943"] = "Oeschenbach";
cpa["4944"] = "Auswil";
cpa["4950"] = "Huttwil";
cpa["4952"] = "Eriswil";
cpa["4953"] = "Schwarzenbach (Huttwil)";
cpa["4954"] = "Wyssachen";
cpa["4955"] = "Gondiswil";
cpa["5000"] = "Aarau";
cpa["5004"] = "Aarau";
cpa["5012"] = "Eppenberg";
cpa["5012"] = "Schönenwerd";
cpa["5012"] = "Wöschnau";
cpa["5013"] = "Niedergösgen";
cpa["5014"] = "Gretzenbach";
cpa["5015"] = "Erlinsbach SO";
cpa["5017"] = "Barmelweid";
cpa["5018"] = "Erlinsbach";
cpa["5022"] = "Rombach";
cpa["5023"] = "Biberstein";
cpa["5024"] = "Küttigen";
cpa["5025"] = "Asp";
cpa["5026"] = "Densbüren";
cpa["5027"] = "Herznach";
cpa["5028"] = "Ueken";
cpa["5032"] = "Aarau Rohr";
cpa["5033"] = "Buchs AG";
cpa["5034"] = "Suhr";
cpa["5035"] = "Unterentfelden";
cpa["5036"] = "Oberentfelden";
cpa["5037"] = "Muhen";
cpa["5040"] = "Schöftland";
cpa["5042"] = "Hirschthal";
cpa["5043"] = "Holziken";
cpa["5044"] = "Schlossrued";
cpa["5046"] = "Schmiedrued";
cpa["5046"] = "Walde AG";
cpa["5053"] = "Staffelbach";
cpa["5053"] = "Wittwil";
cpa["5054"] = "Kirchleerau";
cpa["5054"] = "Moosleerau";
cpa["5056"] = "Attelwil";
cpa["5057"] = "Reitnau";
cpa["5058"] = "Wiliberg";
cpa["5062"] = "Oberhof";
cpa["5063"] = "Wölflinswil";
cpa["5064"] = "Wittnau";
cpa["5070"] = "Frick";
cpa["5072"] = "Oeschgen";
cpa["5073"] = "Gipf-Oberfrick";
cpa["5074"] = "Eiken";
cpa["5075"] = "Hornussen";
cpa["5076"] = "Bözen";
cpa["5077"] = "Elfingen";
cpa["5078"] = "Effingen";
cpa["5079"] = "Zeihen";
cpa["5080"] = "Laufenburg";
cpa["5082"] = "Kaisten";
cpa["5083"] = "Ittenthal";
cpa["5084"] = "Rheinsulz";
cpa["5085"] = "Sulz AG";
cpa["5102"] = "Rupperswil";
cpa["5103"] = "Möriken AG";
cpa["5103"] = "Wildegg";
cpa["5105"] = "Auenstein";
cpa["5106"] = "Veltheim AG";
cpa["5107"] = "Schinznach Dorf";
cpa["5108"] = "Oberflachs";
cpa["5112"] = "Thalheim AG";
cpa["5113"] = "Holderbank AG";
cpa["5116"] = "Schinznach Bad";
cpa["5200"] = "Brugg AG";
cpa["5210"] = "Windisch";
cpa["5212"] = "Hausen AG";
cpa["5213"] = "Villnachern";
cpa["5222"] = "Umiken";
cpa["5223"] = "Riniken";
cpa["5225"] = "Bözberg";
cpa["5233"] = "Stilli";
cpa["5234"] = "Villigen";
cpa["5235"] = "Rüfenach AG";
cpa["5236"] = "Remigen";
cpa["5237"] = "Mönthal";
cpa["5242"] = "Birr";
cpa["5242"] = "Lupfig";
cpa["5243"] = "Mülligen";
cpa["5244"] = "Birrhard";
cpa["5245"] = "Habsburg";
cpa["5246"] = "Scherz";
cpa["5272"] = "Gansingen";
cpa["5273"] = "Oberhofen AG";
cpa["5274"] = "Mettau";
cpa["5275"] = "Etzgen";
cpa["5276"] = "Wil AG";
cpa["5277"] = "Hottwil";
cpa["5300"] = "Turgi";
cpa["5301"] = "Siggenthal Station";
cpa["5303"] = "Würenlingen";
cpa["5304"] = "Endingen";
cpa["5305"] = "Unterendingen";
cpa["5306"] = "Tegerfelden";
cpa["5312"] = "Döttingen";
cpa["5313"] = "Klingnau";
cpa["5314"] = "Kleindöttingen";
cpa["5315"] = "Böttstein";
cpa["5316"] = "Felsenau AG";
cpa["5316"] = "Leuggern";
cpa["5317"] = "Hettenschwil";
cpa["5318"] = "Mandach";
cpa["5322"] = "Koblenz";
cpa["5323"] = "Rietheim";
cpa["5324"] = "Full-Reuenthal";
cpa["5325"] = "Leibstadt";
cpa["5326"] = "Schwaderloch";
cpa["5330"] = "Bad Zurzach";
cpa["5332"] = "Rekingen AG";
cpa["5333"] = "Baldingen";
cpa["5334"] = "Böbikon";
cpa["5400"] = "Baden";
cpa["5404"] = "Baden";
cpa["5405"] = "Dättwil AG";
cpa["5406"] = "Rütihof";
cpa["5408"] = "Ennetbaden";
cpa["5412"] = "Gebenstorf";
cpa["5412"] = "Vogelsang AG";
cpa["5413"] = "Birmenstorf AG";
cpa["5415"] = "Hertenstein AG";
cpa["5415"] = "Nussbaumen AG";
cpa["5415"] = "Rieden AG";
cpa["5416"] = "Kirchdorf AG";
cpa["5417"] = "Untersiggenthal";
cpa["5420"] = "Ehrendingen";
cpa["5423"] = "Freienwil";
cpa["5425"] = "Schneisingen";
cpa["5426"] = "Lengnau AG";
cpa["5430"] = "Wettingen";
cpa["5432"] = "Neuenhof";
cpa["5436"] = "Würenlos";
cpa["5442"] = "Fislisbach";
cpa["5443"] = "Niederrohrdorf";
cpa["5444"] = "Künten";
cpa["5445"] = "Eggenwil";
cpa["5452"] = "Oberrohrdorf";
cpa["5453"] = "Remetschwil";
cpa["5454"] = "Bellikon";
cpa["5462"] = "Siglistorf";
cpa["5463"] = "Wislikofen";
cpa["5464"] = "Rümikon AG";
cpa["5465"] = "Mellikon";
cpa["5466"] = "Kaiserstuhl AG";
cpa["5467"] = "Fisibach";
cpa["5502"] = "Hunzenschwil";
cpa["5503"] = "Schafisheim";
cpa["5504"] = "Othmarsingen";
cpa["5505"] = "Brunegg";
cpa["5506"] = "Mägenwil";
cpa["5507"] = "Mellingen";
cpa["5512"] = "Wohlenschwil";
cpa["5522"] = "Tägerig";
cpa["5524"] = "Nesselnbach";
cpa["5524"] = "Niederwil AG";
cpa["5525"] = "Fischbach-Göslikon";
cpa["5600"] = "Ammerswil AG";
cpa["5600"] = "Lenzburg";
cpa["5603"] = "Staufen";
cpa["5604"] = "Hendschiken";
cpa["5605"] = "Dottikon";
cpa["5606"] = "Dintikon";
cpa["5607"] = "Hägglingen";
cpa["5608"] = "Stetten AG";
cpa["5610"] = "Wohlen AG";
cpa["5611"] = "Anglikon";
cpa["5612"] = "Villmergen";
cpa["5613"] = "Hilfikon";
cpa["5614"] = "Sarmenstorf";
cpa["5615"] = "Fahrwangen";
cpa["5616"] = "Meisterschwanden";
cpa["5617"] = "Tennwil";
cpa["5618"] = "Bettwil";
cpa["5619"] = "Büttikon AG";
cpa["5619"] = "Uezwil";
cpa["5620"] = "Bremgarten AG";
cpa["5621"] = "Zufikon";
cpa["5622"] = "Waltenschwil";
cpa["5623"] = "Boswil";
cpa["5624"] = "Bünzen";
cpa["5624"] = "Waldhäusern AG";
cpa["5625"] = "Kallern";
cpa["5626"] = "Hermetschwil-Staffeln";
cpa["5627"] = "Besenbüren";
cpa["5628"] = "Aristau";
cpa["5630"] = "Muri AG";
cpa["5632"] = "Buttwil";
cpa["5634"] = "Merenschwand";
cpa["5636"] = "Benzenschwil";
cpa["5637"] = "Beinwil (Freiamt)";
cpa["5637"] = "Geltwil";
cpa["5642"] = "Mühlau";
cpa["5643"] = "Alikon";
cpa["5643"] = "Meienberg";
cpa["5643"] = "Sins";
cpa["5643"] = "Sins";
cpa["5644"] = "Auw";
cpa["5645"] = "Aettenschwil";
cpa["5645"] = "Fenkrieden";
cpa["5646"] = "Abtwil AG";
cpa["5647"] = "Oberrüti";
cpa["5702"] = "Niederlenz";
cpa["5703"] = "Seon";
cpa["5704"] = "Egliswil";
cpa["5705"] = "Hallwil";
cpa["5706"] = "Boniswil";
cpa["5707"] = "Seengen";
cpa["5708"] = "Birrwil";
cpa["5712"] = "Beinwil am See";
cpa["5722"] = "Gränichen";
cpa["5723"] = "Teufenthal AG";
cpa["5724"] = "Dürrenäsch";
cpa["5725"] = "Leutwil";
cpa["5726"] = "Unterkulm";
cpa["5727"] = "Oberkulm";
cpa["5728"] = "Gontenschwil";
cpa["5732"] = "Zetzwil";
cpa["5733"] = "Leimbach AG";
cpa["5734"] = "Reinach AG";
cpa["5735"] = "Pfeffikon LU";
cpa["5736"] = "Burg AG";
cpa["5737"] = "Menziken";
cpa["5742"] = "Kölliken";
cpa["5745"] = "Safenwil";
cpa["5746"] = "Walterswil SO";
cpa["6003"] = "Luzern";
cpa["6004"] = "Luzern";
cpa["6005"] = "Luzern";
cpa["6006"] = "Luzern";
cpa["6010"] = "Kriens";
cpa["6010"] = "Kriens";
cpa["6012"] = "Obernau";
cpa["6013"] = "Eigenthal";
cpa["6014"] = "Luzern";
cpa["6015"] = "Luzern";
cpa["6016"] = "Hellbühl";
cpa["6017"] = "Ruswil";
cpa["6018"] = "Buttisholz";
cpa["6019"] = "Sigigen";
cpa["6020"] = "Emmenbrücke";
cpa["6022"] = "Grosswangen";
cpa["6023"] = "Rothenburg";
cpa["6024"] = "Hildisrieden";
cpa["6025"] = "Neudorf";
cpa["6026"] = "Rain";
cpa["6027"] = "Römerswil LU";
cpa["6028"] = "Herlisberg";
cpa["6030"] = "Ebikon";
cpa["6032"] = "Emmen";
cpa["6033"] = "Buchrain";
cpa["6034"] = "Inwil";
cpa["6035"] = "Perlen";
cpa["6036"] = "Dierikon";
cpa["6037"] = "Root";
cpa["6038"] = "Gisikon";
cpa["6038"] = "Honau";
cpa["6039"] = "Root Längenbold";
cpa["6042"] = "Dietwil";
cpa["6043"] = "Adligenswil";
cpa["6044"] = "Udligenswil";
cpa["6045"] = "Meggen";
cpa["6047"] = "Kastanienbaum";
cpa["6048"] = "Horw";
cpa["6052"] = "Hergiswil NW";
cpa["6053"] = "Alpnachstad";
cpa["6055"] = "Alpnach Dorf";
cpa["6056"] = "Kägiswil";
cpa["6060"] = "Ramersberg";
cpa["6060"] = "Sarnen";
cpa["6062"] = "Wilen (Sarnen)";
cpa["6063"] = "Stalden (Sarnen)";
cpa["6064"] = "Kerns";
cpa["6066"] = "St. Niklausen OW";
cpa["6067"] = "Melchtal";
cpa["6068"] = "Melchsee-Frutt";
cpa["6072"] = "Sachseln";
cpa["6073"] = "Flüeli-Ranft";
cpa["6074"] = "Giswil";
cpa["6078"] = "Bürglen OW";
cpa["6078"] = "Lungern";
cpa["6083"] = "Hasliberg Hohfluh";
cpa["6084"] = "Hasliberg Wasserwendi";
cpa["6085"] = "Hasliberg Goldern";
cpa["6086"] = "Hasliberg Reuti";
cpa["6102"] = "Malters";
cpa["6103"] = "Schwarzenberg LU";
cpa["6105"] = "Schachen LU";
cpa["6106"] = "Werthenstein";
cpa["6110"] = "Fontannen b. Wolhusen";
cpa["6110"] = "Wolhusen";
cpa["6112"] = "Doppleschwand";
cpa["6113"] = "Romoos";
cpa["6114"] = "Steinhuserberg";
cpa["6122"] = "Menznau";
cpa["6123"] = "Geiss";
cpa["6125"] = "Menzberg";
cpa["6126"] = "Daiwil";
cpa["6130"] = "Willisau";
cpa["6132"] = "Rohrmatt";
cpa["6133"] = "Hergiswil b. Willisau";
cpa["6142"] = "Gettnau";
cpa["6143"] = "Ohmstal";
cpa["6144"] = "Zell LU";
cpa["6145"] = "Fischbach LU";
cpa["6146"] = "Grossdietwil";
cpa["6147"] = "Altbüron";
cpa["6152"] = "Hüswil";
cpa["6153"] = "Ufhusen";
cpa["6154"] = "Hofstatt";
cpa["6156"] = "Luthern";
cpa["6156"] = "Luthern Bad";
cpa["6162"] = "Entlebuch";
cpa["6162"] = "Finsterwald b. Entlebuch";
cpa["6162"] = "Rengg";
cpa["6163"] = "Ebnet";
cpa["6166"] = "Hasle LU";
cpa["6167"] = "Bramboden";
cpa["6170"] = "Schüpfheim";
cpa["6173"] = "Flühli LU";
cpa["6174"] = "Sörenberg";
cpa["6182"] = "Escholzmatt";
cpa["6192"] = "Wiggen";
cpa["6196"] = "Marbach LU";
cpa["6197"] = "Schangnau";
cpa["6203"] = "Sempach Station";
cpa["6204"] = "Sempach";
cpa["6205"] = "Eich";
cpa["6206"] = "Neuenkirch";
cpa["6207"] = "Nottwil";
cpa["6208"] = "Oberkirch LU";
cpa["6210"] = "Sursee";
cpa["6211"] = "Buchs LU";
cpa["6212"] = "Kaltbach";
cpa["6212"] = "St. Erhard";
cpa["6213"] = "Knutwil";
cpa["6214"] = "Schenkon";
cpa["6215"] = "Beromünster";
cpa["6215"] = "Schwarzenbach LU";
cpa["6216"] = "Mauensee";
cpa["6217"] = "Kottwil";
cpa["6218"] = "Ettiswil";
cpa["6221"] = "Rickenbach LU";
cpa["6222"] = "Gunzwil";
cpa["6231"] = "Schlierbach";
cpa["6232"] = "Geuensee";
cpa["6233"] = "Büron";
cpa["6234"] = "Kulmerau";
cpa["6234"] = "Triengen";
cpa["6235"] = "Winikon";
cpa["6236"] = "Wilihof";
cpa["6242"] = "Wauwil";
cpa["6243"] = "Egolzwil";
cpa["6244"] = "Nebikon";
cpa["6245"] = "Ebersecken";
cpa["6246"] = "Altishofen";
cpa["6247"] = "Schötz";
cpa["6248"] = "Alberswil";
cpa["6252"] = "Dagmersellen";
cpa["6253"] = "Uffikon";
cpa["6260"] = "Hintermoos";
cpa["6260"] = "Mehlsecken";
cpa["6260"] = "Reiden";
cpa["6260"] = "Reidermoos";
cpa["6262"] = "Langnau b. Reiden";
cpa["6263"] = "Richenthal";
cpa["6264"] = "Pfaffnau";
cpa["6265"] = "Roggliswil";
cpa["6274"] = "Eschenbach LU";
cpa["6275"] = "Ballwil";
cpa["6276"] = "Hohenrain";
cpa["6277"] = "Kleinwangen";
cpa["6277"] = "Lieli LU";
cpa["6280"] = "Hochdorf";
cpa["6280"] = "Urswil";
cpa["6283"] = "Baldegg";
cpa["6284"] = "Gelfingen";
cpa["6284"] = "Sulz LU";
cpa["6285"] = "Hitzkirch";
cpa["6285"] = "Retschwil";
cpa["6286"] = "Altwis";
cpa["6287"] = "Aesch LU";
cpa["6288"] = "Schongau";
cpa["6289"] = "Hämikon";
cpa["6289"] = "Hämikon";
cpa["6289"] = "Müswangen";
cpa["6294"] = "Ermensee";
cpa["6295"] = "Mosen";
cpa["6300"] = "Zug";
cpa["6300"] = "Zugerberg";
cpa["6312"] = "Steinhausen";
cpa["6313"] = "Edlibach";
cpa["6313"] = "Finstersee";
cpa["6313"] = "Menzingen";
cpa["6314"] = "Unterägeri";
cpa["6315"] = "Alosen";
cpa["6315"] = "Morgarten";
cpa["6315"] = "Oberägeri";
cpa["6317"] = "Oberwil b. Zug";
cpa["6318"] = "Walchwil";
cpa["6319"] = "Allenwinden";
cpa["6330"] = "Cham";
cpa["6331"] = "Hünenberg";
cpa["6332"] = "Hagendorn";
cpa["6333"] = "Hünenberg See";
cpa["6340"] = "Baar";
cpa["6340"] = "Sihlbrugg";
cpa["6343"] = "Buonas";
cpa["6343"] = "Holzhäusern ZG";
cpa["6343"] = "Risch";
cpa["6343"] = "Rotkreuz";
cpa["6344"] = "Meierskappel";
cpa["6345"] = "Neuheim";
cpa["6353"] = "Weggis";
cpa["6354"] = "Vitznau";
cpa["6356"] = "Rigi Kaltbad";
cpa["6362"] = "Stansstad";
cpa["6363"] = "Bürgenstock";
cpa["6363"] = "Fürigen";
cpa["6363"] = "Obbürgen";
cpa["6365"] = "Kehrsiten";
cpa["6370"] = "Oberdorf NW";
cpa["6370"] = "Stans";
cpa["6372"] = "Ennetmoos";
cpa["6373"] = "Ennetbürgen";
cpa["6374"] = "Buochs";
cpa["6375"] = "Beckenried";
cpa["6376"] = "Emmetten";
cpa["6377"] = "Seelisberg";
cpa["6382"] = "Büren NW";
cpa["6383"] = "Dallenwil";
cpa["6383"] = "Niederrickenbach";
cpa["6383"] = "Niederrickenbach";
cpa["6383"] = "Wiesenberg";
cpa["6383"] = "Wirzweli";
cpa["6386"] = "Wolfenschiessen";
cpa["6387"] = "Oberrickenbach";
cpa["6388"] = "Grafenort";
cpa["6390"] = "Engelberg";
cpa["6402"] = "Merlischachen";
cpa["6403"] = "Küssnacht am Rigi";
cpa["6404"] = "Greppen";
cpa["6405"] = "Immensee";
cpa["6410"] = "Goldau";
cpa["6410"] = "Rigi Klösterli";
cpa["6410"] = "Rigi Kulm";
cpa["6410"] = "Rigi Scheidegg";
cpa["6410"] = "Rigi Staffel";
cpa["6414"] = "Oberarth";
cpa["6415"] = "Arth";
cpa["6416"] = "Steinerberg";
cpa["6417"] = "Sattel";
cpa["6418"] = "Rothenthurm";
cpa["6422"] = "Steinen";
cpa["6423"] = "Seewen SZ";
cpa["6424"] = "Lauerz";
cpa["6430"] = "Schwyz";
cpa["6432"] = "Rickenbach b. Schwyz";
cpa["6433"] = "Stoos SZ";
cpa["6434"] = "Illgau";
cpa["6436"] = "Bisisthal";
cpa["6436"] = "Muotathal";
cpa["6436"] = "Ried (Muotathal)";
cpa["6438"] = "Ibach";
cpa["6440"] = "Brunnen";
cpa["6441"] = "Rütli";
cpa["6442"] = "Gersau";
cpa["6443"] = "Morschach";
cpa["6452"] = "Riemenstalden";
cpa["6452"] = "Sisikon";
cpa["6454"] = "Flüelen";
cpa["6460"] = "Altdorf UR";
cpa["6461"] = "Isenthal";
cpa["6462"] = "Seedorf UR";
cpa["6463"] = "Bürglen UR";
cpa["6464"] = "Spiringen";
cpa["6465"] = "Unterschächen";
cpa["6466"] = "Bauen";
cpa["6467"] = "Schattdorf";
cpa["6468"] = "Attinghausen";
cpa["6469"] = "Haldi b. Schattdorf";
cpa["6472"] = "Erstfeld";
cpa["6473"] = "Silenen";
cpa["6474"] = "Amsteg";
cpa["6475"] = "Bristen";
cpa["6476"] = "Intschi";
cpa["6482"] = "Gurtnellen";
cpa["6484"] = "Wassen UR";
cpa["6485"] = "Meien";
cpa["6487"] = "Göschenen";
cpa["6490"] = "Andermatt";
cpa["6491"] = "Realp";
cpa["6493"] = "Hospental";
cpa["6500"] = "Bellinzona";
cpa["6503"] = "Bellinzona";
cpa["6512"] = "Giubiasco";
cpa["6513"] = "Monte Carasso";
cpa["6514"] = "Sementina";
cpa["6515"] = "Gudo";
cpa["6516"] = "Cugnasco";
cpa["6517"] = "Arbedo";
cpa["6518"] = "Gorduno";
cpa["6523"] = "Preonzo";
cpa["6524"] = "Moleno";
cpa["6525"] = "Gnosca";
cpa["6526"] = "Prosito";
cpa["6527"] = "Lodrino";
cpa["6528"] = "Camorino";
cpa["6532"] = "Castione";
cpa["6533"] = "Lumino";
cpa["6534"] = "S. Vittore";
cpa["6534"] = "S. Vittore";
cpa["6535"] = "Roveredo GR";
cpa["6537"] = "Grono";
cpa["6538"] = "Verdabbio";
cpa["6538"] = "Verdabbio";
cpa["6540"] = "Castaneda";
cpa["6541"] = "Sta. Maria in Calanca";
cpa["6542"] = "Buseno";
cpa["6543"] = "Arvigo";
cpa["6544"] = "Braggio";
cpa["6545"] = "Selma";
cpa["6546"] = "Cauco";
cpa["6547"] = "Augio";
cpa["6548"] = "Rossa";
cpa["6549"] = "Laura";
cpa["6556"] = "Leggia";
cpa["6557"] = "Cama";
cpa["6558"] = "Lostallo";
cpa["6562"] = "Soazza";
cpa["6563"] = "Mesocco";
cpa["6565"] = "S. Bernardino";
cpa["6571"] = "Indemini";
cpa["6572"] = "Quartino";
cpa["6573"] = "Magadino";
cpa["6574"] = "Vira (Gambarogno)";
cpa["6575"] = "S. Nazzaro";
cpa["6575"] = "Vairano";
cpa["6576"] = "Gerra (Gambarogno)";
cpa["6577"] = "Ranzo";
cpa["6578"] = "Caviano";
cpa["6579"] = "Piazzogna";
cpa["6582"] = "Pianezzo";
cpa["6583"] = "S. Antonio (Val Morobbia)";
cpa["6584"] = "Carena";
cpa["6592"] = "S. Antonino";
cpa["6593"] = "Cadenazzo";
cpa["6594"] = "Contone";
cpa["6595"] = "Riazzino";
cpa["6596"] = "Gordola";
cpa["6597"] = "Agarone";
cpa["6598"] = "Tenero";
cpa["6599"] = "Robasacco";
cpa["6600"] = "Locarno";
cpa["6600"] = "Locarno";
cpa["6600"] = "Muralto";
cpa["6600"] = "Solduno";
cpa["6605"] = "Locarno";
cpa["6611"] = "Crana";
cpa["6611"] = "Gresso";
cpa["6611"] = "Mosogno";
cpa["6612"] = "Ascona";
cpa["6613"] = "Porto Ronco";
cpa["6614"] = "Brissago";
cpa["6614"] = "Isole di Brissago";
cpa["6616"] = "Losone";
cpa["6618"] = "Arcegno";
cpa["6618"] = "Arcegno";
cpa["6622"] = "Ronco sopra Ascona";
cpa["6631"] = "Corippo";
cpa["6632"] = "Vogorno";
cpa["6633"] = "Lavertezzo";
cpa["6634"] = "Brione (Verzasca)";
cpa["6635"] = "Gerra (Verzasca)";
cpa["6636"] = "Frasco";
cpa["6637"] = "Sonogno";
cpa["6644"] = "Orselina";
cpa["6645"] = "Brione sopra Minusio";
cpa["6646"] = "Contra";
cpa["6647"] = "Mergoscia";
cpa["6648"] = "Minusio";
cpa["6652"] = "Tegna";
cpa["6653"] = "Verscio";
cpa["6654"] = "Cavigliano";
cpa["6655"] = "Intragna";
cpa["6655"] = "Rasa";
cpa["6655"] = "Verdasio";
cpa["6656"] = "Golino";
cpa["6657"] = "Palagnedra";
cpa["6658"] = "Borgnone";
cpa["6659"] = "Camedo";
cpa["6659"] = "Moneto";
cpa["6661"] = "Auressio";
cpa["6661"] = "Berzona";
cpa["6661"] = "Loco";
cpa["6662"] = "Russo";
cpa["6663"] = "Comologno";
cpa["6663"] = "Spruga";
cpa["6664"] = "Vergeletto";
cpa["6670"] = "Avegno";
cpa["6672"] = "Gordevio";
cpa["6673"] = "Maggia";
cpa["6674"] = "Riveo";
cpa["6674"] = "Someo";
cpa["6675"] = "Cevio";
cpa["6676"] = "Bignasco";
cpa["6677"] = "Aurigeno";
cpa["6677"] = "Moghegno";
cpa["6678"] = "Coglio";
cpa["6678"] = "Giumaglio";
cpa["6678"] = "Lodano";
cpa["6682"] = "Linescio";
cpa["6683"] = "Cerentino";
cpa["6683"] = "Niva (Vallemaggia)";
cpa["6684"] = "Campo (Vallemaggia)";
cpa["6684"] = "Cimalmotto";
cpa["6685"] = "Bosco/Gurin";
cpa["6690"] = "Cavergno";
cpa["6690"] = "S. Carlo (Val Bavona)";
cpa["6692"] = "Brontallo";
cpa["6692"] = "Menzonio";
cpa["6693"] = "Broglio";
cpa["6694"] = "Prato-Sornico";
cpa["6695"] = "Peccia";
cpa["6695"] = "Piano di Peccia";
cpa["6696"] = "Fusio";
cpa["6702"] = "Claro";
cpa["6703"] = "Osogna";
cpa["6705"] = "Cresciano";
cpa["6707"] = "Iragna";
cpa["6710"] = "Biasca";
cpa["6713"] = "Malvaglia";
cpa["6714"] = "Semione";
cpa["6715"] = "Dongio";
cpa["6716"] = "Acquarossa";
cpa["6716"] = "Leontica";
cpa["6716"] = "Lottigna";
cpa["6717"] = "Dangio-Torre";
cpa["6717"] = "Torre";
cpa["6718"] = "Camperio";
cpa["6718"] = "Olivone";
cpa["6719"] = "Aquila";
cpa["6719"] = "Aquila";
cpa["6719"] = "Aquila";
cpa["6720"] = "Campo (Blenio)";
cpa["6720"] = "Ghirone";
cpa["6721"] = "Ludiano";
cpa["6721"] = "Motto (Blenio)";
cpa["6722"] = "Corzoneso";
cpa["6723"] = "Castro";
cpa["6723"] = "Marolta";
cpa["6723"] = "Marolta";
cpa["6723"] = "Marolta";
cpa["6723"] = "Prugiasco";
cpa["6723"] = "Prugiasco";
cpa["6724"] = "Largario";
cpa["6724"] = "Ponto Valentino";
cpa["6742"] = "Pollegio";
cpa["6743"] = "Bodio TI";
cpa["6744"] = "Personico";
cpa["6745"] = "Giornico";
cpa["6746"] = "Calonico";
cpa["6746"] = "Lavorgo";
cpa["6746"] = "Nivo";
cpa["6747"] = "Chironico";
cpa["6748"] = "Anzonico";
cpa["6749"] = "Cavagnago";
cpa["6749"] = "Sobrio";
cpa["6760"] = "Calpiogna";
cpa["6760"] = "Campello";
cpa["6760"] = "Carì";
cpa["6760"] = "Faido";
cpa["6760"] = "Molare";
cpa["6760"] = "Rossura";
cpa["6763"] = "Mairengo";
cpa["6763"] = "Osco";
cpa["6764"] = "Chiggiogna";
cpa["6764"] = "Chiggiogna";
cpa["6772"] = "Rodi-Fiesso";
cpa["6773"] = "Prato (Leventina)";
cpa["6774"] = "Dalpe";
cpa["6775"] = "Ambrì";
cpa["6776"] = "Piotta";
cpa["6777"] = "Quinto";
cpa["6777"] = "Varenzo";
cpa["6780"] = "Airolo";
cpa["6780"] = "Madrano";
cpa["6781"] = "Bedretto";
cpa["6781"] = "Villa Bedretto";
cpa["6802"] = "Rivera";
cpa["6803"] = "Camignolo";
cpa["6804"] = "Bironico";
cpa["6805"] = "Mezzovico";
cpa["6805"] = "Mezzovico";
cpa["6806"] = "Sigirino";
cpa["6807"] = "Taverne";
cpa["6808"] = "Torricella";
cpa["6809"] = "Medeglia";
cpa["6809"] = "Medeglia";
cpa["6810"] = "Isone";
cpa["6814"] = "Cadempino";
cpa["6814"] = "Lamone";
cpa["6815"] = "Melide";
cpa["6816"] = "Bissone";
cpa["6817"] = "Maroggia";
cpa["6818"] = "Melano";
cpa["6821"] = "Rovio";
cpa["6822"] = "Arogno";
cpa["6823"] = "Pugerna";
cpa["6825"] = "Capolago";
cpa["6825"] = "Capolago";
cpa["6826"] = "Riva San Vitale";
cpa["6827"] = "Brusino Arsizio";
cpa["6828"] = "Balerna";
cpa["6830"] = "Chiasso";
cpa["6832"] = "Pedrinate";
cpa["6832"] = "Seseglio";
cpa["6833"] = "Vacallo";
cpa["6834"] = "Morbio Inferiore";
cpa["6835"] = "Morbio Superiore";
cpa["6837"] = "Bruzella";
cpa["6837"] = "Caneggio";
cpa["6838"] = "Cabbio";
cpa["6838"] = "Muggio";
cpa["6838"] = "Scudellate";
cpa["6839"] = "Sagno";
cpa["6850"] = "Mendrisio";
cpa["6852"] = "Genestrerio";
cpa["6853"] = "Ligornetto";
cpa["6854"] = "S. Pietro";
cpa["6855"] = "Stabio";
cpa["6862"] = "Rancate";
cpa["6863"] = "Besazio";
cpa["6864"] = "Arzo";
cpa["6865"] = "Tremona";
cpa["6866"] = "Meride";
cpa["6867"] = "Serpiano";
cpa["6872"] = "Salorino";
cpa["6872"] = "Somazzo";
cpa["6873"] = "Corteglia";
cpa["6874"] = "Castel San Pietro";
cpa["6875"] = "Casima";
cpa["6875"] = "Monte";
cpa["6877"] = "Coldrerio";
cpa["6883"] = "Novazzano";
cpa["6900"] = "Lugano";
cpa["6900"] = "Massagno";
cpa["6900"] = "Paradiso";
cpa["6912"] = "Pazzallo";
cpa["6913"] = "Carabbia";
cpa["6914"] = "Carona";
cpa["6915"] = "Pambio-Noranco";
cpa["6916"] = "Grancia";
cpa["6917"] = "Barbengo";
cpa["6918"] = "Figino";
cpa["6919"] = "Carabietta";
cpa["6921"] = "Vico Morcote";
cpa["6922"] = "Morcote";
cpa["6924"] = "Sorengo";
cpa["6925"] = "Gentilino";
cpa["6926"] = "Montagnola";
cpa["6927"] = "Agra";
cpa["6928"] = "Manno";
cpa["6929"] = "Gravesano";
cpa["6930"] = "Bedano";
cpa["6932"] = "Breganzona";
cpa["6933"] = "Muzzano";
cpa["6934"] = "Bioggio";
cpa["6934"] = "Bioggio";
cpa["6935"] = "Bosco Luganese";
cpa["6936"] = "Cademario";
cpa["6937"] = "Breno";
cpa["6938"] = "Fescoggia";
cpa["6938"] = "Vezio";
cpa["6939"] = "Arosio";
cpa["6939"] = "Mugena";
cpa["6942"] = "Savosa";
cpa["6943"] = "Vezia";
cpa["6944"] = "Cureglia";
cpa["6945"] = "Origlio";
cpa["6946"] = "Ponte Capriasca";
cpa["6946"] = "Ponte Capriasca";
cpa["6947"] = "Vaglio";
cpa["6947"] = "Vaglio";
cpa["6948"] = "Porza";
cpa["6949"] = "Comano";
cpa["6950"] = "Tesserete";
cpa["6951"] = "Bogno";
cpa["6951"] = "Colla";
cpa["6951"] = "Cozzo";
cpa["6951"] = "Insone";
cpa["6951"] = "Odogno";
cpa["6951"] = "Scareglia";
cpa["6951"] = "Signôra";
cpa["6952"] = "Canobbio";
cpa["6953"] = "Lugaggia";
cpa["6953"] = "Lugaggia";
cpa["6954"] = "Bigorio";
cpa["6954"] = "Sala Capriasca";
cpa["6954"] = "Sala Capriasca";
cpa["6955"] = "Cagiallo";
cpa["6955"] = "Cagiallo";
cpa["6955"] = "Cagiallo";
cpa["6955"] = "Oggio";
cpa["6955"] = "Oggio";
cpa["6956"] = "Lopagno";
cpa["6956"] = "Lopagno";
cpa["6956"] = "Lopagno";
cpa["6957"] = "Roveredo TI";
cpa["6958"] = "Bidogno";
cpa["6958"] = "Corticiasca";
cpa["6958"] = "Corticiasca";
cpa["6959"] = "Certara";
cpa["6959"] = "Cimadera";
cpa["6959"] = "Curtina";
cpa["6959"] = "Maglio di Colla";
cpa["6959"] = "Piandera Paese";
cpa["6959"] = "Piandera Paese";
cpa["6962"] = "Viganello";
cpa["6963"] = "Cureggia";
cpa["6963"] = "Pregassona";
cpa["6964"] = "Davesco-Soragno";
cpa["6965"] = "Cadro";
cpa["6966"] = "Villa Luganese";
cpa["6967"] = "Dino";
cpa["6968"] = "Sonvico";
cpa["6974"] = "Aldesago";
cpa["6976"] = "Castagnola";
cpa["6977"] = "Ruvigliana";
cpa["6978"] = "Gandria";
cpa["6979"] = "Brè sopra Lugano";
cpa["6980"] = "Castelrotto";
cpa["6981"] = "Banco";
cpa["6981"] = "Bedigliora";
cpa["6981"] = "Bedigliora";
cpa["6981"] = "Biogno-Beride";
cpa["6981"] = "Bombinasco";
cpa["6982"] = "Agno";
cpa["6983"] = "Magliaso";
cpa["6984"] = "Pura";
cpa["6986"] = "Curio";
cpa["6986"] = "Curio";
cpa["6986"] = "Miglieglia";
cpa["6986"] = "Novaggio";
cpa["6987"] = "Caslano";
cpa["6988"] = "Ponte Tresa";
cpa["6989"] = "Purasca";
cpa["6990"] = "Cassina d'Agno";
cpa["6991"] = "Neggio";
cpa["6992"] = "Cimo";
cpa["6992"] = "Vernate";
cpa["6993"] = "Iseo";
cpa["6994"] = "Aranno";
cpa["6995"] = "Madonna del Piano";
cpa["6995"] = "Molinazzo di Monteggio";
cpa["6996"] = "Ponte Cremenaga";
cpa["6997"] = "Sessa";
cpa["6998"] = "Termine";
cpa["6999"] = "Astano";
cpa["7000"] = "Chur";
cpa["7012"] = "Felsberg";
cpa["7013"] = "Domat/Ems";
cpa["7014"] = "Trin";
cpa["7015"] = "Tamins";
cpa["7016"] = "Trin Mulin";
cpa["7017"] = "Flims Dorf";
cpa["7018"] = "Flims Waldhaus";
cpa["7019"] = "Fidaz";
cpa["7023"] = "Haldenstein";
cpa["7026"] = "Maladers";
cpa["7027"] = "Calfreisen";
cpa["7027"] = "Castiel";
cpa["7027"] = "Lüen";
cpa["7028"] = "Pagig";
cpa["7028"] = "St. Peter";
cpa["7029"] = "Peist";
cpa["7031"] = "Laax GR";
cpa["7032"] = "Laax GR 2";
cpa["7050"] = "Arosa";
cpa["7056"] = "Molinis";
cpa["7057"] = "Langwies";
cpa["7058"] = "Litzirüti";
cpa["7062"] = "Passugg-Araschgen";
cpa["7063"] = "Praden";
cpa["7064"] = "Tschiertschen";
cpa["7074"] = "Malix";
cpa["7075"] = "Churwalden";
cpa["7076"] = "Parpan";
cpa["7077"] = "Valbella";
cpa["7078"] = "Lenzerheide/Lai";
cpa["7082"] = "Vaz/Obervaz";
cpa["7083"] = "Lantsch/Lenz";
cpa["7084"] = "Brienz/Brinzauls GR";
cpa["7104"] = "Arezen";
cpa["7104"] = "Versam";
cpa["7104"] = "Versam";
cpa["7106"] = "Tenna";
cpa["7107"] = "Safien Platz";
cpa["7109"] = "Thalkirch";
cpa["7110"] = "Peiden";
cpa["7111"] = "Pitasch";
cpa["7112"] = "Duvin";
cpa["7113"] = "Camuns";
cpa["7114"] = "Uors (Lumnezia)";
cpa["7115"] = "Surcasti";
cpa["7116"] = "St. Martin (Lugnez)";
cpa["7116"] = "Tersnaus";
cpa["7122"] = "Carrera";
cpa["7122"] = "Valendas";
cpa["7126"] = "Castrisch";
cpa["7127"] = "Sevgein";
cpa["7128"] = "Riein";
cpa["7130"] = "Ilanz";
cpa["7130"] = "Schnaus";
cpa["7130"] = "Schnaus";
cpa["7132"] = "Vals";
cpa["7133"] = "Obersaxen Affeier";
cpa["7134"] = "Obersaxen Meierhof";
cpa["7135"] = "Obersaxen Giraniga";
cpa["7136"] = "Obersaxen Friggahüs";
cpa["7137"] = "Flond";
cpa["7138"] = "Surcuolm";
cpa["7141"] = "Luven";
cpa["7142"] = "Cumbel";
cpa["7143"] = "Morissen";
cpa["7144"] = "Vella";
cpa["7145"] = "Degen";
cpa["7146"] = "Vattiz";
cpa["7147"] = "Vignogn";
cpa["7148"] = "Lumbrein";
cpa["7148"] = "Surin";
cpa["7149"] = "Vrin";
cpa["7151"] = "Schluein";
cpa["7152"] = "Sagogn";
cpa["7153"] = "Falera";
cpa["7154"] = "Ruschein";
cpa["7155"] = "Ladir";
cpa["7155"] = "Ladir";
cpa["7156"] = "Pigniu";
cpa["7156"] = "Rueun";
cpa["7157"] = "Siat";
cpa["7158"] = "Waltensburg/Vuorz";
cpa["7159"] = "Andiast";
cpa["7162"] = "Tavanasa";
cpa["7163"] = "Danis";
cpa["7164"] = "Dardin";
cpa["7165"] = "Breil/Brigels";
cpa["7166"] = "Trun";
cpa["7167"] = "Zignau";
cpa["7168"] = "Schlans";
cpa["7172"] = "Rabius";
cpa["7173"] = "Surrein";
cpa["7174"] = "S. Benedetg";
cpa["7175"] = "Sumvitg";
cpa["7176"] = "Cumpadials";
cpa["7180"] = "Disentis/Mustér";
cpa["7182"] = "Cavardiras";
cpa["7183"] = "Mumpé Medel";
cpa["7184"] = "Curaglia";
cpa["7185"] = "Platta";
cpa["7186"] = "Segnas";
cpa["7187"] = "Camischolas";
cpa["7188"] = "Sedrun";
cpa["7189"] = "Rueras";
cpa["7201"] = "Untervaz Bahnhof";
cpa["7202"] = "Says";
cpa["7203"] = "Trimmis";
cpa["7204"] = "Untervaz";
cpa["7205"] = "Zizers";
cpa["7206"] = "Igis";
cpa["7208"] = "Malans GR";
cpa["7212"] = "Seewis Dorf";
cpa["7212"] = "Seewis-Pardisla";
cpa["7212"] = "Seewis-Schmitten";
cpa["7213"] = "Valzeina";
cpa["7214"] = "Grüsch";
cpa["7215"] = "Fanas";
cpa["7220"] = "Schiers";
cpa["7220"] = "Schiers";
cpa["7222"] = "Mittellunden";
cpa["7223"] = "Buchen im Prättigau";
cpa["7224"] = "Putz";
cpa["7226"] = "Fajauna";
cpa["7226"] = "Stels";
cpa["7226"] = "Stels";
cpa["7228"] = "Pusserein";
cpa["7228"] = "Schuders";
cpa["7231"] = "Pragg-Jenaz";
cpa["7232"] = "Furna";
cpa["7233"] = "Jenaz";
cpa["7235"] = "Fideris";
cpa["7240"] = "Küblis";
cpa["7241"] = "Conters im Prättigau";
cpa["7242"] = "Luzein";
cpa["7243"] = "Pany";
cpa["7244"] = "Gadenstätt";
cpa["7245"] = "Ascharina";
cpa["7246"] = "St. Antönien";
cpa["7247"] = "Saas im Prättigau";
cpa["7249"] = "Serneus";
cpa["7250"] = "Klosters";
cpa["7252"] = "Klosters Dorf";
cpa["7260"] = "Davos Dorf";
cpa["7265"] = "Davos Wolfgang";
cpa["7270"] = "Davos Platz";
cpa["7272"] = "Davos Clavadel";
cpa["7276"] = "Davos Frauenkirch";
cpa["7277"] = "Davos Glaris";
cpa["7278"] = "Davos Monstein";
cpa["7302"] = "Landquart";
cpa["7303"] = "Mastrils";
cpa["7304"] = "Maienfeld";
cpa["7306"] = "Fläsch";
cpa["7307"] = "Jenins";
cpa["7310"] = "Bad Ragaz";
cpa["7310"] = "Bad Ragaz";
cpa["7312"] = "Pfäfers";
cpa["7312"] = "Pfäfers";
cpa["7313"] = "St. Margrethenberg";
cpa["7314"] = "Vadura";
cpa["7315"] = "Vättis";
cpa["7317"] = "Valens";
cpa["7317"] = "Vasön";
cpa["7320"] = "Sargans";
cpa["7323"] = "Wangs";
cpa["7324"] = "Vilters";
cpa["7325"] = "Schwendi im Weisstannental";
cpa["7326"] = "Weisstannen";
cpa["7402"] = "Bonaduz";
cpa["7403"] = "Rhäzüns";
cpa["7404"] = "Feldis/Veulden";
cpa["7405"] = "Rothenbrunnen";
cpa["7407"] = "Trans";
cpa["7408"] = "Cazis";
cpa["7408"] = "Realta";
cpa["7411"] = "Sils im Domleschg";
cpa["7412"] = "Scharans";
cpa["7413"] = "Fürstenaubruck";
cpa["7414"] = "Fürstenau";
cpa["7415"] = "Pratval";
cpa["7415"] = "Rodels";
cpa["7416"] = "Almens";
cpa["7417"] = "Paspels";
cpa["7418"] = "Tumegl/Tomils";
cpa["7419"] = "Scheid";
cpa["7421"] = "Summaprada";
cpa["7422"] = "Tartar";
cpa["7423"] = "Portein";
cpa["7423"] = "Sarn";
cpa["7424"] = "Dalin";
cpa["7424"] = "Präz";
cpa["7425"] = "Masein";
cpa["7426"] = "Flerden";
cpa["7426"] = "Flerden";
cpa["7427"] = "Urmein";
cpa["7428"] = "Glaspass";
cpa["7428"] = "Tschappina";
cpa["7430"] = "Rongellen";
cpa["7430"] = "Thusis";
cpa["7431"] = "Mutten";
cpa["7431"] = "Obermutten";
cpa["7432"] = "Zillis";
cpa["7433"] = "Donat";
cpa["7433"] = "Farden";
cpa["7433"] = "Lohn GR";
cpa["7433"] = "Mathon";
cpa["7433"] = "Wergenstein";
cpa["7434"] = "Sufers";
cpa["7435"] = "Splügen";
cpa["7436"] = "Medels im Rheinwald";
cpa["7437"] = "Nufenen";
cpa["7438"] = "Hinterrhein";
cpa["7440"] = "Andeer";
cpa["7442"] = "Clugin";
cpa["7443"] = "Pignia";
cpa["7444"] = "Ausserferrera";
cpa["7445"] = "Innerferrera";
cpa["7445"] = "Innerferrera";
cpa["7446"] = "Campsut-Cröt";
cpa["7447"] = "Am Bach (Avers)";
cpa["7447"] = "Cresta (Avers)";
cpa["7448"] = "Juf";
cpa["7450"] = "Tiefencastel";
cpa["7451"] = "Alvaschein";
cpa["7452"] = "Cunter";
cpa["7453"] = "Tinizong";
cpa["7454"] = "Rona";
cpa["7455"] = "Mulegns";
cpa["7456"] = "Marmorera";
cpa["7456"] = "Sur";
cpa["7457"] = "Bivio";
cpa["7458"] = "Mon";
cpa["7459"] = "Stierva";
cpa["7460"] = "Savognin";
cpa["7462"] = "Salouf";
cpa["7463"] = "Riom";
cpa["7463"] = "Riom";
cpa["7463"] = "Riom";
cpa["7464"] = "Parsonz";
cpa["7472"] = "Surava";
cpa["7473"] = "Alvaneu Bad";
cpa["7477"] = "Filisur";
cpa["7482"] = "Bergün/Bravuogn";
cpa["7482"] = "Preda";
cpa["7482"] = "Stugl/Stuls";
cpa["7484"] = "Latsch";
cpa["7492"] = "Alvaneu Dorf";
cpa["7493"] = "Schmitten (Albula)";
cpa["7494"] = "Davos Wiesen";
cpa["7500"] = "St. Moritz";
cpa["7502"] = "Bever";
cpa["7502"] = "Bever";
cpa["7503"] = "Samedan";
cpa["7504"] = "Pontresina";
cpa["7505"] = "Celerina/Schlarigna";
cpa["7512"] = "Champfèr";
cpa["7513"] = "Silvaplana";
cpa["7513"] = "Silvaplana-Surlej";
cpa["7514"] = "Fex";
cpa["7514"] = "Sils/Segl Maria";
cpa["7515"] = "Sils/Segl Baselgia";
cpa["7516"] = "Maloja";
cpa["7517"] = "Plaun da Lej";
cpa["7522"] = "La Punt-Chamues-ch";
cpa["7523"] = "Madulain";
cpa["7523"] = "Madulain";
cpa["7524"] = "Zuoz";
cpa["7524"] = "Zuoz";
cpa["7525"] = "S-chanf";
cpa["7526"] = "Cinuos-chel";
cpa["7527"] = "Brail";
cpa["7530"] = "Zernez";
cpa["7532"] = "Tschierv";
cpa["7533"] = "Fuldera";
cpa["7534"] = "Lü";
cpa["7535"] = "Valchava";
cpa["7536"] = "Sta. Maria Val Müstair";
cpa["7537"] = "Müstair";
cpa["7542"] = "Susch";
cpa["7543"] = "Lavin";
cpa["7545"] = "Guarda";
cpa["7546"] = "Ardez";
cpa["7550"] = "Scuol";
cpa["7551"] = "Ftan";
cpa["7552"] = "Vulpera";
cpa["7553"] = "Tarasp";
cpa["7554"] = "Crusch";
cpa["7554"] = "Sent";
cpa["7556"] = "Ramosch";
cpa["7556"] = "Ramosch";
cpa["7557"] = "Vnà";
cpa["7558"] = "Strada";
cpa["7559"] = "Tschlin";
cpa["7560"] = "Martina";
cpa["7562"] = "Samnaun-Compatsch";
cpa["7563"] = "Samnaun Dorf";
cpa["7602"] = "Casaccia";
cpa["7603"] = "Vicosoprano";
cpa["7604"] = "Borgonovo";
cpa["7605"] = "Stampa";
cpa["7606"] = "Promontogno";
cpa["7608"] = "Castasegna";
cpa["7610"] = "Soglio";
cpa["7710"] = "Alp Grüm";
cpa["7710"] = "Ospizio Bernina";
cpa["7741"] = "S. Carlo (Poschiavo)";
cpa["7742"] = "La Rösa";
cpa["7742"] = "Poschiavo";
cpa["7742"] = "Sfazù";
cpa["7743"] = "Brusio";
cpa["7743"] = "Miralago";
cpa["7744"] = "Campocologno";
cpa["7745"] = "Li Curt";
cpa["7746"] = "Le Prese";
cpa["7747"] = "Viano";
cpa["7748"] = "Campascio";
cpa["8001"] = "Zürich";
cpa["8002"] = "Zürich";
cpa["8003"] = "Zürich";
cpa["8004"] = "Zürich";
cpa["8005"] = "Zürich";
cpa["8006"] = "Zürich";
cpa["8008"] = "Zürich";
cpa["8032"] = "Zürich";
cpa["8037"] = "Zürich";
cpa["8038"] = "Zürich";
cpa["8041"] = "Zürich";
cpa["8044"] = "Gockhausen";
cpa["8044"] = "Zürich";
cpa["8045"] = "Zürich";
cpa["8046"] = "Zürich";
cpa["8047"] = "Zürich";
cpa["8048"] = "Zürich";
cpa["8049"] = "Zürich";
cpa["8050"] = "Zürich";
cpa["8051"] = "Zürich";
cpa["8052"] = "Zürich";
cpa["8053"] = "Zürich";
cpa["8055"] = "Zürich";
cpa["8057"] = "Zürich";
cpa["8064"] = "Zürich";
cpa["8102"] = "Oberengstringen";
cpa["8103"] = "Unterengstringen";
cpa["8104"] = "Weiningen ZH";
cpa["8105"] = "Regensdorf";
cpa["8105"] = "Watt";
cpa["8106"] = "Adlikon b. Regensdorf";
cpa["8107"] = "Buchs ZH";
cpa["8108"] = "Dällikon";
cpa["8109"] = "Kloster Fahr";
cpa["8112"] = "Otelfingen";
cpa["8113"] = "Boppelsen";
cpa["8114"] = "Dänikon ZH";
cpa["8115"] = "Hüttikon";
cpa["8117"] = "Fällanden";
cpa["8118"] = "Pfaffhausen";
cpa["8121"] = "Benglen";
cpa["8122"] = "Binz";
cpa["8123"] = "Ebmatingen";
cpa["8124"] = "Maur";
cpa["8125"] = "Zollikerberg";
cpa["8126"] = "Zumikon";
cpa["8127"] = "Forch";
cpa["8132"] = "Egg b. Zürich";
cpa["8132"] = "Hinteregg";
cpa["8133"] = "Esslingen";
cpa["8134"] = "Adliswil";
cpa["8135"] = "Langnau am Albis";
cpa["8135"] = "Sihlbrugg Station";
cpa["8135"] = "Sihlwald";
cpa["8136"] = "Gattikon";
cpa["8142"] = "Uitikon Waldegg";
cpa["8143"] = "Stallikon";
cpa["8143"] = "Uetliberg";
cpa["8152"] = "Glattbrugg";
cpa["8152"] = "Glattpark (Opfikon)";
cpa["8152"] = "Opfikon";
cpa["8153"] = "Rümlang";
cpa["8154"] = "Oberglatt ZH";
cpa["8155"] = "Nassenwil";
cpa["8155"] = "Niederhasli";
cpa["8156"] = "Oberhasli";
cpa["8157"] = "Dielsdorf";
cpa["8158"] = "Regensberg";
cpa["8162"] = "Steinmaur";
cpa["8162"] = "Sünikon";
cpa["8164"] = "Bachs";
cpa["8165"] = "Oberweningen";
cpa["8165"] = "Schleinikon";
cpa["8165"] = "Schöfflisdorf";
cpa["8166"] = "Niederweningen";
cpa["8172"] = "Niederglatt ZH";
cpa["8173"] = "Neerach";
cpa["8174"] = "Stadel b. Niederglatt";
cpa["8175"] = "Windlach";
cpa["8180"] = "Bülach";
cpa["8181"] = "Höri";
cpa["8182"] = "Hochfelden";
cpa["8184"] = "Bachenbülach";
cpa["8185"] = "Winkel";
cpa["8187"] = "Weiach";
cpa["8192"] = "Glattfelden";
cpa["8192"] = "Zweidlen";
cpa["8193"] = "Eglisau";
cpa["8194"] = "Hüntwangen";
cpa["8195"] = "Wasterkingen";
cpa["8196"] = "Wil ZH";
cpa["8197"] = "Rafz";
cpa["8200"] = "Schaffhausen";
cpa["8203"] = "Schaffhausen";
cpa["8207"] = "Schaffhausen";
cpa["8208"] = "Schaffhausen";
cpa["8212"] = "Neuhausen am Rheinfall";
cpa["8212"] = "Nohl";
cpa["8213"] = "Neunkirch";
cpa["8214"] = "Gächlingen";
cpa["8215"] = "Hallau";
cpa["8216"] = "Oberhallau";
cpa["8217"] = "Wilchingen";
cpa["8218"] = "Osterfingen";
cpa["8219"] = "Trasadingen";
cpa["8222"] = "Beringen";
cpa["8223"] = "Guntmadingen";
cpa["8224"] = "Löhningen";
cpa["8225"] = "Siblingen";
cpa["8226"] = "Schleitheim";
cpa["8228"] = "Beggingen";
cpa["8231"] = "Hemmental";
cpa["8232"] = "Merishausen";
cpa["8233"] = "Bargen SH";
cpa["8234"] = "Stetten SH";
cpa["8235"] = "Lohn SH";
cpa["8236"] = "Büttenhardt";
cpa["8236"] = "Opfertshofen SH";
cpa["8239"] = "Dörflingen";
cpa["8240"] = "Thayngen";
cpa["8241"] = "Barzheim";
cpa["8242"] = "Bibern SH";
cpa["8242"] = "Hofen SH";
cpa["8243"] = "Altdorf SH";
cpa["8245"] = "Feuerthalen";
cpa["8246"] = "Langwiesen";
cpa["8247"] = "Flurlingen";
cpa["8248"] = "Uhwiesen";
cpa["8252"] = "Schlatt TG";
cpa["8253"] = "Diessenhofen";
cpa["8253"] = "Willisdorf";
cpa["8254"] = "Basadingen";
cpa["8255"] = "Schlattingen";
cpa["8259"] = "Etzwilen";
cpa["8259"] = "Kaltenbach";
cpa["8259"] = "Rheinklingen";
cpa["8259"] = "Wagenhausen";
cpa["8260"] = "Stein am Rhein";
cpa["8261"] = "Hemishofen";
cpa["8262"] = "Ramsen";
cpa["8263"] = "Buch SH";
cpa["8264"] = "Eschenz";
cpa["8265"] = "Mammern";
cpa["8266"] = "Steckborn";
cpa["8267"] = "Berlingen";
cpa["8268"] = "Mannenbach-Salenstein";
cpa["8268"] = "Salenstein";
cpa["8269"] = "Fruthwilen";
cpa["8272"] = "Ermatingen";
cpa["8273"] = "Triboltingen";
cpa["8274"] = "Gottlieben";
cpa["8274"] = "Tägerwilen";
cpa["8280"] = "Kreuzlingen";
cpa["8302"] = "Kloten";
cpa["8303"] = "Bassersdorf";
cpa["8304"] = "Wallisellen";
cpa["8305"] = "Dietlikon";
cpa["8306"] = "Brüttisellen";
cpa["8307"] = "Effretikon";
cpa["8307"] = "Ottikon b. Kemptthal";
cpa["8308"] = "Agasul";
cpa["8308"] = "Illnau";
cpa["8309"] = "Nürensdorf";
cpa["8310"] = "Grafstal";
cpa["8310"] = "Kemptthal";
cpa["8311"] = "Brütten";
cpa["8312"] = "Winterberg ZH";
cpa["8314"] = "Kyburg";
cpa["8315"] = "Lindau";
cpa["8317"] = "Tagelswangen";
cpa["8320"] = "Fehraltorf";
cpa["8322"] = "Gündisau";
cpa["8322"] = "Madetswil";
cpa["8330"] = "Hermatswil";
cpa["8330"] = "Pfäffikon ZH";
cpa["8331"] = "Auslikon";
cpa["8332"] = "Rumlikon";
cpa["8332"] = "Russikon";
cpa["8335"] = "Hittnau";
cpa["8340"] = "Hinwil";
cpa["8342"] = "Wernetshausen";
cpa["8344"] = "Bäretswil";
cpa["8345"] = "Adetswil";
cpa["8352"] = "Elsau";
cpa["8352"] = "Ricketwil (Winterthur)";
cpa["8353"] = "Elgg";
cpa["8354"] = "Hofstetten ZH";
cpa["8355"] = "Aadorf";
cpa["8356"] = "Ettenhausen TG";
cpa["8357"] = "Guntershausen b. Aadorf";
cpa["8360"] = "Eschlikon TG";
cpa["8360"] = "Wallenwil";
cpa["8362"] = "Balterswil";
cpa["8363"] = "Bichelsee";
cpa["8370"] = "Sirnach";
cpa["8371"] = "Busswil TG";
cpa["8372"] = "Wiezikon b. Sirnach";
cpa["8374"] = "Dussnang";
cpa["8374"] = "Oberwangen TG";
cpa["8376"] = "Au TG";
cpa["8376"] = "Fischingen";
cpa["8400"] = "Winterthur";
cpa["8404"] = "Reutlingen (Winterthur)";
cpa["8404"] = "Stadel (Winterthur)";
cpa["8404"] = "Winterthur";
cpa["8405"] = "Winterthur";
cpa["8406"] = "Winterthur";
cpa["8408"] = "Winterthur";
cpa["8409"] = "Winterthur";
cpa["8412"] = "Aesch (Neftenbach)";
cpa["8412"] = "Hünikon (Neftenbach)";
cpa["8412"] = "Riet (Neftenbach)";
cpa["8413"] = "Neftenbach";
cpa["8414"] = "Buch am Irchel";
cpa["8415"] = "Berg am Irchel";
cpa["8415"] = "Gräslikon";
cpa["8416"] = "Flaach";
cpa["8418"] = "Schlatt b. Winterthur";
cpa["8421"] = "Dättlikon";
cpa["8422"] = "Pfungen";
cpa["8424"] = "Embrach";
cpa["8425"] = "Oberembrach";
cpa["8426"] = "Lufingen";
cpa["8427"] = "Freienstein";
cpa["8427"] = "Rorbas";
cpa["8428"] = "Teufen ZH";
cpa["8442"] = "Hettlingen";
cpa["8444"] = "Henggart";
cpa["8447"] = "Dachsen";
cpa["8450"] = "Andelfingen";
cpa["8451"] = "Kleinandelfingen";
cpa["8452"] = "Adlikon b. Andelfingen";
cpa["8453"] = "Alten";
cpa["8454"] = "Buchberg";
cpa["8454"] = "Buchberg";
cpa["8454"] = "Buchberg";
cpa["8455"] = "Rüdlingen";
cpa["8457"] = "Humlikon";
cpa["8458"] = "Dorf";
cpa["8459"] = "Volken";
cpa["8460"] = "Marthalen";
cpa["8461"] = "Oerlingen";
cpa["8462"] = "Rheinau";
cpa["8463"] = "Benken ZH";
cpa["8464"] = "Ellikon am Rhein";
cpa["8465"] = "Rudolfingen";
cpa["8465"] = "Wildensbuch";
cpa["8466"] = "Trüllikon";
cpa["8467"] = "Truttikon";
cpa["8468"] = "Guntalingen";
cpa["8468"] = "Waltalingen";
cpa["8471"] = "Berg (Dägerlen)";
cpa["8471"] = "Bänk (Dägerlen)";
cpa["8471"] = "Dägerlen";
cpa["8471"] = "Oberwil (Dägerlen)";
cpa["8471"] = "Rutschwil (Dägerlen)";
cpa["8472"] = "Seuzach";
cpa["8474"] = "Dinhard";
cpa["8475"] = "Ossingen";
cpa["8476"] = "Unterstammheim";
cpa["8477"] = "Oberstammheim";
cpa["8478"] = "Thalheim an der Thur";
cpa["8479"] = "Altikon";
cpa["8482"] = "Sennhof (Winterthur)";
cpa["8483"] = "Kollbrunn";
cpa["8484"] = "Neschwil";
cpa["8484"] = "Theilingen";
cpa["8484"] = "Weisslingen";
cpa["8486"] = "Rikon im Tösstal";
cpa["8487"] = "Rämismühle";
cpa["8487"] = "Zell ZH";
cpa["8488"] = "Turbenthal";
cpa["8489"] = "Wildberg";
cpa["8492"] = "Wila";
cpa["8493"] = "Saland";
cpa["8494"] = "Bauma";
cpa["8495"] = "Schmidrüti";
cpa["8496"] = "Steg im Tösstal";
cpa["8497"] = "Fischenthal";
cpa["8498"] = "Gibswil";
cpa["8499"] = "Sternenberg";
cpa["8500"] = "Frauenfeld";
cpa["8500"] = "Gerlikon";
cpa["8505"] = "Dettighofen";
cpa["8505"] = "Pfyn";
cpa["8506"] = "Lanzenneunforn";
cpa["8507"] = "Hörhausen";
cpa["8508"] = "Homburg";
cpa["8512"] = "Lustdorf";
cpa["8512"] = "Thundorf";
cpa["8512"] = "Wetzikon TG";
cpa["8514"] = "Amlikon-Bissegg";
cpa["8522"] = "Aawangen";
cpa["8522"] = "Häuslenen";
cpa["8523"] = "Hagenbuch ZH";
cpa["8524"] = "Buch b. Frauenfeld";
cpa["8524"] = "Uesslingen";
cpa["8525"] = "Niederneunforn";
cpa["8525"] = "Wilen b. Neunforn";
cpa["8526"] = "Oberneunforn";
cpa["8532"] = "Warth";
cpa["8532"] = "Weiningen TG";
cpa["8535"] = "Herdern";
cpa["8536"] = "Hüttwilen";
cpa["8537"] = "Nussbaumen TG";
cpa["8537"] = "Uerschhausen";
cpa["8542"] = "Wiesendangen";
cpa["8543"] = "Bertschikon";
cpa["8543"] = "Gundetswil";
cpa["8543"] = "Kefikon ZH";
cpa["8544"] = "Attikon";
cpa["8545"] = "Rickenbach Sulz";
cpa["8545"] = "Rickenbach ZH";
cpa["8546"] = "Islikon";
cpa["8546"] = "Kefikon TG";
cpa["8546"] = "Menzengrüt";
cpa["8547"] = "Gachnang";
cpa["8548"] = "Ellikon an der Thur";
cpa["8552"] = "Felben-Wellhausen";
cpa["8553"] = "Eschikofen";
cpa["8553"] = "Harenwilen";
cpa["8553"] = "Hüttlingen";
cpa["8553"] = "Mettendorf TG";
cpa["8554"] = "Bonau";
cpa["8554"] = "Müllheim-Wigoltingen";
cpa["8555"] = "Müllheim Dorf";
cpa["8556"] = "Engwang";
cpa["8556"] = "Illhart";
cpa["8556"] = "Lamperswil TG";
cpa["8556"] = "Wigoltingen";
cpa["8558"] = "Raperswilen";
cpa["8560"] = "Märstetten";
cpa["8561"] = "Ottoberg";
cpa["8564"] = "Engwilen";
cpa["8564"] = "Gunterswilen";
cpa["8564"] = "Hattenhausen";
cpa["8564"] = "Hefenhausen";
cpa["8564"] = "Lipperswil";
cpa["8564"] = "Sonterswil";
cpa["8564"] = "Wagerswil";
cpa["8564"] = "Wäldi";
cpa["8565"] = "Hugelshofen";
cpa["8566"] = "Dotnacht";
cpa["8566"] = "Ellighausen";
cpa["8566"] = "Lippoldswilen";
cpa["8566"] = "Neuwilen";
cpa["8570"] = "Weinfelden";
cpa["8572"] = "Andhausen";
cpa["8572"] = "Berg TG";
cpa["8572"] = "Berg TG";
cpa["8572"] = "Graltshausen";
cpa["8572"] = "Guntershausen b. Berg";
cpa["8573"] = "Alterswilen";
cpa["8573"] = "Altishausen";
cpa["8573"] = "Siegershausen";
cpa["8574"] = "Dettighofen (Lengwil)";
cpa["8574"] = "Illighausen";
cpa["8574"] = "Lengwil";
cpa["8574"] = "Lengwil";
cpa["8574"] = "Oberhofen TG";
cpa["8575"] = "Bürglen TG";
cpa["8575"] = "Istighofen";
cpa["8576"] = "Mauren TG";
cpa["8577"] = "Schönholzerswilen";
cpa["8580"] = "Amriswil";
cpa["8580"] = "Hagenwil b. Amriswil";
cpa["8580"] = "Hefenhofen";
cpa["8580"] = "Sommeri";
cpa["8581"] = "Schocherswil";
cpa["8582"] = "Dozwil";
cpa["8583"] = "Donzhausen";
cpa["8583"] = "Götighofen";
cpa["8583"] = "Sulgen";
cpa["8584"] = "Leimbach TG";
cpa["8584"] = "Opfershofen TG";
cpa["8585"] = "Birwinken";
cpa["8585"] = "Happerswil";
cpa["8585"] = "Herrenhof";
cpa["8585"] = "Klarsreuti";
cpa["8585"] = "Langrickenbach";
cpa["8585"] = "Mattwil";
cpa["8585"] = "Schönenbaumgarten";
cpa["8585"] = "Zuben";
cpa["8586"] = "Andwil TG";
cpa["8586"] = "Buch b. Kümmertshausen";
cpa["8586"] = "Buchackern";
cpa["8586"] = "Engishofen";
cpa["8586"] = "Ennetaach";
cpa["8586"] = "Erlen";
cpa["8586"] = "Kümmertshausen";
cpa["8586"] = "Riedt b. Erlen";
cpa["8587"] = "Oberaach";
cpa["8588"] = "Zihlschlacht";
cpa["8589"] = "Sitterdorf";
cpa["8590"] = "Romanshorn";
cpa["8592"] = "Uttwil";
cpa["8593"] = "Kesswil";
cpa["8594"] = "Güttingen";
cpa["8595"] = "Altnau";
cpa["8596"] = "Münsterlingen";
cpa["8596"] = "Scherzingen";
cpa["8597"] = "Landschlacht";
cpa["8598"] = "Bottighofen";
cpa["8599"] = "Salmsach";
cpa["8600"] = "Dübendorf";
cpa["8602"] = "Wangen b. Dübendorf";
cpa["8603"] = "Schwerzenbach";
cpa["8604"] = "Volketswil";
cpa["8605"] = "Gutenswil";
cpa["8606"] = "Greifensee";
cpa["8606"] = "Nänikon";
cpa["8607"] = "Aathal-Seegräben";
cpa["8608"] = "Bubikon";
cpa["8610"] = "Uster";
cpa["8614"] = "Bertschikon (Gossau ZH)";
cpa["8614"] = "Sulzbach";
cpa["8615"] = "Freudwil";
cpa["8615"] = "Wermatswil";
cpa["8616"] = "Riedikon";
cpa["8617"] = "Mönchaltorf";
cpa["8618"] = "Oetwil am See";
cpa["8620"] = "Wetzikon ZH";
cpa["8623"] = "Wetzikon ZH";
cpa["8624"] = "Grüt (Gossau ZH)";
cpa["8625"] = "Gossau ZH";
cpa["8626"] = "Ottikon (Gossau ZH)";
cpa["8627"] = "Grüningen";
cpa["8630"] = "Rüti ZH";
cpa["8632"] = "Tann";
cpa["8633"] = "Wolfhausen";
cpa["8634"] = "Hombrechtikon";
cpa["8635"] = "Dürnten";
cpa["8636"] = "Wald ZH";
cpa["8637"] = "Laupen ZH";
cpa["8638"] = "Goldingen";
cpa["8640"] = "Hurden";
cpa["8640"] = "Rapperswil SG";
cpa["8645"] = "Jona";
cpa["8646"] = "Wagen";
cpa["8700"] = "Küsnacht ZH";
cpa["8702"] = "Zollikon";
cpa["8703"] = "Erlenbach ZH";
cpa["8704"] = "Herrliberg";
cpa["8706"] = "Meilen";
cpa["8707"] = "Uetikon am See";
cpa["8708"] = "Männedorf";
cpa["8712"] = "Stäfa";
cpa["8713"] = "Uerikon";
cpa["8714"] = "Feldbach";
cpa["8715"] = "Bollingen";
cpa["8716"] = "Schmerikon";
cpa["8717"] = "Benken SG";
cpa["8718"] = "Schänis";
cpa["8722"] = "Kaltbrunn";
cpa["8723"] = "Maseltrangen";
cpa["8723"] = "Rufi";
cpa["8725"] = "Ernetschwil";
cpa["8725"] = "Gebertingen";
cpa["8726"] = "Ricken SG";
cpa["8727"] = "Walde SG";
cpa["8730"] = "Uznach";
cpa["8732"] = "Neuhaus SG";
cpa["8733"] = "Eschenbach SG";
cpa["8734"] = "Ermenswil";
cpa["8735"] = "Rüeterswil";
cpa["8735"] = "St. Gallenkappel";
cpa["8737"] = "Gommiswald";
cpa["8737"] = "Gommiswald";
cpa["8738"] = "Uetliburg SG";
cpa["8739"] = "Rieden SG";
cpa["8750"] = "Glarus";
cpa["8750"] = "Klöntal";
cpa["8750"] = "Riedern";
cpa["8751"] = "Urnerboden";
cpa["8752"] = "Näfels";
cpa["8753"] = "Mollis";
cpa["8754"] = "Netstal";
cpa["8755"] = "Ennenda";
cpa["8756"] = "Mitlödi";
cpa["8757"] = "Filzbach";
cpa["8758"] = "Obstalden";
cpa["8762"] = "Schwanden GL";
cpa["8762"] = "Schwändi b. Schwanden";
cpa["8762"] = "Sool";
cpa["8765"] = "Engi";
cpa["8766"] = "Matt";
cpa["8767"] = "Elm";
cpa["8772"] = "Nidfurn";
cpa["8773"] = "Haslen GL";
cpa["8774"] = "Leuggelbach";
cpa["8775"] = "Hätzingen";
cpa["8775"] = "Luchsingen";
cpa["8777"] = "Betschwanden";
cpa["8777"] = "Diesbach GL";
cpa["8782"] = "Rüti GL";
cpa["8783"] = "Linthal";
cpa["8784"] = "Braunwald";
cpa["8800"] = "Thalwil";
cpa["8802"] = "Kilchberg ZH";
cpa["8803"] = "Rüschlikon";
cpa["8804"] = "Au ZH";
cpa["8805"] = "Richterswil";
cpa["8806"] = "Bäch SZ";
cpa["8807"] = "Freienbach";
cpa["8808"] = "Pfäffikon SZ";
cpa["8810"] = "Horgen";
cpa["8815"] = "Horgenberg";
cpa["8816"] = "Hirzel";
cpa["8820"] = "Wädenswil";
cpa["8824"] = "Schönenberg ZH";
cpa["8825"] = "Hütten";
cpa["8832"] = "Wilen b. Wollerau";
cpa["8832"] = "Wollerau";
cpa["8832"] = "Wollerau";
cpa["8833"] = "Samstagern";
cpa["8834"] = "Schindellegi";
cpa["8835"] = "Feusisberg";
cpa["8836"] = "Bennau";
cpa["8840"] = "Einsiedeln";
cpa["8840"] = "Trachslau";
cpa["8841"] = "Gross";
cpa["8842"] = "Unteriberg";
cpa["8843"] = "Oberiberg";
cpa["8844"] = "Euthal";
cpa["8845"] = "Studen SZ";
cpa["8846"] = "Willerzell";
cpa["8847"] = "Egg SZ";
cpa["8849"] = "Alpthal";
cpa["8852"] = "Altendorf";
cpa["8853"] = "Lachen SZ";
cpa["8854"] = "Galgenen";
cpa["8854"] = "Siebnen";
cpa["8855"] = "Wangen SZ";
cpa["8856"] = "Tuggen";
cpa["8857"] = "Vorderthal";
cpa["8858"] = "Innerthal";
cpa["8862"] = "Schübelbach";
cpa["8863"] = "Buttikon SZ";
cpa["8864"] = "Reichenburg";
cpa["8865"] = "Bilten";
cpa["8866"] = "Ziegelbrücke";
cpa["8867"] = "Niederurnen";
cpa["8868"] = "Oberurnen";
cpa["8872"] = "Weesen";
cpa["8873"] = "Amden";
cpa["8874"] = "Mühlehorn";
cpa["8877"] = "Murg";
cpa["8878"] = "Quinten";
cpa["8880"] = "Walenstadt";
cpa["8881"] = "Knoblisbühl";
cpa["8881"] = "Tscherlach";
cpa["8881"] = "Walenstadtberg";
cpa["8882"] = "Unterterzen";
cpa["8883"] = "Quarten";
cpa["8884"] = "Oberterzen";
cpa["8885"] = "Mols";
cpa["8886"] = "Mädris-Vermol";
cpa["8887"] = "Mels";
cpa["8888"] = "Heiligkreuz (Mels)";
cpa["8889"] = "Plons";
cpa["8890"] = "Flums";
cpa["8892"] = "Berschis";
cpa["8893"] = "Flums Hochwiese";
cpa["8894"] = "Flumserberg Saxli";
cpa["8895"] = "Flumserberg Portels";
cpa["8896"] = "Flumserberg Bergheim";
cpa["8897"] = "Flumserberg Tannenheim";
cpa["8898"] = "Flumserberg Tannenbodenalp";
cpa["8902"] = "Urdorf";
cpa["8903"] = "Birmensdorf ZH";
cpa["8904"] = "Aesch ZH";
cpa["8905"] = "Arni AG";
cpa["8905"] = "Islisberg";
cpa["8906"] = "Bonstetten";
cpa["8907"] = "Wettswil";
cpa["8908"] = "Hedingen";
cpa["8909"] = "Zwillikon";
cpa["8910"] = "Affoltern am Albis";
cpa["8911"] = "Rifferswil";
cpa["8912"] = "Obfelden";
cpa["8913"] = "Ottenbach";
cpa["8914"] = "Aeugst am Albis";
cpa["8914"] = "Aeugstertal";
cpa["8915"] = "Hausen am Albis";
cpa["8916"] = "Jonen";
cpa["8917"] = "Oberlunkhofen";
cpa["8918"] = "Unterlunkhofen";
cpa["8919"] = "Rottenschwil";
cpa["8925"] = "Ebertswil";
cpa["8926"] = "Hauptikon";
cpa["8926"] = "Kappel am Albis";
cpa["8926"] = "Uerzlikon";
cpa["8932"] = "Mettmenstetten";
cpa["8933"] = "Maschwanden";
cpa["8934"] = "Knonau";
cpa["8942"] = "Oberrieden";
cpa["8951"] = "Fahrweid";
cpa["8952"] = "Schlieren";
cpa["8953"] = "Dietikon";
cpa["8954"] = "Geroldswil";
cpa["8955"] = "Oetwil an der Limmat";
cpa["8956"] = "Killwangen";
cpa["8957"] = "Spreitenbach";
cpa["8962"] = "Bergdietikon";
cpa["8964"] = "Rudolfstetten";
cpa["8965"] = "Berikon";
cpa["8966"] = "Oberwil-Lieli";
cpa["8967"] = "Widen";
cpa["9000"] = "St. Gallen";
cpa["9008"] = "St. Gallen";
cpa["9010"] = "St. Gallen";
cpa["9011"] = "St. Gallen";
cpa["9012"] = "St. Gallen";
cpa["9014"] = "St. Gallen";
cpa["9015"] = "St. Gallen";
cpa["9016"] = "St. Gallen";
cpa["9030"] = "Abtwil SG";
cpa["9030"] = "St. Josefen";
cpa["9032"] = "Engelburg";
cpa["9033"] = "Untereggen";
cpa["9034"] = "Eggersriet";
cpa["9035"] = "Grub AR";
cpa["9036"] = "Grub SG";
cpa["9037"] = "Speicherschwendi";
cpa["9038"] = "Rehetobel";
cpa["9042"] = "Speicher";
cpa["9043"] = "Trogen";
cpa["9044"] = "Wald AR";
cpa["9050"] = "Appenzell";
cpa["9050"] = "Appenzell Eggerstanden";
cpa["9050"] = "Appenzell Enggenhütten";
cpa["9050"] = "Appenzell Meistersrüte";
cpa["9050"] = "Appenzell Schlatt";
cpa["9050"] = "Appenzell Steinegg";
cpa["9052"] = "Niederteufen";
cpa["9053"] = "Teufen AR";
cpa["9054"] = "Haslen AI";
cpa["9055"] = "Bühler";
cpa["9056"] = "Gais";
cpa["9057"] = "Schwende";
cpa["9057"] = "Wasserauen";
cpa["9057"] = "Weissbad";
cpa["9058"] = "Brülisau";
cpa["9062"] = "Lustmühle";
cpa["9063"] = "Stein AR";
cpa["9064"] = "Hundwil";
cpa["9100"] = "Herisau";
cpa["9103"] = "Schwellbrunn";
cpa["9104"] = "Waldstatt";
cpa["9105"] = "Schönengrund";
cpa["9107"] = "Urnäsch";
cpa["9108"] = "Gonten";
cpa["9108"] = "Gontenbad";
cpa["9108"] = "Jakobsbad";
cpa["9112"] = "Schachen b. Herisau";
cpa["9113"] = "Degersheim";
cpa["9114"] = "Hoffeld";
cpa["9115"] = "Dicken";
cpa["9116"] = "Wolfertswil";
cpa["9122"] = "Ebersol";
cpa["9122"] = "Mogelsberg";
cpa["9123"] = "Nassen";
cpa["9125"] = "Brunnadern";
cpa["9126"] = "Necker";
cpa["9127"] = "St. Peterzell";
cpa["9200"] = "Gossau SG";
cpa["9203"] = "Niederwil SG";
cpa["9204"] = "Andwil SG";
cpa["9205"] = "Waldkirch";
cpa["9212"] = "Arnegg";
cpa["9213"] = "Hauptwil";
cpa["9214"] = "Kradolf";
cpa["9215"] = "Buhwil";
cpa["9215"] = "Schönenberg an der Thur";
cpa["9216"] = "Heldswil";
cpa["9216"] = "Hohentannen";
cpa["9217"] = "Neukirch an der Thur";
cpa["9220"] = "Bischofszell";
cpa["9223"] = "Halden";
cpa["9223"] = "Schweizersholz";
cpa["9225"] = "St. Pelagiberg";
cpa["9225"] = "Wilen (Gottshaus)";
cpa["9230"] = "Flawil";
cpa["9231"] = "Egg (Flawil)";
cpa["9240"] = "Niederglatt SG";
cpa["9240"] = "Uzwil";
cpa["9242"] = "Oberuzwil";
cpa["9243"] = "Jonschwil";
cpa["9244"] = "Niederuzwil";
cpa["9245"] = "Oberbüren";
cpa["9245"] = "Sonnental";
cpa["9246"] = "Niederbüren";
cpa["9247"] = "Henau";
cpa["9248"] = "Bichwil";
cpa["9249"] = "Algetshausen";
cpa["9249"] = "Niederstetten";
cpa["9249"] = "Oberstetten";
cpa["9300"] = "Wittenbach";
cpa["9304"] = "Bernhardzell";
cpa["9305"] = "Berg SG";
cpa["9306"] = "Freidorf TG";
cpa["9308"] = "Lömmenschwil";
cpa["9312"] = "Häggenschwil";
cpa["9313"] = "Muolen";
cpa["9314"] = "Steinebrunn";
cpa["9315"] = "Neukirch (Egnach)";
cpa["9315"] = "Winden";
cpa["9320"] = "Arbon";
cpa["9320"] = "Frasnacht";
cpa["9320"] = "Stachen";
cpa["9322"] = "Egnach";
cpa["9323"] = "Steinach";
cpa["9325"] = "Roggwil TG";
cpa["9326"] = "Horn";
cpa["9327"] = "Tübach";
cpa["9400"] = "Rorschach";
cpa["9402"] = "Mörschwil";
cpa["9403"] = "Goldach";
cpa["9404"] = "Rorschacherberg";
cpa["9405"] = "Wienacht-Tobel";
cpa["9410"] = "Heiden";
cpa["9411"] = "Reute AR";
cpa["9411"] = "Reute AR";
cpa["9413"] = "Oberegg";
cpa["9413"] = "Oberegg";
cpa["9414"] = "Schachen b. Reute";
cpa["9422"] = "Staad SG";
cpa["9423"] = "Altenrhein";
cpa["9424"] = "Rheineck";
cpa["9425"] = "Thal";
cpa["9426"] = "Lutzenberg";
cpa["9427"] = "Wolfhalden";
cpa["9428"] = "Walzenhausen";
cpa["9430"] = "St. Margrethen SG";
cpa["9434"] = "Au SG";
cpa["9435"] = "Heerbrugg";
cpa["9436"] = "Balgach";
cpa["9437"] = "Marbach SG";
cpa["9442"] = "Berneck";
cpa["9442"] = "Büriswilen";
cpa["9443"] = "Widnau";
cpa["9444"] = "Diepoldsau";
cpa["9445"] = "Rebstein";
cpa["9450"] = "Altstätten SG";
cpa["9450"] = "Lüchingen";
cpa["9451"] = "Kriessern";
cpa["9452"] = "Hinterforst";
cpa["9453"] = "Eichberg";
cpa["9462"] = "Montlingen";
cpa["9462"] = "Montlingen";
cpa["9463"] = "Oberriet SG";
cpa["9464"] = "Lienz";
cpa["9464"] = "Rüthi (Rheintal)";
cpa["9465"] = "Salez";
cpa["9466"] = "Sennwald";
cpa["9467"] = "Frümsen";
cpa["9468"] = "Sax";
cpa["9469"] = "Haag (Rheintal)";
cpa["9470"] = "Buchs SG";
cpa["9470"] = "Werdenberg";
cpa["9472"] = "Grabs";
cpa["9472"] = "Grabserberg";
cpa["9473"] = "Gams";
cpa["9475"] = "Sevelen";
cpa["9476"] = "Fontnas";
cpa["9476"] = "Weite";
cpa["9477"] = "Trübbach";
cpa["9478"] = "Azmoos";
cpa["9479"] = "Gretschins";
cpa["9479"] = "Malans SG";
cpa["9479"] = "Oberschan";
cpa["9485"] = "Nendeln";
cpa["9486"] = "Schaanwald";
cpa["9487"] = "Gamprin-Bendern";
cpa["9488"] = "Schellenberg";
cpa["9490"] = "Vaduz";
cpa["9491"] = "Ruggell";
cpa["9492"] = "Eschen";
cpa["9493"] = "Mauren FL";
cpa["9494"] = "Schaan";
cpa["9495"] = "Triesen";
cpa["9496"] = "Balzers";
cpa["9497"] = "Triesenberg";
cpa["9498"] = "Planken";
cpa["9500"] = "Wil SG";
cpa["9500"] = "Wil SG";
cpa["9502"] = "Braunau";
cpa["9503"] = "Lanterswil";
cpa["9503"] = "Stehrenberg";
cpa["9504"] = "Friltschen";
cpa["9506"] = "Lommis";
cpa["9507"] = "Stettfurt";
cpa["9508"] = "Weingarten-Kalthäusern";
cpa["9512"] = "Rossrüti";
cpa["9514"] = "Wuppenau";
cpa["9515"] = "Hosenruck";
cpa["9517"] = "Mettlen";
cpa["9523"] = "Züberwangen";
cpa["9524"] = "Zuzwil SG";
cpa["9525"] = "Lenggenwil";
cpa["9526"] = "Zuckenriet";
cpa["9527"] = "Niederhelfenschwil";
cpa["9532"] = "Rickenbach b. Wil";
cpa["9532"] = "Rickenbach b. Wil";
cpa["9533"] = "Dietschwil";
cpa["9533"] = "Kirchberg SG";
cpa["9534"] = "Gähwil";
cpa["9535"] = "Wilen b. Wil";
cpa["9536"] = "Schwarzenbach SG";
cpa["9542"] = "Münchwilen TG";
cpa["9543"] = "St. Margarethen TG";
cpa["9545"] = "Wängi";
cpa["9546"] = "Tuttwil";
cpa["9547"] = "Wittenwil";
cpa["9548"] = "Matzingen";
cpa["9552"] = "Bronschhofen";
cpa["9553"] = "Bettwiesen";
cpa["9554"] = "Tägerschen";
cpa["9555"] = "Tobel";
cpa["9556"] = "Affeltrangen";
cpa["9556"] = "Zezikon";
cpa["9562"] = "Buch b. Märwil";
cpa["9562"] = "Märwil";
cpa["9565"] = "Bussnang";
cpa["9565"] = "Oberbussnang";
cpa["9565"] = "Oppikon";
cpa["9565"] = "Rothenhausen";
cpa["9565"] = "Schmidshof";
cpa["9573"] = "Littenheid";
cpa["9601"] = "Lütisburg Station";
cpa["9602"] = "Bazenheid";
cpa["9602"] = "Müselbach";
cpa["9604"] = "Lütisburg";
cpa["9604"] = "Oberrindal";
cpa["9604"] = "Unterrindal";
cpa["9606"] = "Bütschwil";
cpa["9607"] = "Mosnang";
cpa["9608"] = "Ganterschwil";
cpa["9612"] = "Dreien";
cpa["9613"] = "Mühlrüti";
cpa["9614"] = "Libingen";
cpa["9615"] = "Dietfurt";
cpa["9620"] = "Lichtensteig";
cpa["9621"] = "Oberhelfenschwil";
cpa["9622"] = "Krinau";
cpa["9630"] = "Wattwil";
cpa["9631"] = "Ulisbach";
cpa["9633"] = "Bächli (Hemberg)";
cpa["9633"] = "Hemberg";
cpa["9642"] = "Ebnat-Kappel";
cpa["9643"] = "Krummenau";
cpa["9650"] = "Nesslau";
cpa["9651"] = "Ennetbühl";
cpa["9652"] = "Neu St. Johann";
cpa["9655"] = "Stein SG";
cpa["9656"] = "Alt St. Johann";
cpa["9657"] = "Unterwasser";
cpa["9658"] = "Wildhaus";
cpa["9999"] = "Bielersee";
cpa["9999"] = "Brienzersee";
cpa["9999"] = "Thunersee";

document.getElementById("cpa").addEventListener("change", function () {
  var val = cpa[document.getElementById("cpa").value];
  document.getElementById("localite").value =
    cpa[document.getElementById("cpa").value];
  document.getElementById("localite").removeAttribute("aria-invalid");
  jQuery("#localiteupdate").html(jQuery("#localite").val());

  /*
	if ( val==undefined ) {
		document.getElementById("localite").value='';
		document.getElementById("cpa").setAttribute("aria-invalid", "true");
		document.getElementById("cpa").parentNode.parentNode.querySelector('.form-field-valid').classList.remove("visible");
		document.getElementById("cpa").parentNode.parentNode.querySelector('.form-field-invalid').classList.add("visible");

	}
	*/
});

/* Limit number fields */

function check(e, value) {
  //Check Charater
  var unicode = e.charCode ? e.charCode : e.keyCode;
  if (value.indexOf(".") != -1) if (unicode == 46) return false;
  if (unicode != 8)
    if ((unicode < 48 || unicode > 57) && unicode != 46) return false;
}

function checkLength(len, ele) {
  var fieldLength = ele.value.length;
  if (fieldLength <= len) {
    return true;
  } else {
    var str = ele.value;
    str = str.substring(0, str.length - 1);
    ele.value = str;
  }
}

/*----- validation review -----*/
/*
// Declare a global object to store view data.
var viewData;

viewData = {};

jQuery(document).ready(function() {
    // Update the viewData object with the current field keys and values.
    function updateViewData(key, value) {
        viewData[key] = value;
    }

		jQuery('#limite').click(function(){
		 if(jQuery(this).is(':checked')){
				 jQuery('#limitfeedback').text($yesfeedback);
		 } else {
				 $lgfeedback = $nofeedback;
				 jQuery('#limitfeedback').text($nofeedback);
		 }});

    // Register all bindable elements
    function detectBindableElements() {
        var bindableEls;

        bindableEls = $('[data-bind]');

        // Add event handlers to update viewData and trigger callback event.
        bindableEls.on('change', function() {
            var $this;

            $this = $(this);

						if ( $this.is('input[type=text]') || $this.is('input[type=number]') || $this.is('input[type=email]') || $this.is('input[type=tel]') || $this.is('textarea') ) {
								updateViewData($this.data('bind'), $this.val());
							} else if ( $this.is('input[type=radio]') ) {
								updateViewData($this.data('bind'), jQuery(this).attr('textval'));
							} else if ( $this.is('select') ) {
								updateViewData($this.data('bind'), $("option:selected", this).text());
							}

            //updateViewData($this.data('bind'), $this.val());

            $(document).trigger('updateDisplay');
        });

        // Add a reference to each bindable element in viewData.
        bindableEls.each(function() {
            updateViewData($(this));
        });
    }

    // Trigger this event to manually update the list of bindable elements, useful when dynamically loading form fields.
    $(document).on('updateBindableElements', detectBindableElements);

    detectBindableElements();
});
*/

jQuery(document).ready(function () {
  /*
		    // An example of how the viewData can be used by other functions.
		    function updateDisplay() {
		        var updateEls;

		        updateEls = $('[data-update]');

		        updateEls.each(function() {
		            $(this).html(viewData[$(this).data('update')]);
		        });
		    }

		    // Run updateDisplay on the callback.
		    $(document).on('updateDisplay', updateDisplay);

		*/

  // Tag manager and tab fixs

  jQuery("#prevBtn").click(function () {
    if (jQuery(".step-2").hasClass("active")) {
      jQuery(".step-2").removeClass("finish");
      jQuery(".step-3").removeClass("finish");
      jQuery(".demande-credit-component").addClass("visible");
    }
  });

  jQuery("#nextBtn").click(function () {
    var formAmount = jQuery("#montant").val();
    var formDuration = jQuery("#duree").val();
    if (jQuery(".step-2").hasClass("active")) {
      jQuery(".demande-credit-component").addClass("visible");
      if (valid) {
        dataLayer.push({
          event: "enterCreditRequestFormStep",
          step: "2",
          amount: formAmount,
          duration: formDuration,
        });
        console.log(formAmount + " " + formDuration + " " + "step-2");
      }
    } else if (jQuery(".step-3").hasClass("active")) {
      if (valid) {
        dataLayer.push({
          event: "enterCreditRequestFormStep",
          step: "3",
          amount: formAmount,
          duration: formDuration,
        });
        console.log(formAmount + " " + formDuration + " " + "step-3");
      }
    } else if (
      jQuery(".step-4").hasClass("active") &&
      jQuery("#nextBtn").hasClass("mainformsteps")
    ) {
      if (valid) {
        dataLayer.push({
          event: "enterCreditRequestFormStep",
          step: "4",
          amount: formAmount,
          duration: formDuration,
        });
        console.log(formAmount + " " + formDuration + " " + "step-4");
      }
    } else {
      jQuery(".demande-credit-component").removeClass("visible");
    }
  });

  jQuery("#successmessage").one("DOMSubtreeModified", function (event) {
    jQuery("body").addClass("completedform");

    jQuery(document).scrollTop(0);

    var formAmount = jQuery("#montant").val();
    var formDuration = jQuery("#duree").val();
    dataLayer.push({
      event: "enterCreditRequestFormStep",
      step: "5",
      amount: formAmount,
      duration: formDuration,
    });
    console.log(formAmount + " " + formDuration + " " + "step-5");
  });
});

window.onload = function () {
  document.getElementById("gclid").value = readCookie("gclid");
};
