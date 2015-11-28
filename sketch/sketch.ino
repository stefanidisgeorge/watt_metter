#include <SPI.h>
#include <Ethernet.h>
#include <utility/w5100.h>

//You must install EmonLib.h library at Arduino IDE
//https://github.com/openenergymonitor/EmonLib
#include "EmonLib.h"

EnergyMonitor emon1; // Äçìéïõñãßá óôéãìéüôõðïõ
//start ethernet client
EthernetClient client;

//If we set only a MAC Address then DHCP Client runs automaticaly
byte mac[] = { 0x00, 0x65, 0x37, 0x7F, 0xDC, 0x31 };


//our temporary server address
byte serverName[] = { 104, 131, 163, 78 };
double P, I;

void setup()
{
  //sto analog0 to vazoume
  emon1.current(1, 6);
  Ethernet.begin(mac);
  Serial.begin(9600);
    
}








void loop()
{

  Serial.println(Ethernet.localIP());
  if (client.connect(serverName,80))
  {
    I = emon1.calcIrms(1480);
    P = 41.17 * I;
    String  mainData = "consumption=" + doubleToString(P, 2);
    client.println("POST /update.php HTTP/1.1");
    client.println("Host: 104.131.163.78");
    client.println("User-Agent: arduino-ethernet");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.println("Connection: close");
    client.print("Content-Length: ");
    client.println(mainData.length());
    client.println();
    client.println(mainData);
    client.println();
    Serial.println(I);
    delay(2500);
    client.stop();
  }
  else
  {
    Serial.println("Cannot connect");
  }
}


String doubleToString(double input,int decimalPlaces)
{
  if(decimalPlaces!=0)
  {
    String string = String((int)(input*pow(10,decimalPlaces)));
    if(abs(input)<1){
    if(input>0)
    string = "0"+string;
    else if(input<0)
    string = string.substring(0,1)+"0"+string.substring(1);
    }
    return string.substring(0,string.length()-decimalPlaces)+"."+string.substring(string.length()-decimalPlaces);
    }
  else
  {
    return String((int)input);
  }
}
