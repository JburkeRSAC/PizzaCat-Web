#!/bin/bash
sh multitest.sh > multiemails4analyst.txt
cat multiemails4analyst.txt | sort -u > /var/www/html/Results/multisorted_emails4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_emails4analyst.txt.$now.log" && filename2="Results/multisorted_emails4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_emails4analyst.txt > $filename2
echo $filename2;
