<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
  <link href="css/sub_main_pages.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/drawer_menu.css"/>
  <title>Unit Conversions</title>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <div class="main-wrapper">
      <section class="content-section">
        <?php
        // define the folder only once
        $basePath = "Header_pages/";

        $map = [

          
          "Engineering_And_Technical _Conversions" => [
            "Acceleration.php",
            "Length_conversions.php",
            "Pressure.php",
            "Time.php",
            "Torque.php",
            "Volume.php",
            "Weight-and-Mass.php",
            "Area.php",
            "Force.php"
          ],

          "Electrical_And_Electronics_Conversions" => [
            "Capacitance.php",
            "Electric_Current.php",
            "Electric-Potential.php",
            "Electric-Resistance.php",
            "Inductance.php",
            "Power-Electrical.php"
          ],

          "Cooking_And_Food_Measurements_Conversions" => [
            "Cooking-and-Food-Measurements-Weight-Mass.php"
          ],

          "Digital_And_Computing_Conversions" => [
            "Data-Rate.php",
            "Data_Storage.php"
          ],
          
          "Fluids_Cncentration_molar_Conversions" => [
            "concentration_molar.php",
            "Fluids-Concentration_Solution.php"
          ],

          "Fluids_Conversions" => [
            "Fluids-Converters-Flow.php",
            "Fluids-Converters-Molar.php",
            "surface-tension.php",
            "Fluids_flow_mass.php",
            "Mass-Flux-Density.php",
            "Viscosity_density.php"
          ],

          "Light_And_Optics_Conversions" => [
            "Digital_Image_Resolution.php",
            "Wavelength.php",
            "Illuminance.php"
          ],

          "Temperature_Conversions" => ["Temperature.php"]
        ];

        function display_name($key){
          $k=str_replace('_',' ',$key);
          $k=preg_replace('/\s+/',' ',$k);
          return trim($k);
        }

        function smart_title($s){
          $small=['and','or','of','the','a','an','to','in','on','for','with','by','at','from'];
          $parts=preg_split('/\s+/', strtolower(trim($s)));
          foreach($parts as $i=>$w){
            if($i===0 || !in_array($w,$small)) $parts[$i]=ucfirst($w);
          }
          return implode(' ',$parts);
        }

        function item_label($file){
          $name=basename($file,'.php');
          $name=str_replace(['-','_'],' ',$name);
          $name=preg_replace('/\s+/',' ',$name);
          return smart_title($name);
        }
        ?>
        <div class="converter-section">
          <h2>Unit Conversions</h2>
          <div class="input-group" id="conv-search-wrap">
            <label for="conv-search">Search conversions</label>
            <input id="conv-search" type="text" placeholder="Search by name or category">
          </div>
          <div id="conv-results">
            <?php foreach($map as $group=>$files): ?>
              <section class="popular-conversions" data-group>
                <h2><?php echo htmlspecialchars(display_name($group)); ?></h2>
                <div class="conversion-grid">
                  <?php foreach($files as $file):
                    $label=item_label($file);
                    $link=$basePath.$file; ?>
                    <a class="conversion-item" href="<?php echo htmlspecialchars($link); ?>" data-name="<?php echo htmlspecialchars($label); ?>" data-group-name="<?php echo htmlspecialchars(display_name($group)); ?>"><?php echo htmlspecialchars($label); ?></a>
                  <?php endforeach; ?>
                </div>
              </section>
            <?php endforeach; ?>
          </div>
          <p id="no-matches" style="display:none">No matches found.</p>
        </div>
        <script>
        (function(){
          var q=document.getElementById("conv-search");
          var groups=[].slice.call(document.querySelectorAll("[data-group]"));
          var items=[].slice.call(document.querySelectorAll(".conversion-item"));
          function n(s){return s.toLowerCase().trim();}
          function m(h,needle){var t=needle.split(/\s+/).filter(Boolean);for(var i=0;i<t.length;i++){if(h.indexOf(t[i])===-1)return false;}return true;}
          function f(){var v=n(q.value), any=false;items.forEach(function(el){var h=n(el.getAttribute("data-name")+" "+el.getAttribute("data-group-name"));var ok=v===""?true:m(h,v);el.style.display=ok?"block":"none";if(ok) any=true;});groups.forEach(function(g){var visible=g.querySelectorAll(".conversion-item:not([style*='display: none'])").length>0;g.style.display=visible?"block":"none";});document.getElementById("no-matches").style.display=any?"none":"block";}
          q.addEventListener("input",f);
        })();
        </script>
      </section>
      <aside class="ad-section">
        <h3>Advertisement</h3>
        <div class="ad-placeholder">Ad Space (350x280)</div>
        <?php include 'drawer_menu.php'; ?>
      </aside>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
