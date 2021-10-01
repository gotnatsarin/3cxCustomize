<script>

  function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow();
    var cell1 = row.insertCell();
    var cell2 = row.insertCell();
    cell1.classList.add("testclass");
    cell2.classList.add("testclass");
    row.setAttribute("name","Test");
    row.setAttribute("id","Okay");
    cell1.innerHTML = "NEW CELL1";
    cell2.innerHTML = "NEW CELL2";
  }

</script>