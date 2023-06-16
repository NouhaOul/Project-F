// Get the radio buttons and the additional fields
const roleRadios = document.querySelectorAll('input[name="role"]');
const coachFields = document.getElementById('coach-fields');

// Add event listeners to the radio buttons
roleRadios.forEach((radio) => {
  radio.addEventListener('change', (event) => {
    const selectedRole = event.target.value;

    // Show/hide the additional fields based on the selected role
    if (selectedRole === 'coach') {
      coachFields.style.display = 'block';
    } else {
      coachFields.style.display = 'none';
    }
  });
});
