$(function() {
    $('.neoslideshow img:gt(0)').hide(); // Ẩn thành phần phù hợp

    setInterval(function(){ // gọi một hàm theo 1 khoảng time nhất định

      $('.neoslideshow :first-child').fadeOut()

         .next('img').fadeIn() //Thay đổi độ mờ

         .end().appendTo('.neoslideshow');}, //chèn phẩn tử vào cuối

      4000);

})
