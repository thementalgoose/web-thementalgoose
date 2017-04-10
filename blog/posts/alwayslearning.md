2 months in: What i've learnt
2016-08-12
A small write up on everything that i've been learning whilst at Roller, how it differs from what probably a lot of people think it's like doing a degree with no real world experience, and some plans for the future
# Learning in industry

---

So, two months into my placement and here I am, killing some time between API updates by writing this. It's very reflective of how this sort of industry is, you find you're spending a while waiting for developers to do something or designers to finish off their designs so you can get started. Jumping the gun on these kind of things i've already learnt is a bad idea, but i'll explain that at some point below.

## Lifestyle: Seeing yourself smiling

So, to get this out of the way, I've been an Android App Developer for two months now officially, i've built an app for a client of the company from the ground up that is scheduled for Internal UAT (User Acceptance Testing) next week, and it to be released on the play store in the next few weeks. In terms of my technical ability i've learned quite a lot, which I kind of expected but what I didn't expect was the lifestyle of working in this Industry (at [Roller](http://www.rolleragency.co.uk) anyway). Its not at all like I expected, but that is all down to where you find yourself or what kind of placement you can land. I got a job offer from a company called [Delcam](http://www.delcam.com) during my searching for industrial placements, and I turned it down. They are known for developing AutoDesk, probably the best 3D CAD CAM software in the world and has become and industry standard. You may be thinking why on earth did I turn down the opportunity to work at a place like that? My mum certainly thought I was insane, especially when I chose a job further away and paying less! 

The interview process and working environment were very representitive of how I thought the industry would be, or at least how it's portrayed in the movies. This post required me to be suited and booted, I showed up along with 18 other suits where we would be told we need to do two aptitude tests. One of which was a number logic test, which wasn't great but if you knew about CS you could just about get through it. The other was a `C++` ability test, which asks you to provide solutions using structures like Linked Lists, Queues, etc (Didn't know `C++`, so I blitzed it the day before with a friend I was going with), and only after you "passed" them were you invited for an interview. Interview process proceeded to contain another questionnaire, and they asked me to talk through designing a Collision Detection solution for two objects in 3D space. Now if you're like me, this is what I thought the job interview would be like, all these tests to see if you are as good as you say or as good as they want you to be. We got a tour of that building, it was a very "9 until 5:30, show up and go home, locked away in your cubicle and do your work" type of environment. They had the reputation, why wouldn't any one of us be amazed at the opportunity of an offer. I urge you to do a simple test whenever you go out for jobs or placements, and that is ask yourself if you can see yourself smiling this job. And for me, the simple answer was "no". None of the interns who we were introduced really looked comfortable there, trying to awkwardly make jokes to engage in talking to us but it was immediately clear that the entire thing was forced. I don't think I saw anyone at a desk smiling themselves. And if that's your idea of a job, 9 -> 5 and go home, then that's great. But honestly it's worth finding a place you **enjoy**. The paycheque might be enticing, and a 3 day teambuilding holiday certainly would be nice, but I am so glad I'm not at Delcam and I kept looking around. 

Roller, by comparison, is a very open environment. As they say on their website, "every day is casual friday", people are smiling and talking to eachother. The radio is on all the time, they actively encourage you to install spotify and listen to your own music. It's a much more pleasant working environment, there is already Android vs. iOS banter between my co-workers, as well as all of the ~~XCrash~~ [XCode](https://www.reddit.com/r/swift/comments/3k54jt/whats_the_stability_of_xcode_like_these_days/) memes going around. There aren't many social events, but there doesn't need to be really. I have to take two trains each way every day to get here and I walk a total of 4 and a half miles a day, but I actually have a smile on my face when I walk through the door, and that is something that shouldn't be overlooked.

## Technical stuff: A library of libraries

So when I say that libraries are used a lot in industry, I'm probably not hitting home just quite how much they are used in industry. It saves you so much time, and it's probably a damn sight more tested than you could ever test a custom implementation. Seriously, whilst you need to be careful with copyright and what not, use libraries when you can. Most of them are incredible. For those of you who have only worked on 

### Professional practices

It pays off to learn things properly, as I learnt the hard way. As i'm sure like many of you in the world of CS, you're more than happy with putting hacks into code to get it to work. Whilst this happens in industry probably more than people would like, and you can't avoid them sometimes, please please please read up on the professional guidelines surrounding your area of development. It pays off knowing what you should and shouldn't be doing inside your projects. So for android in particular, learn how to properly use the `strings.xml` file, and the `dimens.xml` as well. Know that (and this goes for java in general) that you should **NEVER** catch all exceptions in a Try-Catch block. Read up on the proper way to do things, and always favour the official guidelines if possible (so for android, the [Developer guidelines](https://developer.android.com/guide/index.html)). These have saved my skin more times than I care to admit. Sometimes you'll put in an ugly hack into a project, and you won't be happy with it on a moral level, and sometimes it can't be avoided. But when it can, avoid like the plague. They'll come back and bite you during testing, I can promise you that

## Essential frameworks

---

### Database: [Realm](http://www.realm.io)

From university and some small DBMS i've done freelance, using SQL statements and raw data manipulation is not only dangerous, but time consuming as well. For little simple queries, it's fine. But once you have a system that needs to be expandable and your queries and data is becoming more and more accessible, you're shooting yourself in the foot if you're not using ORM. ORM stands for Object-Relational Mapping, and basically maps Java POJO (Plain Old Java Objects) that cover the domain of your project into a database and persists it for you. And, when you want to get the data back, ORM returns you the object, not the string of a query or a cursor that you will have to use to access your data. Trust me when I say you will want to use this. You know what? Here's an example below 

Say i'm doing a prduct management system for a shop. I have products in this store, and I want to save them to a database, and then retreive certain objects based on some sort of user requirement. Below are the two approaches, one using raw queries, and one using realm

#### Raw queries in Android (SQLite)

`Product.java`: POJO (representing the product in a simplistic form)

```java
public class Product {
    public static String TABLE_NAME = "Product";
    public static String ID = "ProductId";
    public static String NAME = "ProductName";
    public static String COST = "ProductCost";

    public int id;
    public String name;
    public int cost;
}
```

`Database.java`: Database SQLite option helper

```java
public class Database extends SQLiteOpenHelper {
    private Context context;
    private SQLiteDatabase sqlLiteDatabase;
    private static final String DATABASE_NAME = "APP";
    private static final int DATABASE_VERSION = 1;

    private static final String TABLE = "CREATE TABLE " + Product.TABLE_NAME + "("
        + Product.ID + " INTEGER AUTO_INCREMENT PRIMARY KEY,"
        + Product.COST + " FLOAT NOT NULL,"
        + Product.NAME + " VARCHAR(200) NOT NULL)";

    public Database(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
        this.context = context;
    }
    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL(TABLE);
    }
    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS " + Product.TABLE_NAME); 
    }
    public void open() {
        sqlLiteDatabase = getWritableDatabase();
    }
    public void close() {
        sqlLiteDatabase.close();
    }

    public List<Product> getAllProductsOver(double price) {
        List<Product> products = new ArrayList<Product>();
        String selectAllQuery = "SELECT * FROM " + Product.TABLE_NAME + " WHERE " + 
            Product.COST + ">" + price + ";";
        // null will be args, you can alternatively use a ? as a placeholder
        Cursor c = sqlLiteDatabase.rawQuery(selectAllQuery, null);
        if (c.moveToFirst()) {
            do {
                Product prod = new Product();
                prod.id = c.getInt(0);
                prod.cost = c.getInt(1);
                prod.name = c.getString(2);
                products.add(prod);
            } while (c.moveToNext());
        }
        c.close();
        return products;
    }
```

`MainActivity.java`: Main activity where we will access this object

```java
public class MainActivity extends AppCompatActivity {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        setContentView(R.layout.example);

        // LOADING PRODUCTS
        Database db = new Database(getApplicationContext());
        db.open();
        List<Product> products = db.getAllProductsOver(100.0);
        db.close();
    }
}
```

Now this may not look too bad, but inserting data you will have to use this cursor again, and getting more than one object or ever more complicated query statements mean that this quickly turns into a mess. By constrast, here is realms implementation 

#### [Realm](http://www.realm.io)

`Product.java`: POJO Using realm

```java
@RealmClass 
public class Product extends RealmObject {
    @PrimaryKey
    public int id;
    public String name;
    public double cost;
} 
```

`MainActivity.java`: Main Activity where we will load this in

```java
public class MainActivity extends AppCompatActivity {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        setContentView(R.layout.example);

        // LOADING PRODUCTS
        Realm realm = Realm.getInstance(new RealmConfiguration.Builder(getApplicationContext()).name("DATABASE").build());
        RealmResult<Product> products = realm.where(Product.class).greaterThan("cost", 100.0).findAll();
    }
}
```

And that's it. That's literally it. You're welcome

No but seriously there are some limitations to Realm, everything is wrapped in this mysterious `Realm` object, and saving stuff to the database you have to wrap all your statements in a `.beginTransaction()` and `.commitTransaction()`, and there are `RealmList<Object>` and `RealmResult<Object>`, but it's so much easier than specifying the access for everything yourself. It can lead to some weird behaviour, but once you learn it you'll wonder why you haven't done it before! Things like `RealmResult<Object>` works just like a `List<Object>`, and it's not too difficult to pick up. I would recommend you pick it up immediately!

---

### Networking: [Retrofit](http://square.github.io/retrofit/)

Retrofit is a great tool for handling REST API requests or any sort of server communication. Normally these things are plagued with issues and the conversion between responses and objects are often hacked together and convoluted. With Retrofit, similar to Realm, it handles the raw data -> object conversion for you, so you're only ever dealing with objects in the context of your domain, which, thoughout development is what you want

The premise is you define an interface for your web API, and you supply it objects which will be parsed and converted behind the scenes. 

I think it's better to demonstrate something like this with an example, so here goes. Say you have a server request for a server, and the API documentation states that you upload a title and content, and you get a response back whether it was successful or not. 

[![Server upload](/bin/retrofit.png)](/bin/retrofit.png)

Two possible outcomes of this request, providing it's successful. Now, if you try and do this with ASyncTasks and the likes of that, you're going to have an incredibly bad time. You can acheive this in retrofit like so

Firstly, define objects to represent what you **send** and what you **receive**. The field names much match the content of your body

`UploadContentSend.java`: POJO where attributes have the same name as the body

```java
public class UploadContentSend {
    public String title;
    public String message;
}
```

`UploadContentResponse.java`: POJO where attributes have the same name as the response

```java
public class UploadContentResponse {
    public boolean done;
}
```

Now that your objects are setup, you can go about defining your interface. You are passing these objects to Retrofit, and retrofit will read them

`WebAPI.java`: Will contain some setup code, it's mostly copy and paste, but then this interface as well. It's how you tell it you're communicating with the server

```java
public class WebAPI {
    private static WebApiInterface WebApiInterface;    
    private static String apiURL = "http://test.com"

    // Boiler plate code
    public static interface getWebApiInterface(Context context) {
        if (WebApiInterface == null) {
            // Initialise the object
            // Use your apiURL to setup that server connection
            // Add any authentication here
            webApiInterface = restAdapter.create(WebApiInterface.class);
        }
        return webApiInterface;
    }

    // Actual request stuff
    public interface WebAPiInterface {

        // Request
        @POST("/uploadcontent")
        Call<UploadContentResponse> uploadContent(@Body UploadContentSend sender);
    }
}
```

And with that, you have your request setup. Now, whenever you want to run that API request, you do the following

```java
// Declare what you want to upload
UploadContentSend sender = new UploadContentSend();
sender.title = "Example content";
sender.message = "Lorem ipsum is dummy text..";

// Queue the request, and handle the response
Call<UploadContentResponse> response = WebAPI.getWebApiInterface(context).uploadContent(sender);
call.enqueue(new Callback<UploadContentResponse>() {           
@Override
    public void onResponse(Call<UploadContentResponse> call, Response<UploadContentResponse> response) {
        UploadContentResponse contentResponse = response.getResponse();

        // contentResponse.done will contain the result
        if (contentResponse.done) {
            // Behaviour if it's true
        } else {
            // Behaviour if it's false
        }
    }

    @Override
    public void onFailure(Call<UploadContentResponse> call, Throwable t) {
        // Deal with the error (500 SERVER Error, etc.)
    }
});
```

When I was using this I had a series of callback wrappers that would pre process responses (ie. If a specific `error code` was returned from our API, it would kick the user out. I did this wrapped in the `Callback<UploadContentResponse>`). This makes things a lot easier to handle and manage. Objects not found in the response are just null, so if your responses were different, you could have your response object declaring all objects across all responses, and simply check for which ones are null.

I urge you to use this if you require it. If anyone wants the boiler plate code for the WebAPI for retrofit, let me know and I can send it to you

#### Deployment debugging: Crittercism 

I haven't actually deployed the project I am working on just yet, but I will return to fill this out

#### Deployment: Firebase

I haven't actually deployed the project I am working on just yet, but I will return to fill this out. Reading up on firebase though it seems like a godsend for those wanting some simple server integration for their apps. As I understand it it stores all your data in a JSON tree, which can be parsed and setup incredibly effectively. 
