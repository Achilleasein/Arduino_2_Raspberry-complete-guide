# Arduino_2_Raspberry-complete-guide
There are scrapes of information all over the web about the ways to connect arduino to a raspberry, I've created a complete guide and presented it as a student partner of Microsoft @ Patras Dept. PS. There are some greek words left right and there.

For this tutorial I'll be using a raspberry pi 3 B+(with an 8gb sd and its default power supply) and an Arduino Uno, also keep in mind that this is for complete begginers, so dont judge on things that may seem obvious to you, they arent obvious to everyone, feel free to mail me.
To get started here are the prequisites:
1. Raspbian OS on the sd card, u can use rufus to burn it on the sd card.
2. Just a few wires, you can add sensors later.
3. Ill be using I2C protocol for the communication, a good first read is [here](https://en.wikipedia.org/wiki/I%C2%B2C), pros and cons later.
4. Install apache-2 on your raspberry, a good first read is [here](https://en.wikipedia.org/wiki/Apache_HTTP_Server).

   ~Dont follow the guide on the official site, since it says simply install apache and it wont work, you need apache-2.~
   They updated it.

5. You will need sql and an admin service for that, for this tutorial we will stick with mysqldb, a good first read is [here](https://en.wikipedia.org/wiki/MySQL). Tovald bless wiki.

   You can use sqlite since its faster but I thought that its more suited for more advanced users.
6. From there we will use PHP, HTML and CSS, for all those as well as mysql you can practice on [w3schools](https://www.w3schools.com/). It has helped me greatly as a website, their online interprenter is top-notch.

7. I have also made a simple arduino project, which is a simple alarm system with a thermometer, its broken down in 2 pieces, you can find it on my github(its in Greek).

#### Arduino VS Raspberry

There is really no comparison, they are made for different things and different application, Arduino is a microcontroller and Raspberry is a microcomputer/microprocessor, the first runs precompiled code and the later has its own OS running at all times on it which also means no sleep/timeout periods, which also means higher energy consumption, a good video to understand can be found [here](https://www.youtube.com/watch?v=7vhvnaWUZjE).

#### Why I2C?

We could easily use serial connections, after all the protocol is most of the time is easier to use, why then?
1. I2C is faster, especially for small bytes of data, it takes less time to wind up and send the message.
2. Its low energy, which is crucial for these kind of applications.
3. Its easy to add more devices efficiently without worrying about implications and recuires very few wires.

You have to enable I2C from the raspi-config command, 

#### Apache 2

You can find info on how to install it [here](https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md), its important to try the phpinfo(), just in case, to do that you simply make a .php file within your localhost depo. To find easily where your www file is do twice >>cd .. which bring you up 2 directories and then use \*/www which will autofill the recuired path for your www, after your first time you can probably learn by heart the directory.

#### What is the www folder? What is localhost?

Basicaly its your portal to the outside world, every application opens a port, more specificaly the apache has the port:80 automaticly assigned to it. Lets make it more specific, when you fire up your browser you open a port, specificaly assigned to that application, then when you connect to a server your port delivers your IP to the server your trying to connect as part of the header of the file, you can read about the levels of network [here](https://en.wikipedia.org/wiki/OSI_model). Lets not get too technical here. Apache creates a www file, so when you make your PC a server when someone reaches out for your IP they automaticly hit the port:80 and they view the www file, more specificaly the index file thats inside, from there on you can view almost anything, thats where the magic happens and he hide away the scripts we use, on this example we hve them public, its as simple as it can get, so security wasnt a concern. Localhost is basicly the local host address, when you ar econnected on a LAN then every computer can view it, but no outside source has access to it.

Any question you may have email me @ achilleasein@gmail.com, there is no license for the code of course, I've also studied some online tutorials and this is an old project of mine, but I've found one of the [links](https://oscarliang.com/raspberry-pi-arduino-connected-i2c/) I had used, what an amazing guy.


