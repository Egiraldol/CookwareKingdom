<?php

return [
    'admin' => [
        'home' => [
            //index.blade
            'header' => 'Panel de Administración - Página de Inicio',
            'welcomeMessage' => 'Bienvenido al Panel de Administración, utiliza la barra lateral para navegar entre las diferentes opciones.',
        ],
        'product' => [
            //edit.blade
            'nameEdit' => 'Nombre:',
            'priceEdit' => 'Precio:',
            'stockEdit' => 'Existencias:',
            'imageEdit' => 'Imagen:',
            'description' => 'Descripción',
            'submit' => 'Enviar',

            //index.blade
            'createProducts' => 'Crear Productos',
            'name' => 'Nombre',
            'stock' => 'Existencias',
            'price' => 'Precio',
            'image' => 'Imagen',
            'manageProducts' => 'Gestionar Productos',
            'id' => 'ID',
            'edit' => 'Editar',
            'delete' => 'Eliminar',
        ],
        'recipe' => [
            //edit.blade
            'editRecipe' => 'Editar Receta',
            'nameEdit' => 'Nombre:',
            'instructionsEdit' => 'Instrucciones:',
            'ingredientsEdit' => 'Ingredientes:',
            'imageEdit' => 'Imagen:',
            'description' => 'Descripción',
            'submit' => 'Enviar',
            
            //index.blade
            'createRecipes' => 'Crear Recetas',
            'descriptionIndex' => 'Descripción:',
            'addRecipe' => 'Agregar receta',
            'manageRecipes' => 'Gestionar recetas',
            'id' => 'ID',
            'name' => 'Nombre',
            'edit' => 'Editar',
            'delete' => 'Eliminar',
        ],
    ],
    'auth' => [
        'passwords' => [
            //confirm.blade
            'confirmPassword' => 'Confirmar Contraseña',
            'pleaseConfirm' => 'Por favor confirma tu contraseña antes de continuar.',
            'forgotPassword' => '¿Olvidaste tu contraseña?',

            //email.blade
            'resetPassword' => 'Restablecer Contraseña',
            'emailAddress' => 'Dirección de Correo Electrónico',
            'sendReset' => 'Enviar Enlace para Restablecer Contraseña',

            //reset.blade
            'password' => 'Contraseña',
        ],
        'login' => [
            'login' => 'Iniciar Sesión',
            'emailAddress' => 'Dirección de Correo Electrónico',
            'password' => 'Contraseña',
            'rememberMe' => 'Recuérdame',
            'forgotPassword' => '¿Olvidaste tu contraseña?',
        ],
        'register' => [
            'register' => 'Registro',
            'name' => 'Nombre',
            'emailAddress' => 'Dirección de Correo Electrónico',
            'password' => 'Contraseña',
            'confirmPassword' => 'Confirmar Contraseña',
        ],
        'verify' => [
            'verify' => 'Verificar tu Dirección de Correo Electrónico',
            'freshVerification' => 'Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.',
            'beforeProceeding' => 'Antes de continuar, por favor verifica tu correo electrónico para obtener un enlace de verificación.',
            'notReceiveEmail' => 'Si no has recibido el correo electrónico',
            'requestAnother' => 'haz clic aquí para solicitar otro',
        ],
    ],
    'cart' => [
        //index.blade
        'products' => 'Productos en Carrito',
        'id' => 'ID:',
        'name' => 'Nombre:',
        'price' => 'Precio:',
        'quantity' => 'Cantidad:',
        'purchase' => 'Comprar',
        'total' => 'Total:',
        'removeAll' => 'Eliminar Todos los Productos del Carrito',
        'emptyCart' => 'Tu carrito está vacío',
        'viewProducts' => 'Ver productos',

        //purchase.blade
        'purchase' => 'Compra Completada',
        'congrats' => '¡Felicidades, compra completada! El número de orden es',
        'downloadPDF' => 'Descargar PDF',
    ],

    'home' => [
        //index
        'home' => 'Página de Inicio',
        'subtitle' => 'Explora más allá de simples productos; aquí te esperan sabores, inspiración y nuevas recetas.',
        'prepareRecipe' => 'Puedes preparar esta deliciosa receta solo con estos productos:',
        'showMore' => 'Mostrar más',
    ],

    'layouts' => [
        //app.blade
        'titleApp' => 'Tienda en Línea',
        'cwk' => 'Reino de Artículos de Cocina',
        'products' => 'Productos',
        'shoppingCart' => 'Carrito de Compras',
        'myOrders' => 'Mis Órdenes',
        'logout' => 'Cerrar Sesión',

        //admin.blade
        'titleAdmin' => 'Administración',
        'adminPanel' => 'Panel de Administración',
        'home' => 'Inicio',
        'products' => 'Productos',
        'recipes' => 'Recetas',
        'goback' => 'Regresar a la página de inicio',
    ],

    'myAccount' => [
        //orders.blade
        'id' => 'ID de Artículo',
        'productName' => 'Nombre del Producto',
        'price' => 'Precio',
        'quantity' => 'Cantidad',
        'notPurchased' => 'Parece que no has comprado nada en nuestra tienda =(',
    ],

    'orderProduct' => [
        //create.blade
        'creatingOrder' => 'Creando Producto de Orden',
        'quantity' => 'Cantidad',
        'total' => 'Total',
        'createOrder' => 'Crear Producto de Orden',

        //index.blade
        'productList' => 'Lista de Productos',
        'noProducts' => 'No hay productos para mostrar.',
        'id' => 'ID',
        'moreDetails' => 'Más detalles',

        //show.blade
        'productDetails' => 'Detalles del Producto de Orden',
        'idShow' => 'ID:',
        'quantityShow' => 'Cantidad:',
        'totalShow' => 'Total:',
        'createdAt' => 'Creado en:',
        'deleteProduct' => 'Eliminar Producto',
    ],

    'pdf' => [
        'id' => 'ID de Artículo',
        'productName' => 'Nombre del Producto',
        'price' => 'Precio',
        'quantity' => 'Cantidad',
    ],

    'product' => [
        //index.blade
        'orderBy' => 'Ordenar Por:',
        'recomended' => 'Recomendados',
        'mostPurchased' => 'Más Comprados',
        'newest' => 'Nuevos Productos',
        'bestRated' => 'Mejor Calificados',
        'moreDetails' => 'Más detalles',

        //show.blade
        'noReviews' => 'Este producto no tiene reseñas',
        'price' => 'Precio:',
        'quantity' => 'Cantidad',
        'addToCart' => 'Agregar al carrito',
        'addReview' => 'Agregar reseña',
        'recipes' => 'Recetas relacionadas con este producto',
        'reviews' => 'Reseñas',
        'by' => 'Por',
    ],

    'recipe' => [
        //index.blade

        //show.blade
        'ingredients' => 'Ingredientes:',
        'instructions' => 'Instrucciones:',
        'step' => 'Paso',
    ],

    'review' => [
        //create.blade
        'makeReview' => 'Hacer una reseña',

        //index.blade
        'moreDetails' => 'Más detalles',

        //show.blade
        'id' => 'ID:',
        'name' => 'Nombre:',
        'description' => 'Descripción:',
        'rating' => 'Calificación:',
        'deleteReview' => 'Eliminar Reseña',
    ],

    'homeBlade' => [
        'dashboard' => 'Tablero',
        'loggedIn' => '¡Has iniciado sesión!',
    ],

    'welcomeBlade' => [
        'msg1' => 'Laravel tiene una maravillosa documentación que cubre todos los aspectos del framework. Ya seas un recién llegado o tengas experiencia previa con Laravel, recomendamos leer nuestra documentación de principio a fin.',
        'msg2' => 'Laracasts ofrece miles de tutoriales en video sobre desarrollo de Laravel, PHP y JavaScript. Échalos un vistazo, compruébalo tú mismo y mejora masivamente tus habilidades de desarrollo en el proceso.',
        'msg3' => 'Laravel News es un portal comunitario y boletín que recopila todas las últimas y más importantes noticias en el ecosistema de Laravel, incluyendo nuevos lanzamientos de paquetes y tutoriales.',
        'msg4' => 'La robusta biblioteca de herramientas y bibliotecas de primeros proveedores de Laravel, como',
    ],
];
