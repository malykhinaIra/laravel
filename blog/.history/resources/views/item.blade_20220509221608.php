echo "<head><title>$item->description</title></head>";
        echo "<body style='background-color: #F5EFEA;'>";
        echo "<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 100px;'>";
        echo "<img src=$item->image style='margin-left: 30%;'>";
        echo "<div style='margin-left: 40px; margin-top: 22%;'>";
        echo "<p>$item->description</p>";
        echo "<p>$item->price</p>"; 
        echo "<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>";
        echo "</div>";
        echo "</div>";