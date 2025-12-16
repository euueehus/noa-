from flask import Flask, render_template
import os

app = Flask(__name__)


@app.route("/")
def main():
    return render_template("main.html")


@app.route("/list")
def liste():
    return render_template("list.html")


@app.route("/Kards")
def Kards_main():
    return render_template("Kards.html")


@app.route("/Kards_us")
def Kards_us():
    return render_template("Kards_us.html")


@app.route("/Kards_uk")
def Kards_uk():
    return render_template("Kards_uk.html")


@app.route("/Kards_us_many")
def Kards_us_many():
    return render_template("Kards_us_many.html")


@app.route("/Kards_us_high")
def Kards_us_high():
    return render_template("Kards_us_high.html")


@app.route("/intro")
def intro():
    return render_template("intro.html")


@app.route("/minecraft")
def minecraft():
    return render_template("minecraft.html")


@app.route("/delta")
def delta():
    return render_template("delta.html")


@app.route("/calss")
def calss():
    return render_template("calss.html")


@app.route("/Noa")
def Noa():
    return render_template("log_li.php")


@app.route("/passs")
def passs():
    return render_template("passs.html")


@app.route("/pic")
def pic():
    return render_template("pic.html")


if __name__ == "__main__":
    app.run(debug=True, port=os.getenv("PORT", default=5000), host="0.0.0.0")
