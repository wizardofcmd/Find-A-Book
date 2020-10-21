from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize

filename = "metamorphosis_clean.txt"

# Opening the file and storing its content into a variable
with open(filename) as file_object:
    content = file_object.read()

# Tokenizing the test (splitting it up) by words
tokens = word_tokenize(content)

# Making all the words lower case
tokens = [word.lower() for word in tokens]

# Removing all punctuation present in the text
tokens = [word for word in tokens if word.isalpha()]

# Removing all stop words in text
stop_words = stopwords.words("english")
tokens = [word for word in tokens if not word in stop_words]
