$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter') //filtriranje slika pomocu id-ova

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({  //Slika se ppoveća

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

