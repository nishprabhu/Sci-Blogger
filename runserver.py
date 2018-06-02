import sys, os

print 
index_s = sys.argv[1:].index('-seq')
print ('fone')
print (index_s)

index_heur = sys.argv[1:].index('-heur')
print (index_heur)
print ('fone')
import requests
os.environ["http_proxy"]= ''

sequence = ' '.join(sys.argv[index_s+2:index_heur+1]).strip()
heur = sys.argv[index_heur+2]
heur_dict = {'1' : 'pt',
		'2' : 'rep',
		'3' : 'read',
		'4' : 'readrep',
		'5' : 'pt_rep',
		'6' : 'pt_read',
		'7' : 'pt_readrep',
		'8' : 'pt_abs'}

PARAMS = {'i_seq': sequence, 'heuristic': heur_dict[str(heur)]}

URL = "http://10.4.17.148:8002/"
print (URL)

r  =requests.get(url = URL, params = PARAMS)
print (r.text.strip())