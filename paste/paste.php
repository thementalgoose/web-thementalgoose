<?php
  $refdir = "paste_counter";
  $dirinuse = "pastes";
  $indexcontent = "<?php require ('../../../web/php/paste_index.php'); ?>";

  $canWrite = (isset($_POST["data"]));
  if (strcmp(trim($_POST["data"]),"") == 0) {
    $canWrite = false;
  }

  $md = $_POST["markdown"];

  if ($canWrite) {
    // Write
    // $id = intval(file_get_contents($refdir));
    // $id = $id + 1;
    // Got the correct ID

    $folder = 'pastes';
    $id = count(glob("$folder/*",GLOB_ONLYDIR)); 
    $id = $id + 1;

    // ----------------- BOW --------------------
    $dirinuse .= "/" . $id;
    // Construct the file
    if (is_dir($dirinuse) === false) {
      mkdir ($dirinuse);
    }

    $file = fopen($dirinuse . "/" . "data.txt", 'w');
    $data = tab2space($_POST["data"]);
    fwrite($file, $data);
    fclose($file);

    if ($md) {
      $indexcontent = "<?php \$md = true; require ('../../../web/php/paste_index.php'); ?>";
    }
    $file = fopen($dirinuse . "/" . "index.php", 'w');
    fwrite($file, $indexcontent);
    fclose($file);
    // ----------------- EOW --------------------

    // Check that the file read was a valid file
    // $handle = fopen($refdir, 'w') or header('Location: /paste?i');
    // fwrite($handle, $id);
    // fclose($handle);
    // Go with the header
    header('Location: /paste/pastes/' . $id);
  } else {
    // Error
    header('Location: /paste?e');
  }

  function tab2space($text, $spaces = 4) {
    // Explode the text into an array of single lines
    $lines = explode("\n", $text);
    // Loop through each line
    
    foreach ($lines as $line) {
      // Break out of the loop when there are no more tabs to replace
        
      while (false !== $tab_pos = strpos($line, "\t")) {
        // Break the string apart, insert spaces then concatenate
        $start = substr($line, 0, $tab_pos);
        $tab = str_repeat(' ', $spaces - $tab_pos % $spaces);
        $end = substr($line, $tab_pos + 1);
        $line = $start . $tab . $end;
      }
      $result[] = $line;
    }
    return implode("\n", $result);
  }
?>