let cart = []; // Array untuk menyimpan item yang ada di keranjang

function addToCart(itemName, price) {
    // Tambahkan item ke dalam keranjang
    cart.push({ name: itemName, price: price });
    
    // Tampilkan pesan bahwa item telah ditambahkan ke keranjang
    alert(`ditambahkan ${itemName} kekeranjang. harga: ${price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}`);
}

function checkout() {
    let total = 0;

    // Hitung total harga semua item di keranjang
    for (let i = 0; i < cart.length; i++) {
        total += cart[i].price;
    }

    // Tampilkan pesan dengan detail pembelian
    alert(`Checkout complete!\n\nTotal: $${total.toFixed(2)}`);

    // Kosongkan keranjang setelah checkout
    cart = [];
}
