       <?php
             class Person implements JsonSerializable {
                  private $sno;
                  private $name;
                  private $age;
                  private $place;
                  
                  public function __construct($sno,$name,$age,$place) {
                      $this->sno=$sno;
                      $this->name=$name;
                      $this->age=$age;
                      $this->place=$place;
                  }
                  function getSno() {
                      return $this->sno;
                  }

                  function getName() {
                      return $this->name;
                  }

                  function getAge() {
                      return $this->age;
                  }

                  function getPlace() {
                      return $this->place;
                  }

                  function setSno($sno) {
                      $this->sno = $sno;
                  }

                  function setName($name) {
                      $this->name = $name;
                  }

                  function setAge($age) {
                      $this->age = $age;
                  }

                  function setPlace($place) {
                      $this->place = $place;
                  }

            public function jsonSerialize() {
                
                     $vars = get_object_vars($this);
                     return $vars;
               
            }

        }
                 
             
             
             $z=array();
             array_push($z,new Person(13,"Raj",34,"Chennai"));
             array_push($z,new Person(14,"Kiran",43,"Chennai"));
             array_push($z,new Person(15,"Paresh",34,"Mumbai"));
             array_push($z,new Person(16,"Jack",34,"Bangalore"));
            
             echo json_encode($z);
          ?>
        
        
 