$(document).ready(function () {
  $("#formcomment").submit(function (event) {
    // on stop la propagation de l'événement)
    event.preventDefault();
    //on récupère le contenu du champ de formulaire
    let comment = $("#InputComment").val();
    let userPseudo = $("#pseudo").val();
    let date = "a few moment ago";
    //on l'affiche en console
    //on l'envoie en base de donnée via la requête ajax
    $.post("", {
      content: comment,
    });
    $(
      "<div><h3>" +
        userPseudo +
        "</h3><span>" +
        date +
        "</span><p>" +
        comment +
        "</p></div"
    ).appendTo("#comments");
    $("#InputComment").val("");
  });
});
