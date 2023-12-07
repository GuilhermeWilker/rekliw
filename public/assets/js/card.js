let cardSlider = document.getElementById("myRange");
let sliderValue = document.getElementById("sliderValue");

updateSliderValue = () => {
  sliderValue.textContent = `${cardSlider.value}%`;
};

cardSlider.addEventListener("input", updateSliderValue);
updateSliderValue();
