#!/bin/bash
sh test_sha1.sh > sha1s4analyst.txt
cat sha1s4analyst.txt | sort -u > /var/www/html/Results/sorted_sha1s4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_sha1s4analyst.txt.$now.log" && filename2="Results/sorted_sha1s4analyst.txt.$now.log"
cat /var/www/html/Results/sorted_sha1s4analyst.txt > $filename2
echo $filename2;

