 const yearlyBtn = document.getElementById('yearlyBtn');
  const monthlyBtn = document.getElementById('monthlyBtn');
  const starterPrice = document.getElementById('starterPrice');
  const standardPrice = document.getElementById('standardPrice');
  const plusPrice = document.getElementById('plusPrice');
  const enterprisePrice = document.getElementById('enterprisePrice');

  const monthlyPrices = {
    starter: 150.00,
    standard: 100.00,
    plus: 200.00,
  };

  const yearlyPrices = {
    starter: 450.00,
    standard: 400.00,
    plus: 600.00,
  };

  function updatePrices(prices) {
    starterPrice.textContent = prices.starter.toFixed(2);
    standardPrice.textContent = prices.standard.toFixed(2);
    plusPrice.textContent = prices.plus.toFixed(2);
    enterprisePrice.textContent = prices.enterprise.toFixed(2);
  }

  yearlyBtn.addEventListener('click', () => {
    yearlyBtn.classList.add('bg-white', 'shadow');
    yearlyBtn.classList.remove('bg-gray-200');
    monthlyBtn.classList.add('bg-gray-50');
    monthlyBtn.classList.remove('bg-white', 'shadow');
    updatePrices(yearlyPrices);
  });

  monthlyBtn.addEventListener('click', () => {
    monthlyBtn.classList.add('bg-white', 'shadow');
    monthlyBtn.classList.remove('bg-gray-200');
    yearlyBtn.classList.add('bg-gray-50');
    yearlyBtn.classList.remove('bg-white', 'shadow');
    updatePrices(monthlyPrices);
  });