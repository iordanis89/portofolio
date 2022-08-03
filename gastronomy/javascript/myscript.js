const myscreen = window.matchMedia("(min-width: 700px)")
myscreen.addEventListener(openNav)

/* Set the width of the side navigation to 250px */
function openNav() {
   if (myscreen.matches) {
     document.getElementById("mySidenav").style.width = "250px";
   } else 
   {
    document.getElementById("mySidenav").style.width = "500px";
   }
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("gastro").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "store.txt", true);
  xhttp.send();
}

/************* */
function people() {
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    let pdiv=document.getElementById("people"); //pdiv=front end div
    if (this.readyState == 4 && this.status == 200) {
      pdiv.innerHTML =""; //cleans the div after i press the button
      for (item of this.response.stores) {
        pdiv.innerHTML += item.content; // adds only once the information from the json file
      }
    }
  };

  xhttp.responseType = "json";
  xhttp.open("GET", "../json/stores.json", true);
  xhttp.send();
}


function stores() {
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    let fediv=document.getElementById("json"); //fediv=front end div
    if (this.readyState == 4 && this.status == 200) {
      fediv.innerHTML =""; //cleans the div after i press the button
      for (item of this.response.text) {
        fediv.innerHTML += item.content; // adds only once the information from the json file
      }
    }
  };
  xhttp.responseType = "json";
  xhttp.open("GET", "../json/text.json", true);
  xhttp.send();

}





