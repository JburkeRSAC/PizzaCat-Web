#!/bin/bash
sh test_domain.sh > domains4analyst.txt
cat domains4analyst.txt | sort -u > /var/www/html/Results/sorted_domains4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/sort_domains4analyst.txt.$now.log" && filename2="Results/sorted_domains4analyst.txt.$now.log"
cat /var/www/html/Results/sorted_domains4analyst.txt > $filename2
echo $filename2;

