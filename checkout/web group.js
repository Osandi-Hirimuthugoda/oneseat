document.addEventListener('DOMContentLoaded', () => {
    // Form Validation
    const form = document.querySelector('form');
    const firstName = document.getElementById('first-name');
    const lastName = document.getElementById('last-name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    
    form.addEventListener('submit', (event) => {
        // Simple validation for required fields
        if (!firstName.value || !lastName.value || !email.value || !phone.value) {
            alert('Please fill in all required fields.');
            event.preventDefault();
        }
    });

    // Update Total based on selected payment method
    const paymentMethods = document.querySelectorAll('input[name="payment-method"]');
    const totalElement = document.querySelector('.order-summary .total span:last-child');
    let total = 368800; // Assuming Rs. 368,800.00 as the initial total

    paymentMethods.forEach(method => {
        method.addEventListener('change', (event) => {
            if (event.target.value === 'cash-on-delivery') {
                totalElement.textContent = 'Rs. ' + (total + 1000).toFixed(2); // Adding Rs. 1000 for COD
            } else {
                totalElement.textContent = 'Rs. ' + total.toFixed(2);
            }
        });
    });
});
