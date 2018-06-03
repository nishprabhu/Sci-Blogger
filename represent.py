import os
#import ipdb
from nltk.tokenize import sent_tokenize, word_tokenize
import sklearn.feature_extraction.text as sk

def represent(title, abstract):
  #print ("ihere")
  file_list = os.listdir('/var/www/html/sciblogger/text_files/')
  #print (file_list)
  vec = sk.TfidfVectorizer(file_list)

  vec.fit([open('/var/www/html/sciblogger/text_files/' + file_name).read() for file_name in file_list])
  tfidf = vec.transform([abstract])

  word_list = vec.get_feature_names()

  word_dict = {key:value for value, key in enumerate(word_list)}

  sentences = sent_tokenize(abstract)

  max_score = 0
  max_sent = None
  scores = []
  for sent in sentences:
    score = 0
    for word in sent.split():
      try:
        score += tfidf[0, word_dict[word]]
      except:
        continue

    score = score/len(sent.split())

    common = set(title.split()).intersection(set(sent.split()))
    number_common = len(common)
    title_length = len(title.split())
    score += (number_common/title_length)*0.1

    scores.append(score)

    if score > max_score:
      max_score = score
      max_sent = sent

  #ipdb.set_trace()
  return max_sent, scores