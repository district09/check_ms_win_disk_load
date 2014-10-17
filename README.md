# Nagios plugin to check Microsoft Windows 2008 or higher scheduled tasks

### Idea

Check MS Windows disk load by using Powershell to get all disk load related counters from Windows Performance Manager

### Status

In test phase. Plugin confirmed to work, but could contain small bugs. I also need to implement warning and critical thresholds for read and write queue length.

### How To

1) Put the script in the NSCP scripts folder  
2) In the nsclient.ini configuration file, define the script like this:  
	check_ms_windows_disk_load=cmd /c echo scripts\check_ms_windows_disk_load.ps1 $ARG1$; exit $LastExitCode | powershell.exe -command -  
3) Make a command in Nagios like this:  
	check_ms_windows_disk_load => $USER1$/check_nrpe -H $HOSTADDRESS$ -p 5666 -t 60 -c check_ms_windows_disk_load -a $ARG1$  
4) Configure your service in Nagios, make use of the above created command.

### Help

If you do happen to find a bug, please create an issue on GitHub. Please include console's output and reproduction 
step in your bug report. The script is highly adaptable if you want different output etc. 

### On Nagios Exchange


### History

10/10/2014 => Script creation
11/10/2014 => Fixed error in outputstring and issue with cookedvalue
15/10/2014 => Changes to unit of measurement
16/10/2014 => Solved some bugs, implemented warning and critical queue length thresholds
17/10/2014 => Documentation and testing

### Copyright

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public 
License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later 
version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the 
implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more 
details at <http://www.gnu.org/licenses/>.
