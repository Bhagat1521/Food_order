function printInputValue() {
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let orderItem = document.getElementById("orderItem").value;
    let quantity = document.getElementById("quantity").value;
    let address = document.getElementById("address").value;

    if (username != "", email != "", mobile != "", orderItem != "", quantity != "", address != "") {
        alert("Order placed successfully !..");
    }
}