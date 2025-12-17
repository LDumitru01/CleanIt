document.addEventListener("DOMContentLoaded", function () {
  const scriptURL =
    "https://script.google.com/macros/s/AKfycbyle2esnFu5zlrheowxM4ZSBqAHu-LI4xBR7vceFlpFCgBU7W4CMe38O1WPa8glTf3o/exec";

  // Делегирование: один обработчик на все формы .js-lead-form,
  // даже если они подгружены через fetch (как меню)
  document.addEventListener("submit", function (e) {
    const form = e.target;

    if (!form.classList.contains("js-lead-form")) return;

    e.preventDefault();

    const formData = new FormData(form);
    formData.append("page", window.location.href);

    fetch(scriptURL, {
      method: "POST",
      mode: "no-cors",
      body: formData,
    })
      .then(() => {
        form.reset();
        alert("Спасибо! Мы скоро с вами свяжемся ✅");

        // Если форма была в модалке – закрываем её
        if (window.$ && $("#consultModal").modal) {
          $("#consultModal").modal("hide");
        }
      })
      .catch((err) => {
        console.error("Error!", err);
        alert("Ошибка при отправке. Попробуйте позже ❌");
      });
  });
});
