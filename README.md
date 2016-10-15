# arduino-RF-433Mhz-ORNO-OR-GB-405
Arduino + RF modul 433Mhz + ORNO OR-GB-405


# Decode wave

[]__[]__ = 00 = 0

[  ]_[  ] = 11 = 1

[]__[  ] = 01 = F


# explanation code list

A ON  : [11111][0FFFF][F0]

A OFF: [11111][0FFFF][0F]

B ON  : [11111][F0FFF][F0]

B OFF: [11111][F0FFF][0F]

C ON  : [11111][FF0FF][F0]

C OFF : [11111][FF0FF][0F]

D ON  : [11111][FFF0F][F0]

D OFF : [11111][FFF0F][0F]

E ON  : [11111][FFFF0][F0]

E OFF  : [11111][FFFF0][0F]

# Decimal code list

A ON: 16762196

A OFF: 16762193

B ON: 16765268

B OFF: 16765265

C ON: 16766036

C OFF: 16766033

D ON: 16766228

D OFF: 16766225

E ON: 16766276

E OFF: 16766273

:)
