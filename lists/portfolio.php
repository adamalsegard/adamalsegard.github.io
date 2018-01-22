{
"records": [
  {
    "title":"Procedural Atmosphere", 
    "description": "<p>A procedural coding project where an atmosphere is simulated with Rayleigh- and Mie-scattering and rendered with WebGL at real-time in a browser. The major computations are done at the GPU with glsl shaders. The scene also consists of a simple textured landscape generated with simplex noise. There is also a GUI where the user can play around with a number of settings to change the scene during runtime.</p><p>This project was made as a part of the course TNM084 - Procedural Methods for Images, at Linköping University.</p>",
    "skills": "<span class='technique'>Atmospheric scattering</span>, <span class='programming'>JavaScript</span>, <span class='technique'>Procedural methods</span>, <span class='programming'>Three.js</span>",
    "category": "WebGL, procedural methods",
    "duration": "Jan 2018", 
    "links": "<a href='lists/TNM084.pdf' target='_blank'>Project report (English)</a><br><a href='https://github.com/adamalsegard/ProceduralAtmosphere' target='_blank'>Source code</a><br><a href='https://adamalsegard.github.io/ProceduralAtmosphere/' target='_blank'>Live demo</a>", 
    "video": "<img class='img-rounded' src='../img/port-ProceduralAtmosphere.png' alt='Screenshot from the Procedural Atmosphere application.' />",
    "show": "true"
  },
  
  {
    "title":"Shattering Wood", 
    "description": "<p>This project consists of a couple of short scripts written in Python to produce Voronoi shattering in Maya 2017. The aim was to reproduce the characteristic shattering of wooden logs but the scripts can be used to simulate shattering of most materials, especially brittle materials like glass and concrete, with just a few tweaks of the parameters.</p><p>This project was made as a part of TNCG13 - SFX: Tricks of the Trade, at Linköping University.</p><p>Another part of the course was to find state-of-the-art techniques in computer graphics and write an essay where you compared a few technical papers in that area. My essays can be found in the link section.</p><p>Essay 1 is about fracturing wood, especially how one can simulate the fibers in the fracturing.</p><p>Essay 2 present different techniques for rendering fur.</p><p>Essay 3 compares methods for simulating honey and other viscous fluids.</p>",
    "skills": "<span class='programming'>Python</span>, <span class='program'>Maya</span>, <span class='technique'>Physics simulation</span>",
    "category": "Maya scripting",
    "duration": "Dec 2017", 
    "links": "<a href='lists/TNCG13-project.pdf' target='_blank'>Project report (English)</a><br><a href='https://github.com/adamalsegard/ShatteringWood' target='_blank'>Source code</a><br><a href='lists/TNCG13-essay1.pdf' target='_blank'>Essay 1</a><br><a href='lists/TNCG13-essay2.pdf' target='_blank'>Essay 2</a><br><a href='lists/TNCG13-essay3.pdf' target='_blank'>Essay 3</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/XCkSaiVaj4M' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
    "title":"AI-maze me", 
    "description": "<p>A maze solving game made for web browsers. An AI agent has been trained with feature based Q-learning to solve generic mazes with multiple materials. Most other implementations of Q-learning for maze solving associates a state with a placement in the maze. This project instead associates a state as a set of features, that represents what the agent 'sees', and can therefore solve randomly generated mazes with more ease.</p><p>The application has 3 different modes. Either the user can play manually, watch a trained AI agent solve the generated mazes or the user can play against an AI agent and try to beat it over a combination of 10 levels.</p><p>The mazes are generated with a modified backtracking algorithm. The player has an energy resource that decreases with every step, if the players goes through a material more energy is subtracted. The player has to find the way out from the maze before all energy is drained. The application is implemented in JavaScript with rendering in WebGL. Three.js is used for the graphics and Cannon.js for the physics.</p><p>This project was made in TNM095 - Artificial Intelligence for Interactive Media, at Linköping University.</p>",
    "skills": "<span class='programming'>JavaScript</span>, <span class='technique'>Q-Learning</span>, <span class='programming'>Three.js</span>, <span class='programming'>Cannon.js</span>",
    "category": "AI, web",
    "duration": "Sept - Oct 2017", 
    "links": "<a href='lists/TNM095.pdf' target='_blank'>Project report (English)</a><br><a href='https://github.com/adamalsegard/AI-maze_me' target='_blank'>Source code</a><br><a href='https://adamalsegard.github.io/AI-maze_me/' target='_blank'>Live website</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/prDETnR3zgk' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
    "title":"ETiCCS application", 
    "description": "<p>Development of a digital data management system for a real life cervical cancer screening project in the Dabat region of Ethiopia.</p><p>Given as a group project in CS3249 - UI development. The assignment came from ETiCCS, Emerging Technologies in Cervical Cancer Screening, an international organisation that wanted us to develop an application to be used in the field in Ethiopia. The assignment included 9 different User Interfaces plus a registration/sign-in page. The application was built with React.js, Redux, Node.js and RethinkDB.</p><p>My team won <span class='prize'>First Prize</span> for our project and ETiCCS picked our application to use for their screening process. Me and one more team member continued working on the application to get it ready for deployment.",
    "skills": "<span class='programming'>React.js</span>, <span class='technique'>Redux</span>, <span class='programming'>Node.js</span>, <span class='program'>RethinkDB</span>",
    "category": "web",
    "duration": "Mars - May 2017", 
    "links": "<a href='lists/CS3249.pdf' target='_blank'>Project report (English)</a><br>", 
    "video": "<img class='img-rounded' src='../img/port-ETiCCS.png' alt='Screenshot from the ETiCCS application.' />",
    "show": "true"
  },

  {
    "title":"The Tetrominator", 
    "description": "A group project in the module CS3243 - Introduction to AI, where we developed and trained an AI agent to clear as many rows as possible in the classic game Tetris.</p><p>We used a genetic algorithm with particle swarm to train our agent on a set of features. To optimize the training time we parallelized the code for evaluating each individual in our population. With this we achieved a logarithmic speedup. In the end we cleared a few hundred thousand rows after a night of training.",
    "skills": "<span class='programming'>Java</span>, <span class='technique'>Genetic algorithms</span>, <span class='programming'>Parallel programming</span>",
    "category": "AI",
    "duration": "Feb - April 2017", 
    "links": "<a href='lists/CS3243.pdf' target='_blank'>Project report (English)</a><br><a href='https://github.com/wojdziw/intro-to-ai-project' target='_blank'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/NyMC-5ygMIc' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },
  
  {
    "title":"CS4247 assignments", 
    "description": "<p>3 different assignments I did in the course CS4247 - Graphics Rendering Techniques at NUS. More assignments and coding (at both LiU and NUS) can be found on my GitHub page.</p><p>Assign 1 - Real-time rendering with texture mapping and reflections. The bonus assignment was to add shadows with the shadow mapping method.</p><p>Assign 2 - Whitted Ray Tracing. I implemented hit detection for spheres and completed the recursive tracing algorithm, for shadows and reflections. The bonus assignment was to extend the algorithm to render transparent objects as well. After finishing the code I created a new scene, which is shown to the right.</p><p>Assign 3 - Progressive Refinement Radiosity. The assignment was to complete the radiosity loop and use it on the Cornell box scene. Then I created a new scene, which is shown to the right.</p>",
    "skills": "<span class='programming'>C++</span>, <span class='technique'>Global Illumination</span>, <span class='programming'>OpenGL</span>, <span class='technique'>Real-time rendering</span>",
    "category": "rendering",
    "duration": "Jan - Mars 2017", 
    "links": "<a href='https://github.com/adamalsegard/NUS-Modules/tree/master/CS4247' target='_blank'>Source code</a>", 
    "video": "<img class='img-rounded' src='../img/cs4247_assign2.png' alt='Result CS4247 - Assign 2' /><br><img class='img-rounded' src='../img/cs4247_assign3.png' alt='Result CS4247 - Assign 3' />",
    "show": "true"
  },

  {
    "title":"Computer Vision project", 
    "description": "<p>Group project done at NUS with 4 other exchange students. The objective was to track all 4 players and the ball from 7 video clips of volleyball games from the Summer Olympics 2016. The position of all 5 items should then be projected onto a top-down view of the court. Distance moved and number of jumps by each player should be calculated and displayed as well as a stitched video of the full court.</p><p>I worked mainly on the player tracking. We managed to track 26 of 28 players reasonably well. My part was done fairly quick so thereafter I helped my fellow group members. The stitching was done by finding the homography matrices frame-to-frame and then warp the image to a starting frame. From the frame-to-frame homography we could also do background extraction/subtraction. This could have improved the player and ball tracking but was unfortunately completed very late in the project.</p><p>The top-down homography matrix was found by tracking the corners of the court and the net posts. Small noise in this tracking gives large errors in the output video. If we'd smoothed the position arrays before generating the video it would have been a more pleasing result.</p>",
    "skills": "<span class='programming'>Python</span>, <span class='program'>OpenCV</span>, <span class='technique'>Feature tracking</span>",
    "category": "image processing",
    "duration": "Oct - Nov 2016", 
    "links": "<a href='https://github.com/wojdziw/computer-vision-project' target='_blank'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/32CciOH5sw4' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
    "title":"TowerVR", 
    "description": "<p>This is my B.Sc. thesis project. Together with 6 other students I developed a multiplayer virtual reality game with position tracking for Google Cardboard. At the time we finished, no other game published on the Google Play store had combined virtual reality with position tracking for Google Cardboard, so this game might be the first to accomplish this, even though we didn't release it commercially.</p><p>The game is built in Unity 3D and uses Vuforia for the tracking. The user's device tracks a cardboard cube with specific images on it and extracts the device's position in the 3D world built around the cube. The positions are synchronized between all players (using Photon Unity Networking API) and you can see each other as colorful wisps in the game room.</p><p>The game itself is a tower-stacking game, in which players compete while building a tower together. Players earn points based on the difficulty of the blocks they place. A player gets eliminated if the tower falls after he/she placed a block. The player who has the highest score when all players have been eliminated wins.</p><p>The game have been tested with up to 4 players and runs at 60 fps for all. There are 4 different sceneries (Colosseum, the Moon, a Sci-Fi Town and Snowy Mountains) that the host can choose from when starting a new game. While waiting for all players to connect the already connected players can throw balls at each other or at spawned cubes.</p>",
    "skills": "<span class='programming'>C#</span>, <span class='program'>Unity3D</span>, <span class='technique'>Vuforia tracking</span>, <span class='technique'>Networks</span>",
    "category": "VR, game",
    "duration": "Mars - May 2016", 
    "links": "<a href='lists/TNM094.pdf' target='_blank'>Project report (Swedish)</a><br><a href='https://github.com/AndroidHMD/TowerVR' target='_blank'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/2eBE4bzM2sw' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
    "title":"'Head below water'", 
    "description": "<p>A 3D fluid simulation done in real-time. The physical simulation was based on the Smoothed Particle Hydrodynamics (SPH) method. Calculations and rendering were done on the GPU with OpenCL and OpenGL/GLSL respectively. The rendering used the method 'screen-space point splatting' for the surface. Myself and another group member worked on the rendering (among other things). We tried a couple of different methods before settling for the one mentioned above, one of which used tessellation shaders. In the end we couldn't get a coherent normal for the surface (calculated by mean curvature flow) before the deadline which is the reason the video doesn't show all implemented pipelining steps.</p><p> In the end ~20.000 particles could be simulated and rendered in 60 fps on a Nvidia GeForce GTX 750.</p><p>The project was nominated in the category <span class='prize'>'Technical Excellence' at CAwards 2016</span>.</p>",
    "skills": "<span class='technique'>OpenGL rendering pipeline</span>, <span class='programming'>GLSL shaders</span>, <span class='technique'>Physics simulation</span>, <span class='programming'>OpenCL</span>",
    "category": "rendering, simulation",
    "duration": "Jan - Mars 2016", 
    "links": "<a href='lists/TNM085.pdf' target='_blank'>Project report (English)</a><br><a href='https://github.com/Hedlundaren/vattenoverhuvudet' target='_blank'>Source code</a>", 
    "video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/15oeGll4-80' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
	  "title":"Trygga", 
    "description": "<p>Trygga is a service for a safer community. It's essentially a system for a smart panic alarm, but it has a lot of possible areas of development. The basic idea is to have a small device on you, as when triggered sends out a signal to a network of people in the nearby area who can interact if needed. The prototype was built with LittleBits, IFFT and meteor.js. </p><p>The project was developed during East Sweden Hack 2015; which is a hackathon at Mjärdevi Science park in Linköping. Trygga won the main price of <span class='prize'>Best Project</span>. The price itself was a journey to Berlin in late 2015 to meet Start-ups and a couple of IoT companies (Industry 4.0).</p>",
    "skills": "<span class='technique'>24H hackathon</span>, <span class='personal'>Project management</span>, <span class='programming'>Meteor.js</span>, <span class='personal'>Presentation/pitch</span>",
    "category": "prototyping",
    "duration": "Sept 2015", 
  	"links": "<a href='http://eastswedenhack.se/esh15/prisutdelning-2015' target='_blank'>East Sweden Hack - Presentation</a>", 
  	"video": "<img class='img-rounded' src='../img/port-Trygga.png' alt='Screenshot Trygga website.' />",
    "show": "true"
	},

  {
	  "title":"Reverbify", 
    "description": "<p>Reverbify is an application where the user can upload, record or choose a default sound that can be 'reverbified'. To 'reverbify' is to add a room's reverb to the chosen sound and then play it as it would sound in that room. This was a short group project in the course Sound Physics (TFYA65). We recorded the impulse response in a couple of different rooms with calculations done in Matlab. We later used these and some other impulse responses from the free sound bank Samplicity. Our group of three put in more work than most groups for this of project. It would have been enough to just do the calculations in Matlab but we wanted to build a good web application as well.</p>",
  	"skills": "<span class='programming'>Meteor.js</span>, <span class='program'>Web audio API</span>, <span class='programming'>Bootstrap</span>, <span class='program'>Ionic</span>, <span class='programming'>Matlab</span>",
    "category": "web",
    "duration": "Sept - Oct 2015",
    "links": "<a href='https://github.com/codingInSpace/reverbify' target='_blank'>Source code</a><br><a href='../lists/TFYA65.pdf' target='_blank'>Project report (Swedish) </a>",
  	"video": "<img class='img-rounded' src='../img/port-Reverbify_2.png' alt='Screenshot Reverbify website.' />",
    "show": "false"
	},

  {
    "title":"adamalsegard.github.io", 
    "description": "<p>The very website you are looking at right now. This is my first attempt at a fully functional website, done in my spare time. The purpose is foremost to display projects I've done but also to have a place to test some new techniques in web development.</p>",
    "skills": "<span class='programming'>Bootstrap</span>, <span class='program'>Skrollr</span>, <span class='programming'>Angular.js</span>",
    "category": "web",
    "duration": "(Ongoing)", 
    "links": "",
    "video": "",
    "show": "false"
  },

	{
	  "title":"Domescape", 
    "description": "<p>A simple 3D-landscape for cluster-based Domes created with SGCT and CSPICE (with which our application calculates the sun's correct position relative the coordinates for Norrköping, Sweden). The user can walk around in the landscape and speed up/reverse time or set a specific time to change the sun's position. The landscape contains some mountains (rendered from height maps) and a couple of objects, all with different textures. Created as a group project in the course 3D Computer Graphics (TNM061). </p><p>This was the first time any of us tried SGCT or parallel cluster programming. You need to cmake the project before you can compile it, and it will look rather bad if you don't run it in a proper cluster. But you can look at https://c-student.itn.liu.se/wiki/develop:sgcttutorials:compile if you want to compile our source code.</p>",
  	"skills": "<span class='programming'>OpenGL</span>, <span class='program'>SGCT</span>, <span class='programming'>Parallel programming</span>, <span class='program'>CSPICE</span>, <span class='program'>CMake</span>, <span class='program'>Linux</span>, <span class='programming'>C#</span>",
    "category": "rendering, parallel",
    "duration": "April - May 2015", 
  	"links": "<a href='https://github.com/Danielbook/3D_Projekt' target='_blank'>Source code</a><br><a href='lists/TNM061.pdf' target='_blank'>Project report (Swedish)</a>", 
  	"video": "",
    "show": "true"
	},

  {
	  "title":"InterHelios", 
    "description": "<p>An Android game developed during a course in user interface design and usability (TNM040). It is a top-down 2D space shooter. The game is written in Java using the AndEngine framework. It was developed in a group of five. We didn't have specific roles or areas of responsibilities. This was my first application developed for Android, and also my first game. Works best on Nexus 5 or equally big screens.</p>",
  	"skills": "<span class='technique'>UX</span>, <span class='program'>Android Studio</span>, <span class='programming'>Java</span>, <span class='program'>AndEngine</span>",
    "category": "UX, game",
    "duration": "Nov - Dec 2014", 
  	"links": "<a href='https://github.com/Danielbook/TNM040-KOMA-Projekt' target='_blank'>Source code</a><br><a href='lists/TNM040.pdf' target='_blank'>Project report (Swedish)</a>", 
  	"video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/crZpxgsYBw8' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  },

  {
	  "title":"Growth", 
    "description": "<p>'In a future where all vegetation has died, a company succeeds in producing a synthetic substitute for food. What could have been the dawn of a new era of science turns out to only be a different sort of extinction...' </p><p>A sci-fi short film done with a couple of classmates in the course Digital Media (TNM088). The most ambitious film project I've been part of thus far! Big thanks to all actors and extras who contributed without payment. The film was produced during a couple of weeks in the autumn of 2013. I was the director, editor, writer, casting- and ADR-director. I also did a promotional website prior to our deadline. After our first showing my cinematographer Benjamin Wiberg did a new website. both can be seen to the right.</p>",
  	"skills": "<span class='technique'>Film making</span>, <span class='personal'>Directing</span>, <span class='personal'>Leadership</span>, <span class='programming'>Basic web development</span>",
    "category": "film",
    "duration": "Okt - Dec 2013", 
  	"links": "<a href='growth/old/index.html' target='_blank'>Website 1</a><br><a href='growth/index.html' target='_blank'>Website 2 (by Benjamin Wiberg)</a><br><a href='lists/TNM088.pdf' target='_blank'>Project report (Swedish)</a>", 
  	"video": "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://player.vimeo.com/video/85702031' frameborder='0' allowfullscreen='true'></iframe></div>",
    "show": "true"
  }, 
  	  
  {
	  "title":"Legomania", 
    "description": "<p>A website about LEGO! A group project in Electronic Publishing (TNMK30) where the user can search for specific Lego bits in a database. This was my (and the rest of the group's) first website and it was developed in a group with five members. I was in charge of the database-handling together with another group member while the others were in charge of the design and forum.</p>",
  	"skills": "<span class='programming'>PHP</span>, <span class='programming'>mySQL</span>, <span class='programming'>Basic web development</span>",
    "category": "web",
    "duration": "Nov - Dec 2013", 
  	"links": "<a href='http://www.student.itn.liu.se/~adaal265/TNMK30/Projekt/Legomania-master/Legomania-master/main.php' target='_blank'>Check it out!</a><br><a href='../lists/TNMK30.pdf' target='_blank'>Project report (Swedish)</a>", 
  	"video": "<img class='img-rounded' src='../img/port-Legomania.png' alt='Screenshot Legomania website.' />",
    "show": "false"
	}, 
      
  {
    "title":"Earlier short films", 
    "description": "<p>I studied at a film school i Stockholm (Sundbybergs Folk High School) for a year and did a bunch of short films. A couple of them can be seen in my different video channels. I've also done some films in later years in different genres. Be sure to check out 'appearances' in vimeo as well.</p>",
    "skills": "<span class='technique'>Film making</span>, <span class='personal'>Team work</span>",
    "category": "film",
    "duration": "Aug 2012 - May 2013", 
    "links": "<a href='https://vimeo.com/adamalsegard' target='_blank'>Vimeo channel!</a><br><a href='https://www.youtube.com/user/questisiones/videos' target='_blank'>Youtube channel</a>", 
    "video": "",
    "show": "false"
  }]
}
