<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/xhtml; charset=utf-8" />
    <title>Dynamic Select Statements</title>

<script type="text/javascript">
 var countryLists = new Array(4)
 countryLists["empty"] = ["Select a Country"];
 countryLists["North America"] = ["Canada", "United States", "Mexico"];
 countryLists["South America"] = ["Brazil", "Argentina", "Chile", "Ecuador"];
 countryLists["Asia"] = ["Russia", "China", "Japan"];
 countryLists["Europe"]= ["Britain", "France", "Spain", "Germany"];

 function countryChange(selectObj) {
 // get the index of the selected option
 var idx = selectObj.selectedIndex;
 // get the value of the selected option
 var which = selectObj.options[idx].value;
 // use the selected option value to retrieve the list of items from the countryLists array
 cList = countryLists[which];
 // get the country select element via its known id
 var cSelect = document.getElementById("country");
 // remove the current options from the country select
 var len=cSelect.options.length;
 while (cSelect.options.length > 0) {
 cSelect.remove(0);
 }
 var newOption;
 // create new options
 for (var i=0; i<cList.length; i++) {
 newOption = document.createElement("option");
 newOption.value = cList[i];  // assumes option string and value are the same
 newOption.text=cList[i];
 // add the new option
 try {
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
 }
 catch (e) {
 cSelect.appendChild(newOption);
 }
 }
 }
//]]>
</script>
</head>
<body>
  <noscript>This page requires JavaScript be available and enabled to function properly</noscript>
  <h1>Dynamic Select Statements</h1>
  <label for="continent">Select Continent</label>
  <select id="continent" onchange="countryChange(this);">
    <option value="empty">Select a Continent</option>
    <option value="North America">North America</option>
    <option value="South America">South America</option>
    <option value="Asia">Asia</option>
    <option value="Europe">Europe</option>
  </select>
  <br/>
  <label for="country">Select a country</label>
  <select id="country">
    <option value="0">Select a country</option>
  </select>
</body>
 </html>