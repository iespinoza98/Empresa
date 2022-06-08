var oForm = document.getElementById('contact-form');

oForm.addEventListener('submit', function (e) {
    e.preventDefault();

    var oDatos = new FormData(oForm);

    fetch('./server/enviarCorreo.php', {
        method: 'POST',
        body: oDatos
    })
        .then(res => res.json())
        .then(data => {
            if (data.type === "S") {
                swal("Éxito", "Se enviaron los datos correctamente!", "success");
                oForm.reset();
            } else {
                swal("Error", data.message, "error");
            }
        })

});

// if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
//     document.getElementById('home').style.backgroundImage="url(assets/images/hero/hero-mobile.jpg)";
// }else{
//     document.getElementById('home').style.backgroundImage="url(assets/images/hero/hero-three.jpg)";
// }