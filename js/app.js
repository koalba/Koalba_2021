'use strict'


$(document).ready(function(){

    if($(window).width() > 1100){
        for( let elemento of $('.parallax__item.active')){
            $(window).scroll(function(){
                let pixel       = $(window).scrollTop()
                let altoV = $(window).height()
                let velocidad   = 1.2
                let posicion    = $(elemento).index() / 3 + 1
    
                $(elemento).css({
                    'transform'         :`translateY(${ (pixel / velocidad ) / posicion }px)`,
                    '-o-transform'      :`translateY(${ (pixel / velocidad ) / posicion }px)`,
                    '-webkit-transform' :`translateY(${ (pixel / velocidad ) / posicion }px)`,
                    '-moz-transform'    :`translateY(${ (pixel / velocidad ) / posicion }px)`
                })                                                                  
            })   
        }
    }

    if($(window).width() <= 770){
        $(window).scroll(function(){
            let pixel = $(window).scrollTop()
            let altoV = $(window).height()

            $('.path__li').each(function(){
                let topI = $(this).offset().top
                let topP = $('.path').offset().top

                if(pixel >= topI - altoV / 1.25){
                    $('.path__li').removeClass('active')
                    $(this).addClass('active')
                } else if( pixel < topP - altoV / 1.5 ){
                    $('.path__li').removeClass('active')
                }
            })
        })
    }

    $('.cookies__accept').click(() => {
        $('.cookies').removeClass('active')
    })

    $(window).scroll(function(){
        let pixel = $(window).scrollTop()
        let altoV = $(window).height()

        let topMenu = $('.header').offset().top

        if(pixel >= altoV){
            $('.header--home').addClass('active')
        } else{
            $('.header--home').removeClass('active')
        }

        $('.title').each(function() {
            let topT = $(this).offset().top

            if(pixel >= topT - altoV / 1.2){
                $(this).addClass('active')
            } else if (pixel < topT - altoV - 30){
                $(this).removeClass('active')
            }
        })

        $('.slide-up').each(function() {
            let topS = $(this).offset().top

            if(pixel >= topS - altoV / 1){
                $(this).addClass('active')
            } else if (pixel < topS - altoV - 30){
                $(this).removeClass('active')
            }
        })

        $('.slide-down').each(function() {
            let topS = $(this).offset().top

            if(pixel >= topS - altoV / 1){
                $(this).addClass('active')
            } else if (pixel < topS - altoV - 30){
                $(this).removeClass('active')
            }
        })

        $('.path').each(function() {
            let topS = $(this).offset().top

            if(pixel >= topS - altoV / 1.3){
                $(this).addClass('active')
            } else if (pixel < topS - altoV - 30){
                $(this).removeClass('active')
            }
        })
    })

    $('.porfolio__label').click(() => {
        if($('.porfolio__input').is(":checked") == true){
            $('.porfolio__slider').css('transform', 'translateX(-50%)')
            $('.web').removeClass('active')
            $('.threeD').addClass('active')
        } else {
            $('.porfolio__slider').css('transform', 'translateX(0)')
            $('.threeD').removeClass('active')
            $('.web').addClass('active')
        }
    })
})