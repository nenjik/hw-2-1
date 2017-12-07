<?php
$data = file_get_contents('phonebook.json');
$data = json_decode($data,true);
?>
<html>
  <header>    </header>
  <body>
    <table>
      <tr>
          <td>Name</td>
          <td>Lastname</td>
          <td>Number</td>
      </tr>
        <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['lastname']; ?></td>
            <td><?php echo $item['number']; ?></td>
        </tr>
        <?php } ?>
    </table>
  </body>
</html>




