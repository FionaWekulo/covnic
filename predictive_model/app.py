import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle
import os



# Create flask app
flask_app = Flask(__name__)
picfolder = os.path.join('static','pics')
flask_app.config['UPLOAD_FOLDER'] = picfolder

model = pickle.load(open("model.pkl", "rb"))

@flask_app.route("/")
def Home():
    publish = os.path.join(flask_app.config['UPLOAD_FOLDER'], 'publish-article-animate.svg')
    return render_template("index.html", predict_image=publish)

@flask_app.route("/predict", methods = ["POST"])
def predict():
   
    float_features = [float(x) for x in request.form.values()]
    features = [np.array(float_features)]
    #accuracy = [np.array(float_accuracy)]
    prediction = model.predict(features)
   # accuracy = model.predict([0])
    return render_template("result.html", prediction_text = "Kindly make an appointment with one of our doctors for actual testing       Your Covid status is likely to be {}".format(prediction) )


@flask_app.route("/welcome")
def welcome():
    return render_template("welcome.html")


if __name__ == "__main__":
    flask_app.run(debug=True)