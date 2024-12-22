$(document).on('click', '.btn-delete', function () {
    const productId = $(this).data('id');

    $.ajax({
        url: '../cartt/remove_from_cart.php',
        method: 'POST',
        data: { product_id: productId },
        success: function (response) {
            $(`button[data-id="${productId}"]`).closest('tr').remove();

            if (response.total) {
                $('#total-price').text(response.total + ' VND');
            }

            // Kiểm tra nếu giỏ hàng trống
            if ($('tbody tr').length === 0) {
                $('tbody').html('<tr><td colspan="6" class="text-center">Giỏ hàng của bạn trống</td></tr>');
            }
        },
        error: function () {
            alert('Đã xảy ra lỗi, vui lòng thử lại!');
        }
    });
});

$(document).ready(function() {
    $('.update-form').submit(function(e) {
        e.preventDefault(); // Ngừng reload trang

        var form = $(this);  // Lấy form hiện tại
        var productId = form.data('id');  // Lấy ID sản phẩm từ data-id
        var quantity = form.find('input[name="quantity"]').val();  // Lấy giá trị số lượng

        // Gửi yêu cầu AJAX đến PHP để cập nhật giỏ hàng
        $.ajax({
            url: 'update_cart.php',  // Đường dẫn tới file PHP xử lý
            method: 'POST',
            data: {
                product_id: productId,  // ID sản phẩm cần cập nhật
                quantity: quantity  // Số lượng mới
            },
            success: function(response) {
                var data = JSON.parse(response);  // Phân tích dữ liệu JSON trả về

                // Kiểm tra nếu có lỗi
                if (data.error) {
                    alert(data.error);  // Hiển thị thông báo lỗi
                } else {
                    // Cập nhật tổng tiền của sản phẩm
                    $('[data-id="' + productId + '"]').closest('tr').find('.product-total').text(data.productTotal + ' VND');

                    // Cập nhật tổng giỏ hàng
                    $('#total-price').text(data.cartTotal + ' VND');
                }
            },
            error: function() {
                alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
            }
        });
    });
});
