<?php

// Get passed value
$request_state = strtoupper($_GET['state']);

// Create the data array

$border_array["AL"] = "GA,FL,MS,TN";
$border_array["AK"] = "";
$border_array["AZ"] = "CA,NV,UT,NM";
$border_array["AR"] = "LA,TX,OK,MO,TN,MS";
$border_array["CA"] = "OR,NV,AZ";
$border_array["CO"] = "UT,WY,NE,KS,OK,NM,AZ";
$border_array["CT"] = "NY,RI,MA";
$border_array["DE"] = "MD,PA,NJ";
$border_array["DC"] = "MD,VA";
$border_array["FL"] = "GA,AL";
$border_array["GA"] = "AL,TN,NC,SC";
$border_array["HI"] = "";
$border_array["ID"] = "OR,WA,MT,WY,UT,NV";
$border_array["IL"] = "MO,IA,WI,IN,KY";
$border_array["IN"] = "IL,OH,KY,MI";
$border_array["IA"] = "NE,SD,MN,WI,IL,MO";
$border_array["KS"] = "CO,NE,MO,OK";
$border_array["KY"] = "MO,IL,IN,OH,WV,VA,TN";
$border_array["LA"] = "TX,AR,MS";
$border_array["ME"] = "NH";
$border_array["MD"] = "PA,DE,VA,WV,DC";
$border_array["MA"] = "NY,CT,RI,VT,NH";
$border_array["MI"] = "WI,IN,OH,IL,MN";
$border_array["MN"] = "ND,SD,IA,WI,MI";
$border_array["MS"] = "LA,AR,TN,AL";
$border_array["MO"] = "KS,OK,AR,TN,KY,IL,IA,NE";
$border_array["MT"] = "ID,WY,ND,SD";
$border_array["NE"] = "CO,WY,SD,IA,MO,KS";
$border_array["NV"] = "CA,OR,ID,UT,AZ";
$border_array["NH"] = "ME,MA,VT";
$border_array["NJ"] = "NY,PA,DE";
$border_array["NM"] = "AZ,UT,CO,OK,TX";
$border_array["NY"] = "PA,NJ,CT,MA,VT";
$border_array["NC"] = "VA,SC,TN,GA";
$border_array["ND"] = "MT,SD,MN";
$border_array["OH"] = "IN,MI,PA,WV,KY";
$border_array["OK"] = "CO,KS,MO,AR,TX,NM";
$border_array["OR"] = "WA,ID,NV,CA";
$border_array["PA"] = "OH,WV,NY,NJ,MD";
$border_array["RI"] = "MA,CT";
$border_array["SC"] = "NC,GA";
$border_array["SD"] = "MT,ND,MN,IA,NE,WY";
$border_array["TN"] = "AR,MO,KY,VA,NC,GA,AL,MS";
$border_array["TX"] = "NM,OK,AR,LA";
$border_array["UT"] = "NV,ID,WY,CO,NM,AZ";
$border_array["VT"] = "NY,NH,MA";
$border_array["VA"] = "WV,MD,DC,NC,KY,TN";
$border_array["WA"] = "OR,ID";
$border_array["WV"] = "OH,PA,MD,VA,KY";
$border_array["WI"] = "MN,MI,IL,IA";
$border_array["WY"] = "UT,ID,MT,SD,NE,CO";

// Find the border states in the array
$border_states = $border_array[$request_state];


// Return JSON Feed
echo '{"result":{';
echo '"border_states":"'.$border_states.'"' ;
echo "}}";

?>



