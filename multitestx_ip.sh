#!/bin/bash
sh multitest_ip.sh > multiips4analyst.txt
cat multiips4analyst.txt | sort -u > /var/www/html/Results/multisorted_ips4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_ips4analyst.txt.$now.log" && filename2="Results/multisorted_ips4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_ips4analyst.txt > $filename2
echo $filename2;
