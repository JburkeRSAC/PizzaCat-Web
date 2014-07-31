#!/bin/bash
sh test_ip.sh > ips4analyst.txt
cat ips4analyst.txt | sort -u > /var/www/html/Results/sorted_ips4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_ips4analyst.txt.$now.log" && filename2="Results/sorted_ips4analyst.txt.$now.log"
cat /var/www/html/Results/sorted_ips4analyst.txt > $filename2
echo $filename2;

