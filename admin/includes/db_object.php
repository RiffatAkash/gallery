<?php


class DB_object
{

      // FIND ALL USERS
      public static function find_all()
      {
          return self::find_this_query("SELECT * FROM " . self::$db_table . " ");
      }
  
      // FIND ALL USERS BY ID
      public static function find_by_id($user_id)
      {
          global $database;
          $the_result_array =  self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE id=$user_id LIMIT 1");        
          return !empty($the_result_array) ? array_shift($the_result_array) : false;         
  
      }

        // CHECK QUERY
        public static function find_this_query($sql)
        {
            global $database;
            $result_set = $database->query($sql);
            $the_object_array = array();

            while($row = mysqli_fetch_array($result_set))
            {
                $the_object_array[]=self::instantation($row);
            }
            return $the_object_array;
        }

          // ASSIGN OBJECT PROPERTIES WITH VALUES USING OOP
        public static function instantation($the_record)
        {
            $the_object = new self;

            // $the_object->id         =    $found_user['id'];
            // $the_object->username   =    $found_user['username'];
            // $the_object->password   =    $found_user['password'];
            // $the_object->first_name =    $found_user['first_name'];
            // $the_object->last_name  =    $found_user['last_name'];
            
            //echo "<pre>";

            foreach($the_record as $the_attribute=>$value)
            {
                
                //echo "<pre>";
                //echo " ".$value;
                //echo " ".$value;
                if($the_object->has_the_attribute($the_attribute))
                {
                    $the_object->$the_attribute = $value;
                }
            }

            return $the_object;
        }

            // ATTRIBUTE CHECK
        private function has_the_attribute($the_attribute)
        {
            $object_properties = get_object_vars($this);
            
            return array_key_exists($the_attribute,$object_properties);
        }


  

}

?>