<!DOCTYPE html>
<HTML>
    <HEAD>
    <title><?php echo date("Y/m/d"); ?> Item Shop | Storm Radar</title>
       <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>
    <BODY>
        <ul id="navbar">
            <li href="/" id="logo"><img src="./ressources/logo.png"><a href="#">Storm Radar</a></li>
            <li id="menu"><a href="./">Shop</a></li>
        </ul>
        <div class="kevin">
            <h1>Item Shop | <?php echo date("Y/m/d"); ?></h1>
			<div class="shop">
<div class="row">
  <div class="column-left">
  <h1>Featured</h1>
                  <?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://fortnite-public-api.theapinetwork.com/prod09/store/get?language=en');
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result);

$linel = 0;


while ($linel <= $obj->rows){
	
if($obj->items[$linel]->featured == 1) {
	if($obj->items[$linel]->item->rarity == "legendary") {
    echo "<div class='item' id='legendary'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
	};
	if($obj->items[$linel]->item->rarity == "epic") {
    echo "<div class='item' id='epic'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
	};
	if($obj->items[$linel]->item->rarity == "rare") {
    echo "<div class='item' id='rare'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
	};
	if($obj->items[$linel]->item->rarity == "uncommon") {
    echo "<div class='item' id='uncommon'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
	};
};
    $linel++;
};

?>
  
  
  </div>
  <div class="column">
  <h1>Daily</h1>
                    <?php

$linel = 0;


while ($linel <= $obj->rows){
	
    if($obj->items[$linel]->featured == 0) {
        if($obj->items[$linel]->item->rarity == "legendary") {
        echo "<div class='item' id='legendary'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
        };
        if($obj->items[$linel]->item->rarity == "epic") {
        echo "<div class='item' id='epic'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
        };
        if($obj->items[$linel]->item->rarity == "rare") {
        echo "<div class='item' id='rare'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
        };
        if($obj->items[$linel]->item->rarity == "uncommon") {
        echo "<div class='item' id='uncommon'><img src='" . $obj->items[$linel]->item->images->transparent . "'><div class='itemname'><h4>" . $obj->items[$linel]->name . "</h4><h4 id='cost'><img src='./ressources/Vbucks_icon.png' style='height: 20px; width: auto; box-align: right; display: inline-block;vertical-align:middle;'>".$obj->items[$linel]->cost."</h4></div></div>";
        };
    };
    $linel++; 
}

?>

  </div>
</div>
            </div>
			</div>
        <div class="footerm">
        <p>Created by <a href="https://twitter.com/RoyaLeaks" style="text-decoration : auto; font-size : 2vw;">@RoyaLeaks</a><br>Helped by : <a href="https://twitter.com/XTigerHyperX">@XTigerHyperX</a> and <a href="https://twitter.com/LeaksUltimate">@LeaksUltimate</a>.</p>
        <br><p>Use code 'TigerHyperX' in the item shop for support us !</p>
        </div>
    </BODY>
</HTML>