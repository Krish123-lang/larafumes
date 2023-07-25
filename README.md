# This is Laravel 10 

Mutators are in app/Models/User.php

### Edited Files
1. Routes/web.php
2. app/Models/User.php


Mutators are in app/Models/User.php

###  Updating table by adding new column 'avatar' after 'email'.

## Learning Laravel Tinker(laravel shell) => php artisan tinker

`> strtoupper("Krishna");`
= "KRISHNA"

`> $user = User::get();`

`> $user = User::find(10);`

`> $user->avatar = "Hello Avtaer";`

`> $user->save();`

`> $user`


`> $user->update(['avatar'=>'UWU Avatar']);`

`> $user->update(['name'=>'Ice Hashira']);`



## Guard (Mass Assignment)
`>User::unguard();`

`> $user->update(['avatar'=>'New Avatar']);`

`>User::reguard();`
