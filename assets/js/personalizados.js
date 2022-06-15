function viewDetail (x) {
    let sName = x.name;

    removeClass();
    addElements(sName);
    x.parentNode.className = "active";
}

function addElements (sName) {
    let aServicios = {
        "sDesarrollo": {
            titulo: "Desarrollo de Páginas Web",
            descripcion: "Las empresas de hoy necesitan aprovechar al máximo Internet. Por lo tanto, tienen que desarrollar aplicaciones o sitios web donde puedan entregar sus productos o automatizar procesos comerciales.",
            caracteristicas: ["Buena usabilidad y organización", " Contenido de calidad", "Responsiva", "Diseño adaptado al estilo corporativo"],
            subtitulo: "La importancia de contar con una página web",
            parrafo: "Cuando una organización tiene un sitio web, aumenta la reputación de la organización y permite que los clientes aumenten su  confianza en el producto o servicio que ofrece la organización. Los sitios web ayudan a aumentar las ventas, la productividad y el valor de mercado de cualquier PYME",
            imagen: "assets/images/services/pagina_web.jpg"
        },
        "sTienda": {
            titulo: "Tiendas Online",
            descripcion: "Actualmente es muy importante tener una tienda online por lo que nos encargamos de ofrecerle una interfaz comercial para facilitar las ventas de tus productos.",
            caracteristicas: ["Diseño Responsive", "Pasarelas de Pago", "Análisis y Reportes", "Complementos Especializados"],
            subtitulo: "Síntesis para el diseño de tiendas",
            parrafo: "En la actualidad existen diversas platformas(CMS) que permiten el diseño de tiendas virtuales con mayor rapidez. Para ello adaptamos un diseño exclusivo y estructura integrando todas las funcionalidades y plugins necesarios",
            imagen: "assets/images/services/ecommerce.png"
        },
        "sSistemas": {
            titulo: "Sistemas Web",
            descripcion: "Un sistema web personalizado le ahorrará costos, tiempo y recursos humanos. Como tal, las ganancias de su negocio aumentarán y administrará mejor a sus clientes, proveedores, distribuidores y más.",
            caracteristicas: ["Ahorran costes de hardware y software.", "Fáciles de usar", "Facilitan el trabajo colaborativo y a distancia", "Escalables y de rápida actualización"],
            subtitulo: "Será más eficiente; podrá ganar más y gastará menos.",
            parrafo: "Utilice aplicaciones web para ahorrar dinero. Aprovechará mejor su tiempo porque no tiene que preocuparse por aprender nuevos programas, mantenerlos o hacer copias de seguridad de sus datos, y puede trabajar desde cualquier lugar.",
            imagen: "assets/images/services/sistema_web.jpg"
        },
        "sFacElectronica": {
            titulo: "Facturación Electrónica",
            descripcion: "El sistema de facturación electrónica es el proceso de enviar facturas, estados de cuenta, recibos o cartas de reclamación a través de medios electrónicos.",
            caracteristicas: ["Formalidad y seguridad", "Ecoamigable", "Reduce costos", "Genera un mayor control documental"],
            subtitulo: "Puede generar grandes ventajas para el desempeño de sus negocios",
            parrafo: "Podrás gestionar de forma eficiente y segura tus facturas electrónicas a través de una herramienta desarrollada con una innovadora tecnología de integración de datos.",
            imagen: "assets/images/services/facturacion.jpg"
        }
    };

    let oServicio = aServicios[sName];
    
    $('#contentsService').empty();
    $('#contentsService').append('<div class="image mb-40"> <img src="' + oServicio.imagen + '"> </div>');
    $('#contentsService').append('<h2>' + oServicio.titulo + '</h2>');
    $('#contentsService').append('<p>' + oServicio.descripcion + '</p>');
    if (oServicio.caracteristicas.length > 0) {
        let sListCaracters = '<ul class="list-style-three pt-15 pb-30">';
        
        for (let i = 0, n = oServicio.caracteristicas.length; i < n; i++) {
            sListCaracters += '<li>' + oServicio.caracteristicas[i] + '</li>';
        }
        sListCaracters += '</ul>';
        $('#contentsService').append(sListCaracters);
    }
    $('#contentsService').append('<h3>' + oServicio.subtitulo + '</h3>');
    $('#contentsService').append('<p>' + oServicio.parrafo + '</p>');
    
}
function removeClass () {
    let aServices = document.getElementsByName("dservicio");

    for (let i = 0, n = aServices.length; i < n; i++) {
        let oService = aServices[i];

        oService.className = "";
    }
}
