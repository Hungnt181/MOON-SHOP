    document.addEventListener('DOMContentLoaded', function() {
        const qtyDown = document.querySelector('.qty-down');
        const qtyUp = document.querySelector('.qty-up');
        const qtyInput = document.querySelector('input[name="quantity"]');

        qtyDown.addEventListener('click', function(event) {
            event.preventDefault();
            let currentValue = parseInt(qtyInput.value);
            if (currentValue > 1) {
                qtyInput.value = currentValue - 1;
            }
        });

        qtyUp.addEventListener('click', function(event) {
            event.preventDefault();
            let currentValue = parseInt(qtyInput.value);
            qtyInput.value = currentValue + 1;
        });
    });