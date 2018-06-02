import requests
from bs4 import BeautifulSoup as bs
import os
import sys
import json
import re
#import ipdb
import sklearn.feature_extraction.text as s
import nltk
#nltk.data.path.append('/root/nltk_data/')

from nltk.tokenize import sent_tokenize, word_tokenize

def readability(sent):
  sent_scores = {}
  response = requests.post('https://www.webpagefx.com/tools/read-able/check.php', data={'tab': 'Test by Direct Link', 'directInput': sent})
  soup_scores  = bs(response.content, 'html.parser')
  results = soup_scores.findAll('div', {'class': 'results'})
  for tr in soup_scores.findAll('tr'):
    sent_scores[tr.find('th').text] = tr.find('td').text
  if 'Flesch Kincaid Reading Ease' not in sent_scores:
      print('failed')
  return float(sent_scores['Flesch Kincaid Reading Ease'])

def read_score(abstract):
  read = None
  score = 0
  scores = []
  #print (abstract)

  for sent in sent_tokenize(abstract):
    temp = readability(sent)
    scores.append(temp)
    if score<temp:
      score = temp
      read = sent
  return read, scores

