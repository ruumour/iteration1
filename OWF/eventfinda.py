#!/usr/bin/env python
import json, urllib2, base64
import mysql.connector

url = 'http://api.eventfinda.com.au/v2/events.json?location=4&fields=event:(id,url,name,description~5000,datetime_start,datetime_end,address,point,category,images)&offset='
username = 'oneworldfamily '
password = 'x7tq8fynwzhs'
cnx = mysql.connector.connect(user='root',password='',host='127.0.0.1',database='owf')
cursor=cnx.cursor()



url = 'http://api.eventfinda.com.au/v2/events.json?location=4&fields=event:(id,url,name,description~5000,datetime_start,datetime_end,address,point,category,images)&offset='
url = url + str(0)
print url
request = urllib2.Request(url)
base64string = base64.encodestring('%s:%s' % (username, password)).replace('\n', '')
request.add_header("Authorization", "Basic %s" % base64string)
result = urllib2.urlopen(request)
data = json.load(result)
for event in data["events"]:
    id = event['id']
    title = event['name']
    description = event['description']
    starttime = event['datetime_start']
    endtime = event['datetime_end']
    address = event['address']
    lat = event['point']['lat']
    lng = event['point']['lng']
    category_id = event['category']['id']
    event_url = event['url']
    image = event['images']['images'][0]['transforms']['transforms'][-1]['url']
    query = "(select category from categories where id=(select parent_category from categories where id=%s))"
    add_events = ("INSERT INTO events "
                  "(id,title,description,start_time,end_time,address,lat,lng,category_id,parent_category,url,image_url) "
                  "values (%s,%s,%s,%s,%s,%s,%s,%s,%s," + query + ",%s,%s)")

    data_events = (id, title, description, starttime, endtime, address, lat, lng, category_id, category_id,event_url, image)
    print add_events
    cursor.execute(add_events, data_events)
    cnx.commit()
cursor.close()
cnx.close()

# for event in data["events"]:
#    print event["name"]
#    print event["description"]
#
#
# for event in data["events"]:
#     print event["name"]
#     for img in event["images"]["images"]:
#         print img['id']
#         for imgtran in img["transforms"]["transforms"]:
#             print imgtran["url"]



