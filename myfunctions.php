<?php
function ContentPage($id){
    // location.href = "team-details.php?id="+id;
    header('Location: team-details.php?id='.$id);
// end();
};

// function ContentPageScouts(id){
//     location.href = "scouts-detail.php?id="+id;
// };
// function ContentPagePlayers(id){
//     location.href = "player-details.php?id="+id;
// };


// function searchTeam(input) {
//     // Declare variables
//     var p =document.getElementById(input).value
//     location.href = "teams-page.php?search="+p;
// //    console.log(p)
//   } 

//   function searchPlayer(input) {
//     // Declare variables
//     var p =document.getElementById(input).value
//     location.href = "players-page.php?search="+p;
// //    console.log(p)
//   }

//   function searchScout(input) {
//     // Declare variables
//     var p =document.getElementById(input).value
//     location.href = "players-page.php?search="+p;
// //    console.log(p)
//   }

//   function filter(input) {
//     // Declare variables
//     var p =document.getElementById(input).value
//     location.href = "players-page.php?search="+p;
// //    console.log(p)
//   }
  ?>