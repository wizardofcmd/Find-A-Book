from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize

example_sentence = "This is an example displaying stop word filtration."
stop_words = stopwords.words("english")

words = word_tokenize(example_sentence)

filtered_sentence = [w for w in words if not w in stop_words]

# Simpler and alternate way of writing could be
# for w in words:
#   if w not in stop_words:
#       filtered_sentence.append(w)

print(filtered_sentence)
