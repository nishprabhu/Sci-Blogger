from represent import represent
from readability import read_score
from normalize import normalize
from nltk.tokenize import sent_tokenize, word_tokenize
import requests
from bs4 import BeautifulSoup as bs
import os
import sys
import json
import re
#import ipdb
import sklearn.feature_extraction.text as sk
import numpy as np

def heuristics(title, abstract, h):
  abstract = abstract.strip().lower()
  abstract = ''.join([x if (x >= 'a' and x <= 'z') or x in [' ', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '.', '?', '!', '-'] else '' for x in abstract])
  abstract = ''.join([' ' if x in ['-'] else x for x in abstract])
  abstract.strip().replace('\n', ' ').replace('\t', ' ')

  title = title.strip().lower()
  title = ''.join([x if (x >= 'a' and x <= 'z') or x in [' '] else '' for x in title])
  title = title.strip().replace('\n', ' ').replace('\t', ' ')
  title = title.strip()

  if h == 1:
    return title
  elif h == 2:
    sequence, _ = represent(title, abstract)
    return sequence
  elif h == 3:
    sequence, _ = read_score(abstract)
    return sequence
  elif h == 4:
    _, rep_score = represent(title, abstract)
    rep_score = normalize(rep_score)
    _, readability = read_score(abstract)
    readability = normalize(readability)
    final_score = [a*b for a,b in zip(rep_score, readability)]
    return sent_tokenize(abstract)[np.argmax(final_score)]
  elif h == 5:
    sequence, _ = represent(title, abstract)
    return title + ' ' + sequence
  elif h == 6:
    sequence, _ = read_score(abstract)
    return title + ' ' + sequence
  elif h == 7:
    _, rep_score = represent(title, abstract)
    rep_score = normalize(rep_score)
    _, readability = read_score(abstract)
    readability = normalize(readability)
    final_score = [a*b for a,b in zip(rep_score, readability)]
    return title + ' ' + sent_tokenize(abstract)[np.argmax(final_score)]
  elif h == 8:
    return title + ' ' + abstract