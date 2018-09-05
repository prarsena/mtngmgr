# mtngmgr
Meeting Manager app

#To run these files:

1. Download XAMPP or similar. 
2. Clone repo into xampp/htdocs directory
3. run xampp control panel, start Apache and MySQL
4. Open a browser, type localhost 
5. Click PHPMyAdmin

6. Create New database called 'meetingmanager' 
7. Create data table called 'topic' 
8. add these fields: 
	a. topic_id (int, 4, primary key, auto increment)
	b. topic (varchar65)
	c. time (int,4)
	d. author (varchar65)
	e. notes (longtext)
	
9. Type in browser localhost/index.php 