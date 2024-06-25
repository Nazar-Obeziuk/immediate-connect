document.addEventListener("DOMContentLoaded", function () {
  function initializePhoneInput(input) {
    var iti = window.intlTelInput(input, {
      initialCountry: "cz", // Начальная страна по умолчанию (можно изменить на любую)
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    function setInitialValue() {
      var dialCode = iti.getSelectedCountryData().dialCode;
      input.value = `+${dialCode} `;
    }

    // Установить начальное значение с кодом страны
    setInitialValue();

    // Обновлять значение при смене страны
    input.addEventListener("countrychange", function () {
      setInitialValue();
    });

    // Убедиться, что курсор всегда находится после кода страны
    input.addEventListener("click", function () {
      var dialCodeLength = iti.getSelectedCountryData().dialCode.length + 2; // +2 для '+ ' символов
      if (input.selectionStart < dialCodeLength) {
        input.setSelectionRange(dialCodeLength, dialCodeLength);
      }
    });

    input.addEventListener("keydown", function (event) {
      var dialCodeLength = iti.getSelectedCountryData().dialCode.length + 2; // +2 для '+ ' символов
      if (
        input.selectionStart < dialCodeLength &&
        event.key !== "Backspace" &&
        event.key !== "ArrowLeft" &&
        event.key !== "ArrowRight"
      ) {
        input.setSelectionRange(dialCodeLength, dialCodeLength);
      }
    });

    input.addEventListener("input", function () {
      var dialCode = `+${iti.getSelectedCountryData().dialCode} `;
      if (!input.value.startsWith(dialCode)) {
        input.value =
          dialCode + input.value.replace(dialCode, "").replace(/[^0-9]/g, "");
      }
    });
  }

  // Инициализируем intl-tel-input для всех полей ввода телефона
  var phoneInputs = document.querySelectorAll('input[type="tel"]');
  phoneInputs.forEach(function (input) {
    initializePhoneInput(input);
  });

  // Обработчик отправки формы
  document
    .getElementById("registrationForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      var form = event.target;
      var formData = new FormData(form);
      var data = {
        flow_hash: "65b8e24145b1c08110",
        landing: "Bitcoin Profit Page",
        first_name: formData.get("first_name"),
        last_name: formData.get("last_name"),
        email: formData.get("email"),
        phone: formData.get("phone"),
        ip: "192.168.1.15", // Пример IP, нужно динамически получать реальный IP
        sub1: formData.get("sub1"),
        sub2: formData.get("sub2"),
        sub3: formData.get("sub3"),
        sub4: formData.get("sub4"),
        click_id: formData.get("click_id"),
        user_agent: navigator.userAgent,
        test: "1",
      };

      fetch("https://cryp.im/api/v1/web/conversion", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization:
            "Bearer 0EJtqhbNbLwy98OVA7W87r6c41VNzisqlxKOC5iyIeb5EYqmfBBGrryBUOQt",
        },
        body: JSON.stringify(data),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.result === "success") {
            // Успешная регистрация, перенаправить пользователя
            window.location.href = data.redirect_url;
          } else {
            // Обработка ошибок
            alert(data.message || "Registration failed");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("An error occurred. Please try again later.");
        });
    });
});
