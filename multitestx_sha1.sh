#!/bin/bash
sh multitest_sha1.sh > multisha1s4analyst.txt
cat multisha1s4analyst.txt | sort -u > /var/www/html/Results/multisorted_sha1s4analyst.txt
now=$(date +"%Y.%m.%d.%S.%N")
filename="/var/www/html/Results/multisort_sha1s4analyst.txt.$now.log" && filename2="Results/multisorted_sha1s4analyst.txt.$now.log"
cat /var/www/html/Results/multisorted_sha1s4analyst.txt > $filename2
echo $filename2;
