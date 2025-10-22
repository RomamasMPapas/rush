# rush
Laravel Eloquent Model


# STEPS
1. CREATING A MODEL

php artisan make:model [name of the file] -mfs

=m= migration file
=f= factory file
=s= seeder file

2. ADDING BASE TABLE FOR MODEL

go to migrations file then add

-$table->string('name');
-$table->integer('skill');
-$table->text('bio');

3. USE COMMAND TO CREATE THE TABLES

php artisan migrate

4. CHECK THE TABLE IF THE ALL IS ACCOMODATED FROM MIGRATION FILE

after go to database.sqlite and find [name of the file] click and check

5. GO TO MODEL FILE INTO YOUR FILE AND ADD THIS CODE TO UPDATE TABLES

"protected $fillable is ['name', 'skill', 'bio'];"

6. CHECK THE CODE USING THIS COMMAND

php artisan 

7. AFTER THAT TO USE A SPECIFIC FILE RUN THIS CODE

"use App\Models\[name of the file]"

8. TYPE OF SIMPLE COMMAND YOU CAN RUN TO ADD, FIND, AND DISPLAY ALL
-to create
 =[name of the file]::create ['name', 'skill', 'bio']

   EXAMPLE:
        rush::create(['name' => 'bel', 'skill' => 'sleep', 'bio' => 'sin of sloth'])
		            (['name' => 'as', 'skill' => 'charm', 'bio' => 'sin of lust'])
-to display
 =[name of the file]::find all()

-to display specifically
 =[name of the file]::find(id)



