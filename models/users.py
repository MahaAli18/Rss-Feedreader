from db import db
import datetime

class Users(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    fullname = db.Column(db.Text, nullable=False)
    email = db.Column(db.Text, nullable=False)
    password_1= db.Column(db.Text, nullable=False)
    password_2 = db.Column(db.Text, nullable=False)

    @classmethod
    def insert_from_form(cls, fullname, email,password_1,password_2):
        # link = feed_source['link']
        # title = feed_source['title']
        # subtitle = feed_source['subtitle']
        source = Users(fullname=fullname, email=email ,password_1=password_1 ,password_2=password_2)
        db.session.add(source)
        db.session.commit()
        return source