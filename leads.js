document.addEventListener("DOMContentLoaded", function () {

  document.addEventListener("submit", function (e) {
    const form = e.target;
    if (!form.classList.contains("js-lead-form")) return;

    e.preventDefault();

    const formData = new FormData(form);
    formData.append("page", window.location.href);

    /* 📩 Telegram ONLY */
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
          alert("Eroare la trimitere ");
        }
      })
      .catch(() => {
        alert("Eroare de conexiune");
      });
  });

});
