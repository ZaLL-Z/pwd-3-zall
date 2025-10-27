const ButtonTop = document.getElementById("ButtonTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    ButtonTop.classList.add("show");
  } else {
    ButtonTop.classList.remove("show");
  }
});

ButtonTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
