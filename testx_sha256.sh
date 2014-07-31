#!/bin/bash
sh test_md5.sh > md5s4analyst.txt
cat md5s4analyst.txt | sort -u > /var/www/html/Results/sorted_md5s4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_md5s4analyst.txt.$now.log" && filename2="Results/sorted_md5s4analyst.txt.$now.log"
cat /var/www/html/Results/sorted_md5s4analyst.txt > $filename2
echo $filename2;

