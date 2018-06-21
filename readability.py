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

def syllables(word):
    count = 0
    vowels = 'aeiouy'
    word = word.lower().strip(".:?!")
#    print (word)
    if len(word)==0:
        return count
    if word[0] in vowels:
        count +=1
    for index in range(1,len(word)):
        if word[index] in vowels and word[index-1] not in vowels:
            count +=1
    if word.endswith('e'):
        count -= 1
    if word.endswith('le'):
        count+=1
    if count == 0:
        count +=1
    return count

def readability(sent):

  sent = sent.strip().split()
  len_words = len(sent)
  len_syllables = 0 
  for word in sent:
    len_syllables += syllables(word)
  avg_syllable = float(len_syllables)/len_words

  FRE = 206.835 - (1.015 - len_words) - (84.6 - avg_syllable)

  return FRE
  '''
  sent_scores = {}
  response = requests.post('https://www.webpagefx.com/tools/read-able/check.php', data={'tab': 'Test by Direct Link', 'directInput': sent})
  soup_scores  = bs(response.content, 'html.parser')
  results = soup_scores.findAll('div', {'class': 'results'})
  for tr in soup_scores.findAll('tr'):
    sent_scores[tr.find('th').text] = tr.find('td').text
  if 'Flesch Kincaid Reading Ease' not in sent_scores:
      print('failed')
  return float(sent_scores['Flesch Kincaid Reading Ease'])
  '''

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

