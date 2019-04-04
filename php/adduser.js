function adduser() {
    var body = document.querySelector("body");
    var div = document.getElementById("newuser");
    console.log(div);
    var button = document.createElement("BUTTON");
    div.appendChild(button);
    button.setAttribute("", "")
}
function modif(node) {
  var div = document.getElementById(node);
  if (node < 9)
    {
      div.type = "text";
      div.value = "";
    }
  else {
    div.type = "date";
    div.value = "";
  }

}
