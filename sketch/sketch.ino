#include <SPI.h>
#include <Ethernet.h>
#include <utility/w5100.h>
//#include "EmonLib.h"

//0EnergyMonitor emon1; // Äçìéïõñãßá óôéãìéüôõðïõ
EthernetClient client; // Äçìéïõñãßá óôéãìéüôõðïõ
byte mac[] = { 0x00, 0x65, 0x37, 0x7F, 0xDC, 0x31 };  
byte ip[] = { 10, 188, 7, 72 };    
byte gateway[] = { 10, 188, 7, 65 };
byte subnet[] = { 255, 255, 255, 224 };

byte serverName[] = { 63, 142, 253, 229 };
double P, I;

void setup()
{
  //emon1.current(0, 6);
  Ethernet.begin(mac, ip, gateway);
  Serial.begin(9600);
}

void loop()
{
  if (client.connect(serverName,80)) 
  {
   I = random(1,5000);
    P = random(1,5000);  // Õðïëïãéóìüò ôñÝ÷ïõóáò éó÷ýïò 
    String  mainData = "consumption=" + doubleToString(P, 2);
    client.println("POST /update.php HTTP/1.1");
    client.println("Host: 63.142.253.229");
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
