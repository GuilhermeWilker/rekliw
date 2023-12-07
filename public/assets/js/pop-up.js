let tagModal = document.getElementById("modal");

let projectModal = document.getElementById("projectModal");

window.onclick = function (event) {
  if (event.target == tagModal) {
    tagModal.style.display = "none";
  }

  if (event.target == projectModal) {
    projectModal.style.display = "none";
  }
};

function showProjectModal() {
  projectModal.style.display = "block";
}
function hideProjectModal() {
  projectModal.style.display = "none";
}

// ------------
function showTagModal() {
  tagModal.style.display = "block";
}
function hideTagModal() {
  tagModal.style.display = "none";
}
