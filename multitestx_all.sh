#!/bin/bash
sh multitest_all.sh > multialls4analyst.txt
cat multialls4analyst.txt | sort -u > /var/www/html/Results/multisorted_alls4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_alls4analyst.txt.$now.log" && filename2="Results/multisorted_alls4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_alls4analyst.txt > $filename2
echo $filename2;
