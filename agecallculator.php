     <?php
     if (!isset($_POST['submit'])) {

      <form method="post" action="agecallculator.php">
        Enter your date of birth ,  in <strong>mm/dd/yyyy</strong> format <br> 
      	<input type="text" name="do" value=""><br> <br>
       <input type="submit" name="submit" value="submit">
      </form>

    }else {
          $d = $_POST['do']; //post method to send some agecalculator action.
          $dataArr = explode('/', $d);  //date arry for put a value in input.
          $dataTs = strtotime($d); 
          $now =  strtotime('today');

        if (sizeof($dataArr) != 3) { // size of method wwe can count some elements in our form's information.
          die('Error: please enter valid dae of birth');  // for know more die function an help us to print a message.

        }
      
        if (!checkdate($dataArr[0], $dataArr[1], $dataArr[2])) { // check our array date to 3 if the answer will be correct show the age and if it will be other then show an error.
          die('Error: please enter a valid date of birth ');
        }
        
        if ($dataTs >= $now) {
          die('Error: please enter a date of birth earlier than today ');
        }
     
        $ageDays = floor(($now - $dataTs) / 86400); // divided by all day's in every year.
        $ageYears = floor($ageDays / 365); // devide by all day's in every year.
        $ageMonths = floor(($ageDays - ($ageYears * 365)) / 30 ); //then 365 day's devided by 30 day's in every month. 
        print "You are approximatelly $ageYears years and $ageMonths months  old";


          // if () {
          //      return true,
          //           dd($_POST)
          // }

          
    }

     ?>
