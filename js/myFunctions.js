function ContentPage(id) {
  location.href = "team-details.php?id=" + id;
};

function ContentPageScouts(id) {
  location.href = "scouts-detail.php?id=" + id;
};
function ContentPagePlayers(id) {
  location.href = "player-details.php?id=" + id;
};
function DeletePlayer(id) {
  location.href = "admin-page.php?delete=" + id;
};

function DeleteReport(playerId,scoutId) {
  location.href = "admin-page.php?deletePlayer=" +playerId+"&deleteScout="+scoutId;
};


function searchTeam(input) {
  // Declare variables
  var p = document.getElementById(input).value
  location.href = "teams-page.php?search=" + p;
  //    console.log(p)
}

function searchPlayer(input) {
  // Declare variables
  var p = document.getElementById(input).value
  location.href = "players-page.php?search=" + p;

}

function searchScout(input) {
  // Declare variables
  var p = document.getElementById(input).value
  location.href = "players-page.php?search=" + p;
}

function filter(input) {
  // Declare variables
  var p = document.getElementById(input).value
  location.href = "players-page.php?search=" + p;

}
function userValidation() {
  'use strict';
  var nameFormat = /^[A-Z][a-zA-Z]{3,}(?: [A-Z][a-zA-Z]*){0,2}$/
  var userid_name = document.getElementById("name");
  var userid_value = document.getElementById("name").value;
  var userid_length = userid_value.length;
  if (userid_length = 0 || !userid_value.match(nameFormat)) {
    document.getElementById('uid_err').innerHTML = 'Please input your full name';
    userid_name.focus();
    document.getElementById('uid_err').style.color = "#FF0000";
  }
  else {
    document.getElementById('uid_err').innerHTML = 'Valid user id';
    document.getElementById('uid_err').style.color = "#00AF33";
  }
}
// 

function emailValidation() {
  'use strict';
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var email_name = document.getElementById("email");
  var email_value = document.getElementById("email").value;
  var email_length = email_value.length;
  if (!email_value.match(mailformat)) {
    document.getElementById('emailError').innerHTML = 'This is not a valid email format.';
    email_name.focus();
    document.getElementById('emailError').style.color = "#FF0000";
  }
  else {
    document.getElementById('emailError').innerHTML = 'Valid email format';
    document.getElementById('emailError').style.color = "#00AF33";
  }
}

function phoneValidation() {
  'use strict';
  var phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
  var phone_name = document.getElementById("phone");
  var phone_value = document.getElementById("phone").value;
  var phone_length = phone_value.length;
  if (!phone_value.match(phoneformat)) {
    document.getElementById('phoneError').innerHTML = 'This is not a valid phone number.';
    phone_name.focus();
    document.getElementById('phoneError').style.color = "#FF0000";
  }
  else {
    document.getElementById('phoneError').innerHTML = 'Valid phone number';
    document.getElementById('phoneError').style.color = "#00AF33";
  }
}

function BirthDayValidation() {
  'use strict';
  var birthday = document.getElementById("birthday");
  var date = document.getElementById("birthday").value;
  var date_length = date.length;
  if (date_length == 0) {
    document.getElementById('birthdayError').innerHTML = 'Please select a date';
    birthday.focus();
    document.getElementById('birthdayError').style.color = "#FF0000";
  }
  else {
    document.getElementById('birthdayError').innerHTML = 'Valid phone number';
    document.getElementById('birthdayError').style.color = "#00AF33";
  }
}

function eircodeValidation() {
  'use strict';
  var phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
  var phone_name = document.getElementById("eirCode");
  var phone_value = document.getElementById("eirCode").value;
  var phone_length = phone_value.length;
  // console.log(phone_value.match(phoneformat))
  // console.log(phone_value)
  if (!phone_value.match(phoneformat)) {
    document.getElementById('eircodeError').innerHTML = 'This is not a valid zip code.';
    phone_name.focus();
    document.getElementById('eircodeError').style.color = "#FF0000";
  }
  else {
    document.getElementById('eircodeError').innerHTML = 'Valid phone number';
    document.getElementById('eircodeError').style.color = "#00AF33";
  }
}

