// // 2. This code loads the IFrame Player API code asynchronously. 
// var tag = document.createElement('script');
// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// // 3. This function creates an <iframe> (and YouTube player) 
// //    after the API code downloads. 
// var player;
// function onYouTubeIframeAPIReady() {
//     player = new YT.Player('player', {
//         height: '360',
//         width: '640',
//         videoId: '5NGkxKzNYWM',
//         events: {
//             'onReady': onPlayerReady,
//             'onStateChange': onPlayerStateChange
//         }
//     });
// }


// // Función que se ejecutará cuando la página esté completamente cargada
// function onPageLoad() {
//     // Este bloque de código se ejecutará después de que la página esté completamente cargada

//     // Carga asíncrona del IFrame Player API code
//     var tag = document.createElement('script');
//     tag.src = "https://www.youtube.com/iframe_api";
//     var firstScriptTag = document.getElementsByTagName('script')[0];
//     firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// }

// // Asigna la función onPageLoad al evento window.onload
// window.onload = onPageLoad;

// // Resto de tu código
// var player;

// function onYouTubeIframeAPIReady() {
//     player = new YT.Player('player', {
//         height: '360',
//         width: '640',
//         videoId: '5NGkxKzNYWM',
//         events: {
//             'onReady': onPlayerReady,
//             'onStateChange': onPlayerStateChange
//         }
//     });
// }

// // Resto de tus funciones



// // 4. The API will call this function when the video player is ready. 
// function onPlayerReady(event) {
//     event.target.playVideo();
// }
// // 5. The API calls this function when the player's state changes. 
// //    The function indicates that when playing a video (state=1), 
// //    the player should play for six seconds and then stop. 
// var done = false;
// function onPlayerStateChange(event) {
//     if (event.data == YT.PlayerState.PLAYING && !done) {
//         // setTimeout(stopVideo, 6000);
//         done = true;
//     }
// }
// function stopVideo() {
//     player.stopVideo();
// }

// function PlayVideo() {
//     player.playVideo();
// } 






// ANIMACIÓN BOTONES MENU CONFORME VAYA BAJANDO 
$(document).ready(function () {
    // Función para actualizar las clases del menú según la posición del contenido
    function actualizarMenu() {
        // Obtener la posición vertical del scroll
        var scrollPosition = $(window).scrollTop();

        // Iterar sobre cada contenido y verificar si está visible en la pantalla
        $('[id^="contenido_"]').each(function () {
            // Verificar si el elemento está definido
            if ($(this).length) {
                var contentOffset = $(this).offset().top - 150;
                var contentHeight = $(this).outerHeight();

                if (scrollPosition >= contentOffset && scrollPosition < contentOffset + contentHeight) {
                    // Obtener el número de contenido desde el ID
                    var contentNumber = $(this).attr('id').split('_')[1];

                    // Eliminar la clase 'active' de todos los elementos del menú
                    $('.i_menu').removeClass('active');

                    // Agregar la clase 'active' al elemento del menú correspondiente
                    $('.menu_'.concat(contentNumber)).addClass('active');
                }
            }
        });


        /**Cambiar color btn fixed */
        $('.c-menu').each(function () {
            var contentOffset = $(this).offset().top - 400;
            var contentHeight = $(this).outerHeight();

            if (scrollPosition >= contentOffset) {
                $('.btn-fixed-call').addClass('active');
                $('.c-subir').addClass('active');
                $('.c-msj').addClass('active');
            } else {
                $('.btn-fixed-call').removeClass('active');
                $('.c-subir').removeClass('active');
                $('.c-msj').removeClass('active');
            }
        });


    }


    function subir() {
        $('html, body').scrollTop($("#header_page").offset().top);
    }

    // Llamar a la función al cargar la página y al desplazarse
    actualizarMenu();

    $(window).scroll(function () {
        actualizarMenu();
    });
});





// FIXED MENU
// $(document).ready(function () {
//     var menu = $(".c-menu");
//     var menuOffset = menu.offset().top;

//     $(window).scroll(function () {
//         var scrollPosition = $(window).scrollTop();

//         if (scrollPosition >= menuOffset) {
//             // Si el scroll ha pasado la posición del menú, agregar la clase "fixed"
//             menu.addClass("c-fixed");
//         } else {
//             // Si el scroll está por encima de la posición del menú, quitar la clase "fixed"
//             menu.removeClass("c-fixed");
//         }
//     });
// });






// IN TRANSITION

$(document).ready(function () {
    // Función para agregar la clase 'active' cuando el elemento entra en la pantalla
    function fadeInOnScroll() {
        $(document).ready(function () {
            // Función para agregar la clase 'active' y aplicar efectos cuando el elemento entra en la pantalla
            function applyEffectsOnScroll() {
                $(".fade-in").each(function () {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 100) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });

                $(".fade-in-top").each(function () {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 100) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });


                $(".fade-in-bottom").each(function () {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 100) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });

                $(".fade-in-left").each(function () {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 100) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });

                $(".fade-in-right").each(function () {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 100) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });


                $(".cont-niv-html").each(function () {
                    var position = $(this).offset().top - 200;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var delay = parseInt($(this).data('delay')) || 0;
                    var duration = parseInt($(this).data('duration')) || 1000; // Duración predeterminada: 1000 ms

                    if (scroll > position - windowHeight + 10) {
                        setTimeout(function () {
                            $(this).css({ transition: 'opacity ' + duration + 'ms ease-in-out, transform ' + duration + 'ms ease-in-out' }).addClass("active");
                        }.bind(this), delay);
                    }
                });


            }

            // Llamar a la función al cargar la página y al desplazarse
            applyEffectsOnScroll();

            $(window).scroll(function () {
                applyEffectsOnScroll();
            });
        });

    }

    // Llamar a la función al cargar la página y al desplazarse
    fadeInOnScroll();

    $(window).scroll(function () {
        fadeInOnScroll();
    });


    $("#btn_youtube").click(function () {
        //alert('df');
        $('.youtube-prev').removeClass('active');
        $('.youtube').addClass('active');

        PlayVideo();
    });
});



// TAP PANEL PROYECTOS
$('#btn_proyecto_interiores').on('click', function () {
    var tab = new bootstrap.Tab(
        document.querySelector('#list-home-list')
    );
    tab.show();
    $(this).removeClass('btn-4').addClass('btn-3');
    $('#btn_proyecto_areas').removeClass('btn-3').addClass('btn-4');
});

$('#btn_proyecto_areas').on('click', function () {
    var tab = new bootstrap.Tab(
        document.querySelector('#list-profile-list')
    );
    tab.show();
    $(this).removeClass('btn-4').addClass('btn-3');
    $('#btn_proyecto_interiores').removeClass('btn-3').addClass('btn-4');
});

// Para que no exista delay cuando de slick en tapánel
$('#list-tab a').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr('href'); // #list-home o #list-profile
    $(target).find('.slider').slick('setPosition');
});


// click buton form referidos
document.querySelectorAll('.btns_interes_referido .btn')
    .forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            // quitar active de todos
            document.querySelectorAll('.btns_interes_referido .btn')
                .forEach(b => b.classList.remove('active'));

            // agregar active al clickeado
            this.classList.add('active');

            // valor del data
            const proyecto = this.dataset.proyecto;
            console.log(proyecto);

            // 👉 setear input
            document.getElementById('proyecto_seleccionado').value = proyecto;
        });
    });




// buscar proyecto
$('#buscar_proyecto').on('submit', function (e) {
    e.preventDefault(); // 1️⃣ bloquea la recarga

    const estado = $('#estado option:selected').data('estado');
    const distrito = $('#distrito option:selected').data('distrito');
    const habitaciones = $('#habitaciones option:selected').data('habitaciones');

    // 2️⃣ mostrar el data-estado en consola
    console.log('estado: ' + estado);
    console.log('distrito: ' + distrito);
    console.log('habitaciones: ' + habitaciones);

    $("#i_block_1").removeClass('col-md-8');
    $("#i_block_1").addClass('col-md-6');
    $("#i_block_1").addClass('mt-4');

    $("#i_block_2").removeClass('d-md-inline-flex');

    $("#i_block_3").removeClass('col-md-7');
    $("#i_block_3").addClass('col-md-6');

    $("#i_block_4").removeClass('col-md-5');
    $("#i_block_4").addClass('col-md-6');

    $("#i_block_5").removeClass('col-md-5');
    $("#i_block_5").addClass('col-md-6');

    $("#i_block_6").removeClass('col-md-7');
    $("#i_block_6").addClass('col-md-6');


    var i_block_1 = false;
    var i_block_3 = false;
    var i_block_4 = false;
    var i_block_5 = false;
    var i_block_6 = false;

    /**estado */
    if (estado) {
        if (estado == 'pre-venta') {
            i_block_1 = true;
        }
        if (estado == 'en-construccion') {
            i_block_3 = true;
            i_block_4 = true;
            i_block_5 = true;
        }
        if (estado == 'en-lanzamiento') {
            i_block_6 = true;
        }
    } else {
        //alert('ninguno');
        i_block_1 = true;
        i_block_2 = true;
        i_block_3 = true;
        i_block_4 = true;
        i_block_5 = true;
        i_block_6 = true;
    }


    var j_block_1 = false;
    var j_block_3 = false;
    var j_block_4 = false;
    var j_block_5 = false;
    var j_block_6 = false;

    /**distrito */
    if (distrito) {
        if (distrito == 'surquillo') {
            j_block_1 = true;
        }
        if (distrito == 'miraflores') {
            j_block_3 = true;
            j_block_5 = true;
            j_block_6 = true;
        }
        if (distrito == 'san-isidro') {
            j_block_4 = true;
        }
    } else {
        j_block_1 = true;
        j_block_2 = true;
        j_block_3 = true;
        j_block_4 = true;
        j_block_5 = true;
        j_block_6 = true;
    }


    /**Habitaciones */
    var k_block_1 = false;
    var k_block_3 = false;
    var k_block_4 = false;
    var k_block_5 = false;
    var k_block_6 = false;

    if (habitaciones) {
        if (habitaciones == '1') {
            k_block_1 = true;
            k_block_4 = true;
            k_block_5 = true;
        }
        if (habitaciones == '2') {
            k_block_1 = true;
            k_block_3 = true;
            k_block_4 = true;
            k_block_5 = true;
            k_block_6 = true;
        }
        if (habitaciones == '3') {
            k_block_1 = true;
            k_block_3 = true;
            k_block_4 = true;
            k_block_5 = true;
            k_block_6 = true;
        }
    } else {
        k_block_1 = true;
        k_block_2 = true;
        k_block_3 = true;
        k_block_4 = true;
        k_block_5 = true;
        k_block_6 = true;
    }



    /**Mostrar resultado */
    if (i_block_1 == false || j_block_1 == false || k_block_1 == false) {
        $("#i_block_1").addClass('d-none');
    } else {
        $("#i_block_1").removeClass('d-none');
    }

    if (i_block_3 == false || j_block_3 == false || k_block_3 == false) {
        $("#i_block_3").addClass('d-none');
    } else {
        $("#i_block_3").removeClass('d-none');
    }

    if (i_block_4 == false || j_block_4 == false || k_block_4 == false) {
        $("#i_block_4").addClass('d-none');
    } else {
        $("#i_block_4").removeClass('d-none');
    }

    if (i_block_5 == false || j_block_5 == false || k_block_5 == false) {
        $("#i_block_5").addClass('d-none');
    } else {
        $("#i_block_5").removeClass('d-none');
    }

    if (i_block_6 == false || j_block_6 == false || k_block_6 == false) {
        $("#i_block_6").addClass('d-none');
    } else {
        $("#i_block_6").removeClass('d-none');
    }

});


