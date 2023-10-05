const cart = {};
const exchangeRate = 300; // 1 dollár ($) = 300 magyar forint (Ft)

function addToCart(productId, productName, productPrice) {
    if (!cart[productId]) {
        cart[productId] = {
            name: productName,
            price: productPrice,
            quantity: 1
        };
    } else {
        cart[productId].quantity++;
    }

    updateCartDisplay();
}

function updateCartDisplay() {
    const cartList = document.getElementById('cart');
    const cartTotal = document.getElementById('cart-total');
    let totalFt = 0;

    cartList.innerHTML = '';

    for (const productId in cart) {
        const { name, price, quantity } = cart[productId];
        const listItem = document.createElement('li');
        listItem.textContent = `${name} - ${price} Ft x ${quantity}`;
        cartList.appendChild(listItem);
        totalFt += price * quantity * exchangeRate;
    }

    cartTotal.textContent = totalFt.toFixed(0) + ' Ft';
}

function checkout() {
    let totalFt = 0;

    for (const productId in cart) {
        const { price, quantity } = cart[productId];
        totalFt += price * quantity * exchangeRate;
    }

    alert('Checkout button clicked. Cart contents: ' + JSON.stringify(cart) + '\nTotal: ' + totalFt.toFixed(0) + ' Ft');
}

function openCartPage() {
    localStorage.setItem('cart', JSON.stringify(cart));
    window.open('kosar.html');
}
function goBack() {
    window.history.back();
}

const storedCart = JSON.parse(localStorage.getItem('cart')) || {};

        // Function to display cart items
        function displayCart() {
            const cartList = document.getElementById('cart-list');
            const cartTotal = document.getElementById('cart-total');
            let total = 0;

            cartList.innerHTML = '';

            for (const productId in storedCart) {
                const { name, price, quantity } = storedCart[productId];
                const listItem = document.createElement('li');
                listItem.textContent = `${name} - ${price} Ft x ${quantity}`;
                cartList.appendChild(listItem);
                total += price * quantity;
            }

            // Hozzáadjuk a végösszeget a lista alatt, nem a listához
            cartTotal.textContent = `Végösszeg: ${total.toFixed(0)} Ft`;
        }

        // Initial cart display
        displayCart();


const paymentButton = document.getElementById('payment-button');

paymentButton.addEventListener('click', function () {
    
    window.location.href = 'payment.html';
});

