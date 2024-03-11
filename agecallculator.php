     <?php
     if (!isset($_POST['submit'])) {

      <form method="post" action="agecallculator.php">
        Enter your date of birth ,  in <strong>mm/dd/yyyy</strong> format <br> 
      	<input type="text" name="do" value=""><br> <br>
       <input type="submit" name="submit" value="submit">
      </form>

      <?php
    }else {
          $d = $_POST['do'];
          $dataArr = explode('/', $d); 
          $dataTs = strtotime($d);
          $now =  strtotime('today');

        if (sizeof($dataArr) != 3) {
          die('Error: please enter valid dae of birth');

        }
      
        if (!checkdate($dataArr[0], $dataArr[1], $dataArr[2])) {
          die('Error: please enter a valid date of birth ');
        }
        
        if ($dataTs >= $now) {
          die('Error: please enter a date of birth earlier than today ');
        }
     
        $ageDays = floor(($now - $dataTs) / 86400);
        $ageYears = floor($ageDays / 365);
        $ageMonths = floor(($ageDays - ($ageYears * 365)) / 30 );
        print "You are approximatelly $ageYears years and $ageMonths months  old";

    }

     ?>
