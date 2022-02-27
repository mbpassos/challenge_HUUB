## About The Project Brief

The challenge focues on using two api endpoints- The first endpoint would generate a token that would allow access to the other endppoint, that generates paginated products data. 

For this task I chose Laravel as a framework, Laravel provides simple and fast routing engine while being accessible and providing tools required for large and robust applicacations- 

The ultimate goal of the project was to also implement Vue Components as frontend, to avoid reloading the list of projects and better performance. Since I did not have time to insert Vue components I will explain the approach I would use in the code to implement Vue JS.

## Making the project run

two command must be used in the terminal for the project to start running:
1. php artisan serve
2. npm run watch

## Laravel Sponsors

The most challenging part of the project was to build authentication manually, since Laravel´s built in tools always rely od database set up to work. 

### Approach

After reading the brief carefully I decided that the  project would need a controller for authentication, a controller for products and a product service that would allow the calls to the api to create instaces of a Product Model. I then divided the challenge into small parts, built the routes and started working of the functions in the controllers one by one, always trying to avoid code repetition (DRY, always)

## Next Approach

The Next step of the project would be to build Vue Components using laravel functions. I started by skecthing a wireframe to define components hierarchy. I came up with the following solution:
(skecth)





## Thank you

Marília Passos - marilia.bpassos@gmail.com
