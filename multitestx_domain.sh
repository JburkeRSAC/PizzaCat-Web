#!/bin/bash
sh multitest_domain.sh > multidomains4analyst.txt
cat multidomains4analyst.txt | sort -u > /var/www/html/Results/multisorted_domains4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_domains4analyst.txt.$now.log" && filename2="Results/multisorted_domains4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_domains4analyst.txt > $filename2
echo $filename2;
