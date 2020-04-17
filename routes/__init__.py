from flask import abort, redirect, request, render_template
from app import app
from db import db
from models.article import Article
from models.source import Source
from models.users import Users
import feed

@app.route('/', methods=['GET'])
def index_get():
    query = Article.query
    query = query.filter(Article.unread == True)
    orderby = request.args.get('orderby', 'added')
    if orderby == 'added':
        query = query.order_by(Article.date_added.desc())
    elif orderby == 'published':
        query = query.order_by(Article.date_published.desc())
    elif orderby == 'title':
        query = query.order_by(Article.title)
    elif orderby == 'source':
        query = query.join(Source).order_by(Source.title)
    articles = query.all()
    return render_template('index.html', articles=articles)

@app.route('/read/<int:article_id>', methods=['GET'])
def read_article_get(article_id):
    article = Article.query.get(article_id)
    article.unread = False
    db.session.commit()
    return redirect(article.link)

@app.route('/sources', methods=['GET'])
def sources_get():
    query = Source.query
    query = query.order_by(Source.title)
    sources = query.all()
    return render_template('sources.html', sources=sources)

@app.route('/sources', methods=['POST'])
def sources_post():
    feed_url = request.form['feed']
    parsed = feed.parse(feed_url)
    feed_source = feed.get_source(parsed)
    source = Source.insert_from_feed(feed_url, feed_source)
    feed_articles = feed.get_articles(parsed)
    Article.insert_from_feed(source.id, feed_articles)
    return redirect('/sources')

@app.route('/home', methods=['GET'])
def homeroute():
    return render_template('home.html')

@app.route('/login', methods=['GET'])
def loginroute():
    return render_template('login.php')

@app.route('/logout', methods=['GET'])
def logoutroute():
    return redirect('/home')

@app.route('/register', methods=['GET'])
def regroute():
    return render_template('register.php')

@app.route('/register', methods=['POST'])
def registrationroute():
    fullname = request.form['fullname']
    email= request.form['email']
    password_1=request.form['password_1']
    password_2=request.form['password_2']
    Users.insert_from_form(fullname, email,password_1,password_2)
    return redirect('/login')

@app.route('/login', methods=['POST'])
def login_route():
    return redirect('/sources')