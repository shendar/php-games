<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 20. 4. 2016
 * Time: 15:01
 */
echo "<h1 style='center'>So... this is working...</h1>";
class Dog
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;

    }
    public function speak() {
        return 'Woof! WAuwAU';
    }
}
$dog = new Dog('Test_dog');
echo 'The dog\'s name is ' . $dog->name . '<br>';
echo 'The dog says: ' . $dog->speak() . '<br>';
?>