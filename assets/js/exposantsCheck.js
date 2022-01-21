let cleave = new Cleave('.phone', {
    delimiters: [' '],
    blocks: [2, 2, 2, 2, 2]
});
user_lastName.onchange = () =>{
    if(user_lastName.value.match(/^[a-zA-Z- 'À-ÖØ-öø-ÿ]+$/)){
        messageLastName.innerHTML ='<p class="validated">Le nom de famille est correct </p>';
    } else{
        messageLastName.innerHTML ='<p class="invalidated">Le nom de famille est in correct </p>';
    }
}
user_firstName.onchange = () =>{
    if(user_firstName.value.match(/^[a-zA-Z- 'À-ÖØ-öø-ÿ]+$/)){
        messageFirstName.innerHTML ='<p class="validated">Le prénom est correct </p>';
    }else{
        messageFirstName.innerHTML ='<p class="invalidated">Le prénom est in correct </p>';
    }
}
user_mail.onchange = () =>{
    if(user_mail.value.match(/^([0-9a-z-_.]+){1}(@){1}([a-z.-]+){1}$/)){
        messageMail.innerHTML ='<p class="validated">L\'adresse mail est correct </p>';
    }else{
        messageMail.innerHTML ='<p class="invalidated">L\'adresse mail est in correct </p>';
    }
}
user_phone.onchange = () =>{
    if(user_phone.value.match(/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/)){
        messagePhone.innerHTML ='<p class="validated">Le numéro de téléphone est correct </p>';
    } else{
        messagePhone.innerHTML ='<p class="invalidated">Le numéro de téléphone in correct </p>';
    }
}
user_NameExposants.onchange = () =>{
    if(user_NameExposants.value.match(/^[a-zA-Z- 'À-ÖØ-öø-ÿ]+$/)){
        messageNameExposants.innerHTML ='<p class="validated">Le nom de l\'exposants est correct </p>';
    }else{
        messageNameExposants.innerHTML ='<p class="invalidated">Le nom de l\'exposants est in correct </p>';
    }
}