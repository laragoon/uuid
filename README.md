## laragoon/uuid
Uuid Trait for Laravel models

### Installation

````
composer require laragoon/uuid
````


### Uage
Add a `uuid` fields to the database table
```` php
$table->uuid('uuid')->unique()->index();
````


Then use the `Laragoon\Uuid\Traits\HasUuid` trait in the model
```` php

//app/Models/User.php

namespace App\Models;

use Laragoon\Uuid\Traits\HasUuid;

class User extends Authenticatable
{
    use HasUuid;
}
````
It's all! Now when you create a record a `Str::uuid()` is generated and auto-fill the database field

```` php
User::create([
  'name' => 'John',
  'email' => 'john@doe.com',
  'password' => Hash::make('secret')
]);
````

You can now use the `uuid` field on your model instance 
```` php

$user = User::where('name' => 'John')->get();
$user->uuid; // 4d2d3be9-194a-45ad-8157-7b5c01c35c39

````


