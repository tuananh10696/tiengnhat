$(document).ready(function () {

    function scrollToPosition(positionValue, headerOffset) {
        var scrollTop = $('#' + positionValue).offset().top - headerOffset;
        $('html, body').animate({
            scrollTop: scrollTop
        }, 200);
    }

    // Kiểm tra nếu phần tử có thuộc tính style là "text-decoration: underline;"
    var spans = document.getElementsByTagName("span");
    for (var i = 0; i < spans.length; i++) {
        if (spans[i].style.textDecoration === "underline") {
            spans[i].style.textUnderlineOffset = "0.3em";
        }
    }


    // Kiểm tra URL sau khi trang được tải
    var urlParams = new URLSearchParams(window.location.search);
    var position = urlParams.get('positon');

    // Nếu tham số ?positon được xác định trong URL
    if (position) {
        // Tìm thẻ a có href tương ứng với giá trị của tham số ?positon
        $('#jlpt-test-info a[href="?positon=' + position + '"]').addClass('btn-active');
        let url = window.location.href;
        scrollToPosition(url.split('=')[1], 90)
    }

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
            scrollToPosition(url.split('=')[1], 90)

        }
    });

    // Xử lý khi modal được hiển thị
    $('#exampleModalCenter').on('show.bs.modal', function () {
        $('#continueBtn').click(function () {
            $('#exampleModalCenter').modal('hide');
        });

        $('#submitBtn').click(function () {
            // Xử lý khi người dùng chọn Nộp Bài
            $('.explain').css('display', 'block')
            $('#exampleModalCenter').modal('hide');

            //Thay đổi link của btn check
            var currentURL = window.location.href;
            var checkLink = $('#check-jlpt-test');
            checkLink.text('Làm Lại');
            checkLink.attr('href', currentURL.split('?')[0]);
            $('#check-jlpt-test').click(function () {
                window.location.href = $(this).attr('href');
            });


            // Kiểm tra câu trả lời và chấm điểm
            $('.jlpt-qs').each(function () {
                var questionDiv = $(this); // Lấy element div của câu hỏi hiện tại
                var checkedRadio = questionDiv.find('.radio-parent-div input[type="radio"]:checked');
                var answerSelected = checkedRadio.length > 0;

                if (answerSelected) {
                    var selectedAnswer = checkedRadio.val();
                    var trueAnswerInput = questionDiv.find('.answer-and-note input.true_answer');
                    var trueAnswerValue = trueAnswerInput.val();

                    if (selectedAnswer === trueAnswerValue) {
                        checkedRadio.parent().addClass('true-answer');
                    } else {
                        checkedRadio.parent().addClass('false-answer');
                        questionDiv.find('.radio-parent-div label input[value="' + trueAnswerValue + '"]').parent().addClass('true-answer');
                    }
                } else {
                    var trueAnswerValue = questionDiv.find('.answer-and-note input.true_answer').val();
                    questionDiv.find('.radio-parent-div label input[value="' + trueAnswerValue + '"]').parent().addClass('true-answer');
                }
            });


        });
    });



});


