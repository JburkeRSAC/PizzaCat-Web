#!/bin/bash
sh multitest_md5.sh > multimd5s4analyst.txt
cat multimd5s4analyst.txt | sort -u > /var/www/html/Results/multisorted_md5s4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_md5s4analyst.txt.$now.log" && filename2="Results/multisorted_md5s4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_md5s4analyst.txt > $filename2
echo $filename2;
