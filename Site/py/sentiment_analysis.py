import string
import json
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.sentiment.vader import SentimentIntensityAnalyzer

analysis = {}
result = ''
filename = "negative.txt"

# Opening the file and storing its content into a variable
with open(filename) as file_object:
    content = file_object.read()

# Cleaning the text by removing punctuation
content = content.translate(str.maketrans('', '', string.punctuation))

# Creating the sentiment analyser function
def sentiment_analyse(text):
    points = SentimentIntensityAnalyzer().polarity_scores(text)
    neg = points['neg']
    pos = points['pos']
    if neg > pos:
        sentiment = "neg"
        sentiment_json(sentiment, points)
    elif pos > neg:
        sentiment = "pos"
        sentiment_json(sentiment, points)
    else:
        sentiment = "neu"
        sentiment_json(sentiment, points)

# Dumping the analysis data in JSON format (Sentiment, Points)
def sentiment_json(sentiment, points):
    if sentiment == 'pos':
        # Data format of JSON file
        analysis = {
            "sentiment":"positive",
            "points":points
        }
        # Writing to a JSON file
        with open("sentiment.json", "w") as file_object:
            json.dump(analysis, file_object)
    elif sentiment == 'neg':
        analysis = {
            "sentiment":"negative",
            "points":points
        }
        with open("sentiment.json", "w") as file_object:
            json.dump(analysis, file_object)
    else:
        analysis = {
            "sentiment":"neutral",
            "points":points
        }
        with open("sentiment.json", "w") as file_object:
            json.dump(analysis, file_object)

# Calling the function
sentiment_analyse(content)
