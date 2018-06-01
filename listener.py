#!/usr/bin/python
import logging
import sys
import json
import os
import time
import paho.mqtt.client as mqtt
import numpy
import pickle
import urllib 
import urllib2

logging.basicConfig(filename='/tmp/listener.log', level=logging.INFO,format='%(asctime)s %(message)s')

def on_message_new_request(mosq, obj, msg):
	global mqttc
	payload = str(msg.payload)
	logging.info("NEW REQUEST: "+msg.topic+" "+str(msg.qos)+" "+str(msg.payload))
	json_obj = json.loads(payload)
	logging.info(json_obj)
	exp_id = str(json_obj['id'])
	title = str(json_obj['title'])
	#abstract = str(json_obj['abstract'])
	abstract = str(json_obj.get('abstract','Empty'))
	title = process(title, abstract)


	#All the parameters submitted through the form are available in json_obj
	#This is a simple example
	'''
	title = str(json_obj['title'])
	logging.info("id=" + exp_id)
	'''

	#Process the request using any python function
	response_text = title
	response_id = 10
	response_json = {'id':response_id, 'title':response_text}

	response = json.dumps(response_json)

	logging.info("Sending response: "+response)
	topic=exp_id
	mqttc.publish(topic=topic, payload=response)



def process(title, abstract):
	print "Title=", title
	print "Abstract=", abstract

	url = 'http://www.someserver.com/cgi-bin/register.cgi'
	data = {'title' : title, 'abs' : abstract }
	url_values = urllib.urlencode(data)
	print url_values  # The order may differ. 
	url = 'http://www.example.com/example.cgi'
	full_url = url + '?' + url_values
	data = urllib2.urlopen(full_url)

	data = str(data)

	return data

mqttc = mqtt.Client()
def main():
	global mqttc

	# Add message callbacks that will only trigger on a specific subscription match.
	mqttc.message_callback_add("request", on_message_new_request)
	mqttc.connect("localhost", 1883, 60)
	mqttc.subscribe("request", 0)
	print "Subscribed to request"
  mqttc.loop_forever()

if __name__ == "__main__":
	main()
