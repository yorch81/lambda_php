# Lambdas with PHP #

## Description ##
Writing AWS Lambda with PHP very easy

## Requirements ##
* [Amazon AWS](https://aws.amazon.com/)

## How to ##
####  1.- Goto AWS Console, goto Lambda, press Create Function, press Browse serverless app repository and select lambda-php-74 project.  #####
![Serverless](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/serverless_app.PNG)

####  2.- Select lambda-php-74 project and press deploy (this process will create a Layer). #####
![php-74](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/lambda_php74.PNG)

####  3.- Now, create a lambda function with runtime Amazon Linux 1. #####
![lambda](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/php_function.PNG)

####  4.- Now, edit hello.sh. #####
![hello](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/edit_hello.PNG)

####  5.- Now, add Layer (php binaries). #####
![add](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/select_layer.PNG)
![layer](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/Capture.PNG)

####  6.- Now, create index.php. #####
![index](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/index_php.PNG)

####  7.- Execute lambda function. #####
![execute](https://raw.githubusercontent.com/yorch81/lambda_php/master/images/php_exec.PNG)

####  8.- For add your own php libraries or composer libraries, you can upload a layer as zip file with the classes and add to the function, and include autoload.php. #####
~~~
require '/opt/vendor/autoload.php';
~~~

## References ##
https://aws.amazon.com/lambda/

P.D. Let's go play !!!
