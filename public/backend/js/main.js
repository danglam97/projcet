$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
})

// Xóa Banner
// function destroyBanner(id) {
//
//     var result = confirm("Bạn có chắc chắn muốn xóa Banner ?");
//     if (result) { // neu nhấn == ok , sẽ send request ajax
//         $.ajax({
//             url: base_url + '/quan-tri/banner/'+id, // base_url được khai báo ở đầu page == http://viettelstore.com/quan-tri/banner
//             type: 'DELETE',
//             data: {}, // dữ liệu truyền sang nếu có
//             dataType: "json", // kiểu dữ liệu nhận về
//             success: function (response) { // success : kết quả trả về sau khi gửi request ajax
//                 // console.log(response)
//                 // dữ liệu trả về là một object nên để gọi đến status chúng ta sẽ gọi như bên dưới
//                 if (response.status != 'undefined' && response.status == true) {
//                     // xóa dòng vừa được click delete
//                     $('.item-'+id).closest('tr').remove(); // class .item- ở trong class của thẻ td đã khai báo trong file index
//                 }
//             },
//             error: function (e) { // lỗi nếu có
//                 console.log(e.message);
//             }
//         });
//     }
// }
// //xóa brand
// function destroyBrand(id) {
//
//     var result = confirm("Bạn có chắc chắn muốn xóa Brand ?");
//     if (result) { // neu nhấn == ok , sẽ send request ajax
//         $.ajax({
//             url: base_url + '/quan-tri/banner/'+id,// base_url được khai báo ở đầu page ==http://viettelstore.com/quan-tri/brand
//
//             type: 'DELETE',
//             data: {}, // dữ liệu truyền sang nếu có
//             dataType: "json", // kiểu dữ liệu nhận về
//             success: function (response) { // success : kết quả trả về sau khi gửi request ajax
//                 console.log(response)
//                 // dữ liệu trả về là một object nên để gọi đến status chúng ta sẽ gọi như bên dưới
//                 if (response.status != 'undefined' && response.status == true) {
//
//                     // xóa dòng vừa được click delete
//                     $('.item-'+id).closest('tr').remove(); // class .item- ở trong class của thẻ td đã khai báo trong file index
//                 }
//             },
//             error: function (e) { // lỗi nếu có
//                 console.log(e.message);
//             }
//         });
//     }
// }
// function destroyModel(mode,id) {
//
//     var result = confirm("Bạn có chắc chắn muốn xóa Brand ?");
//     if (result) { // neu nhấn == ok , sẽ send request ajax
//         $.ajax({
//             url: base_url + '/quan-tri+ model'+id,// base_url được khai báo ở đầu page == http://viettelstore.com/quan-tri/vendor
//
//             type: 'DELETE',
//             data: {}, // dữ liệu truyền sang nếu có
//             dataType: "json", // kiểu dữ liệu nhận về
//             success: function (response) { // success : kết quả trả về sau khi gửi request ajax
//
//                 // dữ liệu trả về là một object nên để gọi đến status chúng ta sẽ gọi như bên dưới
//                 if (response.status != 'undefined' && response.status == true) {
//                     console.log(response)
//                     // xóa dòng vừa được click delete
//                     $('.item-'+id).closest('tr').remove(); // class .item- ở trong class của thẻ td đã khai báo trong file index
//                 }
//             },
//             error: function (e) { // lỗi nếu có
//                 console.log(e.message);
//             }
//         });
//     }
// }
function destroyModel(model, id) {
    var result = confirm("Bạn có chắc chắn muốn xóa ?");
    if (result) { // neu nhấn == ok , sẽ send request ajax
        $.ajax({
            url: base_url + '/quan-tri/'+model+'/'+id, // base_url được khai báo ở đầu page == http://viettel.com
            type: 'DELETE',
            data: {}, // dữ liệu truyền sang nếu có
            dataType: "json", // kiểu dữ liệu trả về
            success: function (response) { // success : kết quả trả về sau khi gửi request ajax
                if (response.status != 'undefined' && response.status == true) {
                    // xóa dòng vừa được click delete
                    $('.item-'+id).closest('tr').remove(); // class .item- ở trong class của thẻ td đã khai báo trong file index
                }
            },
            error: function (e) { // lỗi nếu có
                console.log(e.message);
            }
        });
    }
}

