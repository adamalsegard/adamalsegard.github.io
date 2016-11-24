{
"records": [
  {
    "title":"Computer Vision project", 
    "description": "<p>Group project done at NUS with 4 exchange students. The objective was to track players and ball from 7 video clips of volleyball games from the Summer Olympics 2016. The positions should then be projected onto a top-down view of the court. Distance moved and number of jumps should be calculated and showed as well as a stitched video of the full court.</p><p>I worked mainly on the player tracking. We managed to track 26 of 28 players reasonably well. My part was done fairly quick so thereafter I helped my fellow group members. The stitching was done by finding the homography matrices frame-to-frame and then warp the image to a starting frame. From the frame-to-frame homography we could also do background extraction/subtraction. This could have improved the player and ball tracking but was unfortunately completely very late in the project. The top-down homography matrix was found by tracking the corners of the court and net posts. Small noise in this tracking gives large errors in the output. We could've smoothed the position arrays to have a better result.</p>",
    "skills": "Python, OpenCV, feature tracking",
    "duration": "Oct - Nov 2016", 
    "links": "<a href='https://github.com/wojdziw/computer-vision-project'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/32CciOH5sw4'></iframe></div>",
    "show": "true"
  },

  {
    "title":"TowerVR", 
    "description": "<p>This is my B.Sc. thesis project. Together with 6 other students I developed a multiplayer virtual reality game with position tracking for Google Cardboard. At the time we finished, no other game published on the Google Play store had combined virtual reality with position tracking for Google Cardboard, so this game might be the first to accomplish this, even though we didn't release it commercially.</p><p>The game is built in Unity 3D and uses Vuforia for the tracking. The user's device tracks a cardboard cube with specific images on it and extracts the device's position in the 3D world built around the cube. The positions are synchronized between all players (using Photon Unity Networking API) and you can see each other as colorful wisps in the game room.</p><p>The game itself is a tower-stacking game, in which players compete while building a tower together. Players earn points based on the difficulty of the blocks they place. A player gets eliminated if the tower falls after he/she placed a block. The player who has the highest score when all players have been eliminated wins.</p><p>The game have been tested with up to 4 players and runs at 60 fps for all. There are 4 different sceneries (Colosseum, the Moon, a Sci-Fi Town and Snowy Mountains) that the host can choose from when starting a new game. While waiting for all players to connect the already connected players can throw balls at each other or at spawned cubes.</p>",
    "skills": "C#, Unity3D, game dev, Vuforia tracking, network",
    "duration": "Mars - May 2016", 
    "links": "<a href='lists/TNM094.pdf'>Project report (Swedish)</a><br><a href='https://github.com/AndroidHMD/TowerVR'>Source code</a>", 
    "video": "<div class='videoWrapper'><iframe src='https://www.youtube.com/embed/2eBE4bzM2sw' width='560' height='315' frameborder='0' allowfullscreen></iframe></div>",
    "show": "true"
  },

  {
    "title":"'Head below water'", 
    "description": "<p>A 3D fluid simulation done in real-time. The physical simulation was based on the Smoothed Particle Hydrodynamics (SPH) method. Calculations and rendering were done on the GPU with OpenCL and OpenGL/GLSL respectively. The rendering used the method 'screen-space point splatting' for the surface. Myself and another group member worked on the rendering (among other things). We tried a couple of different methods before settling for the one mentioned above, one of which used tessellation shaders. In the end we couldn't get a coherent normal for the surface (calculated by mean curvature flow) before the deadline which is the reason the video doesn't show all implemented pipelining steps.</p><p> In the end ~20.000 particles could be simulated and rendered in 60 fps on a Nvidia GeForce GTX 750.</p><p>The project was nominated in the category 'Technical Excellence' at CAwards 2016.</p>",
    "skills": "OpenGL rendering pipeline, GLSL shaders, OpenCL",
    "duration": "Jan - Mars 2016", 
    "links": "<a href='lists/TNM085.pdf'>Project report (English)</a><br><a href='https://github.com/Hedlundaren/vattenoverhuvudet'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/15oeGll4-80' width='560' height='315' frameborder='0' allowfullscreen></iframe></div>",
    "show": "true"
  },

  {
	  "title":"Trygga", 
    "description": "<p>Trygga is a service for a safer community. It's essentially a system for a smart panic alarm, but it has a lot of possible areas of development. The basic idea is to have a small device on you, as when triggered sends out a signal to a network of people in the nearby area who can interact if needed. The prototype was built with LittleBits, IFFT and meteor.js. </p><p>The project was developed during East Sweden Hack 2015; which is a hackathon at Mjärdevi Science park in Linköping. Trygga won the main price of Best Project. The price itself was a journey to Berlin in late 2015 to meet Start-ups and a couple of IoT companies (Industry 4.0).</p>",
    "skills": "teamwork, project management, work under pressure, meteor.js, presentation/pitch",
  	"duration": "Sept 2015", 
  	"links": "<a href='http://eastswedenhack.se/esh15/prisutdelning-2015'>East Sweden Hack - Presentation</a><br><a href='http://trygga.meteor.com/'>Our prototype website</a>", 
  	"video": "",
    "show": "true"
	},

  {
	  "title":"Reverbify", 
    "description": "<p>Reverbify is an application where the user can upload, record or choose a default sound that can be 'reverbified'. To 'reverbify' is to add a room's reverb to the chosen sound and then play it as it would sound in that room. This was a short group project in the course Sound Physics (TFYA65). We recorded the impulse response in a couple of different rooms with calculations done in Matlab. We later used these and some other impulse responses from the free sound bank Samplicity. Our group of three put in more work than most groups for this of project. It would have been enough to just do the calculations in Matlab but we wanted to build a good web application as well.</p>",
  	"skills": "meteor.js, web audio API, bootstrap, Ionic, Matlab",
    "duration": "Sept - Oct 2015",
    "links": "<a href='http://reverbify.meteor.com/'>Website</a><br><a href='https://github.com/codingInSpace/reverbify'>Source code</a><br><a href='lists/TFYA65.pdf'>Project report (Swedish) </a>",
  	"video": "",
    "show": "false"
	},

  {
    "title":"adamalsegard.github.io", 
    "description": "<p>The very website you are looking at right now. This is my first attempt at a fully functional website, done in my spare time. The purpose is foremost to display projects I've done but also to have a place to test some new techniques in web development.</p>",
    "skills": "bootstrap, skrollr, angular.js",
    "duration": "(Ongoing)", 
    "links": "",
    "video": "",
    "show": "false"
  },

	{
	  "title":"Domescape", 
    "description": "<p>A simple 3D-landscape for cluster-based Domes created with SGCT and CSPICE (with which our application calculates the sun's correct position relative the coordinates for Norrköping, Sweden). The user can walk around in the landscape and speed up/reverse time or set a specific time to change the sun's position. The landscape contains some mountains (rendered from height maps) and a couple of objects, all with different textures. Created as a group project in the course 3D Computer Graphics (TNM061). </p><p>This was the first time any of us tried SGCT or parallel cluster programming. You need to cmake the project before you can compile it, and it will look rather bad if you don't run it in a proper cluster. But you can look at https://c-student.itn.liu.se/wiki/develop:sgcttutorials:compile if you want to compile our source code.</p>",
  	"skills": "openGL, SGCT, CSPICE, cmake, Linux, C#, parallel programming",
    "duration": "April - May 2015", 
  	"links": "<a href='https://github.com/Danielbook/3D_Projekt'>Source code</a><br><a href='lists/TNM061.pdf'>Project report (Swedish)</a>", 
  	"video": "",
    "show": "true"
	},

  {
	  "title":"InterHelios", 
    "description": "<p>An Android game developed during a course in user interface design and usability (TNM040). It is a top-down 2D space shooter. The game is written in Java using the AndEngine framework. It was developed in a group of five. We didn't have specific roles or areas of responsibilities. This was my first application developed for Android, and also my first game. Works best on Nexus 5 or equally big screens.</p>",
  	"skills": "UX, Android Studio, java, AndEngine",
    "duration": "Nov - Dec 2014", 
  	"links": "<a href='https://github.com/Danielbook/TNM040-KOMA-Projekt'>Source code</a><br><a href='lists/TNM040.pdf'>Project report (Swedish)</a>", 
  	"video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/crZpxgsYBw8' width='560' height='315' frameborder='0' allowfullscreen></iframe></div>",
    "show": "true"
  },

  {
	  "title":"Growth", 
    "description": "<p>'In a future where all vegetation has died, a company succeeds in producing a synthetic substitute for food. What could have been the dawn of a new era of science turns out to only be a different sort of extinction...' </p><p>A sci-fi short film done with a couple of classmates in the course Digital Media (TNM088). The most ambitious film project I've been part of thus far! Big thanks to all actors and extras who contributed without payment. The film was produced during a couple of weeks in the autumn of 2013. I was the director, editor, writer, casting- and ADR-director. I also did a promotional website prior to our deadline. After our first showing my cinematographer Benjamin Wiberg did a new website. both can be seen to the right.</p>",
  	"skills": "film making, leadership, basic web development",
    "duration": "Okt - Dec 2013", 
  	"links": "<a href='growth/old/index.html'>Website 1</a><br><a href='growth/index.html'>Website 2 (by Benjamin Wiberg)</a><br><a href='lists/TNM088.pdf'>Project report (Swedish)</a>", 
  	"video": "<div class='embed-responsive embed-responsive-16by9'><iframe width='560' height='315' class='embed-responsive-item' src='https://player.vimeo.com/video/85702031'  frameborder='0' allowfullscreen></iframe></div>",
    "show": "true"
  }, 
  	  
  {
	  "title":"Legomania", 
    "description": "<p>A website about LEGO! A group project in Electronic Publishing (TNMK30) where the user can search for specific Lego bits in a database. This was my (and the rest of the group's) first website and it was developed in a group with five members. I was in charge of the database-handling together with another group member while the others were in charge of the design and forum.</p>",
  	"skills": "PHP, mySQL, basic web development",
    "duration": "Nov - Dec 2013", 
  	"links": "<a href='http://www.student.itn.liu.se/~adaal265/TNMK30/Projekt/Legomania-master/Legomania-master/main.php'>Check it out!</a><br><a href='lists/TNMK30.pdf'>Project report (Swedish)</a>", 
  	"video": "",
    "show": "false"
	}, 
      
  {
    "title":"Earlier short films", 
    "description": "<p>I studied at a film school i Stockholm (Sundbybergs Folk High School) for a year and did a bunch of short films. A couple of them can be seen in my different video channels. I've also done some films in later years in different genres. Be sure to check out 'appearances' in vimeo as well.</p>",
    "skills": "film making, team work",
    "duration": "Aug 2012 - May 2013", 
    "links": "<a href='https://vimeo.com/adamalsegard'>Check out my vimeo channel!</a><br><a href='https://www.youtube.com/user/questisiones/videos'>And my youtube channel</a>", 
    "video": "",
    "show": "false"
  }]
}