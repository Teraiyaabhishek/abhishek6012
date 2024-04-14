<?php
$file = "test.txt"; 
$content = $_POST['content'];

if(file_put_contents($file, $content) !== false) {
    echo "Text file updated successfully!";
} else {
    echo "Failed to update text file.";
}
?>
