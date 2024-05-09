const join = document.querySelector(".join"),
  overlay = document.querySelector(".overlay"),
  closeBtn = document.querySelector(".overlay .close");

join.addEventListener("click", () => {
  overlay.classList.add("active");
});

closeBtn.addEventListener("click", () => {
  overlay.classList.remove("active");
});

function openPopup() {
  document.getElementById('postPopup').style.display = 'block';
  document.getElementById('postOverlay').style.display = 'block';
}

function closePopup() {
  document.getElementById('postPopup').style.display = 'none';
  document.getElementById('postOverlay').style.display = 'none';
}
