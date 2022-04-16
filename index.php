<?php
    require_once 'database.php';
    $db = new database();
    include 'table_generator_periode.php';
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meerjarenplanning</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>

   <div class="container">
  <div class="subc"> 
      
                         <a class="btn btn-warning" href="vakken.php">Zie alle vakken</a><br>
                        <?php 
                         $act = $db->select('SELECT gewenste.ID, vakken.vak_code, vakken.vak_naam,  gewenste.uren FROM vakken 
                         INNER JOIN gewenste ON vakken.vak_code = gewenste.vak_code 
                         WHERE gewenste.periode = "1";');
                             create_table($act, ''); 
                      ?> 
                       <div class="badge bg-primary text-wrap" style="width: 20rem;">
                        <h1>Leerjaar 1</h1>
                         </div>
                        <br>
                           <h3>Periode 1</h3>
                           <a href="vak_toevoegen.php?periode=1" class="btn btn-success" >Vak toevoegen</a>

                            <?php
                            $totale_uren = $db->select('SELECT SUM(uren) FROM gewenste WHERE periode = "1";');
                            foreach ($totale_uren as $totale)
                                foreach($totale as $totaal)?>
                                <h4 style="color: red;"> <?php echo $totaal. " Uur in totaal"; ?> </h4> <?php 
                            ?>
                                               
                                                                              <?php 
                                                                                    $act = $db->select('SELECT gewenste.ID, vakken.vak_code, vakken.vak_naam, gewenste.uren FROM vakken 
                                                                                    INNER JOIN gewenste ON vakken.vak_code = gewenste.vak_code 
                                                                                    WHERE gewenste.periode = "2";');
                                                                                        create_table2($act, ''); 
                                                                                ?> 
                                                                                
                                        <h3>Periode 2</h3>
                                        <a href="vak_toevoegen.php?periode=2" class="btn btn-success" >Vak toevoegen</a>

                                        <?php
                                        $totale_uren = $db->select('SELECT SUM(uren) FROM gewenste WHERE periode = "2";');
                                        foreach ($totale_uren as $totale)
                                            foreach($totale as $totaal)
                                                if($totaal > 0) { ?>
                                                    <h4 style="color: red;"> <?php echo $totaal. " Uur in totaal"; ?> </h4> <?php 
                                                }
                                         ?>

                                                                                <?php 
                                                                                $act = $db->select('SELECT gewenste.ID, vakken.vak_code, vakken.vak_naam, gewenste.uren FROM vakken 
                                                                                INNER JOIN gewenste ON vakken.vak_code = gewenste.vak_code 
                                                                                WHERE gewenste.periode = "3";');
                                                                                    create_table3($act, ''); 
                                                                                ?> 
                                                                            
                                                                           
                                                        <h3>Periode 3</h3>
                                                        <a href="vak_toevoegen.php?periode=3" class="btn btn-success" >Vak toevoegen</a>

                                                        <?php
                                                        $totale_uren = $db->select('SELECT SUM(uren) FROM gewenste WHERE periode = "3";');
                                                        foreach ($totale_uren as $totale)
                                                            foreach($totale as $totaal)?>
                                                            <h4 style="color: red;"> <?php echo $totaal. " Uur in totaal"; ?> </h4> <?php 
                                                        ?>

                                                                                <?php 
                                                                                $act = $db->select('SELECT gewenste.ID, vakken.vak_code, vakken.vak_naam, gewenste.uren FROM vakken 
                                                                                INNER JOIN gewenste ON vakken.vak_code = gewenste.vak_code 
                                                                                WHERE gewenste.periode = "4";');
                                                                                    create_table4($act, ''); 
                                                                                ?>
                                                                        
                                                                        
                                                                        <h3>Periode 4</h3>
                                                                        <a href="vak_toevoegen.php?periode=4" class="btn btn-success" >Vak toevoegen</a>
                                                                        <?php
                                                                        $totale_uren = $db->select('SELECT SUM(uren) FROM gewenste WHERE periode = "4";');
                                                                        foreach ($totale_uren as $totale)
                                                                            foreach($totale as $totaal) ?>
                                                                           <h4 style="color: red;"> <?php echo $totaal. " Uur in totaal"; ?> </h4> <?php 
                                                                        ?>

                                                                                <?php 
                                                                                $act = $db->select('SELECT gewenste.ID, vakken.vak_code, vakken.vak_naam, gewenste.uren FROM vakken 
                                                                                INNER JOIN gewenste ON vakken.vak_code = gewenste.vak_code 
                                                                                WHERE gewenste.periode = "5";');
                                                                                    create_table5($act, ''); 
                                                                                
                                                                        
                                                                        ?>

                                                                        <div class="badge bg-primary text-wrap" style="width: 20rem;">
                                                                        <h1>Leerjaar 2</h1> 
                                                                        </div>
                                                                      
                                                                       <h3>Periode 5</h3>
                                                                       <a href="vak_toevoegen.php?periode=5" class="btn btn-success" >Vak toevoegen</a>

                                                                                <?php
                                                                                $totale_uren = $db->select('SELECT SUM(uren) FROM gewenste WHERE periode = "5";');
                                                                                foreach ($totale_uren as $totale)
                                                                                    foreach($totale as $totaal) ?>
                                                                                <h4 style="color: red;"> <?php echo $totaal. " Uur in totaal"; ?> </h4> <?php 
                                                                                ?>





               </div>              


     </div>
     

 

     
     
</body>

</html>