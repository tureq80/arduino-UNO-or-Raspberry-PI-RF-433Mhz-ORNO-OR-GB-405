/*
  Example for different sending methods
  
  https://github.com/sui77/rc-switch/
  
*/

#include <RCSwitch.h>

RCSwitch mySwitch = RCSwitch();

void setup() {

  Serial.begin(9600);
  
  // Transmitter is connected to Arduino Pin #10  
  mySwitch.enableTransmit(10);
  
}

void loop() {

  /* Same switch as above, but tri-state code */ 
  /* on channel D */
 mySwitch.sendTriState("11111FFF0F0F");
 delay(3000);  
 /* off channel D */
 mySwitch.sendTriState("11111FFF0FF0");
 delay(3000);

}
