document.addEventListener("DOMContentLoaded", function () {
  const depositRange = document.getElementById("depositRange");
  const depositLabel = document.getElementById("depositLabel");
  const depositRangeLabel = document.getElementById("depositRangeLabel");
  const daysRange = document.getElementById("daysRange");
  const daysLabel = document.getElementById("daysLabel");
  const daysRangeLabel = document.getElementById("daysRangeLabel");
  const earnings = document.getElementById("earnings");
  const profitability = document.getElementById("profitability");
  const revenue = document.getElementById("revenue");

  function updateResults() {
    const deposit = parseInt(depositRange.value);
    const days = parseInt(daysRange.value);

    // Пример вычислений, можно заменить на реальные
    const potentialEarnings = deposit * days * 0.1;
    const potentialProfitability = (potentialEarnings / deposit) * 100;
    const potentialRevenue = potentialEarnings - deposit;

    depositLabel.textContent = `Kč${deposit}`;
    depositRangeLabel.textContent = `Kč${deposit}`;
    depositRangeLabel.style.left = `${
      ((depositRange.value - depositRange.min) /
        (depositRange.max - depositRange.min)) *
      100
    }%`;
    depositRange.style.setProperty(
      "--range-width",
      `${
        ((depositRange.value - depositRange.min) /
          (depositRange.max - depositRange.min)) *
        100
      }%`
    );

    daysLabel.textContent = `${days} dny`;
    daysRangeLabel.textContent = `${days} dny`;
    daysRangeLabel.style.left = `${
      ((daysRange.value - daysRange.min) / (daysRange.max - daysRange.min)) *
      100
    }%`;
    daysRange.style.setProperty(
      "--range-width",
      `${
        ((daysRange.value - daysRange.min) / (daysRange.max - daysRange.min)) *
        100
      }%`
    );

    earnings.textContent = `Kč${potentialEarnings.toFixed(2)}`;
    profitability.textContent = `${potentialProfitability.toFixed(2)}%`;
    revenue.textContent = `Kč${potentialRevenue.toFixed(2)}`;
  }

  depositRange.addEventListener("input", updateResults);
  daysRange.addEventListener("input", updateResults);

  // Инициализация результатов при загрузке
  updateResults();
});
