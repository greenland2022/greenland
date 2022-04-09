<?php
include("header/header.php");?>
<br><br><br><br><br>
<div class="wrapper">

  <div class="settings">
    <div class="tooltip">Click Me!!!</div>
  </div>

  <div class="change-color-block">
    <p class="title">Enter a color</p>
    <div class="inp-wrapper">
      <button class="apply-btn">Apply</button>
    </div>
  </div>

</div>


<style>
    body {
  margin: 0;
  padding: 0;
}

.wrapper {
  position: relative;
  height: 100vh;
  width: 100%;
  background: gold;
  display: flex;
  justify-content: center;
  align-items: center;
}

.settings {
  position: absolute;
  top: 50px;
  right: 50px;
  height: 40px;
  width: 40px;
  background: black;
  box-shadow: 0 0 6px rgba(0, 0, 0, .1);
  border-radius: 50%;
  cursor: pointer;
}
.settings:hover .tooltip {
  opacity: 0;
}

.tooltip {
  position: absolute;
  top: 50%;
  left: -150px;
  transform: translateY(-50%);
  background: white;
  padding: 10px 20px;
  border-radius: 6px;
  box-shadow: 0 0 6px rgba(0, 0, 0, .1);
  transition: all .2s linear;
}

.tooltip--disable {
  opacity: 0;
}

.tooltip:before {
  position: absolute;
  top: 50%;
  right: -5px;
  content: '';
  height: 10px;
  width: 10px;
  background: white;
  transform: translateY(-50%) rotate(45deg);
}

.change-color-block {
  margin-left: -150px;
  /* opacity: 0; */
  border: 2px solid black;
  background: white;
  transition: .2s linear;
}

.change-color-block--active {
  margin-left: 0;
  opacity: 1;
}

.inp-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

.title {
  margin: 0;
  padding: 10px 60px;
  background: black;
  color: white;
  text-transform: uppercase;
  text-align: center;
  font-family: 'Lato', sans-serif;
  font-size: 20px
}

.color-input {
  border: none;
  outline: none;
  padding: 20px 20px;
  font-size: 20px;
}

.apply-btn {
  padding: 20px;
  text-transform: uppercase;
  border: none;
  outline: none;
  background: white;
  cursor: pointer;
}
</style>

<script>
    window.onload = function () {

const backgroundLayer = document.querySelector('body');
const settingsBtn = document.querySelector('.settings');
const changeColorBlock = document.querySelector('.change-color-block');
const applyBtn = document.querySelector('.apply-btn');
const tooltip = document.querySelector('.tooltip');

settingsBtn.addEventListener('click', function () {
  changeColorBlock.classList.toggle('change-color-block--active');
  tooltip.classList.toggle('tooltip--disable');
})

applyBtn.addEventListener('click', function () {
  backgroundLayer.style.background = 'black';
})

}
</script>