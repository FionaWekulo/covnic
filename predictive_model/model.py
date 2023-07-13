import pandas as pd
import numpy as np
from sklearn.linear_model import LogisticRegression
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import pickle

# Load the csv file
covid = pd.read_csv("Covid Dataset.csv")

#print first 5
print(covid.head())

#print last 5
print(covid.tail())

#check no. of rows and columns
covid.shape

#getting some info about the data
covid.info()

#checking for missing values
covid.isnull().sum()

#statistical measures about the data
covid.describe()

#checking the distribution of the target/class/covid-19 variable
covid['Class'].value_counts()

X=covid.drop(columns='Class', axis=1)
y=covid['Class']

print(X)
print(y)

# Select independent and dependent variable
X = covid[["Breathing Problem","Fever","Dry Cough","Sore throat","Running Nose","Asthma","Chronic Lung Disease","Headache","Heart Disease","Diabetes","Hyper Tension","Fatigue ","Gastrointestinal diseases","Abroad travel","Contact with COVID Patient","Attended Large Gathering","Visited Public Exposed Places","Family working in Public Exposed Places","Wearing Masks","Sanitization"]]
y = covid["Class"]

# Split the dataset into train and test
#X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=50)
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, stratify=y, random_state=2)

print(X.shape, X_train.shape, X_test.shape)

# Instantiate the model
model = LogisticRegression()

# Fit the model
#train the LogisticRegression model with trainig data
model.fit(X_train, y_train)

#model evaluation
#accuracy on training data
X_train_prediction=model.predict(X_train)
training_data_accuracy = accuracy_score(X_train_prediction, y_train)

print('Percentage accuracy on training data: ', training_data_accuracy*100)

#accuracy on test data
X_test_prediction=model.predict(X_test)
test_data_accuracy = accuracy_score(X_test_prediction, y_test)

print('Percentage accuracy on test data: ', test_data_accuracy*100)

#Build a predictive system
input_data=(1,1,1,0,1,1,0,1,0,1,1,1,0,0,0,0,0,0,0,0)

#change the input data to a numpy array
input_data_as_numpy_array=np.asarray(input_data)

#reshape the numpy array as we are predicting for only one instance
input_data_reshaped = input_data_as_numpy_array.reshape(1, -1)

prediction=model.predict(input_data_reshaped)
print(prediction)
input_accuracy=model.predict(input_data_reshaped)
input_score = accuracy_score(input_accuracy, input_data_reshaped)

print('Percentage accuracy: ', input_score*100)
#if (prediction[0]==0):
  #print('The person does not have Covid-19')
#else:
  #print('The person has Covid-19')
  
  
#person 2
input_data=(1,1,1,1,1,0,0,0,0,1,1,1,1,0,1,0,1,1,0,0)

#change the input data to a numpy array
input_data_as_numpy_array=np.asarray(input_data)

#reshape the numpy array as we are predicting for only one instance
input_data_reshaped = input_data_as_numpy_array.reshape(1, -1)

prediction=model.predict(input_data_reshaped)
print(prediction)

#if (prediction[0]==0):
  #print('The person does not have Covid-19')
#else:
  #print('The person has Covid-19')

# Make pickle file of our model
pickle.dump(model, open("model.pkl", "wb"))