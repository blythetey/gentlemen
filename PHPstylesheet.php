<?php 
	header('Content-type: text/css');?>
#header
	{
		background-color: #FFFFFF;
		color: #0B3C5D;
		text-align: center;
		padding: 10px;
		font-family: Lucida Blackletter;
		font-size: 60px;
		position: fixed;
		width: 100%;
	}

#content 
	{
		text-align: center;
		position: center;
		padding: 200px;
		color: #0B3C5D;
	}

.column00
	{
		text-align: center;
		width: 100%;
		font-size: 15px;
	}

ul {
    list-style-type: none;
    padding-left: 20px;
    overflow: hidden;
    background-color: #0B3C5D;
    position: fixed;
    top: 80px;
    width: 100%;

}

li:last-child
	{	
		float: right;
    	padding-right: 20px;
	}

li 
	{
    	float: left;
	}


li a {
    display: block;
    text-align: center;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #1D2731;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    color: gold;
}

li.dropdown {
	display: inline-block;
}


.dropdown-content {
    display: none;
    position: relative;
    background-color: #0B3C5D;
    min-width: 10px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 999;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

.active {
    background-color: #1D2731;
}

body 	
	{
		color: #0B3C5D;
		font-family: Lucida Blackletter;
		margin: 0;
		font-size: 14px;
	}


a:link {color: #989898;}
a:visited {color: #989898;}
a:hover {color: #DCDCDC;}


.arrival p img:hover
	{
		 opacity: 0.8;
	}

.footer	
	{
		background-color: #0B3C5D;
		color: #DCDCDC;
		font-size: 10px;
		font-family: Lucida Blackletter;
		text-align:center;
		padding: 20px 10px;
		clear: both;

	}


.arrival
	{
		float: center;
		margin: auto;
		padding-top: 140px;
		overflow-x: auto;
		border-collapse: collapse;
	}

.arrival p
	{
		float: center;
		text-align: center;
		border: 5px solid #1D2731;
		overflow: scroll;
	}


.column1 {
    float: left;
    width: 49.4%;
    padding-left: 3px;
    font-family: Lucida Calligraphy;
    height: 500px;
}
  
    

.column1 p 
	{
		width: 90%;
		height: 100%;
		float: center;
		clear: left;
		color: #1D2731;
		text-align: center;

	}

.promoborder
	{
		color: black;
	}

.promocode
	{
		color: red;
		border: 2px solid red;
		width: 1000px;

	}

.column2 {
    float: left;
    width: 33.33%;
    color: #DCDCDC;
    text-align:center;
    background-color: #0B3C5D;
    height: 350px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.h1
	{
		text-align: center;	
	}

.FAQtable
	{
		float: center;
		text-align: center;
		padding-left: 20%;
		width: 80%;
		height: 100%;
		columns: 100%;
	}
.cart1
{
	text-align: center;
	padding: 100px;
}

.cart2
	{
		float: center;
		margin: auto;
		padding-top: 300px;
		overflow-x: auto;
		border-collapse: collapse;
	}

.cart3
	{
		float: center;
		margin: auto;
		padding-top: 300px;
		padding-bottom: 200px;
		overflow-x: auto;
		border-collapse: collapse;
	}
	
.products
	{
		overflow: auto;
		text-align: center;
		width: 100%;
		padding: 10% 20%;
	}
