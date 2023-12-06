let add_tagsButton = document.getElementById("add_tagsButton");
let modal = document.getElementById("modal");
let span = document.getElementById("close_tagFormModal");

add_tagsButton.onclick = function () {
  modal.style.display = "block";
};

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
