#!/bin/sh


# messages clear
ERR_MSG=""
MSG=""

# This will clear the screen before displaying the menu.
clear

while :
do
	# If error exists, display it
	if [ "$ERR_MSG" != "" ]; then
		echo "Error: $ERR_MSG"
		else echo "$MSG"
	fi

	# Write out the menu options...

	echo "Select an option:"
	echo " * 1: A ON"
	echo " * 2: A OFF"
	echo " * 3: B ON"
	echo " * 4: B OFF"
	echo " * 5: C ON"
	echo " * 6: C OFF"
	echo " * 7: D ON"
	echo " * 8: D OFF"
	echo " * 9: E ON"
	echo " *10: E OFF"
	echo " *11: Exit"

	# Clear the error message
	ERR_MSG=""
	MSG=""
	
	# Read the user input
	read SEL

	case $SEL in
		1) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762196` ;;
		2) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16762193` ;;
		3) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16765268` ;;
		4) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16765265` ;;
		5) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766036` ;;
		6) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766033` ;;
		7) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766228` ;;
		8) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766225` ;;
		9) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766276` ;;
		10) MSG=`cd /home/pi/433Utils/RPi_utils/ && sudo ./codesend 16766273` ;;
		11) echo "Bye!"; exit ;;
		*) ERR_MSG="Please enter a valid option!"
	esac

	# This will clear the screen so we can redisplay the menu.
	clear
done
