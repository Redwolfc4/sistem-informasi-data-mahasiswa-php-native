document.getElementById("year").textContent = new Date().getFullYear();

// Validasi Bootstrap
(() => {
  const forms = document.querySelectorAll(".needs-validation");
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// Toggle password visibility
const toggleBtn = document.getElementById("togglePassword");
const pwdInput = document.getElementById("password");
const toggleIcon = document.getElementById("toggleIcon");
toggleBtn.addEventListener("click", () => {
  const isPass = pwdInput.getAttribute("type") === "password";
  pwdInput.setAttribute("type", isPass ? "text" : "password");
  toggleIcon.textContent = isPass ? "Sembunyikan" : "Tampilkan";
});

// Fokus ke nama otomatis
document.getElementById("name").focus();
