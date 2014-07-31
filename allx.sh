#!/bin/bash
sh all.sh > all.txt
cat all.txt | sort -u > /var/www/html/allx.txt
