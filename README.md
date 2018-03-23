# Arduino_2_Raspberry-complete-guide
There are scrapes of information all over the web about the ways to connect arduino to a raspberry, I've created a complete guide and presented it as a student partner of Microsoft @ Patras Dept.
For this tutorial I'll be using a raspberry pi 3 B+(with an 8gb sd and its default power supply) and an Arduino Uno, also keep in mind that this is for complete begginers, so dont judge on things that may seem obvious to you, they arent obvious to everyone, feel free to mail me.
To get started here are the prequisites:
1. Raspbian OS on the sd card, u can use rufus to burn it on the sd card.
2. Just a few wires, you can add sensors later
3. Ill be using I2C protocol for the ommunication, a good first read is [here](https://en.wikipedia.org/wiki/I%C2%B2C), pros and cons later
4.Install apache-2 on your raspberry, a good first read is [here](https://en.wikipedia.org/wiki/Apache_HTTP_Server)
... dont follow the guide on the official site, since it says simply apache and it wont work
5. You will need sql and an admin service for that, for this tutorial we will stick with mysqldb, a good first read is [here](https://en.wikipedia.org/wiki/MySQL) Tovald bless wiki.
... you can use sqlite since its faster but I thought that its more suited for more advanced users.
