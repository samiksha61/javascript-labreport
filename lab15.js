const form = document.getElementById('registrationForm');

  form.addEventListener('submit', (event) => {
  event.preventDefault();

  const email = document.getElementById('email');
  const age = document.getElementById('age');
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirmPassword');
  const zipCode = document.getElementById('zipCode');
  const terms = document.getElementById('terms');
  const url = document.getElementById('url');
  const date = document.getElementById('date');
  const file = document.getElementById('file');
  const country = document.getElementById('country');

  // Email validation
  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.\w{2,4}$/.test(email.value)) {
    showError(email, 'Invalid email format');
    return;
  }

  // Age validation
  if (isNaN(age.value) || age.value < 1 || age.value > 120) {
    showError(age, 'Age must be a number between 1 and 120');
    return;
  }

  // Password validation
  if (password.value.length < 8) {
    showError(password, 'Password must be at least 8 characters long');
    return;
  } else if (!/[a-z]/.test(password.value) || !/[A-Z]/.test(password.value) || !/\d/.test(password.value) || !/[^\w\s]/.test(password.value)) {
    showError(password, 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character');
    return;
  }

  // Password confirmation
  if (password.value !== confirmPassword.value) {
    showError(confirmPassword, 'Passwords do not match');
    return;
  }

  // Zip code validation
  if (!/^\d{5}(?:-\d{4})?$/.test(zipCode.value)) {
    showError(zipCode, 'Invalid zip code format');
    return;
  }

  // Terms and conditions validation
  if (!terms.checked) {
    showError(terms, 'Please agree to the terms and conditions');
    return;
  }

  // URL validation (optional, adjust regex based on your needs)
  if (url.value && !/^(https?:\/\/)?[\w\-_]+(\.[\w\-_]+)+(\/[\w\-,.\/?#&=+\$\%~`!@*$'\(\)]*)*$/.test(url.value)) {
    showError(url, 'Invalid URL format');
    return;
  }

  // Date validation
  const today = new Date();
  if (new Date(date.value).getTime() > today.getTime()) {
    showError(date, 'Date of birth cannot be in the future');
    return;
  }

  // File size validation
  if (file.files.length > 0 && file.files[0].size > 1048576) {
    showError(file, 'File size cannot exceed 1 MB');
    return;
  }

  // Country selection validation
  if (!country.value) {
    showError(country, 'Please select a country');
    return;
  }

  // Submit the form if all validations pass
  form.submit();
});

function showError(element, message) {
  const errorElement = element.nextElementSibling;
  errorElement.textContent = message;
  errorElement.classList.add('error');
}