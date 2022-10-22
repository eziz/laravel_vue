php artisan make:model Product --migration

php artisan make:model Category --migration

php artisan make:model Order --migration

php artisan make:migration create_order_product_table --table=order_product

php artisan make:migration create_category_product_table --table=category_product

php artisan tinker
->$user=App\Models\User::factory()->make();

App\Models\User {#3618
name: "Candida Gaylord",
email: "kaylin.white@example.net",
#password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
address: "41290 Rutherford Tunnel",
city: "Trantowbury",
state: "Montana",
zip_code: "15275",
#remember_token: "iT8a8iKHsC",
}

## Factory

php artisan make:factory ProductFactory --model=Factory

php artisan make:factory CategoryFactory --model=Category

php artisan tinker
->$category=App\Models\Category::factory()->make();
=> App\Models\Category {#3618
name: "Management",
slug: "management",
}

->$product=App\Models\Product::factory()->make();

=> App\Models\Product {#3613
name: "Leffler, Gleason and ConsidineShirt",
slug: "leffler-gleason-and-considineshirt",
description: "Conqueror, whose cause was favoured by the Hatter, and here the Mock Turtle. 'Very much indeed,' said Alice. 'Why, SHE,' said the Mock Turtle replied, counting off the cake. \* \* \* \* \* \* \* \* \* \* \* \* \* \* \* \* 'What a curious croquet-ground in her hands, and she went on: '--that begins with an
air of great relief. 'Now.",
p


##
 php artisan db:seed

 ## tinker
  App\Models\Product::all()