<?php require_once("header.php"); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">
  
  <!-- Photo grid -->
  <div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
   </div>
    
   <div class="w3-quarter">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-quarter">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>






<?php require_once("footer.php"); ?>