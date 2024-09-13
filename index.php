<?php
$file = 'example.txt';

if (file_exists($file)) {
   
    $content = file_get_contents($file);
    $lines = file($file); 
} else {
    
    $content = "This is a sample content created by file_put_contents().";
    file_put_contents($file, $content);
  $lines = file($file); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILE GROUP 2 EXERCISE 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        pre {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .line {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP FILE GROUP 2 EXERCISE 3</h1>

        <h2>File Get Content:</h2>
        <pre><?php echo htmlspecialchars($content); ?></pre>

        <h2>File Put Content:</h2>
        <?php foreach ($lines as $lineNumber => $line) : ?>
            <p class="line">Line <?php echo $lineNumber + 1; ?>: <?php echo htmlspecialchars($line); ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>