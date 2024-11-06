  <?php
  #une classe cest une representation de quelque chose (une classe represente quelque chose)

    # "PRIVATE" specifie qu'une propriete ne peut etre touchee que depuis la classe elle-meme, donc on ne peut pas modifier la variable ailleur quand on met private devant une variable

    #Les guetteurs et les setteur permettent d'acceder aux proprietes privees (C-A-D) de modifier un age qui est private par exemple
    #C'EST UNE FONCTION PUBLIQUE QU'ON CREE POUR CHANGER LA PROPRITE SOUHAITEE
  class employe {
    public $nom;
   public $prenom;
   private $age;

  public function __construct($prenom, $nom, $age){
  $this->nom = $nom;
  $this->prenom = $prenom;
  $this->setAge($age);
}


public function setAge($age){
  if(is_int($age) && $age >=1 && $age < 100){ 
    $this->age = $age;
  } else {
    throw new Exception("L'age doit faire entre 1 et 100");
    
  }
}


   public function salutation(){
    var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans.");
   }

  }

  $employe1 = new employe("Frank", "nom", 2);
  $employe1->setAge(22);
  $employe1->salutation();