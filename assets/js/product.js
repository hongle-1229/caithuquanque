import Swal from 'sweetalert2'

// or via CommonJS
const Swal = require('sweetalert2')
document.addEventListener("DOMContentLoaded", function() {
    const categoryButtons = document.querySelectorAll("#productCategoryTab button");
    const productItems = document.querySelectorAll(".product-item");

    categoryButtons.forEach(button => {
        button.addEventListener("click", function() {
            const selectedCategory = this.getAttribute("data-category");

            productItems.forEach(item => {
                if (selectedCategory === "all" || item.getAttribute("data-category") === selectedCategory) {
                    item.style.display = "block"; // Hiển thị sản phẩm
                } else {
                    item.style.display = "none"; // Ẩn sản phẩm
                }
            });

            // Highlight nút được chọn
            categoryButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });
});


// su kien them vao gio hang
document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', (e) => {
        // Ngừng hành động mặc định của button (nếu có form)
        e.preventDefault();

        const form = button.closest('form');
        const productId = form.querySelector('input[name="product_id"]').value;
        const productName = form.querySelector('input[name="product_name"]').value;
        const productPrice = form.querySelector('input[name="product_price"]').value;
        const productImage = form.querySelector('input[name="product_image"]').value;

        // Gửi yêu cầu AJAX
        fetch('../cartt/add_to_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                product_id: productId,
                product_name: productName,
                product_price: productPrice,
                product_image: productImage
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Hiển thị thông báo khi thêm thành công
                alert(data.message);

                // Cập nhật số lượng sản phẩm trong giỏ hàng (nếu có phần này)
                const cartItemCount = document.querySelector('.cart-item-count');
                if (cartItemCount) {
                    cartItemCount.textContent = data.total_items;
                }

                // Hiệu ứng bay vào giỏ hàng
                const cartLogo = document.querySelector('.cart-logo');
                const productIcon = button.querySelector('.cart-icon i'); // Giả sử có một thẻ <i> trong button

                const flyingIcon = productIcon.cloneNode(true);
                flyingIcon.style.position = 'absolute';
                flyingIcon.style.transition = 'all 1s ease';
                flyingIcon.style.transform = 'scale(0.5)';
                document.body.appendChild(flyingIcon);

                // Đặt vị trí ban đầu của flyingIcon gần nút thêm vào giỏ hàng
                flyingIcon.style.left = `${button.offsetLeft + button.offsetWidth / 2}px`;
                flyingIcon.style.top = `${button.offsetTop + button.offsetHeight / 2}px`;

                // Di chuyển icon bay vào vị trí giỏ hàng
                setTimeout(() => {
                    flyingIcon.style.left = `${cartLogo.offsetLeft + cartLogo.offsetWidth / 2}px`;
                    flyingIcon.style.top = `${cartLogo.offsetTop + cartLogo.offsetHeight / 2}px`;
                }, 10);

                // Sau khi hiệu ứng hoàn tất, xóa flyingIcon
                setTimeout(() => flyingIcon.remove(), 1000);
            } else {
                // Chỉ hiển thị lỗi nếu có sự cố xảy ra
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
            alert("Có lỗi xảy ra khi thêm sản phẩm!");
        });
    });
});
Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Your work has been saved",
    showConfirmButton: false,
    timer: 1500
  });