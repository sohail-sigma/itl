// get the country data from the plugin
var nationalityData = window.intlTelInputGlobals.getCountryData();
addressDropdown = document.querySelectorAll(".nationality");
for (let z = 0; z < addressDropdown.length; z++) {
  // populate the country dropdown
  for (var i = 0; i < nationalityData.length; i++) {
    var country = nationalityData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.name;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown[z].appendChild(optionNode);
  }
}
$(document).ready(function () {
  $(".nationality").prepend("<option value='' selected='selected'>Nationality</option>");
  // $('.address-country').change();
});

var countryData = window.intlTelInputGlobals.getCountryData();
addressDropdown = document.querySelectorAll(".address-country");
for (let z = 0; z < addressDropdown.length; z++) {
  // populate the country dropdown
  for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.name;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown[z].appendChild(optionNode);
  }
}
$(document).ready(function () {
  $(".address-country").prepend("<option value='' selected='selected'>Country</option>");
});

var countryData = window.intlTelInputGlobals.getCountryData();
addressDropdown = document.querySelectorAll("#address-country");
for (let z = 0; z < addressDropdown.length; z++) {
  // populate the country dropdown
  for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.name;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown[z].appendChild(optionNode);
  }
}
$(document).ready(function () {
  $("#address-country").prepend("<option value='' selected='selected'>Country of Residence</option>");
});
