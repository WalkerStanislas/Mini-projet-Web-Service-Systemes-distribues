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
  document.getElementById('post_popup').style.display = 'block';
  document.getElementById('post_overlay').style.display = 'block';
}

function closePopup() {
  document.getElementById('post_popup').style.display = 'none';
  document.getElementById('post_overlay').style.display = 'none';
}
