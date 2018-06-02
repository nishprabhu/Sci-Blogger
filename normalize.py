def normalize(scores):
  return [(x-min(scores))/(max(scores)-min(scores)) for x in scores]
