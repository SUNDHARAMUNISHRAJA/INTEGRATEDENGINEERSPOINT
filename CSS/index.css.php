* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #000080; 
  /*background-color:#D2042D;
   /* background-color: #3596dc; */
  padding: 20px 10px;
  box-shadow: 0 4px 8px 5px rgba(0,0,0,0.2);
  transition: 0.6s;
}

.header a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
.header .image {
	float: left;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color: white;
}

.header a:hover {
  background-color:rgba(0, 0, 0, 0.01);
  color: #FCF5E5;
}

.header a.active {
  background-color: white;
  color:  #000080; /*dodgerblue*/;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
