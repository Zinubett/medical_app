function login() {
  var email_pat = $("#emailpat").val();
  var mot_passe_pat = $("#passwordpat").val();
  $.post(
    "model/login.php",
    {
      email_pat: email_pat,
      mot_passe_pat: mot_passe_pat,
    },
    function (data, status) {
      alert(data);
      if (data == "success") {
        $(location).attr("href", "conindex.php");
      } else {
        $("#reponse").html("Probleme de connexion");
        $("#reponse").fadeIn("slow");
        $("#addemailc").val("");
        $("#addmpc").val("");
      }
    }
  );
}

function inscrir() {
  var nom_pat = $("#nom_pat").val();
  var prenom_pat = $("#prenom_pat").val();
  var sexe = $("#sexe").val();
  var tel_pat = $("#tel_pat").val();
  var email_pat = $("#email_pat").val();
  var mot_passe_pat = $("#mot_passe_pat").val();
  var date_nais = $("#date_nais").val();

  $.post(
    "model/inscrire.php",
    {
      nom_pat: nom_pat,
      prenom_pat: prenom_pat,
      sexe: sexe,
      tel_pat: tel_pat,
      email_pat: email_pat,
      mot_passe_pat: mot_passe_pat,
      date_nais: date_nais,
    },
    function (data, status) {
      alert(data);
      $("#reponse").html(data);
      //location.reload();
    }
  );
}

function get_profile(idpatient) {
  $("#id_patient_hidden").val(idpatient);

  $.post(
    "model/get_profile.php",
    {
      idpatient: idpatient,
    },
    function (data, status) {
      var patient = JSON.parse(data);
      $("#nomp").val(patient.nom_pat);
      $("#prenomp").val(patient.prenom_pat);

      $("#sexe_pt").val(patient.sexe);

      $("#tel_pt").val(patient.tel_pat);
      $("#emailpt").val(patient.email_pat);
      $("#date_nais_pt").val(patient.date_nais);
    }
  );

  $("#profile").modal("show");
}

function editProfile(idpatient) {
  var nom_pat = $("#nomp").val();
  var prenom_pat = $("#prenomp").val();
  var sexe = $("#sexe_pt").val();
  var tel_pat = $("#tel_pt").val();
  var email_pat = $("#emailpt").val();
  var date_nais = $("#date_nais_pt").val();

  $.post(
    "model/editProfile.php",

    {
      nom_pat: nom_pat,
      prenom_pat: prenom_pat,
      sexe: sexe,
      tel_pat: tel_pat,
      email_pat: email_pat,
      date_nais: date_nais,
      idpatient: idpatient,
    },

    function (data, status) {
      location.reload();
    }
  );
}
function ajout_rendez_vous(idpatient) {
  var date_rdv = $("#date").val();
  var heure_rdv = $("#heure").val();

  $.post(
    "model/ajout_rendez_vous.php",
    {
      date_rdv: date_rdv,
      heure_rdv: heure_rdv,
      idpatient: idpatient,
    },
    function (data, status) {
      alert(data);
      $("#reponse").html(data);
      location.reload();
    }
  );
}
