<html>
  <body>
 
  <?php
  /* ARC2 static class inclusion */ 
  include_once('semsol/ARC2.php');  
 
  $dbpconfig = array(
  "remote_store_endpoint" => "http://dbpedia.org/sparql",
   );
 
  $store = ARC2::getRemoteStore($dbpconfig); 
 
  if ($errs = $store->getErrors()) {
     echo "<h1>getRemoteSotre error<h1>" ;
  }
 
  $query = '
  PREFIX symbo:http://www.semanticweb.org/ontologies/SymbO# 
  SELECT ?Line
  WHERE {?Line symbo:express symbo:Musicality}
  ';
  
  /* execute the query */
  $rows = $store->query($query, 'rows'); 
 
    if ($errs = $store->getErrors()) {
       echo "Query errors" ;
       print_r($errs);
    }
 
    /* display the results in an HTML table */
    echo "<table border='1'>
    <thead>
        <th>#</th>
        <th>Species (Label)</th>
        <th>Binomial</th>
        <th>Genus</th>
    </thead>";

    /* loop for each returned row */
    foreach( $rows as $row ) { 
    print "<tr><td>".++$id. "</td>
    <td><a href='". $row['species'] . "'>" . 
    $row['label']."</a></td><td>" . 
    $row['binomial']. "</td><td>" . 
    $row['genus']. "</td></tr>";
    }
    echo "</table>" 

  ?>
  </body>
</html>