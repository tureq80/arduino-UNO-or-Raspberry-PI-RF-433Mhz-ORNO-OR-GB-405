# Arduino Uno or Raspberry pi + RF modul 433Mhz + Remote control ORNO OR-GB-405
Arduino UNO lub Raspberry PI (mózg) + RF modul 433Mhz (nadajnik 433Mhz jako pilot) + ORNO OR-GB-405 (gniazda na pilota)

# Decimal code list (właściwe kody, które działają z tymi gniazdami)

A ON: <code>16762196</code>

A OFF: <code>16762193</code></code>

B ON: <code>16765268</code>

B OFF: <code>16765265</code>

C ON: <code>16766036</code>

C OFF: <code>16766033</code>

D ON: <code>16766228</code>

D OFF: <code>16766225</code>

E ON: <code>16766276</code>

E OFF: <code>16766273</code>

have fun :)


# Decode wave

https://github.com/tureq80/arduino-RF-433Mhz-ORNO-OR-GB-405/wiki

Kody podane powyżej to konfiguracja pilota z wszystkimi 5 podniesionymi przełącznikami na odwrocie pilota) Jeśli przesuniesz przełącznik w dół zmieni się kod wysyłany z pilota. Wszystkie podniesione do góry przełączniki oznaczają 11111. Wszystkie przełączniki w dół to FFFFF. 


Przykłądowo: Dwa w dół 3 do góry kod bedzie zaczynał się od: FF111 

Odpowiednik dla litery A z przykładu powyżej to: FF1110FFFFF0


# explanation code list

A ON  : 111110FFFFF0 = [11111] <-przełączniki wszystkie do góry, [0FFFF] <-oznacza literę A, [F0] <-oznacza ON

A OFF: 111110FFFF0F = [11111][0FFFF][0F]

B ON  : [11111][F0FFF][F0]

B OFF: [11111][F0FFF][0F]

C ON  : [11111][FF0FF][F0]

C OFF : [11111][FF0FF][0F]

D ON  : [11111][FFF0F][F0]

D OFF : [11111][FFF0F][0F]

E ON  : [11111][FFFF0][F0]

E OFF  : [11111][FFFF0][0F]
