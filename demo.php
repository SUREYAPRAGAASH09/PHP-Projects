<html>
<head>
<title>Country</title>
</head>
<body>

<form method="POST"  >
<?php
      
       $Datespermonth = [31,28,31,30,31,30,31,31,30,31,30,31]; 
      
    
     $giveMonth = $_POST["month"];
     echo $giveMonth;
     $day = $Datespermonth[$giveMonth - 1];
    
?>
    Select Your year
    <select name="year" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
       <?php
    for ($i=2010; $i<=2020; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
    </select><br>
    select your month
    <select name="month" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
       <?php
    for ($i=1; $i<=12; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
    </select><br>
    select date
    <select name="month" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
       <?php
    for ($i=1; $i<=$day; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
    </select>
       
</form>

</body>
</html>