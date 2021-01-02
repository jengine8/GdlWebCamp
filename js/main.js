(function () {

    'use strict';

    let regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function () {

        var map = L.map('mapa').setView([20.695806, -103.38654], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([20.695806, -103.38654]).addTo(map)
            .bindPopup('GDLWEBCAMP <br> Aqui!!!')
            .openPopup();

        //console.log('listo');

        //datos usuario
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let mail = document.getElementById('email');



        //datos pases

        let paseDia = document.getElementById('pase-dia');
        let paseTodos = document.getElementById('pase-todos');
        let paseDosDias = document.getElementById('pase-dos-dias');


        let boton = document.getElementById('calcular');
        let pagar = document.getElementById('botonRegistro');
        let calcular = document.getElementById('calcular');
        let error = document.getElementById('error');
        let listaDeProductos = document.getElementById('totalProductos');

        var total = document.getElementById('sumaTotal');



        //extras

        let etiquetas = document.getElementById('etiquetasEvento');
        let camisasEvento = document.getElementById('camisaEvento');



        calcular.addEventListener('click', calcularMonto);
        paseDia.addEventListener('blur', mostrarDia);
        paseDosDias.addEventListener('blur', mostrarDia);
        paseTodos.addEventListener('blur', mostrarDia);
        nombre.addEventListener('blur', validarNoVacio);
        apellido.addEventListener('blur', validarNoVacio);
        mail.addEventListener('blur', validarNoVacio);
        mail.addEventListener('blur', validarEmail);


        function validarNoVacio() {
            if (this.value == '') {
                alert('El  CAMPO ES OBLIGATORIO');


            }
        }

        function validarEmail() {
            if (this.value.indexOf("@") > -1) {
                alert('Correo Valido, Puede continuar!!')
            } else {
                alert('Correo no Valido, incluye al menos una @');
            }

        }

        function calcularMonto(event) {
            event.preventDefault();

            if (regalo.value === '') {
                alert('Debes elegir un regalo!!!!');
                regalo.focus();
            } else {
                let boletoDia = paseDia.value,
                    boletoDosDias = paseDosDias.value,
                    boletoTodosDias = paseTodos.value,
                    totalCamisas = camisasEvento.value,
                    totalEtiquetas = etiquetas.value;



                let pagoTotal = (boletoDia * 30) + (boletoDosDias * 60) + (boletoTodosDias * 80) + (totalCamisas * 0.93) + (totalEtiquetas * 2);





                console.log('Total a pagar: ' + pagoTotal);

                //resumen total

                let listaProductos = [];





                if (boletoDia >= 1) {
                    listaProductos.push(boletoDia + ' Pases por dia');
                }

                if (boletoDosDias >= 1) {
                    listaProductos.push(boletoDosDias + ' Pases por  dos dias');
                }

                if (boletoTodosDias >= 1) {
                    listaProductos.push(boletoTodosDias + ' Pases por todos los dias');
                }

                if (totalCamisas >= 1) {
                    listaProductos.push(totalCamisas + ' Camisas del evento');
                }

                if (totalEtiquetas >= 1) {
                    listaProductos.push(totalEtiquetas + ' Etiquetas');
                }


                listaDeProductos.innerHTML = '';


                for (var i = 0; i <= listaProductos.length; i++) {
                    listaDeProductos.innerHTML += listaProductos[i] + '<br/>';
                }

                total.innerHTML = pagoTotal.toFixed(2) + "$";

                console.log(listaProductos);








            } //else

        } //calcularMonto

        function mostrarDia() {
            let pasePorDia = parseInt(paseDia.value, 10) || 0,
                pasePorDosDias = parseInt(paseDosDias.value, 10) || 0,
                pasePorTodosDias = parseInt(paseTodos.value, 10) || 0;

            var diasElegidos = [];

            if (pasePorDia >= 1) {
                diasElegidos.push('viernes');
            }
            if (pasePorDosDias >= 1) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (pasePorTodosDias >= 1) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (var i = 0; i < diasElegidos.length; i++) {

                console.log(diasElegidos[i]);
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }

        }




    }); //dom content loaded

})();


$(function () {

    //lettering titulo principal

    $('.titulo-sitio').lettering();
    
    
    //menu responsive
    
    $('.menu-movil').on('click', function(){
        
        $('.navegacion-principal').slideToggle();
        
    });


    //barra menu fija

    var ventanaAltura = $(window).height();

    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > ventanaAltura) {
            $('.barra').addClass('fixed');
           
            //console.log('ya rebase');
        } else {
            $('.barra').removeClass('fixed');
           
            //console.log('aun no');
        }
        //console.log(scroll);
    });



    //conferencias

    $('.ocultar').hide();
    $('.programa-evento .info-curso:first').show();
    $('.barra-programa a:first').addClass('enlaceActivo');

    $('.barra-programa a').on('click', function () {
        $('.ocultar').hide();
        $('.barra-programa a').removeClass('enlaceActivo');
        $(this).addClass('enlaceActivo');
        let programaEventoPresionado = $(this).attr('href');
        $(programaEventoPresionado).fadeIn(1000);

        return false;
    });

    //numeros conferencias etc



    $('.resumen-evento li:nth-child(1) p').animateNumber({
        number: 7
    }, 3000);

    $('.resumen-evento li:nth-child(2) p').animateNumber({
        number: 15
    }, 3000);

    $('.resumen-evento li:nth-child(3) p').animateNumber({
        number: 3
    }, 3000);

    $('.resumen-evento li:nth-child(4) p').animateNumber({
        number: 9
    }, 3000);

    // cuenta regresiva

    $('.cuenta-regresiva').countdown('2020/12/20 10:00:00', function (event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));

    });

});
