#!/bin/bash
sh test.sh > emails4yury.txt
cat emails4yury.txt | sort -u > /var/www/html/Results/sorted_emails4yury.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_emails4yury.txt.$now.log" && filename2="Results/sorted_emails4yury.txt.$now.log"
cat /var/www/html/Results/sorted_emails4yury.txt > $filename2
echo $filename2;
