<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the employer database
        public function insertEmployer($fname, $lname, $gen,$pos,$comp){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO employer (firstname,lastname,gender,position,company) VALUES (:fname,:lname,:gen,:pos,:comp)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gen',$gen);
                $stmt->bindparam(':pos',$pos);
                $stmt->bindparam(':comp',$comp);
           
              
              

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editEmployer($id, $fname, $lname, $gen,$pos,$comp){
           try{ 
                $sql = "UPDATE `employer` SET `firstname`=:fname,`lastname`=:lname,`gender`=:gen,`position`=:pos,`company`=:comp
                 WHERE employer_id = :id ";
                 
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gen',$gen);
                $stmt->bindparam(':pos',$pos);
                $stmt->bindparam(':comp',$comp);
        

                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }

        public function getEmployer(){
            try{
                $sql = "SELECT * FROM `employer`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getEmployerDetails($id){
           try{
                $sql = "select * from employer
                where employer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteEmployer($id){
           try{
                $sql = "delete from employer where employer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }



        public function getEmployerById($id){
            try{
                $sql = "SELECT * FROM `employer` where employer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }




        public function insertVacancy($employer,$vacant_pos,$enddate,$require,$ema,$contact){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO vacancy (employer_id,vacant_position,end_date,requirements,email,phone) VALUES (:employer,:vacant_pos,:enddate,:require,:ema,:contact)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':employer',$employer);
                $stmt->bindparam(':vacant_pos',$vacant_pos);
                $stmt->bindparam(':enddate',$enddate);
                $stmt->bindparam(':require ',$require);
                $stmt->bindparam(':ema',$ema);
                $stmt->bindparam(':contact',$contact);
           
              
              

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function editVacancy($id,$employer, $vacant_pos, $enddate,$require ,$ema,$contact){
            try{ 
                 $sql = "UPDATE `vacancy` SET `employer_id`=:employer,`vacant_position`=:vacant_pos,`end_date`=:enddate,`requirements`=:require,`email`=:ema,`phone`=:contact
                  WHERE vacancy_id = :id ";
                  
                 $stmt = $this->db->prepare($sql);
                 // bind all placeholders to the actual values
                 $stmt->bindparam(':id',$id);
                 $stmt->bindparam(':emp',$employer);
                $stmt->bindparam(':vacant_pos',$vacant_pos);
                $stmt->bindparam(':enddate',$enddate);
                $stmt->bindparam(':require ',$require );
                $stmt->bindparam(':ema',$ema);
                $stmt->bindparam(':contact',$contact);
           
         
 
                 // execute statement
                 $stmt->execute();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
             
         }


        public function getVacancy(){
            try{
                $sql = "SELECT * FROM `vacancy` a inner join employer s on a.employer_id = s.employer_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
        

        
        public function getVacancyById($id){
            try{
                $sql = "SELECT * FROM `vacancy` where vacancy_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }


        public function deleteVacancy($id){
            try{
                 $sql = "delete from vacancy where vacancy_id = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 return true;
             }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

         public function getVacancyDetails($id){
            try{
                 $sql = "select * from vacancy a inner join employer s on a.employer_id = s.employer_id
                 where vacancy_id = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 return $result;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }




    }
?>