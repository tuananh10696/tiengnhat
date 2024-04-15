// $(document).ready(function() {
//     $('.jlpt-cate').click(function(event) {

//         var href = $(this).attr('href');
//         var title = $(this).find('span').data('title');
//         var description = $(this).find('span').data('description');

//         // Thay đổi URL mà không reload lại trang
//         history.pushState({}, '', href);

//         // Thay đổi title và mô tả của trang
//         document.title = title;
//         var metaDescription = $('meta[name="description"]');
//         if (metaDescription.length) {
//             metaDescription.attr('content', description);
//         } else {
//             $('<meta>').attr({ name: 'description', content: description }).appendTo('head');
//         }
//     });
// });