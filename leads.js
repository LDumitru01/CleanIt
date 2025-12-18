(function () {
  "use strict";

  function closeMegamenus() {
    document.querySelectorAll(".megamenu.show").forEach(menu => {
      menu.classList.remove("show");

      const dropdown = menu.querySelector(".dropdown-menu");
      if (dropdown) dropdown.classList.remove("show");

      const toggle = menu.querySelector(".dropdown-toggle");
      if (toggle) toggle.setAttribute("aria-expanded", "false");
    });
  }

  // ===== MEGAMENU CLICK =====
  document.addEventListener("click", function (e) {

    const toggle = e.target.closest(".megamenu .dropdown-toggle");
    const insideMenu = e.target.closest(".megamenu");
    const isModalTrigger = e.target.closest('[data-toggle="modal"]');

    // 👉 click pe buton de modal → NU blocăm
    if (isModalTrigger) {
      closeMegamenus();
      return;
    }

    // 👉 CLICK PE TOGGLE (AICI ERA BUGUL)
    if (toggle) {
      e.preventDefault();
      e.stopPropagation(); // 🔥 CHEIA – oprește închiderea imediată

      const parent = toggle.closest(".megamenu");
      const dropdown = parent.querySelector(".dropdown-menu");
      const isOpen = parent.classList.contains("show");

      closeMegamenus();

      if (!isOpen) {
        parent.classList.add("show");
        dropdown.classList.add("show");
        toggle.setAttribute("aria-expanded", "true");
      }

      return;
    }

    // 👉 click în afara meniului
    if (!insideMenu) {
      closeMegamenus();
    }
  });

  // ===== FORM SUBMIT =====
  document.addEventListener("submit", function (e) {
    const form = e.target;
    if (!form.classList.contains("js-lead-form")) return;

    e.preventDefault();

    const formData = new FormData(form);
    formData.append("page", window.location.href);

    fetch("send-telegram.php", {
      method: "POST",
      body: formData,
    })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert("Cererea a fost trimisă cu succes ✅");
          form.reset();

          if (window.$ && $("#consultModal").modal) {
            $("#consultModal").modal("hide");
          }
        } else {
          alert("Eroare la trimitere");
        }
      })
      .catch(() => {
        alert("Eroare de conexiune");
      });
  });

})();
