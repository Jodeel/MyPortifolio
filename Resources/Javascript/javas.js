var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");


function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

var typed = new Typed(".name",{
    strings: ["Joel   Nguru"],
    typeSpeed: 100,
    backSpeed: 100,
})
const inputBoxes = document.querySelectorAll(".commute input");
const inputbox = document.querySelectorAll("input-box");
const listcontainer = document.getElementById("list-container");
const listbox = document.getElementsByClassName("preview")
function prev() {
    inputBoxes.forEach(inputBox => {
        if(inputbox.value ===''){
        alert("You must write something!");
    }
    else{
        let li = document.createElement("li");
        li.innerHTML = inputbox.value;
        listcontainer.appendChild(li);
        let span = document.createElement("span");
          span.onclick = function() {
          var div = this.parentElement;
          div.style.display = "none";
          }
        span.innerHTML = "\u00D7";
        li.appendChild(span);
        listbox.style.height = "100%";
    }
    inputbox.value ="";})
}

// const inputBoxes = document.querySelectorAll(".commute input");
// const listContainer = document.getElementById("list-container");

// function prev() {
//     inputBoxes.forEach(inputBox => {
//         if (inputBox.value === '') {
//             alert("You must write something!");
//         } else {
//             let li = document.createElement("li");
//             li.innerHTML = inputBox.value;
//             listContainer.appendChild(li);

//             let span = document.createElement("span");
//             span.onclick = function() {
//                 var div = this.parentElement;
//                 div.style.display = "none";
//             };
//             span.innerHTML = "\u00D7";
//             li.appendChild(span);

//             listContainer.parentNode.style.height = "100%";
//         }
//         inputBox.value = "";
//     });
// }
