<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
require("admin/include/conection.php");
?>
<?php
if ($isTouch = isset($_SESSION["id"])) {
    $userIdCart=$_SESSION["id"];
} else{
    $userIdCart="";

}
?>
<?php
if (isset($_GET['id'])) {
$array=array('Adonidia Merrillii', 'Bismarckia Nobilis', 'Carpentaria Palm Tree', 'Cocos Nucifera', 'Copernici Aalba', 'Cycas Revoluta', 'Veitchia Merrillii', 'washingtoniarobusta', 'Alternanthera', 'Amaranthus Caudatus', 'Ficus Carica-Fig Tree', 'Gerbera Mix-Seasonal', 'Helianthus Sunflower Plant', 'poinsettia', 'Punica Granatum- Pomegranate', 'Rhoeo Discolor', 'Bougainvillea Glabra Nana Red', 'Bougainvillea Mix', 'Bougainvillea-orange', 'Bougainvillea White', 'Jacquemontia', 'Jasmin Sambac',
'Mandevilla', 'Tristelateia');
$descriptionArr=array('is an evergreen, single-stemmed palm tree that grows about 6 metres tall.', 'Is a stunning, large palm widely cultivated in the tropics for its beautiful silver-blue foliage although a green leaf variety exists.', 'usually has 10-12 pinnate, or feather-like, type leaves with 90-100 leaflets. They grow from a smooth green crownshaft up to 6 feet long.', 'is a large palm, growing up to 30 m (100 ft) tall, with pinnate leaves 4–6 m (13–20 ft) long, and pinnae 60–90 cm (2–3 ft) long', 'as a tough, grey, cylindrical trunk that retains the spiky bases of old leaves for several years when the palm is young.', ' is a low growing single trucked cycad, topped with whorled feathery leaves.', 'The Manila Palm is a small, showy palm, with beautiful cascading leaves and large bunches of striking red fruit at Christmas time', 'is a tall evergreen palm with a columnar trunk topped with a relatively small rounded crown of beautifully shaped, fan-like, rich green leaves, up to 3-5 ft. ', 'A strong border, bedding or edging plant. Also used in containers, planters, window boxes and hanging baskets.', 'Amaranthus caudatus is a species of annual flowering plant. It goes by common names such as love-lies-bleeding', 'Common fig Ficus carica is an Asian species of flowering plant in the mulberry family, known as the common fig.', 'These pretty Gerbera come in a multitude of colours and make a cheerful splash of colour on a windowsill.', 'Helianthus annuus, the common sunflower, is a large annual forb of the genus Helianthus grown as a crop for its edible oil and edible fruits.', 'The poinsettia is a commercially important plant species of the diverse spurge family.', 'The pomegranate is a fruit-bearing deciduous shrub in the family Lythraceae, subfamily Punicoideae, that grows between 5 and 10 m tall.', 'Rhoeo, including Rhoeo discolor and Rhoeo spathacea, is a plant of many names. Used to create a tropical effect and for its foliage colour.', 'Bougainvillea is a genus of thorny ornamental vines, bushes, and trees with flower-like spring leaves near its flowers.', 'Bougainvillea is a genus of thorny ornamental vines, bushes, and trees with flower-like spring leaves near its flowers.', ' Bougainvillea can be used as a houseplant or hanging basket in cooler climates.', ' Bougainvillea can be used as a houseplant or hanging basket in cooler climates.', 'Jacquemontia is a plant genus in the morning glory family Convolvulaceae.', 'The Arabian Jasmine is evergreen, scented flowers, twining climber or scrambler with angular stems and bushy growth. ', 'Mandevilla is used for its flower display and tropical flowering. Used both as a vine and as a small shrub.', 'Tristellateia is used for its strong and prolific flower display which helps provide a tropical effect throughout the year.');
    $price=array("20","4","6","7.5","8","6","17","50","46","48","25","84","45","9","45","35","11","67","12","34","26","50","80","50");
$arrLength=count($array);

for ($i=0; $i < $arrLength; $i++) { 
    $img="$array[$i].jpg";
    $omgt=str_replace(' ', '', $img);
    echo $omgt;
// $query="DELETE FROM plants";
// $query="INSERT INTO plants (plant_name,description,price,plant_img,img_two) VALUES ('{$array[$i]}','{$descriptionArr[$i]}','{$price[$i]}','$omgt','$omgt') ";
    // $result=mysqli_query($conn,$query);
    }
}

?>