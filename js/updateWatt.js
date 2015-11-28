var g1, newElement = 0, userConsumption = {status: "",watts: "", deviceID: ""};

function loadDevices()
{
userConsumption.deviceID = "1";
var postData = JSON.stringify(userConsumption);
var postArray = {json:postData};
$.ajax({
	type: 'POST',
	url: "getPanelStats.php",
	data: postArray,
	success: function(data)
	{
		data1 = JSON.parse(data);
		if (data1.status == "ok" )
		{
			userConsumption.watts = data1.watts;
			updateWatts(userConsumption.watts);
		}
		else
		{
			alert("Σφάλμα, παρακαλώ επικοινωνήστε με τον διαχειριστή");
		}
	}
});}

window.onload = function()
{
document.getElementById('content').style.marginLeft= "0%";
loadDevices();
g1 = new JustGage({
  id: "g1",
  value: "",
  title:"Current Watt Consumption",
  min: 0,
  max: 5000,
  valueFontColor: "#ffffff",
  titleFontColor: "#ffffff",
  labelFontColor: "#ffffff",
  levelColorsGradient: false,
  label: "Watt"
});
setInterval(loadDevices, 2000);
}

function updateWatts(watts)
{
g1.refresh(watts);
}
