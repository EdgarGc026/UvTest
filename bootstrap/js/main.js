/* Iniciar Sesion */
/* Si hay algun campo invalido, se desactiva el boton */
(function () {
    'use strict';
    window.addEventListener('load', function () {
        //
        var forms = this.document.getElementsByClassName('needs-validation');

        //
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() ===  false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated')
            }, false);
        });
    }, false);
})();