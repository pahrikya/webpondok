@extends('layout.index')
    
@section('content')
<section class="upcoming-meetings">
<div class="container mt-5">
<h2 style="color: white">EKSTRAKULIKULER & PENGEMBANGAN</h2>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  {{-- <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button> --}}
  @foreach ($ekstra as $item)
  <button class="btn" onclick="filterSelection('{{$item->nama_ekstra}}')">{{$item->nama_ekstra}} </button>
  @endforeach
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  @foreach ($gambar_ekstra as $item)
  <div class="column {{$item->ekstra->nama_ekstra}}">
    <div class="content">
      <img src="assets/images/{{$item->gambar_ori}}" alt="Mountains" style="width:100%">
      <h4>{{$item->ekstra->nama_ekstra}}</h4>
    </div>
  </div>
  @endforeach
  {{-- <div class="column nature">
    <div class="content">
      <img src="assets/images/logo.png" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="assets/images/logo.png" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src="assets/images/logo.png" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column cars">
    <div class="content">
      <img src="assets/images/logo.png" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="assets/images/logo.png" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="assets/images/logo.png" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="assets/images/logo.png" alt="People" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <img src="assets/images/logo.png" alt="People" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <img src="assets/images/logo.png" alt="People" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div> --}}
<!-- END GRID -->
</div> 
</div>
</section>
<style>
    h1 {
  font-size: 50px;
  word-break: break-all;
}

/* .row {
  margin: 8px -16px;
} */

/* Add padding BETWEEN each column (if you want) */
/* .row,
.row > .column {
  padding: 8px;
} */

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
  margin-top: 20px
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  margin-top: 10px;
}

/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}
@media only screen and (max-width: 600px) {
    .column {
  float: left;
  width: 48%;
  display: none; /* Hide columns by default */
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
  margin-top: 20px
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  margin-top: 10px;
}

}
/* Add a dark background color to the active button */
/* .btn.active {
    background-color: #666;
    color: white;
} */
</style>

<script>
    filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
@endsection
