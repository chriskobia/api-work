<?php
$workplace = array( array("company"=>"archeNland Limited", "Amounts"=>"100,-1200,300,-700,678" , "Debits"=>1700, "Balance"=>1278),
               array("company"=>"narnla Geselmlchab", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>1203),
               array("company"=>"Loneisland proprtieary", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>3186)
             );
?>

<?php if (count($workplace) > 0): 
 
?>
<table>
  <thead>
    <tr>
      <th>
          
      <?php echo implode('</th><th>', array_keys(current($workplace)));
          ?>
        
        </th>
    </tr>
  </thead>
  <body>
<?php 
      
      foreach ($workplace as $row): array_map('htmlentities', $row); 
      
      ?>
    <tr>
      
        <td>
          
      <?php echo implode('</td><td>', $row); ?>
         
        </td>
    </tr>
<?php endforeach;
      ?>
  </body>
</table>

<?php endif;
?> 
    
