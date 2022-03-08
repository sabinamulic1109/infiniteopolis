$(document).ready(function(){   //funkcija za interaktivni website

    $('#menu').click(function(){  //kad se smanji velicina sve iz navigacionog bara se reda u menu
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $('#login').click(function(){
        $('.login-form').addClass('popup');
    });

    $('.login-form form .fa-times').click(function(){
        $('.login-form').removeClass('popup');
    });

    $(window).on('load scroll',function(){

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        $('.login-form').removeClass('popup');

        $('section').each(function(){

            let top = $(window).scrollTop();
            let height = $(this).height();
            let id = $(this).attr('id');
            let offset = $(this).offset().top - 200;

            if(top > offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active'); //Sekcija se prepoznaje po svom id-u
            }


        });

    });

});  

$(document).ready(function () { //funkcija za priikaz videa, kada se klikne na zeljeni video on postaje 'main-video' i prikaze se 
    $('.videos video').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        var src=$(this).attr('src')
        $('.main-video video').attr('src',src);
    });
});
    


