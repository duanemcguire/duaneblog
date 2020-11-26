---
category: [projects,random-thoughts]
title: "Time Keeping Automation with TOGGL"
date: "2017-09-28"
---

For my piano rebuilding business, I do not work by the hour!  I am working on spec projects, or on generally fixed quotes for customer projects.  But it's nice to know how long a job takes.  On again and off again for the past several years, I've used the web service, [TOGGL](https://www.toggl.com) (toggl without an "e") for the time keeping I've done.   On again and off again is a very appropriate description.

When going out to the shop, I'd forget to start the TOGGL task until I was well into it - or not at all.   Coming in from the shop, I'd forget to stop the timer, and then I'd have bad data.    While in the shop, I could generally remember to switch tasks, if I had, in fact, started one.

With a bit of creativity, I automated the starting and stopping of my work timekeeping.   The automation will start a "General Shop Work" time entry when I enter the shop, and stop the current time entry when leaving the shop.   This bit of magic occurs by knowing how many watts of electricity the shop is using.  In other words, my new app senses when I turn the lights on (or off).

This modality was available because I have minute-to-minute consumption data available on a raspberry pi server that collects and reports energy consumption.  So the application was very straightforward and the task was attached to the once-a-minute data collection process.   With a bit more work, I could learn how to query the home automation status, and get the lights on/off status more directly than the energy proxy I am using.

Here's the python code I wrote:

 

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

	"""
conn = sqlite3.connect(DATABASE)
c = conn.cursor()
c.execute(sql)
now = c.fetchone()\[0\]
before = c.fetchone()\[0\]

# Check for transition from <200 watts to >200 watts
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
