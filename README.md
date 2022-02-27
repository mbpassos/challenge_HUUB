## About The Project Brief

The challenge focues on using two api endpoints- The first endpoint would generate a token that would allow access to the other endppoint, that generates paginated products data. 

For this task I chose Laravel as a framework, Laravel provides simple and fast routing engine while being accessible and providing tools required for large and robust applicacations- 

The ultimate goal of the project was to also implement Vue Components as frontend, to avoid reloading the list of projects and better performance. Since I did not have time to insert Vue components I will explain the approach I would use in the code to implement Vue JS.

## Making the project run

Commands must be used in the terminal for the project to start running:
1. create .env file 
2. php artisan key:generate
3. php artisan serve
4. npm run watch

## Approach

After reading the brief carefully I decided that the  project would need a controller for authentication, a controller for products and a product service that would allow the calls to the api to create instaces of a Product Model. I then divided the challenge into small parts, built the routes and started working of the functions in the controllers one by one, always trying to avoid code repetition (DRY, always)

## Next Steps for the project

I believe in constant improvement. I decided to build the project in Laravel, but another possibility for this challenge was to use Vue JS to build the application. I started by skecthing a wireframe to define components hierarchy. I came up with the following solution:
<img src="https://i.ibb.co/FHnbWrS/wireframe.png">
<img src="https://i.ibb.co/j8DK7Yv/912588ddc488e35fc2380ed3953ee9d2.png">
The next step would by authenticating and storing the token in the browser's variable (local Storage). Using Quazar(https://quasar.dev/introduction-to-quasar) a Vue JS framework would be a great choice, because there is already scaffolding and components created, which would be practical because I could use some code from my Laravel application.

Regarding the Laravel project, I also want to improve the error messages that would show up when the token expires from the session. I would also focus more on the layout and improve the homepage specially. 

## Challenges

The most challenging part of the project was to build authentication manually, since Laravel´s built in tools always rely od database set up to work, same as pagination.

## Thank you

Marília Passos - marilia.bpassos@gmail.com
