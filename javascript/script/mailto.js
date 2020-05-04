/*pour chaque appel => method "array.foreach"
    avec comme paramètre/élément => la class "js-MailTo"
    et comme argument les attributs renseignés dans le html sous "data-mailto" : user / domain / subject email
        RESULTAT => adresse mail reconstituée*/
;[].forEach.call(document.getElementsByClassName("js-MailTo"), function(el) {
    el.setAttribute("href", `mailto:${el.getAttribute("data-mailto-user")}%40${el.getAttribute("data-mailto-domain")}${el.getAttribute("data-mailto-subject")|| window.location.host}`)
  })