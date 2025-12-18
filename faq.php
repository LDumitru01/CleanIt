
          <!-- Форма справа -->
          <div class="col-lg-4 col-md-5 mt-4 mt-md-0">
            <aside class="service-form-wrapper p-4">
              <h4 class="mb-4">Trimiteți cererea</h4>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Numele dvs">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Număr de telefon">
                </div>
                <button type="submit" class="btn btn-block btn-consult-submit">
                  TRIMITE
                </button>
              </form>
            </aside>
          </div>

        </div>
      </div>
    </section>

   
   <!-- FAQ -->
  <section class="faq-section py-5">
  <div class="container">
    <h2 class="faq-title mb-4">ÎNTREBĂRI FRECVENTE</h2>

    <div class="faq-item">
      <button class="faq-question">
        Cât durează, în medie, curățarea perdelelor și draperiilor?
        <span class="faq-icon"><i class="bi bi-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        <p>
          De obicei, procesul complet (ridicare, spălare, călcare și montare) durează
          1–2 zile lucrătoare, în funcție de volum și tipul materialului.
        </p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        Trebuie să dau eu jos perdelele înainte să veniți?
        <span class="faq-icon"><i class="bi bi-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        <p>
          Nu este necesar. Echipa noastră poate demonta și monta perdelele pentru confortul tău.
        </p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        Se pot curăța materialele sensibile sau foarte fine?
        <span class="faq-icon"><i class="bi bi-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        <p>
          Da. Analizăm țesătura și folosim programe delicate și detergenți profesioniști,
          exact conform instrucțiunilor producătorului.
        </p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        Pot comanda serviciul doar pentru o singură cameră?
        <span class="faq-icon"><i class="bi bi-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        <p>
          Desigur! Putem curăța perdelele doar dintr-o cameră sau din întreaga locuință.
        </p>
      </div>
    </div>

  </div>
</section>
 
 
 
 <script>
document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const item = button.parentElement;

    // Закрыть все остальные
    document.querySelectorAll(".faq-item").forEach(i => {
      if (i !== item) i.classList.remove("active");
    });

    // Переключить текущий
    item.classList.toggle("active");
  });
});
</script>
