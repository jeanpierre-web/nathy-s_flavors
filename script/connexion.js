function togglePasswordField() {
    var passwordInput = document.getElementById("password");
    var toggleButton = document.getElementById("togglePassword");
    
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.classList.add("active");
    } else {
      passwordInput.type = "password";
      toggleButton.classList.remove("active");
    }
  }