function modifier(n) {
i= 1;
var tr2 = document.getElementById(n).getElementsByTagName('td')
var a = document.getElementById(n).getElementsByTagName('a')[1];
tr2[9].removeChild(a)
var input1 = document.createElement("input")
input1.value = "Valider";
input1.className="button"
input1.type="submit"
input1.name="Modifier"
tr2[9].appendChild(input1)
    while (i < 9)
    {
      if (i == 3)
      {
        var input = document.createElement("input");
        tr2[i].appendChild(input);
        input.name = i;
        input.className = "input";
        input.type = "date";
      }
      else if (i == 7)
      {
        var select = document.createElement("select");
        var list = document.createElement("option");
        var list1 = document.createElement("option");
        var list2 = document.createElement("option");
        tr2[i].appendChild(select);
        select.name="select";
        select.className = "custom-dropdown__select custom-dropdown__select--white";
        select.appendChild(list).innerText = "Admin"
        select.appendChild(list1).innerText = "Controleur"
        select.appendChild(list2).innerText = "Proprietaire"
        list.value = "1";
        list1.value = "2";
        list2.value = "3";
      }
      else if(i == 8)
      {
        var input = document.createElement("input");
        tr2[i].appendChild(input);
        input.name = i;
        input.className = "input";
        input.type = "hidden";
        input.value =tr2[0].textContent;
      }
      else {

      var input = document.createElement("input");
      tr2[i].appendChild(input);
      input.name = i;
      input.className = "input";
      input.type = "text";
    }
      i++;
    }
  }
