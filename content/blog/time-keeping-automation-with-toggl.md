---
category: [projects,random-thoughts]
title: "Time Keeping Automation with TOGGL"
date: "2017-09-28"
img: /images/excerpt/toggl.png
---

For my piano rebuilding business, I do not work by the hour!  I am working on spec projects, or on generally fixed quotes for customer projects.  But it's nice to know how long a job takes.  On again and off again for the past several years, I've used the web service, [TOGGL](https://www.toggl.com) (toggl without an "e") for the time keeping I've done.   On again and off again is a very appropriate description.

When going out to the shop, I'd forget to start the TOGGL task until I was well into it - or not at all.   Coming in from the shop, I'd forget to stop the timer, and then I'd have bad data.    While in the shop, I could generally remember to switch tasks, if I had, in fact, started one.

With a bit of creativity, I automated the starting and stopping of my work timekeeping.   The automation will start a "General Shop Work" time entry when I enter the shop, and stop the current time entry when leaving the shop.   This bit of magic occurs by knowing how many watts of electricity the shop is using.  In other words, my new app senses when I turn the lights on (or off).

This modality was available because I have minute-to-minute consumption data available on a raspberry pi server that collects and reports energy consumption.  So the application was very straightforward and the task was attached to the once-a-minute data collection process.   With a bit more work, I could learn how to query the home automation status, and get the lights on/off status more directly than the energy proxy I am using.

Here's the python code I wrote:

<div style="background-color: #cccccc; padding-left: 30px;"> 
<code >
<PRE>
#!/usr/bin/env python
import sqlite3
import requests
import json

DATABASE = ...
GENERAL\_SHOP\_WORK = ...
TOGGL\_API\_TOKEN = ...

sql = """
		SELECT
			shopwatts
		FROM
			consumption
		order by ts desc limit 2
\"""

conn = sqlite3.connect(DATABASE)
c = conn.cursor()
c.execute(sql)
now = c.fetchone()\[0\]
before = c.fetchone()\[0\]

\# Check for transition from <200 watts to >200 watts
if now > 200 and before < 200:
	# Start General Shop Work, because the shop lights went on.
	payload = {'time\_entry': {'pid': GENERAL\_SHOP\_WORK, 'created\_with': 'energyToggle'}}
	r = requests.post('https://www.toggl.com/api/v8/time\_entries/start',auth=(TOGGL\_API\_TOKEN,'api\_token'),data=json.dumps(payload))

if now < 200 and before > 200:
	# Stop the current task, because the shop lights went out.
	# Get current
	r = requests.get('https://www.toggl.com/api/v8/time\_entries/current',auth=(TOGGL\_API\_TOKEN,'api\_token'))
	if (r.status\_code == 200 and r.json()\['data'\] != None):
		#Stop Current
		url = 'https://www.toggl.com/api/v8/time\_entries/' + str(r.json()\['data'\]\['id'\]) + '/stop'
		r = requests.put(url,auth=(TOGGL\_API\_TOKEN,'api\_token'))
	else:
		print 'no current entry'
</PRE>
</code>
</div>

---

Update November 2020:

This was reworked to actually sense the on/off toggling of the light switches.  The script queries the current status of the switches using the home automation hub.

<div style="background-color: #cccccc; padding-left: 30px;"> 
<code >
<PRE>

from toggl.TogglPy import Toggl
import urllib2
import xml.etree.ElementTree as ET

\# Default status.  Will check ISY below and reset if on.
shopLightsOn = 'off'
\# Get prior status
statusFile = '/home/.../shopLightsStatus.txt'
file = open(statusFile)
priorShopLightsOn = file.read()

ISYaddr = 'http://isy'

\# Get current info from isy944i
\# create a password manager
password_mgr = urllib2.HTTPPasswordMgrWithDefaultRealm()

\# Add the username and password.
top_level_url = ISYaddr
password_mgr.add_password(None, top_level_url, '...', '...')
handler = urllib2.HTTPBasicAuthHandler(password_mgr)

\# create "opener" (OpenerDirector instance)
opener = urllib2.build_opener(handler)

\# use the opener to fetch a URL
opener.open(ISYaddr)

\# Install the opener.
urllib2.install_opener(opener)
response = urllib2.urlopen(ISYaddr + '/rest/nodes')
data = response.read()
root = ET.fromstring(data)
onCount = 0
for node in root:
    device = node.attrib.get('nodeDefId')
    if (device == "RelayLampSwitch_ADV" or device == "DimmerLampSwitch_ADV" or device == "RelayLampOnly" ):
        try:
            name = node.findall('name')[0].text
            status = node.findall('property')[0].attrib.get('value')
            if (int(status) > 0 and name == 'Shop 1'):
                onCount = onCount + 1
            if (int(status) > 0 and name == 'Shop 2'):
                onCount = onCount + 1                
            if (onCount > 1):
            	shopLightsOn = 'on'    
        except Exception as e:
            print str(e)
            print property[0].attrib
            templateError = str(e)

print 'current', shopLightsOn
print  'prior', priorShopLightsOn

\# Store shop lights status for toggle comparison next time
file = open(statusFile,'w')
file.write(shopLightsOn)
file.close()


toggl = Toggl()
toggl.setAPIKey('...')

if (shopLightsOn == 'on' and priorShopLightsOn == 'off' ):
    # Create Toggl time entry
    myprojectpid = ...
    toggl.startTimeEntry("Shop Lights Came On", myprojectpid)
if (shopLightsOn == 'off' and priorShopLightsOn == 'on' ):
    # Stop current Time entry
    currentTimer = toggl.currentRunningTimeEntry()
    toggl.stopTimeEntry(currentTimer['data']['id'])

</pre>
</code>
</div>
