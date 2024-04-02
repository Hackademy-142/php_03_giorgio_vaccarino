<?php

// ESERCIZIO 1

// Seguendo l'immagine dell'esercitazione creare un sistema di classi parent e figlie che di volta in volta diventano più specifiche.
// Tenere il conto di ogni oggetto creato per la singola classe.

class Vertebrate
{
    public $name;
    public $blood;
    static public $vertebratesCounter;

    public function __construct($name, $blood)
    {
        $this->name = $name;
        $this->blood = $blood;
        self::$vertebratesCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood.\n";
    }
}

$gianluca = new Vertebrate("Gianluca", "caldo");
$gianluca->vertebrateInfo();

class WarmBlooded extends Vertebrate
{
    public $class;

    static public $warmCounter;

    public function __construct($name, $blood, $class)
    {
        parent::__construct($name, $blood);
        $this->class = $class;
        self::$warmCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class.\n";
    }
}

$warmGianluca = new WarmBlooded("warmGianluca", "caldo", "mammifero");
$warmGianluca->vertebrateInfo();

class ColdBlooded extends Vertebrate
{
    public $class;

    static public $coldCounter;

    public function __construct($name, $blood, $class)
    {
        parent::__construct($name, $blood);
        $this->class = $class;
        self::$coldCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class.\n";
    }
}
$coldGianluca = new WarmBlooded("coldGianluca", "freddo", "mammifero");
$coldGianluca->vertebrateInfo();

class Mammal extends WarmBlooded
{
    public $weigth;

    static public $mammalCounter;

    public function __construct($name, $blood, $class, $weigth)
    {
        parent::__construct($name, $blood, $class);
        $this->weigth = $weigth;
        self::$mammalCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class e puó pesare fino a $this->weigth kg.\n";
    }
}

$nunzio = new Mammal("Nunzio", "caldo", "mammifero", 400);
$nunzio->vertebrateInfo();

class Bird extends WarmBlooded
{
    public $weigth;

    static public $birdCounter;

    public function __construct($name, $blood, $class, $weigth)
    {
        parent::__construct($name, $blood, $class);
        $this->weigth = $weigth;
        self::$birdCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class e puó pesare fino a $this->weigth kg.\n";
    }
}

$peppe = new Bird("Peppe", "caldo", "uccello", 4);
$peppe->vertebrateInfo();

class Fish extends ColdBlooded
{
    public $weigth;

    static public $fishCounter;

    public function __construct($name, $blood, $class, $weigth)
    {
        parent::__construct($name, $blood, $class);
        $this->weigth = $weigth;
        self::$fishCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class e puó pesare fino a $this->weigth kg.\n";
    }
}

$cuscino = new Fish("Cuscino", "freddo", "pesce", 80);
$cuscino->vertebrateInfo();

class Reptile extends ColdBlooded
{
    public $weigth;

    static public $reptileCounter;

    public function __construct($name, $blood, $class, $weigth)
    {
        parent::__construct($name, $blood, $class);
        $this->weigth = $weigth;
        self::$reptileCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class e puó pesare fino a $this->weigth kg.\n";
    }
}

$sirBiss = new Reptile("SirBiss", "freddo", "rettile", 10);
$sirBiss->vertebrateInfo();

class Anphibian extends ColdBlooded
{
    public $weigth;

    static public $anphibianCounter;

    public function __construct($name, $blood, $class, $weigth)
    {
        parent::__construct($name, $blood, $class);
        $this->weigth = $weigth;
        self::$anphibianCounter++;
    }

    public function vertebrateInfo()
    {
        echo "$this->name é il vertebrato numero " . self::$vertebratesCounter . ", ha sangue $this->blood, é un $this->class e puó pesare fino a $this->weigth kg.\n";
    }
}

$sdruciolo = new Anphibian("Sdruciolo", "freddo", "anfibio", 3000);
$sdruciolo->vertebrateInfo();

// ESERCIZIO 2.

//  Definire una classe parent Person che abbia le caratteristiche che preferite, che sia poi estesa in due classi figlie Student e Teacher.
//  Ognuna di queste classi deve avere un metodo specifico con cui l'oggetto poi creato va a dare le proprie informazioni.

class Person
{
    public $name;
    public $surname;
    public $age;
        
    static public $personCounter;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        self::$personCounter++;
    }
}

class Student extends Person
{
    public $role;

    static public $studentCounter;

    public function __construct($name, $surname, $age, $role)
    {
        parent::__construct($name, $surname, $age);
        $this->role = $role;
        self::$studentCounter++;
    }

    public function bios()
    {
        echo "$this->name $this->surname, $this->age anni. Aspira ad una posizione in ambito: $this->role\n";
    }
}

class Teacher extends Person
{
    public $role;

    static public $teacherCounter;

    public function __construct($name, $surname, $age, $role)
    {
        parent::__construct($name, $surname, $age);
        $this->role = $role;
        self::$teacherCounter++;
    }

    public function bios()
    {
        echo "$this->name $this->surname, anche se non sembra ha soltanto $this->age anni. Insegnante di: $this->role\n";
    }
}


$franco = new Student("Pippo", "Franco", 30, "backend");
$franco->bios();

$pippo = new Teacher("Pippo", "Franco", 30, "backend");
$pippo->bios();