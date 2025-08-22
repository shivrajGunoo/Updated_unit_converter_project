<?php
$menu = [
  "Cooking_N_Food_Measurements" => [
    ["Cooking-and-Food-Measurements-Weight-Mass.php","Cooking & Food Measurements (Weight/Mass)"]
  ],
  "Digital_and_Computing" => [
    ["Data-Rate.php","Data Rate"],
    ["Data_Storage.php","Data Storage"]
  ],
  "Electrical_and_Electronics_Conversions" => [
    ["Capacitance.php","Capacitance"],
    ["Electric_Current.php","Electric Current"],
    ["Electric-Potential.php","Electric Potential"],
    ["Electric-Resistance.php","Electric Resistance"],
    ["Inductance.php","Inductance"],
    ["Power-Electrical.php","Power (Electrical)"]
  ],
  "Engineering_and_Technical _Conversions" => [
    ["Acceleration.php","Acceleration"],
    ["Length_conversions.php","Length"],
    ["Pressure.php","Pressure"],
    ["Time.php","Time"],
    ["Torque.php","Torque"],
    ["Volume.php","Volume"],
    ["Weight-and-Mass.php","Weight & Mass"],
    ["Area.php","Area"],
    ["Force.php","Force"]
  ],
  "Fluids_Converters_concentration_molar" => [
    ["concentration_molar.php","Concentration (Molar)"],
    ["Fluids-Concentration_Solution.php","Concentration (Solution)"]
  ],
  "Fluids_Converters" => [
    ["Fluids-Converters-Flow.php","Flow"],
    ["Fluids-Converters-Molar.fixed.php","Molar Flow (Fixed)"],
    ["surface-tension.php","Surface Tension"],
    ["Fluids_flow_mass.php","Flow (Mass)"],
    ["Mass-Flux-Density.php","Mass Flux Density"],
    ["Viscosity_density.php","Viscosity & Density"]
  ],
  "Light_and_Optics_Conversions" => [
    ["Digital_Image_Resolution.php","Digital Image Resolution"],
    ["Wavelength.php","Wavelength"],
    ["Illuminance.php","Illuminance"]
  ],
  "Temperature" => [
    ["Temperature.php","Temperature"]
  ]
];
function tidy_title($k){return trim(str_replace(["_","-"],[" "," "],$k));}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>All Converters</title>
<link rel="stylesheet" href="../css/styles.css"/>
<link rel="stylesheet" href="drawer_menu.css"/>
</head>
<body>
<aside class="drawer">
<div class="drawer__title">All Converters</div>
<nav class="drawer__nav">
<?php foreach($menu as $section=>$items): ?>
<details class="drawer__section">
<summary class="drawer__summary"><?php echo tidy_title($section); ?></summary>
<ul class="drawer__list">
<?php foreach($items as $row): ?>
<li><a class="drawer__link" href="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></li>
<?php endforeach; ?>
</ul>
</details>
<?php endforeach; ?>
</nav>
</aside>
<script>
document.querySelectorAll(".drawer__summary").forEach(function(s){s.addEventListener("keydown",function(e){if(e.key==="Enter"||e.key===" "){e.preventDefault();this.click();}});});
</script>
</body>
</html>
