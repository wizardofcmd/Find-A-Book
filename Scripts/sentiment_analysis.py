import string
import json
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.sentiment.vader import SentimentIntensityAnalyzer

analysis = {}
filename = "negative.txt"

# Opening the file and storing its content into a variable
with open(filename) as file_object:
    content = file_object.read()

# Cleaning the text by removing punctuation
content = content.translate(str.maketrans('', '', string.punctuation))

# Creating the sentiment analyser
# Dumping the analysis data in JSON format (Sentiment, Points)
def sentiment_analyse(text):
    points = SentimentIntensityAnalyzer().polarity_scores(text)
    neg = points['neg']
    pos = points['pos']
    if neg > pos:
        # Data format of JSON file
        analysis = {
            "sentiment":"negative",
            "points":points
        }
        # Serializing JSON
        with open("sentiment.json", "w") as file_object:
            json.dump(analysis, file_object)
    elif pos > neg:
        print("Positive sentiment")
    else:
        print("Neutral sentiment")

# Calling the function
sentiment_analyse(content)
