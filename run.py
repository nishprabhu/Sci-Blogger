import sys, os
import requests
from heuristics import heuristics

#print (sys.argv)

index_t = sys.argv[1:].index('-t')
index_a = sys.argv[1:].index('-a')
index_h = sys.argv[1:].index('-heu')
title = ' '.join(sys.argv[index_t+2:index_a+1]).strip()
abstract = ' '.join(sys.argv[index_a+2:index_h+1]).strip()
heu = sys.argv[index_h+2]
#print ('hello')

intermediate_sequence = heuristics(title, abstract, int(heu))
print (intermediate_sequence)

heur_dict = {'1' : 'pt',
		'2' : 'rep',
		'3' : 'read',
		'4' : 'readrep',
		'5' : 'pt_rep',
		'6' : 'pt_read',
		'7' : 'pt_readrep',
		'8' : 'pt_abs'}

PARAMS = {'i_seq': intermediate_sequence, 'heuristic': heur_dict[str(heu)]}

URL = "http://10.4.17.148:8002/"
#print (URL)

r  =requests.get(url = URL, params = PARAMS)

print (r.text.strip())
