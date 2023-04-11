<!DOCTYPE html>
<html>
  <head>
  <?php
    $vet = array('Jornal' , 'E-meil' , 'Revista');

    $texto= isset($_GET['texto']) ? $_GET['texto'] : "";

    $obs= isset($_GET['obs']) ? $_GET['obs'] : "";

    $sexo= isset($_GET['sexo']) ? $_GET['sexo'] : "F";

    $opcao= isset($_GET['opcao']) ? $_GET['opcao'] : array();

    $sel= isset($_GET['sel']) ? $_GET['sel'] : array();

    $color= isset($_GET['color']) ? $_GET['color'] : "";

    $date= isset($_GET['date']) ? $_GET['date'] : "";

    $datetime= isset($_GET['datetime']) ? $_GET['datetime'] : "";

    $datetimelocal = isset($_GET['datetime-local']) ? $_GET['datetime-local'] : "";

    $email= isset($_GET['email']) ? $_GET['email'] : "";
    
    $month= isset($_GET['month']) ? $_GET['month'] : "";
    
    $number= isset($_GET['number']) ? $_GET['number'] : "";

    $password= isset($_GET['password']) ? $_GET['password'] : "";

    $rabge= isset($_GET['rabge']) ? $_GET['rabge'] : "";

    $search= isset($_GET['search']) ? $_GET['search'] : "";

    $tal= isset($_GET['tal']) ? $_GET['tal'] : "";

    $time= isset($_GET['time']) ? $_GET['time'] : "";

    $url= isset($_GET['url']) ? $_GET['url'] : "";

    $week= isset($_GET['week']) ? $_GET['week'] : "";
    ?>
    <title>Exemplo de formulário HTML</title>
  </head>
  <body>
    <h1>Formulário HTML</h1>
    <form method="get">

      <label for="color">Color:</label>
      <input type="color" id="color" name="color" value="<?php if(isset($_GET['color'])) echo $_GET['color'] ?>"><br><br>
      
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" value="<?php if(isset($_GET['date'])) echo $_GET['date'] ?>"><br><br>
      
      <label for="datetime">Datetime:</label>
      <input type="datetime" id="datetime" name="datetime" value="<?php if(isset($_GET['datetime'])) echo $_GET['datetime'] ?>"><br><br>
      
      <label for="datetime-local">Datetime-local:</label>
      <input type="datetime-local" id="datetime-local" name="datetime-local" value="<?php if(isset($_GET['datetime-local'])) echo $_GET['datetime-local'] ?>"><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php if(isset($_GET['email'])) echo $_GET['email'] ?>"><br><br>
      
      <label for="month">Month:</label>
      <input type="month" id="month" name="month" value="<?php if(isset($_GET['month'])) echo $_GET['month'] ?>"><br><br>
      
      <label for="number">Number:</label>
      <input type="number" id="number" name="number" value="<?php if(isset($_GET['number'])) echo $_GET['number'] ?>" min="1" max="100"><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" value="<?php if(isset($_GET['password'])) echo $_GET['password'] ?>"><br><br>
      
      <label for="range">Range:</label>
      <input type="range" id="range" name="range" value="<?php if(isset($_GET['range'])) echo $_GET['range'] ?>" min="0" max="100"><br><br>
      
      <label for="search">Search:</label>
      <input type="search" id="search" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search'] ?>"><br><br>
 
      <label for="tel">Telefone:</label>
      <input type="tel" id="tel" name="tel" value="<?php if(isset($_GET['tel'])) echo $_GET['tel'] ?>"><br><br>
      
      <label for="text">Texto:</label>
      <input type="text" id="text" name="text" value="<?php if(isset($_GET['text'])) echo $_GET['text'] ?>"><br><br>
      
      <label for="time">Hora:</label>
      <input type="time" id="time" name="time" value="<?php if(isset($_GET['time'])) echo $_GET['time'] ?>"><br><br>
      
      <label for="url">URL:</label>
      <input type="url" id="url" name="url" value="<?php if(isset($_GET['url'])) echo $_GET['url'] ?>"><br><br>
      
      <label for="week">Semana:</label>
      <input type="week" id="week" name="week" value="<?php if(isset($_GET['week'])) echo $_GET['week'] ?>"><br><br>

      <label for="tex">Textarea:</label>
      <textarea name="obs" id="obs" cols="30" rows="10"><?= $obs ?></textarea><br><br>

      <label for="radio">Radio:</label><br>
        <input type="radio" name="sexo" id="sexo" value="M" <?php if($sexo == "M") echo"checked"; ?>>Masculino
        <input type="radio" name="sexo" id="sexo" value="F" <?php if($sexo == "F") echo"checked"; ?>>Feminino
        <br><br>
        
        <label for="checkbox">Checkbox:</label><br>
        <?php
        foreach($vet as $item){
            $ck  = "";
            if(in_array($item,$opcao))
            $ck = 'checked';

            echo "<input type='checkbox' name='opcao[]' id='opcao[]' value='$item' $ck>$item";
            
        }
        ?>
        <br><br>
        

        <label for="radio">Select multiple:</label>
        <select name="sel[]" id="sel[]" multiple>
        <?php
        foreach($vet as $item){
            $se  = "";
            if(in_array($item,$sel))
            $se = 'selected';

            echo "<option value='$item' $se>$item</option>";

        }
        ?>
        </select><br>
        <label for="radio">Select</label>
        <select name="sel[]" id="sel[]" >
        <?php
        foreach($vet as $item){
            $se  = "";
            if(in_array($item,$sel))
            $se = 'selected';

            echo "<option value='$item' $se>$item</option>";

        }
        ?>

        </select><br>

      
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>