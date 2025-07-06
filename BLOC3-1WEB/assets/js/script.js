document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("toggle-dark");
  if (btn) {
    btn.addEventListener("click", function () {
      document.body.classList.toggle("dark-mode");
    });
  }
});
const selectRace = document.getElementById("filtre-race");
  const cartes = document.querySelectorAll(".carte");

  if (selectRace && cartes.length > 0) {
    selectRace.addEventListener("change", function () {
      const raceChoisie = selectRace.value.toLowerCase();
      cartes.forEach(carte => {
        const raceCarte = carte.getAttribute("data-race").toLowerCase();
        if (raceChoisie === "all" || raceCarte === raceChoisie) {
          carte.style.display = "block";
        } else {
          carte.style.display = "none";
        }
      });
    });
  }