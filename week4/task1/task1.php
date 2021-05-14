<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>

<body>
    <?php

    //The advantage of multiple inheritance is that it allows a class to inherit the functionality of more than one base class thus allowing for modeling of complex relationships.
    
    echo "\n";

    trait User1 {
        public function invokeUser1() {
            echo ("User1 invoked!" . "\n");
        }
    }

    trait User2 {
        public function invokeUser2() {
            echo ("User2 invoked!" . "\n");
        }
    }

    class A {
        use User1;
        use User2;
        public function newUser($newUser) {
            echo ($newUser . "\n");
        }
        public function invokeUser1() {
            echo ("User1 overwrite by class!" . "\n");
        }
    }

    $A = new A();
    $A->invokeUser1();
    $A->invokeUser2();
    $A->newUser("User3 invoked!");

    //The disadvantage of multiple inheritance is that it can lead to a lot of confusion when two base classes implement a method with the same name.

    echo "\n";

    //To undo an error please close one of the "invokeUser()" public funtion

    trait User4 {
        public function invokeUser() {
            echo ("User4 invoked!" . "\n");
        }
    }
    trait User5 {
        public function invokeUser() {
            echo ("User5 invoked!" . "\n");
        }
    }
    class B {
        use User4;
        use User5;
    }

    $B = new B();
    $B->invokeUser();

    echo "\n";

    ?>
</body>

</html>