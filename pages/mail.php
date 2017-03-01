<? 
$from = $_POST['email']; 
$subject = 'subject'; 
$message = 'From: ' . $_POST['name'] . "\n". 'Mensaje:' . $_POST['data']; 
$headers = "From: ". $from . "\n";
mail ('info@ecotepes.com', $subject, $message, $headers); 
header('Location: formulario_ok.htm'); 
?>