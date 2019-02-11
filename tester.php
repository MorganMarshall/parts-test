<?php include_once "includes/header.php"; ?>

<div class="container">




<input id="myinput" type="text" name="part">

<button onclick="addit()" class="btn">Add</button>
<div id="result"></div>

</div>

<script>
function additt() {
    let result = document.getElementById('result');
let myinput = document.getElementById('myinput').value;
let newDiv = document.createElement("p").innerHTML = myinput;


myinput.appendChild('result');
}
function addit() {
    let result = document.getElementById('result');
let myinput = document.getElementById('myinput').value;
let newDiv = document.createElement("p");

newDiv.innerText = myinput;
;


result.appendChild(newDiv);
}



</script>



<?php include_once "includes/footer.php"; ?>