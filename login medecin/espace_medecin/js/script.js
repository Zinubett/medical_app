function accepterRDV(id_rdv) {
  var conf = confirm("vous êtes sure d'accepter ce rendez_vous  ... ?");

  if (conf == true) {
    //appel ajax
    $.post(
      "model/accepterRDV.php",
      {
        id_rdv: id_rdv,
      },

      function (data, status) {
        location.reload(); //recharger la page
      }
    );
  }
}
function refuserRDV(id_rdv) {
  var conf = confirm("vous êtes sure de réfuser ce rendez_vous  ... ?");

  if (conf == true) {
    //appel ajax
    $.post(
      "model/refuserRDV.php",
      {
        id_rdv: id_rdv,
      },

      function (data, status) {
        location.reload(); //recherger la page
      }
    );
  }
}
function serviePatient(idpatient, id_rdv) {
  var conf = confirm("vous êtes sure de servie ce patient  ... ?");

  if (conf == true) {
    //appel ajax
    $.post(
      "model/serviePatient.php",
      {
        idpatient: idpatient,
        id_rdv: id_rdv,
      },

      function (data, status) {
        location.reload(); //recherger la page
      }
    );
  }
}
