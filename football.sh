#!/bin/bash
curl "http://localhost/football.php" > football.txt 

echo "$(<football.txt)"
say="$(<football.txt)"
wget -q -U Mozilla -O mecze.mp3 "http://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=$say&tl=Pl-pl"

#rasbperry pi say 
mplayer football.mp3
