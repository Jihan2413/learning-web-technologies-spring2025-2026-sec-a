var unitPrice = 1000;

var quantityField = document.getElementById("quantity");
var totalPriceField = document.getElementById("totalPrice");

quantityField.addEventListener("input", function () {
    var quantity = parseInt(quantityField.value) || 0;

    if (quantity < 0) {
        quantity = 0;
        quantityField.value = 0;
        alert("Quantity cannot be less than 0");
    }

    var total = unitPrice * quantity;
    totalPriceField.value = total;

    if (total > 1000) {
        alert("You are eligible for a gift coupon!");
    }
});