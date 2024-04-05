// Kiểm tra nếu phần tử có thuộc tính style là "text-decoration: underline;"
var spans = document.getElementsByTagName("span");
for (var i = 0; i < spans.length; i++) {
    if (spans[i].style.textDecoration === "underline") {
        spans[i].style.textUnderlineOffset = "0.3em";
    }
}

$(document).ready(function () {
    // Kiểm tra URL sau khi trang được tải
    var urlParams = new URLSearchParams(window.location.search);
    var position = urlParams.get('positon');

    // Nếu tham số ?positon được xác định trong URL
    if (position) {
        // Tìm thẻ a có href tương ứng với giá trị của tham số ?positon
        $('#jlpt-test-info a[href="?positon=' + position + '"]').addClass('btn-active');
    }

    // Xử lý khi modal được hiển thị
    $('#exampleModalCenter').on('show.bs.modal', function () {
        $('#continueBtn').click(function () {
            // Xử lý khi người dùng chọn Làm Tiếp
            console.log('Người dùng chọn Làm Tiếp');
            $('#exampleModalCenter').modal('hide');
        });

        $('#submitBtn').click(function () {
            // Xử lý khi người dùng chọn Nộp Bài
            console.log('Người dùng chọn Nộp Bài');
            $('.explain').css('display', 'block')
            $('#exampleModalCenter').modal('hide');
        });
    });

    $('#jlpt-test-info a').click(function (e) {
        e.preventDefault(); // Ngăn chặn hành vi mặc định khi click vào thẻ a
        $('#jlpt-test-info a').removeClass('btn-active'); // Xoá class btn-active của tất cả các thẻ a
        $(this).addClass('btn-active'); // Thêm class btn-active cho thẻ a được click
        var url = $(this).attr('href'); // Lấy URL từ thuộc tính href của thẻ a được click

        // Nếu href chứa '?positon=check'
        if (url.includes('?positon=check')) {
            $('#exampleModalCenter').modal('show'); // Hiển thị modal
        } else {
            // Thay đổi URL trên thanh địa chỉ mà không reload trang
            history.pushState({}, '', url);
        }
    });

});
