#!/usr/bin/env python
#
# Import Regex
import re
# Import Tkinter to leverage Clipboard functions
#from Tkinter import Tk
#tkroot = Tk()
# The following series of data structures ultimately need to be further refined as Class & Dict objects
# These current forms are the result of step wise prototyping of the core concepts/functions and are admittedly  inelegant!!!!
#
# These regex's need refinement, again POC/Demonstration Code here!!!
# RegEx expressions for pattern matching
#
# IPv4 IP Address 1
re1 = '((25[0-4]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[1-9])(\.|\[\.\]|\[dot\]|\(dot\)|\(\.\)|<dot>|<\.>)(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])(\.|\[\.\]|\[dot\]|\(dot\)|\(\.\)|<dot>|<\.>)(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])(\.|\[\.\]|\[dot\]|\(dot\)|\(\.\)|<dot>|<\.>)(25[0-4]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9]))'
#
#re1='((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]|[0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))'
#
re1a = '([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})'
# Email Address 1
re2a = '([_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(com|mil|info|museum|name)))'
#
# Email Address 2
re2b = '[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'
#
# Detect YYYMMDD-HHMMSS (first instance likely DSIE # Thread name, additional matches likely references # to other related DSIE threads.
re3 = '([0-9]{4})([0-1][0-9])([0-3][0-9])-([0-1][0-9]|[2][0-3])([0-5][0-9])([0-5][0-9])'
# IOC defanging patterns
# "[.]"
re4 = '(\[\.]|\[dot])'
#
# Web
re5 = '(https?|hxxps?|ftp|file)://[-A-Z0-9+&@#/%?=~_|!:,.;]*[-A-Z0-9+&@#/%=~_|]'
#
# Fully Qualified Domain Name 1
re6 = '((?:[-A-Za-z0-9_][-A-Za-z0-9_\\.\\d\\-]+)\\.(?:[-A-Za-z_][-A-Za-z_\\-]+))(?![\\w\\.])(?!@)'
#
# detect "name : value pairs"
# The "loose form" Name : Value pair extraction function/regex(s) are key to "value add" of this utility.  Much work to be done here!!!
# Want to grab context of predecessors/Successor key word terms to infer categorization/Binning of terms :
# e.g if Term "C2" or "c2"  is detected in proximity of an IP Address, Web url, or FQDN, then we should infer that "role" of that indicator is "Command & Control"
re7 = '[-A-Za-z0-9_\s:]{1,}:[-A-Z0-9_\s\.@,;:]{1,}'
#-----
# Lists for storing recovered IOCs
#-----
# IP Address List
IPL1 = []
# Email List
EML1 = []
#  Domain List
DOM1 = []
# Web URL List
WEB1 = []
# Re-fanging List (VERY RUDIMETARY DEMO ONLY)
REL1 = []
# Name Value Pair Extraction (VERY RUDIMETARY DEMO ONLY)
NVP1 = []
#
def main():
    try:
        file_object = open('/var/www/html/MEMBER_SUBMISSIONS/upload.txt')
        rg1 = re.compile(re1,re.IGNORECASE|re.DOTALL)
        rg2 = re.compile(re2a,re.IGNORECASE|re.DOTALL)
        rg3 = re.compile(re3,re.IGNORECASE|re.DOTALL)
        rg4 = re.compile(re4,re.IGNORECASE|re.DOTALL)
        rg5 = re.compile(re5,re.IGNORECASE|re.DOTALL)
        rg6 = re.compile(re6,re.IGNORECASE|re.DOTALL)
        rg7 = re.compile(re7,re.IGNORECASE)
        caseidfound = 0
        caseid = 'Unknown'
        for line in file_object:
            m7 = rg7.search(line)
            if m7:
                namvalpair=m7.group()
                if namvalpair not in NVP1:
                    NVP1.append(namvalpair)      
            m4 = rg4.search(line)
            if m4:
                line = re.sub('\[|]', '', line)
                line = re.sub('dot|DOT', '.', line)
                line = re.sub('AT|at', '.', line)
		line = re.sub('hxxp:', 'http:', line)
            m1 = rg1.search(line)
            m2 = rg2.search(line)
            m3 = rg3.search(line)
            m5 = rg5.search(line)
            m6 = rg6.search(line)
            if m3:
                if not caseidfound :
                    caseid = m3.group()
                    caseidfound = 1
                else:
                        relcaseid = m3.group()
                        if relcaseid not in REL1:
                            REL1.append(relcaseid)
            if m1:
                ipaddress1=m1.group()
                if ipaddress1 not in IPL1:
                    IPL1.append(ipaddress1)
            ## process line
            if m2:
                emailaddress1=m2.group()
                if emailaddress1 not in EML1:
                    EML1.append(emailaddress1)      
            ## process line
            if m5:
                weburl1=m5.group()
                if weburl1 not in WEB1:
                    WEB1.append(weburl1)      
            ## process line
            if m6:
                domainfqdn=m6.group()
                if domainfqdn not in DOM1:
                    DOM1.append(domainfqdn)
    finally:
        file_object.close()
        outdata = open('file' + '.txt', 'w+')
	print '\n'.join(IPL1) 
        print '\n'.join(DOM1) 
        print '\n'.join(WEB1) 
        outdata.write(str(IPL1))
        outdata.write(str(DOM1))
        outdata.write(str(WEB1))
        outdata.close()
        #print "***** Processing Completed ******"
#
if __name__ == '__main__':

    main()
