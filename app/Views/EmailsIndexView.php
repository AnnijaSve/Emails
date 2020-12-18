<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>All Emails</title>
    <link rel="stylesheet"
          type="text/css"
          href="app\Views\style.css"/>
</head>
<body>
<?php

if ($emailQuery) {

    $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
    echo "
   <table border='1'>
     <tr>
       <th><a href='?order=email&&sort=$sort'>Email number</a></th>
       <th><a href='?order=created_at&&sort=$sort'>Created number</a></th>
     
     ";

    foreach ($emailQuery as $email) {
        $personEmail = $email['email'];
        $created_at = $email['created_at'];
        $id = $email['id'];
        echo "
      <tr>
    ";
        if ($_GET['filter']) {
            $email = $domainQuery->fetchAssociative();
            $personEmail = $email['email'];
            $created_at = $email['created_at'];
            $id = $email['id'];
        }
        echo "
        <td>$personEmail</td>
        <td>$created_at</td>
        <td>
        ";
        if ($id) {
            echo "
         <form method='post' action='/emails/";
            echo $id;
            echo "
           style='display: inline-block'>
            <input type='hidden' name='_method' value='DELETE'>
              <button type='submit' onclick='return confirm('Are you sure?')'>
              Delete
              </button>
         </form>
        </td>
     </tr>
    ";
        }
    }
    echo "
    </table>
    ";
} else {
    echo "Emails not found";
}
echo "
         <form action='/emails' method='get'>
            <button name='filter' id='filter' value='%gmail%' type='submit'>Gmail</button>
            <button name='filter' id='filter' value='%yahoo%' type='submit'>Yahoo</button>
            <button name='filter' id='filter' value='%outlook%' type='submit'>Outlook</button>
            <button name='filter' id='filter' value='%' type='submit'>All</button>
         </form>
";
?>
