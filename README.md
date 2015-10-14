# Nagios plugin to check disk load on a Microsoft Windows host.

### Idea

Check MS Windows disk load by using this Powershell script to get all disk load related counters from Windows Performance 
Manager, computing averages for all gathered samples and calculating read / write rate, number of reads / writes, read / 
write latency and read / write queue length.

### Screenshot

![Disk Load Highcharts Graph 01](/../screenshots/check-ms-win-disk-load-graph-01.png?raw=true "Disk Load Highcharts Graph 01")

### Status

Production ready.

### How To

Please visit http://outsideit.net/check-ms-win-disk-load for more information on how to use this plugin.

### Help

In case you find a bug or have a feature request, please make an issue on GitHub.

### On Nagios Exchange

http://exchange.nagios.org/directory/Plugins/Operating-Systems/Windows-NRPE/Check-Microsoft-Windows-Disk-Load/details

### Copyright

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public 
License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later 
version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the 
implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more 
details at <http://www.gnu.org/licenses/>.