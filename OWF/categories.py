#!/usr/bin/env python
import json, urllib2, base64
import mysql.connector

url = 'http://api.eventfinda.com.au/v2/categories.json?levels=3'
username = 'oneworldfamily '
password = 'x7tq8fynwzhs'
cnx = mysql.connector.connect(user='root',password='toor',host='127.0.0.1',database='owf')
cursor=cnx.cursor()

request = urllib2.Request(url)
base64string = base64.encodestring('%s:%s' % (username, password)).replace('\n', '')
request.add_header("Authorization", "Basic %s" % base64string)

result = urllib2.urlopen(request)
data = json.load(result)

category = data['categories'][0]['children']['children']

for cate in category:
    cateid = cate['id']
    catename = cate['name']
    parid = 246
    add_categories = ('INSERT INTO categories '
                      '(id,category,parent_category) '
                      'values (%s,%s,%s)')
    data_categories = (cateid, catename, parid)
    cursor.execute(add_categories, data_categories)
    cnx.commit()
    for subcate in cate['children']['children']:
        data_categories = (subcate['id'], subcate['name'],cateid)
        cursor.execute(add_categories, data_categories)
        cnx.commit()


cursor.close()
cnx.close()