<html lang="en">
<head>
    <title>Hello page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Sort</h1>
<?php
include_once 'sort_engine.php';
if (!empty($_GET)) {
    $parameter = $_GET[SortEngine::PARAMETER_NAME];
    try {
        new SortEngine($parameter);
    } catch (Exception $e){
        echo 'Wrong input';
    }
}
else
    echo 'Empty input';
?>
</body>
</html>