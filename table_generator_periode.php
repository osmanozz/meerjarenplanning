
        <?php
    
        function create_table($dataset, $from){
       
        if(is_array($dataset) && !empty($dataset)){ 
            // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
            $key = $from."ID";
            
            ?>
            
            <table class="table table-dark">
            <?php 
            // DE KOLOMNAMEN WORDEN OPGEHAALD
            $columns = array_keys($dataset[0]);
            ?>
            
            <tr> 
                <?php foreach($columns as $column){ ?>
                    <th>
                        <strong>
                            <?php echo $column?>
                        </strong>
                    </th>
                <?php } ?>
                <th colspan="2">action</th>
            </tr>
                <?php foreach($dataset as $rows=>$row){ 
                    $row_id = $row[$key]; ?>
                    <tr>
                    <?php foreach($row as $rowdata){ ?>
                        
                        <td><?php echo $rowdata; ?></td>
                    <?php } ?>
                    
                    <td>
                        <a href="delete-gewenste.php?vak_code=<?php echo $row_id; ?>&periode=1" class="btn btn-danger" >Delete</a>
                    </td>
                    <td>
                        <a href="edit-gewenste.php?ID=<?php echo $row_id; ?>&uren=<?php echo trim($row['uren']);?>" class="btn btn-primary" >Wijzig uren</a>
                    </td>
                    </tr>
                    </div>
            <?php }
         }
    }?>
    
    </table>
 
                    <?php
                    
                    function create_table2($dataset, $from){
                
                    if(is_array($dataset) && !empty($dataset)){ 
                        // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                        $key = $from."ID";
                    
                        ?>
                        
                        <table class="table table-dark">

                        <hr class="new1">
                        <?php 
                        // DE KOLOMNAMEN WORDEN OPGEHAALD
                        $columns = array_keys($dataset[0]);
                        ?>
                        
                        <tr>
                            <?php foreach($columns as $column){ ?>
                                <th>
                                    <strong>
                                        <?php echo $column?>
                                    </strong>
                                </th>
                            <?php } ?>
                            <th colspan="2">action</th>
                        </tr>
                            <?php foreach($dataset as $rows=>$row){ 
                                $row_id = $row[$key]; ?>
                                <tr>
                                <?php foreach($row as $rowdata){ ?>
                                    
                                    <td><?php echo $rowdata; ?></td>
                                <?php } ?>
                                
                                <td>
                                 <a href="delete-gewenste.php?vak_code=<?php echo $row_id; ?>&periode=2" class="btn btn-danger" >Delete</a>
                                </td>
                                <td>
                                <a href="edit-gewenste.php?ID=<?php echo $row_id; ?>&uren=<?php echo trim($row['uren']);?>" class="btn btn-primary" >Wijzig uren</a>
                                 </td>
                                </tr>
                                </div>
                        <?php }
                    }
                }?>
                </table>


               
 
                                <?php
                                
                                function create_table3($dataset, $from){

                                if(is_array($dataset) && !empty($dataset)){ 
                                    // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                                    $key = $from."ID";
                                
                                    ?>
                                    
                                    <table class="table table-dark">
                                        
                                   
                                    <hr class="new1">
                                    <?php 
                                    // DE KOLOMNAMEN WORDEN OPGEHAALD
                                    $columns = array_keys($dataset[0]);
                                    ?>
                                    
                                    <tr>
                                        <?php foreach($columns as $column){ ?>
                                            <th>
                                                <strong>
                                                    <?php echo $column?>
                                                </strong>
                                            </th>
                                        <?php } ?>
                                        <th colspan="2">action</th>
                                    </tr>
                                        <?php foreach($dataset as $rows=>$row){ 
                                            $row_id = $row[$key]; ?>
                                            <tr>
                                            <?php foreach($row as $rowdata){ ?>
                                                
                                                <td><?php echo $rowdata; ?></td>
                                                
                                            <?php } 
                                            ?>
                                            <td>
                                               <a href="delete-gewenste.php?vak_code=<?php echo $row_id; ?>&periode=3" class="btn btn-danger" >Delete</a>
                                             </td>
                                                  <td>
                                                  <a href="edit-gewenste.php?ID=<?php echo $row_id; ?>&uren=<?php echo trim($row['uren']);?>" class="btn btn-primary" >Wijzig uren</a>
                                                 </td>
                                            </tr>
                                            
                                            </div>
                                    <?php }
                                }
                                }?>
                                </table>





                                <?php
                                
                                function create_table4($dataset, $from){

                                if(is_array($dataset) && !empty($dataset)){ 
                                    // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                                    $key = $from."ID";
                                
                                    ?>
                                    
                                    <table class="table table-dark">
                                    
                                    <hr class="new1">
                                    <?php 
                                    // DE KOLOMNAMEN WORDEN OPGEHAALD
                                    $columns = array_keys($dataset[0]);
                                    ?>
                                    
                                    <tr>
                                        <?php foreach($columns as $column){ ?>
                                            <th>
                                                <strong>
                                                    <?php echo $column?>
                                                </strong>
                                            </th>
                                        <?php } ?>
                                        <th colspan="2">action</th>
                                    </tr>
                                        <?php foreach($dataset as $rows=>$row){ 
                                            $row_id = $row[$key]; ?>
                                            <tr>
                                            <?php foreach($row as $rowdata){ ?>
                                                
                                                <td><?php echo $rowdata; ?></td>
                                                
                                            <?php } 
                                            ?>

                                        <td>
                                          <a href="delete-gewenste.php?vak_code=<?php echo $row_id; ?>&periode=4" class="btn btn-danger" >Delete</a>
                                             </td>
                                             <td>
                                             <a href="edit-gewenste.php?ID=<?php echo $row_id; ?>&uren=<?php echo trim($row['uren']);?>" class="btn btn-primary" >Wijzig uren</a>
                                            </td>
                                            </tr>
                                            
                                            </div>
                                    <?php }
                                }
                                }?>
                                </table>



                                

                                <?php
                                
                                function create_table5($dataset, $from){

                                if(is_array($dataset) && !empty($dataset)){ 
                                    // NAAM VAN DE KOLOM DIE JE WILT OPHALEN NAAR DE URL
                                    $key = $from."ID";
                                
                                    ?>
                                    
                                    <table class="table table-dark">
                                    
                                    <hr class="new1">
                                    <?php 
                                    // DE KOLOMNAMEN WORDEN OPGEHAALD
                                    $columns = array_keys($dataset[0]);
                                    ?>
                                    
                                    <tr>
                                        <?php foreach($columns as $column){ ?>
                                            <th>
                                                <strong>
                                                    <?php echo $column?>
                                                </strong>
                                            </th>
                                        <?php } ?>
                                        <th colspan="2">action</th>
                                    </tr>
                                        <?php foreach($dataset as $rows=>$row){ 
                                            $row_id = $row[$key]; ?>
                                            <tr>
                                            <?php foreach($row as $rowdata){ ?>
                                                
                                                <td><?php echo $rowdata; ?></td>
                                                
                                            <?php } 
                                            ?>

                                        <td>
                                          <a href="delete-gewenste.php?vak_code=<?php echo $row_id; ?>&periode=5" class="btn btn-danger" >Delete</a>
                                             </td>
                                             <td>
                                             <a href="edit-gewenste.php?ID=<?php echo $row_id; ?>&uren=<?php echo trim($row['uren']);?>" class="btn btn-primary" >Wijzig uren</a>
                                            </td>
                                            </tr>
                                            
                                            </div>
                                    <?php }
                                }
                                }?>
                                </table>

    <br>
    
    </body>
    
</html>