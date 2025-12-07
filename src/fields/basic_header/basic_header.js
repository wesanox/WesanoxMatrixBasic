$(document).ready(function() {
    let basic_header_swiper_one = new Swiper(".basic_header_swiper-one", {

    });

    let basic_header_swiper_two = new Swiper(".basic_header_swiper-two", {

    });

    let basic_header_swiper_three = new Swiper(".basic_header_swiper-three", {

    });

    let basic_header_swiper_four = new Swiper(".basic_header_swiper-four", {

    });

    $('.basic_header').on('click', '.basic_video-box', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const box = $(this).closest('.basic_video-box');
        const video = box.find('video')[0];

        if (video.paused) {
            $('.basic_video-box video').not(video).each(function () {
                this.pause();
                $(this).closest('.basic_video-box').find('.swiper-slider').removeClass('d-none');
            });

            $('.basic_header_swiper-two .video-button').addClass('d-none');
            $('.basic_header_swiper-three .video-button').addClass('d-none');
            $('.basic_header_swiper-four').addClass('d-none');
            video.play();
        } else {
            video.pause();
            $('.basic_header_swiper-two .video-button').removeClass('d-none');
            $('.basic_header_swiper-three .video-button').removeClass('d-none');
            $('.basic_header_swiper-four').removeClass('d-none');
        }
    });
});