# Yearbook #

- This was the final project presented at ATEC.
- The goal was to create a yearbook type website where every class would have their own private space reserved to their own
- Where they could post images and messages about their experience.
- Needless to say we went way beyond what was expected.
- We had a blast developing it, it was a success, and it would be used by ATEC itself in the near future.

## Configuration ##

    npm i
    composer i
    php artisan route:clear && php artisan config:clear && php artisan cache:clear

- Run Apache and MySQL
- on MySQL: click on Admin
- create a database with the name: yearbook


    php artisan migrate:fresh --seed
    php artisan queue:work

- On new terminal:


    php artisan serve

## How it was made ##

### First Steps ###
First we defined all the possible different user roles/actors, they could be:

- a Student: which belong to only a class, would have their own private page (personal photo, id, etc.), could have comments
- a Delegate: all the permissions above, plus: could assist on the app control, meaning he/she could delete offensive photos, comments, class slogans, etc. and he could also create Events of their class he belonged
- a Teacher: all the permissions above for every class he would belong, he would also have access to CRUD Events and assign them to any class.
- a Class Coordinator: all the permissions above plus he would have access to teachers and Events CRUD, he could also change Students permissions (assign or revoke them as Delegates)
- an Area Coordinator: all the permissions above plus he would have access to all CRUD possible, albeit users, classes, areas and courses
- the Administrator: privileged access with full access to whole application, not limited to what classes he would be assigned to.

### Planning phase ###

Within the next few days, we planned out our next few months with Gantt

### UML ###

We started by doing Use Cases, Class Diagram, Flowchart, Sequence Diagram, Context Diagram.
Which helped us to simultaneously to update our database each time we add a new breakthrough.

### Software Architecture ###

As a Team we chose MVC using Laravel and HTML/CSS/JS for the front-end.

### Middlewares ###

- As there were so many type of users with different roles and different permissions and authorizations, we decided to make
different middlewares for each type of user already named on the intro of this readme file.
- For a better usage we created our own @blades with groups of users with the same permissions, that way that group of users alone would be the only users able to see the part of the page we wanted to share

#### Google Maps Javascript API ####

- As the whole point of this project was to try to bring everyone close, albeit a teacher or a student, we wanted to make something meaningful that would make everyone a part of something.
- So i've explored the Google Maps Javascript API.
- After much exploring and testing, the end result was to have the user coordinates around the ATEC coordinates
- Every user logged in and registered would be added as a marker around the map around the ATEC coordinates which was the center of the map
- The next step was to change the red map markers with the profile pics of the users
- The next steps were to always try to center the map even if some users are from far far away, sometimes the map didn't center on everyone, so we had to implement JS code around the API
- Later, the map were always centered around the whole markers, and it there was someone with coordinates out of Portugal borders, there would be a warning message to the user: Please turn off VPN before sharing your geolocation
- Last step was to add the ATEC map marker with the ATEC logo everytime a new class was created, and, if that class was from some other location, albeit Matosinhos or Palmela, the marker would be put automatically and correctly
- This was working for each different class, so each class would have only their students/locations, their own map.

### Google SMTP mail system ###

- It wasn't needed, but I did find it interesting to study it and add it too, I've begun to explore the Google SMTP mail system.
- Only teachers would access to it.
- An email could be address to a whole class, particular user or group of students.
- The add/remove layout was fully made with Javascript.

### Get the project online ###

- Again, it wasn't needed, but I found it interesting
- After many attempts i've managed to put it online in a free .pt domain with console access
- Found out many things had different behaviours than on localhost
- Found out about the importance of queues and jobs which took me a while to implement as I had to study them

### Loading Screen ###

- For many possible reasons: slow internet, slow PC performance, slow server response, the Google API sometimes was slow and the user had to wait 3 seconds before clicking anything else
- I've come up with the idea of creating a loading screen that made the user wait those precious 3 seconds
- Found out about SVG image manipulation with Figma and some CSS.
- Used the ATEC logo as some kind of ball, made it rotate and everything appearing from above with a progressive line on the bottom and when the load was done, the screen would become the logo's color, it was sweet and fun to do

### Conclusion ###

- Had an amazing time developing this project with my team
- Found out I'm curious and want to discover and try new things that add value
- Although I was focused on the back-end while the front-end team did the rest, we always managed to work as a Team and completed the challenge in style
- The presentation was a success and ATEC president was very pleased
- Although this was a client's request, it was done for everyone at Atec, specially for the students.
- Enjoy
