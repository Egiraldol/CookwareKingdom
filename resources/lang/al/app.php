<?php

return [
    'admin' => [
        'home' => [
            //index.blade
            'header' => 'Admin-Panel - Startseite',
            'welcomeMessage' => 'Willkommen im Admin-Panel, nutzen Sie die Seitenleiste, um zwischen den verschiedenen Optionen zu navigieren.',
        ],
        'product' => [
            //edit.blade
            'nameEdit' => 'Name:',
            'priceEdit' => 'Preis:',
            'stockEdit' => 'Bestand:',
            'imageEdit' => 'Bild:',
            'description' => 'Beschreibung',
            'submit' => 'Senden',

            //index.blade
            'createProducts' => 'Produkte Erstellen',
            'name' => 'Name',
            'stock' => 'Bestand',
            'price' => 'Preis',
            'image' => 'Bild',
            'manageProducts' => 'Produkte Verwalten',
            'id' => 'ID',
            'edit' => 'Bearbeiten',
            'delete' => 'Löschen',
            'addProduct' => 'Produkt Hinzufügen',
        ],
        'recipe' => [
            //edit.blade
            'editRecipe' => 'Rezept Bearbeiten',
            'nameEdit' => 'Name:',
            'instructionsEdit' => 'Anweisungen:',
            'ingredientsEdit' => 'Zutaten:',
            'imageEdit' => 'Bild:',
            'description' => 'Beschreibung',
            'submit' => 'Senden',
            
            //index.blade
            'createRecipes' => 'Rezepte Erstellen',
            'descriptionIndex' => 'Beschreibung:',
            'addRecipe' => 'Rezept Hinzufügen',
            'manageRecipes' => 'Rezepte Verwalten',
            'id' => 'ID',
            'name' => 'Name',
            'edit' => 'Bearbeiten',
            'delete' => 'Löschen',
        ],
    ],
    'auth' => [
        'passwords' => [
            //confirm.blade
            'confirmPassword' => 'Passwort Bestätigen',
            'pleaseConfirm' => 'Bitte bestätigen Sie Ihr Passwort, bevor Sie fortfahren.',
            'forgotPassword' => 'Haben Sie Ihr Passwort vergessen?',

            //email.blade
            'resetPassword' => 'Passwort Zurücksetzen',
            'emailAddress' => 'E-Mail-Adresse',
            'sendReset' => 'Link zum Zurücksetzen des Passworts Senden',

            //reset.blade
            'password' => 'Passwort',
        ],
        'login' => [
            'login' => 'Anmelden',
            'emailAddress' => 'E-Mail-Adresse',
            'password' => 'Passwort',
            'rememberMe' => 'Angemeldet Bleiben',
            'forgotPassword' => 'Haben Sie Ihr Passwort vergessen?',
        ],
        'register' => [
            'register' => 'Registrieren',
            'name' => 'Name',
            'emailAddress' => 'E-Mail-Adresse',
            'password' => 'Passwort',
            'confirmPassword' => 'Passwort Bestätigen',
        ],
        'verify' => [
            'verify' => 'E-Mail-Adresse Bestätigen',
            'freshVerification' => 'Ein neuer Bestätigungslink wurde an Ihre E-Mail-Adresse gesendet.',
            'beforeProceeding' => 'Bevor Sie fortfahren, überprüfen Sie bitte Ihre E-Mails auf einen Bestätigungslink.',
            'notReceiveEmail' => 'Wenn Sie die E-Mail nicht erhalten haben',
            'requestAnother' => 'klicken Sie hier, um eine andere anzufordern',
        ],
    ],
    'cart' => [
        //index.blade
        'products' => 'Produkte im Warenkorb',
        'id' => 'ID:',
        'name' => 'Name:',
        'price' => 'Preis:',
        'quantity' => 'Menge:',
        'purchase' => 'Kaufen',
        'total' => 'Gesamt:',
        'removeAll' => 'Alle Produkte aus dem Warenkorb Entfernen',
        'emptyCart' => 'Ihr Warenkorb ist leer',
        'viewProducts' => 'Produkte ansehen',

        //purchase.blade
        'purchase' => 'Kauf Abgeschlossen',
        'congrats' => 'Herzlichen Glückwunsch, der Kauf wurde abgeschlossen! Die Bestellnummer lautet',
        'downloadPDF' => 'PDF Herunterladen',
    ],

    'home' => [
        //index
        'home' => 'Startseite',
        'subtitle' => 'Entdecken Sie mehr als nur Produkte; hier erwarten Sie Aromen, Inspiration und neue Rezepte.',
        'prepareRecipe' => 'Sie können dieses köstliche Rezept nur mit diesen Produkten zubereiten:',
        'showMore' => 'Mehr anzeigen',
    ],

    'layouts' => [
        //app.blade
        'titleApp' => 'Online-Shop',
        'cwk' => 'CookwareKingdom',
        'products' => 'Produkte',
        'shoppingCart' => 'Warenkorb',
        'myOrders' => 'Meine Bestellungen',
        'logout' => 'Abmelden',

        //admin.blade
        'titleAdmin' => 'Verwaltung',
        'adminPanel' => 'Verwaltungs-Panel',
        'home' => 'Startseite',
        'products' => 'Produkte',
        'recipes' => 'Rezepte',
        'goback' => 'Zurück zur Startseite',
    ],

    'myAccount' => [
        //orders.blade
        'id' => 'Artikel-ID',
        'productName' => 'Produktname',
        'price' => 'Preis',
        'quantity' => 'Menge',
        'notPurchased' => 'Es scheint, dass Sie noch nichts in unserem Shop gekauft haben =(',
    ],

    'orderProduct' => [
        //create.blade
        'creatingOrder' => 'Bestellprodukt Erstellen',
        'quantity' => 'Menge',
        'total' => 'Gesamt',
        'createOrder' => 'Bestellprodukt Erstellen',

        //index.blade
        'productList' => 'Produktliste',
        'noProducts' => 'Keine Produkte zum Anzeigen.',
        'id' => 'ID',
        'moreDetails' => 'Mehr Details',

        //show.blade
        'productDetails' => 'Details des Bestellprodukts',
        'idShow' => 'ID:',
        'quantityShow' => 'Menge:',
        'totalShow' => 'Gesamt:',
        'createdAt' => 'Erstellt am:',
        'deleteProduct' => 'Produkt Löschen',
    ],

    'pdf' => [
        'id' => 'Artikel-ID',
        'productName' => 'Produktname',
        'price' => 'Preis',
        'quantity' => 'Menge',
    ],

    'product' => [
        //index.blade
        'orderBy' => 'Sortieren nach:',
        'recomended' => 'Empfohlen',
        'mostPurchased' => 'Am Meisten Gekauft',
        'newest' => 'Neueste Produkte',
        'bestRated' => 'Am Besten Bewertet',
        'moreDetails' => 'Mehr Details',

        //show.blade
        'noReviews' => 'Dieses Produkt hat keine Bewertungen',
        'price' => 'Preis:',
        'quantity' => 'Menge',
        'addToCart' => 'In den Warenkorb',
        'addReview' => 'Bewertung Hinzufügen',
        'recipes' => 'Rezepte im Zusammenhang mit diesem Produkt',
        'reviews' => 'Bewertungen',
        'by' => 'Von',
    ],

    'recipe' => [
        //index.blade

        //show.blade
        'ingredients' => 'Zutaten:',
        'instructions' => 'Anweisungen:',
        'step' => 'Schritt',
    ],

    'review' => [
        //create.blade
        'makeReview' => 'Eine Bewertung Abgeben',

        //index.blade
        'moreDetails' => 'Mehr Details',

        //show.blade
        'id' => 'ID:',
        'name' => 'Name:',
        'description' => 'Beschreibung:',
        'rating' => 'Bewertung:',
        'deleteReview' => 'Bewertung Löschen',
    ],

    'homeBlade' => [
        'dashboard' => 'Armaturenbrett',
        'loggedIn' => 'Du bist eingeloggt!',
    ],

    'welcomeBlade' => [
        'msg1' => 'Laravel hat eine wunderbare Dokumentation, die alle Aspekte des Frameworks abdeckt. Egal, ob Sie ein Neuling oder ein erfahrener Laravel-Entwickler sind, wir empfehlen, unsere Dokumentation von Anfang bis Ende zu lesen.',
        'msg2' => 'Laracasts bietet Tausende von Videotutorials zu Laravel, PHP und JavaScript. Schauen Sie sich diese an, überprüfen Sie sie selbst und verbessern Sie Ihre Entwicklungskompetenzen erheblich.',
        'msg3' => 'Laravel News ist ein Community-Portal und Newsletter, der alle neuesten und wichtigsten Nachrichten im Laravel-Ökosystem sammelt, einschließlich neuer Paketveröffentlichungen und Tutorials.',
        'msg4' => 'Die robuste Bibliothek von Laravel-Tools und -Bibliotheken erstklassiger Anbieter, wie',
        'vibrantEcosystem' => 'Lebendiges Ökosystem',
        'documentation' => 'Dokumentation',
        'laravelNews' => 'Laravel Nachrichten',
    ],
];
