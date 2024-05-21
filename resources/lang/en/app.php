<?php


return [
    'admin' => [
        'home' => [
        //index.blade
            'header' => 'Admin Panel - Home Page',
            'welcomeMessage' => 'Welcome to the Admin Panel, use the sidebar to navigate between the different options.',
        ],
        'product' => [
            //edit.blade
            'nameEdit' => 'Name:',
            'priceEdit' => 'Price:',
            'stockEdit' => 'Stock:',
            'imageEdit' => 'Image:',
            'description' => 'Description',
            'submit' => 'Submit',
            'actualImage' => 'Current image:',


            //index.blade
            'createProducts' => 'Create Products',
            'name' => 'Name',
            'stock' => 'Stock',
            'price' => 'Price',
            'image' => 'Image',
            'manageProducts' => 'Manage Products',
            'id' => 'ID',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'addProduct' => 'Add Product',


        ],
    


        'recipe' => [
            //edit.blade
            'editRecipe' => 'Edit Recipe',
            'nameEdit' => 'Name:',
            'instructionsEdit' => 'Instructions:',
            'ingredientsEdit' => 'Ingredients:',
            'imageEdit' => 'Image:',
            'description' => 'Description',
            'submit' => 'Submit',
            
            //index.blade
            'createRecipes' => 'Create Recipes',
            'descriptionIndex' => 'Description:',
            'addRecipe' => 'Add recipe',
            'manageRecipes' => 'Manage recipes',
            'id' => 'ID',
            'name' => 'Name',
            'edit' => 'Edit',
            'delete' => 'Delete',

        ],
    ],

    'auth' => [
        'passwords' => [
            //confirm.blade
            'confirmPassword' => 'Confirm Password',
            'pleaseConfirm' => 'Please confirm your password before continuing.',
            'forgotPassword' => 'Forgot Your Password?',

            //email.blade
            'resetPassword' => 'Reset Password',
            'emailAddress' => 'Email Address',
            'sendReset' => 'Send Password Reset Link',

            //reset.blade
            'password' => 'Password',
        ],
        'login' => [
            'login' => 'Login',
            'emailAddress' => 'Email Address',
            'password' => 'Password',
            'rememberMe' => 'Remember Me',
            'forgotPassword' => 'Forgot Your Password?',
        ],

        'register' => [
            'register' => 'Register',
            'name' => 'Name',
            'emailAddress' => 'Email Address',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password',
        ],
        'verify' => [
            'verify' => 'Verify Your Email Address',
            'freshVerification' => 'A fresh verification link has been sent to your email address.',
            'beforeProceeding' => 'Before proceeding, please check your email for a verification link.',
            'notReceiveEmail' => 'If you did not receive the email',
            'requestAnother' => 'click here to request another',
        ],
    ],

    'cart' => [
        //index.blade
        'products' => 'Products in Cart',
        'id' => 'Id:',
        'name' => 'Name:',
        'price' => 'Price:',
        'quantity' => 'Quantity:',
        'purchase' => 'Purchase',
        'total' => 'total:',
        'removeAll' => 'Remove All Products from Cart',
        'emptyCart' => 'Your cart is empty',
        'viewProducts' => 'View products',

        //purchase.blade
        'purchase' => 'Purchase Completed',
        'congrats' => 'Congratulations, purchase completed. Order number is',
        'downloadPDF' => 'Download PDF',
        'chooseFormat' => 'Choose a format for download your bill:',
        
    ],

    'home' => [
        //index
        'home' => 'Home Page',
        'subtitle' => 'Explore beyond mere products; flavors, inspiration, and new recipes await you here.',
        'prepareRecipe' => 'You can prepare this delicious recipe with only these products:',
        'showMore' => 'Show more',

    ],
    'layouts' => [
        //app.blade
        'titleApp' => 'Online Store',
        
        'cwk' => 'CookwareKingdom',
        'products' => 'Products',
        'shoppingCart' => 'Shopping Cart',
        'adminText' => 'Admin',
        'myOrders' => 'My Orders',
        'logout' => 'Logout',
        //admin.blade
        'titleAdmin' => 'Admin',
        'adminPanel' => 'Admin Panel',
        'home' => 'Home',
        'products' => 'Products',
        'recipes' => 'Recipes',
        'goback' => 'Go back to the home page',
    ],

    'myAccount' => [
        //orders.blade
        'id' => 'Item ID',
        'productName' => 'Product Name',
        'price' => 'Price',
        'quantity' => 'Quantity',
        'notPurchased' => 'Seems to be that you have not purchased anything in our store =(.',
        'orderN' => 'Order #',
        'date' => 'Date:',
        'total' => 'Total:',
    ],

    'orderProduct' => [
        //create.blade
        'creatingOrder' => 'Creating Order Product',
        'quantity' => 'Quantity',
        'total' => 'Total',
        'createOrder' => 'Create Order Product',

        //index.blade
        'productList' => 'Product List',
        'noProducts' => 'No hay productos para mostrar.',
        'id' => 'ID',
        'moreDetails' => 'More details',

        //show.blade
        'productDetails' => 'Order Product Details',
        'idShow' => 'ID:',
        'quantityShow' => 'Quantity:',
        'totalShow' => 'Total:',
        'createdAt' => 'Created At:',
        'deleteProduct' => 'Delete Product',

    ],
    'pdf' => [
        'id' => 'Item ID',
        'productName' => 'Product Name',
        'price' => 'Price',
        'quantity' => 'Quantity',
    ],
    'product' => [
        //index.blade
        'orderBy' => 'Order By:',
        'recomended' => 'Recomended',
        'mostPurchased' => 'Most purchased',
        'newest' => 'Newest Products',
        'bestRated' => 'Best rated',
        'moreDetails' => 'More details',

        //show.blade
        'noReviews' => 'This product has no reviews',
        'price' => 'Price:',
        'quantity' => 'Quantity',
        'addToCart' => 'Add to cart',
        'addReview' => 'Add review',
        'recipes' => 'Recipes related to this product',
        'reviews' => 'Reviews',
        'by' => 'By',
    ],

    'recipe' => [
        //index.blade

        //show.blade
        'ingredients' => 'Ingredients:',
        'instructions' => 'Instructions:',
        'step' => 'Step',
    ],
    'review' => [
        //create.blade
        'makeReview' => 'Make a review',

        //index.blade
        'moreDetails' => 'More details',

        //show.blade
        'id' => 'ID:',
        'name' => 'Name:',
        'description' => 'Description:',
        'rating' => 'Rating:',
        'deleteReview' => 'Delete Review',

    ],
//@lang(app.welcomeBlade.)
//'' => '',
    'homeBlade' => [
        'dashboard' => 'Dashboard',
        'loggedIn' => 'You are logged in!',
    ],
    'welcomeBlade' => [
        'msg1' => 'Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.',
        'msg2' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        'msg3' => 'Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.',
        'msg4' => 'Laravel\'s robust library of first-party tools and libraries, such as',
        'vibrantEcosystem' => 'Vibrant Ecosystem',
        'documentation' => 'Documentation',
        'laravelNews' => 'Laravel News',
        
    ],
    'movie'=>[
        'plot' => 'Plot:',
        'moreDetails' => 'More Details',
        'noReviews' => 'No reviews',
        'microService' => 'Microservice',
    ],


];