#!/bin/bash
sh test_all.sh > all4analyst.txt
cat all4analyst.txt | sort -u > /var/www/html/Results/sorted_all4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_all4analyst.txt.$now.log" && filename2="Results/sorted_all4analyst.txt.$now.log"
cat /var/www/html/Results/sorted_all4analyst.txt > $filename2
echo $filename2;

