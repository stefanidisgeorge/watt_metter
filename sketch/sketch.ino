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
  emon1.current(1, 20);
  Ethernet.begin(mac);
  Serial.begin(9600);
    
}








void loop()
{

  Serial.println(Ethernet.localIP());
  if (client.connect(serverName,80))
  {
    I = emon1.calcIrms(1480);
    P = 230*I;
    String  mainData = "consumption=" + double2string(P,2);
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
    Serial.println(P);
    delay(2500);
    client.stop();
  }
  else
  {
    Serial.println("Cannot connect");
  }
}

String double2string(double n, int ndec) {
    String r = "";

    int v = n;
    r += n;     // whole number part
    r += '.';   // decimal point
    int i;
    for (i=0;i<ndec;i++) {
        // iterate through each decimal digit for 0..ndec 
        n -= v;
        n *= 10; 
        v = n;
        r += v;
    }

    return r;
}




