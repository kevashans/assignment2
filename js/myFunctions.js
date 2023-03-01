function ContentPage(id){
    location.href = "team-details.php?id="+id;
};

function ContentPageScouts(id){
    location.href = "scouts-detail.php?id="+id;
};
function ContentPagePlayers(id){
    location.href = "player-details.php?id="+id;
};


function searchTeam(input) {
    // Declare variables
    var p =document.getElementById(input).value
    location.href = "teams-page.php?search="+p;
//    console.log(p)
  }