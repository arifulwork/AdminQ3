function deleteClass() {
  let text;
  if (confirm("Are you sure want to delete it?") == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}